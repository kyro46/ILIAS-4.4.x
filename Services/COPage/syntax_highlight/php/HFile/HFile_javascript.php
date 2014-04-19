<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_javascript extends HFile{
   function HFile_javascript(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// JavaScript
/*************************************/
// Flags

$this->nocase            	= "0";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array("{");
$this->unindent          	= array("}");

// String characters and delimiters

$this->stringchars       	= array();
$this->delimiters        	= array("~", "!", "@", "%", "^", "&", "*", "(", ")", "-", "+", "=", "|", "\\", "/", "{", "}", "[", "]", ":", ";", "\"", "'", "<", ">", " ", ",", "	", ".", "?");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array("//");
$this->blockcommenton    	= array("/*");
$this->blockcommentoff   	= array("*/");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"abstract" => "1", 
			"byte" => "1", 
			"case" => "1", 
			"catch" => "1", 
			"char" => "1", 
			"class" => "1", 
			"const" => "1", 
			"continue" => "1", 
			"default" => "1", 
			"delete" => "1", 
			"do" => "1", 
			"double" => "1", 
			"else" => "1", 
			"extends" => "1", 
			"false" => "1", 
			"final" => "1", 
			"finally" => "1", 
			"float" => "1", 
			"for" => "1", 
			"function" => "1", 
			"goto" => "1", 
			"if" => "1", 
			"implements" => "1", 
			"import" => "1", 
			"in" => "1", 
			"instanceof" => "1", 
			"int" => "1", 
			"interface" => "1", 
			"long" => "1", 
			"native" => "1", 
			"new" => "1", 
			"null" => "1", 
			"package" => "1", 
			"private" => "1", 
			"protected" => "1", 
			"public" => "1", 
			"reset" => "2", 
			"return" => "1", 
			"short" => "1", 
			"static" => "1", 
			"super" => "1", 
			"switch" => "1", 
			"synchronized" => "1", 
			"this" => "1", 
			"throw" => "1", 
			"transient" => "1", 
			"true" => "1", 
			"try" => "1", 
			"var" => "1", 
			"void" => "1", 
			"while" => "1", 
			"with" => "1", 
			"$n" => "2", 
			"above" => "2", 
			"abs" => "2", 
			"acos" => "2", 
			"action" => "2", 
			"activeElement" => "2", 
			"alert" => "2", 
			"alinkColor" => "2", 
			"all" => "2", 
			"altKey" => "2", 
			"anchor" => "2", 
			"anchors" => "2", 
			"appCodeName" => "2", 
			"applets" => "2", 
			"apply" => "2", 
			"appName" => "2", 
			"appVersion" => "2", 
			"arguments" => "2", 
			"arity" => "2", 
			"asin" => "2", 
			"assign" => "2", 
			"atan" => "2", 
			"atan2" => "2", 
			"atob" => "2", 
			"availHeight" => "2", 
			"availLeft" => "2", 
			"availTop" => "2", 
			"availWidth" => "2", 
			"back" => "2", 
			"background" => "2", 
			"below" => "2", 
			"bgColor" => "2", 
			"big" => "2", 
			"blink" => "2", 
			"blur" => "2", 
			"bold" => "2", 
			"border" => "2", 
			"borderWidths" => "2", 
			"bottom" => "2", 
			"btoa" => "2", 
			"button" => "2", 
			"call" => "2", 
			"callee" => "2", 
			"caller" => "2", 
			"cancelBubble" => "2", 
			"captureEvents" => "2", 
			"ceil" => "2", 
			"charAt" => "2", 
			"charCodeAt" => "2", 
			"charset" => "2", 
			"checked" => "2", 
			"children" => "2", 
			"classes" => "2", 
			"className" => "2", 
			"clear" => "2", 
			"clearInterval" => "2", 
			"clearTimeout" => "2", 
			"click" => "2", 
			"clientInformation" => "2", 
			"clientX" => "2", 
			"clientY" => "2", 
			"close" => "2", 
			"closed" => "2", 
			"colorDepth" => "2", 
			"compile" => "2", 
			"complete" => "2", 
			"concat" => "2", 
			"confirm" => "2", 
			"constructir" => "2", 
			"contains" => "2", 
			"contextual" => "2", 
			"cookie" => "2", 
			"cos" => "2", 
			"crypto" => "2", 
			"ctrlKey" => "2", 
			"current" => "2", 
			"data" => "2", 
			"defaultCharset" => "2", 
			"defaultChecked" => "2", 
			"defaultSelected" => "2", 
			"defaultStatus" => "2", 
			"defaultValue" => "2", 
			"description" => "2", 
			"disableExternalCapture" => "2", 
			"disablePrivilege" => "2", 
			"document" => "2", 
			"domain" => "2", 
			"E" => "2", 
			"element" => "2", 
			"FromPoint" => "2", 
			"elements" => "2", 
			"embeds" => "2", 
			"enabledPlugin" => "2", 
			"enableExternalCapture" => "2", 
			"enablePrivilege" => "2", 
			"encoding" => "2", 
			"escape" => "2", 
			"eval" => "2", 
			"event" => "2", 
			"exec" => "2", 
			"exp" => "2", 
			"expando" => "2", 
			"fgColor" => "2", 
			"fileName" => "2", 
			"find" => "2", 
			"fixed" => "2", 
			"floor" => "2", 
			"focus" => "2", 
			"fontColor" => "2", 
			"fontSize" => "2", 
			"form" => "2", 
			"forms" => "2", 
			"forward" => "2", 
			"frames" => "2", 
			"fromCharCode" => "2", 
			"fromElement" => "2", 
			"getAttribute" => "2", 
			"get" => "2", 
			"getClass" => "2", 
			"getDate" => "2", 
			"getDay" => "2", 
			"getFullYear" => "2", 
			"getHours" => "2", 
			"getMember" => "2", 
			"getMilliseconds" => "2", 
			"getMinutes" => "2", 
			"getMonth" => "2", 
			"getSeconds" => "2", 
			"getSelection" => "2", 
			"getSlot" => "2", 
			"getTime" => "2", 
			"getTimezoneOffset" => "2", 
			"getUTCDate" => "2", 
			"getUTCDay" => "2", 
			"getUTCFullYear" => "2", 
			"getUTCHours" => "2", 
			"getUTCMilliseconds" => "2", 
			"getUTCMinutes" => "2", 
			"getUTCMonth" => "2", 
			"getUTCSeconds" => "2", 
			"getWindow" => "2", 
			"getYear" => "2", 
			"global" => "2", 
			"go" => "2", 
			"HandleEvent" => "2", 
			"hash" => "2", 
			"hidden" => "2", 
			"history" => "2", 
			"home" => "2", 
			"host" => "2", 
			"hostName" => "2", 
			"href" => "2", 
			"hspace" => "2", 
			"id" => "2", 
			"ids" => "2", 
			"ignoreCase" => "2", 
			"images" => "2", 
			"index" => "2", 
			"indexOf" => "2", 
			"inner" => "2", 
			"Height" => "2", 
			"innerHTML" => "2", 
			"innerText" => "2", 
			"innerWidth" => "2", 
			"insertAdjacentHTML" => "2", 
			"insertAdjacentText" => "2", 
			"isFinite" => "2", 
			"isNAN" => "2", 
			"italics" => "2", 
			"java" => "2", 
			"javaEnabled" => "2", 
			"join" => "2", 
			"keyCode" => "2", 
			"lang" => "2", 
			"language" => "2", 
			"lastIndex" => "2", 
			"lastIndexOf" => "2", 
			"lastMatch" => "2", 
			"lastModified" => "2", 
			"lastParen" => "2", 
			"layers" => "2", 
			"layerX" => "2", 
			"layerY" => "2", 
			"left" => "2", 
			"leftContext" => "2", 
			"length" => "2", 
			"link" => "2", 
			"linkColor" => "2", 
			"Links" => "2", 
			"LN10" => "2", 
			"LN2" => "2", 
			"load" => "2", 
			"location" => "2", 
			"locationBar" => "2", 
			"log" => "2", 
			"LOG10E" => "2", 
			"LOG2E" => "2", 
			"lowsrc" => "2", 
			"margins" => "2", 
			"match" => "2", 
			"max" => "2", 
			"MAX_VALUE" => "2", 
			"menubar" => "2", 
			"method" => "2", 
			"mimeTypes" => "2", 
			"min" => "2", 
			"MIN_VALUE" => "2", 
			"modifiers" => "2", 
			"moveAbove" => "2", 
			"moveBelow" => "2", 
			"moveBy" => "2", 
			"moveTo" => "2", 
			"moveToAbsolute" => "2", 
			"multiline" => "2", 
			"name" => "2", 
			"NaN" => "2", 
			"navigate" => "2", 
			"navigator" => "2", 
			"NEGATIVE_INFINITY" => "2", 
			"netscape" => "2", 
			"next" => "2", 
			"offscreenBuffering" => "2", 
			"offset" => "2", 
			"offsetHeight" => "2", 
			"offsetLeft" => "2", 
			"offsetParent" => "2", 
			"offsetTop" => "2", 
			"offsetWidth" => "2", 
			"offsetX" => "2", 
			"offsetY" => "2", 
			"onabort" => "2", 
			"onblur" => "2", 
			"onchange" => "2", 
			"onclick" => "2", 
			"ondblclick" => "2", 
			"ondragdrop" => "2", 
			"onerror" => "2", 
			"onfocus" => "2", 
			"onHelp" => "2", 
			"onkeydown" => "2", 
			"onkeypress" => "2", 
			"onkeyup" => "2", 
			"onload" => "2", 
			"onmousedown" => "2", 
			"onmousemove" => "2", 
			"onmouseout" => "2", 
			"onmouseover" => "2", 
			"onmouseup" => "2", 
			"onmove" => "2", 
			"onreset" => "2", 
			"onresize" => "2", 
			"onsubmit" => "2", 
			"onunload" => "2", 
			"open" => "2", 
			"opener" => "2", 
			"options" => "2", 
			"outerHeight" => "2", 
			"outerHTML" => "2", 
			"outerText" => "2", 
			"outerWidth" => "2", 
			"paddings" => "2", 
			"pageX" => "2", 
			"pageXOffset" => "2", 
			"pageY" => "2", 
			"pageYOffset" => "2", 
			"parent" => "2", 
			"parentElement" => "2", 
			"parentLayer" => "2", 
			"parentWindow" => "2", 
			"parse" => "2", 
			"parseFloat" => "2", 
			"parseInt" => "2", 
			"pathname" => "2", 
			"personalbar" => "2", 
			"PI" => "2", 
			"pixelDepth" => "2", 
			"platform" => "2", 
			"plugins" => "2", 
			"pop" => "2", 
			"port" => "2", 
			"POSITIVE_INFINITY" => "2", 
			"pow" => "2", 
			"preference" => "2", 
			"previous" => "2", 
			"print" => "2", 
			"prompt" => "2", 
			"protocol" => "2", 
			"prototype" => "2", 
			"push" => "2", 
			"random" => "2", 
			"readyState" => "2", 
			"reason" => "2", 
			"referrer" => "2", 
			"refresh" => "2", 
			"releaseEvents" => "2", 
			"reload" => "2", 
			"removeAttribute" => "2", 
			"removeMember" => "2", 
			"replace" => "2", 
			"resizeBy" => "2", 
			"resizeTo" => "2", 
			"returnValue" => "2", 
			"reverse" => "2", 
			"right" => "2", 
			"rightcontext" => "2", 
			"screenX" => "2", 
			"screenY" => "2", 
			"scroll" => "2", 
			"scrollbars" => "2", 
			"scrollBy" => "2", 
			"scrollIntoView" => "2", 
			"scrollTo" => "2", 
			"search" => "2", 
			"select" => "2", 
			"selected" => "2", 
			"selectedIndex" => "2", 
			"self" => "2", 
			"setAttribute" => "2", 
			"setDay" => "2", 
			"setFullYear" => "2", 
			"setHotkeys" => "2", 
			"setHours" => "2", 
			"setInterval" => "2", 
			"setMember" => "2", 
			"setMilliseconds" => "2", 
			"setMinutes" => "2", 
			"setMonth" => "2", 
			"setResizable" => "2", 
			"setSeconds" => "2", 
			"setSlot" => "2", 
			"setTime" => "2", 
			"setTimeout" => "2", 
			"setUTCDate" => "2", 
			"setUTCFullYear" => "2", 
			"setUTCHours" => "2", 
			"setUTCMillseconds" => "2", 
			"setUTCMinutes" => "2", 
			"setUTCMonth" => "2", 
			"setUTCSeconds" => "2", 
			"setYear" => "2", 
			"setZOptions" => "2", 
			"shift" => "2", 
			"shiftKey" => "2", 
			"siblingAbove" => "2", 
			"siblingBelow" => "2", 
			"signText" => "2", 
			"sin" => "2", 
			"slice" => "2", 
			"smallsort" => "2", 
			"source" => "2", 
			"sourceIndex" => "2", 
			"splice" => "2", 
			"split" => "2", 
			"sqrt" => "2", 
			"SQRT1_2" => "2", 
			"SQRT2" => "2", 
			"src" => "2", 
			"srcElement" => "2", 
			"srcFilter" => "2", 
			"status" => "2", 
			"statusbar" => "2", 
			"stop" => "2", 
			"strike" => "2", 
			"style" => "2", 
			"sub" => "2", 
			"submit" => "2", 
			"substr" => "2", 
			"substring" => "2", 
			"suffixes" => "2", 
			"sun" => "2", 
			"sup" => "2", 
			"systemLanguage" => "2", 
			"tagName" => "2", 
			"tags" => "2", 
			"taint" => "2", 
			"taintEnabled" => "2", 
			"tan" => "2", 
			"target" => "2", 
			"test" => "2", 
			"text" => "2", 
			"title" => "2", 
			"toElement" => "2", 
			"toGMTString" => "2", 
			"toLocaleString" => "2", 
			"toLowerCase" => "2", 
			"toolbar" => "2", 
			"top" => "2", 
			"toString" => "2", 
			"toUpperCase" => "2", 
			"toUTCString" => "2", 
			"TYPE" => "2", 
			"type" => "2", 
			"typeOf" => "2", 
			"unescape" => "2", 
			"unshift" => "2", 
			"untaint" => "2", 
			"unwatch" => "2", 
			"userAgent" => "2", 
			"userLanguage" => "2", 
			"UTC" => "2", 
			"value" => "2", 
			"valueOf" => "2", 
			"visibility" => "2", 
			"vlinkColor" => "2", 
			"vspace" => "2", 
			"watch" => "2", 
			"which" => "2", 
			"width" => "2", 
			"window" => "2", 
			"write" => "2", 
			"writeln" => "2", 
			"x" => "2", 
			"y" => "2", 
			"zIndex" => "2", 
			"Anchor" => "3", 
			"Applet" => "3", 
			"Area" => "3", 
			"Arguments" => "3", 
			"Array" => "3", 
			"Boolean" => "3", 
			"Button" => "3", 
			"Checkbox" => "3", 
			"Crypto" => "3", 
			"Date" => "3", 
			"Document" => "3", 
			"Element" => "3", 
			"Event" => "3", 
			"FileUpload" => "3", 
			"Form" => "3", 
			"Frame" => "3", 
			"Function" => "3", 
			"Hidden" => "3", 
			"History" => "3", 
			"HTMLElement" => "3", 
			"Image" => "3", 
			"Infinity" => "3", 
			"Input" => "3", 
			"JavaArray" => "3", 
			"JavaClass" => "3", 
			"JavaObject" => "3", 
			"JavaPackage" => "3", 
			"JSObject" => "3", 
			"Layer" => "3", 
			"Link" => "3", 
			"Math" => "3", 
			"MimeType" => "3", 
			"Navigator" => "3", 
			"Number" => "3", 
			"Object" => "3", 
			"Option" => "3", 
			"Packages" => "3", 
			"Password" => "3", 
			"Plugin" => "3", 
			"PrivilegeManager" => "3", 
			"Random" => "3", 
			"RegExp" => "3", 
			"Screen" => "3", 
			"Select" => "3", 
			"String" => "3", 
			"Submit" => "3", 
			"Text" => "3", 
			"Textarea" => "3", 
			"URL" => "3", 
			"Window" => "3");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
