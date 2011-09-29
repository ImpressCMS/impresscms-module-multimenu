
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_04=document.all
var ie5_5_04=typeof dropmenuiframe04=='undefined'? 0 : 1
var ns6_04=document.getElementById&&!document.all

if (ie4_04||ns6_04)
document.write('<div id="dropmenudiv04" style="z-index:100;visibility:hidden;width:'+menuwidth04+';background-color:'+menubgcolor04+'" onMouseover="clearhidemenu04()" onMouseout="dynamichide04(event)"></div>')


function getposOffset04(what, offsettype04){
var totaloffset04=(offsettype04=="left")? what.offsetLeft : what.offsetTop;
var parentEl04=what.offsetParent;
while (parentEl04!=null){
totaloffset04=(offsettype04=="left")? totaloffset04+parentEl04.offsetLeft : totaloffset04+parentEl04.offsetTop;
parentEl04=parentEl04.offsetParent;
}
return totaloffset04;
}

function showhide04(obj, e, visible, hidden, menuwidth04){
if (ie4_04||ns6_04)
dropmenuobj04.style.left=dropmenuobj04.style.top=-500
if (menuwidth04>=0){
dropmenuobj04.widthobj=dropmenuobj04.style
dropmenuobj04.widthobj.width=menuwidth04
}
if (menuwidth04<0){
dropmenuobj04.widthobj=dropmenuobj04.style
dropmenuobj04.widthobj.width=-0.8*menuwidth04
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe04()
} 
else if (e.type=="click"){
setTimeout("hideIframe04();",0);
obj.visibility=hidden
}
}

function iecompattest04(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge04(obj, whichedge04){
var edgeoffset04=0
if (whichedge04=="rightedge"){
var windowedge04=ie4_04 && !window.opera? iecompattest04().scrollLeft+iecompattest04().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj04.contentmeasure=dropmenuobj04.offsetWidth
if (windowedge04-dropmenuobj04.x < dropmenuobj04.contentmeasure)
edgeoffset04=dropmenuobj04.contentmeasure-obj.offsetWidth
}
else{
var topedge04=ie4_04 && !window.opera? iecompattest04().scrollTop : window.pageYOffset
var windowedge04=ie4_04 && !window.opera? iecompattest04().scrollTop+iecompattest04().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj04.contentmeasure=dropmenuobj04.offsetHeight
if (windowedge04-dropmenuobj04.y < dropmenuobj04.contentmeasure){ //move up?
//edgeoffset04=dropmenuobj04.contentmeasure+obj.offsetHeight
edgeoffset04=dropmenuobj04.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj04.y-topedge04)<dropmenuobj04.contentmeasure) //up no good either?
edgeoffset04=dropmenuobj04.y+obj.offsetHeight-topedge04
}
}
return edgeoffset04
}

function populatemenu04(what){
if (ie4_04||ns6_04)
dropmenuobj04.innerHTML=what.join("")
}


function dropdownmenu04(obj, e, menucontents, menuwidth04){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu04()

dropmenuobj04=document.getElementById? document.getElementById("dropmenudiv04") : dropmenudiv04
populatemenu04(menucontents)

if (ie4_04||ns6_04){
showhide04(dropmenuobj04.style, e, "visible", "hidden", menuwidth04)
dropmenuobj04.x=getposOffset04(obj, "left")
dropmenuobj04.y=getposOffset04(obj, "top")
dropmenuobj04.style.left=dropmenuobj04.x-clearbrowseredge04(obj, "rightedge")+"px"
dropmenuobj04.style.top=dropmenuobj04.y-clearbrowseredge04(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe04()
}

return clickreturnvalue04()
}

function clickreturnvalue04(){
if (ie4_04||ns6_04) return false
else return true
}

function contains_ns6_04(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide04(e){
if (ie4_04&&!dropmenuobj04.contains(e.toElement))
delayhidemenu04()
else if (ns6_04&&e.currentTarget!= e.relatedTarget&& !contains_ns6_04(e.currentTarget, e.relatedTarget))
delayhidemenu04()
}

function hidemenu04(e){
if (typeof dropmenuobj04!="undefined"){
if (ie4_04||ns6_04)
dropmenuobj04.style.visibility="hidden"
hideIframe04()
}
}

function delayhidemenu04(){
if (ie4_04||ns6_04)
delayhide04=setTimeout("hidemenu04()",disappeardelay04)
}

function clearhidemenu04(){
if (typeof delayhide04!="undefined")
clearTimeout(delayhide04)
}

if (hidemenu_onclick04=="yes")
document.onclick=hidemenu04

// Hide IFrame
function hideIframe04() {
if (ie5_5_04){
var theIframe04 = document.getElementById("dropmenuiframe04")
theIframe04.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe04() {
if (ie5_5_04){
var theIframe04 = document.getElementById("dropmenuiframe04")
var theDiv04 = document.getElementById("dropmenudiv04");
theIframe04.style.width = theDiv04.offsetWidth+'px';
theIframe04.style.height = theDiv04.offsetHeight+'px';
theIframe04.style.top = theDiv04.offsetTop+'px';
theIframe04.style.left = theDiv04.offsetLeft+'px';
theIframe04.style.display = "block";
}
}