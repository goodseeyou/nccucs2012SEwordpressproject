var js_selection_value="";
var label_time = null;
function comment_event(){
$(document).ready(function() {
	//留言彈出事件
	$(".entry-content").mouseup(function(){
		$("#detect").append("mouse up<br/>");
		if(window.getSelection().toString().length>0 || document.selection){
			winselect();
			$.blockUI({ message: $('#fordisplay')});
			$('#fordisplay>#close').click(function() {$.unblockUI();});
		}
	});
	//label留言
	$("label").mouseover(function() {
		$("#detect").append(this.textContent+" label mouseover<br/>");
		var label_content = this.textContent;
		setCookie("key", label_content, "");
		setCookie("key", label_content, "wordpress");
		label_time = window.setTimeout(function(){
			$("#detect").append("label timeout<br/>");
			setCookie("recall", "y", "");
			setCookie("recall", "y", "wordpress");
			$("<iframe width=\"384\" height=\"237\" scrolling=\"auto\" frameborder=\"0\" src='index.php'>").dialog();
		},1000);
		}).mouseout(function(){
			$("#detect").append("label time cleared<br/>");
			window.clearTimeout(label_time);	

			
	});

	
	//淡出淡入事件
	$(document).ready(function() {
	$("body").fadeIn(500);
	});
	window.onbeforeunload = function() {
		setCookie("recall", "n", "");
		setCookie("recall", "n", "wordpress");
		$("body").fadeOut(500);
	};
	// 逐一近來
	var begin=500;
	var delaytime=250;
	var fadeintime=300;
	$("#text1").delay(1*delaytime+begin).fadeIn(fadeintime);
	$("#text2").delay(2*delaytime+begin).fadeIn(fadeintime);
	$("#text3").delay(3*delaytime+begin).fadeIn(fadeintime);
	$("#text4").delay(4*delaytime+begin).fadeIn(fadeintime);
	$("#text5").delay(5*delaytime+begin).fadeIn(fadeintime);
	$("#text6").delay(6*delaytime+begin).fadeIn(fadeintime);
	$("#text7").delay(7*delaytime+begin).fadeIn(fadeintime);
	$("#text8").delay(8*delaytime+begin).fadeIn(fadeintime);
});



}
function winselect(){
	var cookievalue="";
	if (window.getSelection) {            // Firefox, Safari, Chrome
	var selection = window.getSelection();
	var range = selection.getRangeAt(0);
	var rect = range.getBoundingClientRect();
	document.blockform.select_value.value=selection.toString();
	js_selection_value=selection.toString();
	/*$("#detect").append("<strong>"+js_selection_value+"</strong>");*/
	setCookie("commen_keyword", js_selection_value, "");
	setCookie("commen_keyword", js_selection_value, "wordpress");
	}
	else if (document.selection) {        // IE
	var selection = document.selection;
	var range = selection.createRange();
	document.blockform.select_value.value=selection.toString();
	js_selection_value=selection.toString();
	setCookie("commen_keyword", js_selection_value, "");
	setCookie("commen_keyword", js_selection_value, "wordpress");
	}
	else {
	//document.inputform.inputname.value="non-triger";
	}
}
//Cookie
function setCookie(name, value, base){
var exp = new Date();
exp.setTime(exp.getTime() + 6180);
document.cookie = name + '=' +  encodeURIComponent(value) + '; expires=' + exp.toGMTString() + "; path=" + (base? base : '/');;
}
function getCookie(key){
var tmp1, tmp2, xx1 = 0, xx2 = 0, xx3;
tmp1 = ' '+document.cookie+';';
var len = tmp1.length;
while(xx1 < len){
xx2 = tmp1.indexOf(';', xx1);
tmp2 = tmp1.substring(xx1 + 1, xx2);
xx3 = tmp2.indexOf('=');
if(tmp2.substring(0, xx3)==key){ return unescape(tmp2.substring(xx3 + 1, xx2 - xx1 - 1)); }
xx1 = xx2 + 1;
}
return '';
}