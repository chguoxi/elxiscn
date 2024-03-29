/*******************************
Form Input Slider
Copyright (C) 2005  DTHMLGoodies.com, Alf Magne Kalleland
written by Alf Magne Kalleland.
*******************************/
var form_widget_amount_slider_handle = '/includes/libraries/elxis/form/slider_handle.gif';
var slider_handle_image_obj = false;
var sliderObjectArray = new Array();
var slider_counter = 0;
var slideInProgress = false;
var handle_start_x;
var event_start_x;
var currentSliderIndex;
var sliderHandleWidth = 9;

function form_widget_cancel_event() {
	return false;
}

function getImageSliderHeight(elxisbase){
	if(!slider_handle_image_obj){
		if (typeof elxisbase !== "undefined") {
			form_widget_amount_slider_handle = elxisbase+'/includes/libraries/elxis/form/slider_handle.gif';
		}
		slider_handle_image_obj = new Image();
		slider_handle_image_obj.src = form_widget_amount_slider_handle;
	}
	if(slider_handle_image_obj.width>0){
		return;
	}else{
		setTimeout('getImageSliderHeight()',50);
	}
}

function positionSliderImage(e,theIndex) {
	if(!theIndex)theIndex = this.getAttribute('sliderIndex');
	var theValue = sliderObjectArray[theIndex]['formTarget'].value;
	if(!theValue.match(/^[0-9]*$/g))theValue=sliderObjectArray[theIndex]['min'] +'';
	if(theValue/1>sliderObjectArray[theIndex]['max'])theValue = sliderObjectArray[theIndex]['max'];
	if(theValue/1<sliderObjectArray[theIndex]['min'])theValue = sliderObjectArray[theIndex]['min'];
	sliderObjectArray[theIndex]['formTarget'].value = theValue;
	var handleImg = document.getElementById('slider_handle' + theIndex);
	var ratio = sliderObjectArray[theIndex]['width'] / (sliderObjectArray[theIndex]['max']-sliderObjectArray[theIndex]['min']);
	var currentValue = sliderObjectArray[theIndex]['formTarget'].value-sliderObjectArray[theIndex]['min'];
	handleImg.style.left = Math.round(currentValue * ratio) + 'px';
}

function adjustFormValue(theIndex) {
	var handleImg = document.getElementById('slider_handle' + theIndex);
	var ratio = sliderObjectArray[theIndex]['width'] / (sliderObjectArray[theIndex]['max']-sliderObjectArray[theIndex]['min']);
	var currentPos = handleImg.style.left.replace('px','');
	sliderObjectArray[theIndex]['formTarget'].value = Math.round(currentPos / ratio) + sliderObjectArray[theIndex]['min'];

}

function initMoveSlider(e) {
	if(document.all)e = event;
	slideInProgress = true;
	event_start_x = e.clientX;
	handle_start_x = this.style.left.replace('px','');
	currentSliderIndex = this.id.replace(/[^\d]/g,'');
	return false;
}

function startMoveSlider(e) {
	if(document.all)e = event;
	if(!slideInProgress)return;
	var leftPos = handle_start_x/1 + e.clientX/1 - event_start_x;
	if(leftPos<0)leftPos = 0;
	if(leftPos/1>sliderObjectArray[currentSliderIndex]['width'])leftPos = sliderObjectArray[currentSliderIndex]['width'];
	document.getElementById('slider_handle' + currentSliderIndex).style.left = leftPos + 'px';
	adjustFormValue(currentSliderIndex);
	if(sliderObjectArray[currentSliderIndex]['onchangeAction']){
		eval(sliderObjectArray[currentSliderIndex]['onchangeAction']);
	}
}

function stopMoveSlider() {
	slideInProgress = false;
}

var sliderPreloadedImages = new Array();
sliderPreloadedImages[0] = new Image();
sliderPreloadedImages[0].src = form_widget_amount_slider_handle;

function elxis_form_slider(targetElId,formTarget,width,min,max,onchangeAction,elxisbase) {
	if(!slider_handle_image_obj){
		getImageSliderHeight(elxisbase);
	}
	slider_counter = slider_counter +1;
	sliderObjectArray[slider_counter] = new Array();
	sliderObjectArray[slider_counter] = {"width":width - sliderHandleWidth,"min":min,"max":max,"formTarget":formTarget,"onchangeAction":onchangeAction};
	formTarget.setAttribute('sliderIndex',slider_counter);
	formTarget.onchange = positionSliderImage;
	var parentObj = document.createElement('div');
	parentObj.style.height = '12px';	// The height of the image
	parentObj.style.position = 'relative';
	parentObj.style.display = 'inline-block';
	parentObj.id = 'slider_container' + slider_counter;
	document.getElementById(targetElId).appendChild(parentObj);
	var obj = document.createElement('div');
	obj.className = 'elxis_form_slider';
	obj.innerHTML = '<span></span>';
	obj.style.width = width + 'px';
	obj.id = 'slider_slider' + slider_counter;
	obj.style.position = 'absolute';
	obj.style.bottom = '0px';
	parentObj.appendChild(obj);
	var handleImg = document.createElement('img');
	handleImg.style.position = 'absolute';
	handleImg.style.left = '0px';
	handleImg.style.zIndex = 5;
	handleImg.src = slider_handle_image_obj.src;
	handleImg.id = 'slider_handle' + slider_counter;
	handleImg.onmousedown = initMoveSlider;
	parentObj.style.width = obj.offsetWidth + 'px';
	if(document.body.onmouseup) {
		if(document.body.onmouseup.toString().indexOf('stopMoveSlider')==-1){
			alert('You allready have an onmouseup event assigned to the body tag');
		}
	}else{
		document.body.onmouseup = stopMoveSlider;
		document.body.onmousemove = startMoveSlider;
	}
	handleImg.ondragstart = form_widget_cancel_event;
	parentObj.appendChild(handleImg);
	positionSliderImage(false,slider_counter);
}