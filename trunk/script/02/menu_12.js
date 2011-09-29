
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_12=document.all
var ie5_5_12=typeof dropmenuiframe12=='undefined'? 0 : 1
var ns6_12=document.getElementById&&!document.all

if (ie4_12||ns6_12)
document.write('<div id="dropmenudiv12" style="z-index:100;visibility:hidden;width:'+menuwidth12+';background-color:'+menubgcolor12+'" onMouseover="clearhidemenu12()" onMouseout="dynamichide12(event)"></div>')


function getposOffset12(what, offsettype12){
var totaloffset12=(offsettype12=="left")? what.offsetLeft : what.offsetTop;
var parentEl12=what.offsetParent;
while (parentEl12!=null){
totaloffset12=(offsettype12=="left")? totaloffset12+parentEl12.offsetLeft : totaloffset12+parentEl12.offsetTop;
parentEl12=parentEl12.offsetParent;
}
return totaloffset12;
}

function showhide12(obj, e, visible, hidden, menuwidth12){
if (ie4_12||ns6_12)
dropmenuobj12.style.left=dropmenuobj12.style.top=-500
if (menuwidth12>=0){
dropmenuobj12.widthobj=dropmenuobj12.style
dropmenuobj12.widthobj.width=menuwidth12
}
if (menuwidth12<0){
dropmenuobj12.widthobj=dropmenuobj12.style
dropmenuobj12.widthobj.width=-0.8*menuwidth12
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe12()
} 
else if (e.type=="click"){
setTimeout("hideIframe12();",0);
obj.visibility=hidden
}
}

function iecompattest12(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge12(obj, whichedge12){
var edgeoffset12=0
if (whichedge12=="rightedge"){
var windowedge12=ie4_12 && !window.opera? iecompattest12().scrollLeft+iecompattest12().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj12.contentmeasure=dropmenuobj12.offsetWidth
if (windowedge12-dropmenuobj12.x < dropmenuobj12.contentmeasure)
edgeoffset12=dropmenuobj12.contentmeasure-obj.offsetWidth
}
else{
var topedge12=ie4_12 && !window.opera? iecompattest12().scrollTop : window.pageYOffset
var windowedge12=ie4_12 && !window.opera? iecompattest12().scrollTop+iecompattest12().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj12.contentmeasure=dropmenuobj12.offsetHeight
if (windowedge12-dropmenuobj12.y < dropmenuobj12.contentmeasure){ //move up?
//edgeoffset12=dropmenuobj12.contentmeasure+obj.offsetHeight
edgeoffset12=dropmenuobj12.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj12.y-topedge12)<dropmenuobj12.contentmeasure) //up no good either?
edgeoffset12=dropmenuobj12.y+obj.offsetHeight-topedge12
}
}
return edgeoffset12
}

function populatemenu12(what){
if (ie4_12||ns6_12)
dropmenuobj12.innerHTML=what.join("")
}


function dropdownmenu12(obj, e, menucontents, menuwidth12){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu12()

dropmenuobj12=document.getElementById? document.getElementById("dropmenudiv12") : dropmenudiv12
populatemenu12(menucontents)

if (ie4_12||ns6_12){
showhide12(dropmenuobj12.style, e, "visible", "hidden", menuwidth12)
dropmenuobj12.x=getposOffset12(obj, "left")
dropmenuobj12.y=getposOffset12(obj, "top")
dropmenuobj12.style.left=dropmenuobj12.x-clearbrowseredge12(obj, "rightedge")+"px"
dropmenuobj12.style.top=dropmenuobj12.y-clearbrowseredge12(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe12()
}

return clickreturnvalue12()
}

function clickreturnvalue12(){
if (ie4_12||ns6_12) return false
else return true
}

function contains_ns6_12(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide12(e){
if (ie4_12&&!dropmenuobj12.contains(e.toElement))
delayhidemenu12()
else if (ns6_12&&e.currentTarget!= e.relatedTarget&& !contains_ns6_12(e.currentTarget, e.relatedTarget))
delayhidemenu12()
}

function hidemenu12(e){
if (typeof dropmenuobj12!="undefined"){
if (ie4_12||ns6_12)
dropmenuobj12.style.visibility="hidden"
hideIframe12()
}
}

function delayhidemenu12(){
if (ie4_12||ns6_12)
delayhide12=setTimeout("hidemenu12()",disappeardelay12)
}

function clearhidemenu12(){
if (typeof delayhide12!="undefined")
clearTimeout(delayhide12)
}

if (hidemenu_onclick12=="yes")
document.onclick=hidemenu12

// Hide IFrame
function hideIframe12() {
if (ie5_5_12){
var theIframe12 = document.getElementById("dropmenuiframe12")
theIframe12.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe12() {
if (ie5_5_12){
var theIframe12 = document.getElementById("dropmenuiframe12")
var theDiv12 = document.getElementById("dropmenudiv12");
theIframe12.style.width = theDiv12.offsetWidth+'px';
theIframe12.style.height = theDiv12.offsetHeight+'px';
theIframe12.style.top = theDiv12.offsetTop+'px';
theIframe12.style.left = theDiv12.offsetLeft+'px';
theIframe12.style.display = "block";
}
}