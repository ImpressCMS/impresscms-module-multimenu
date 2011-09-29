
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_11=document.all
var ie5_5_11=typeof dropmenuiframe11=='undefined'? 0 : 1
var ns6_11=document.getElementById&&!document.all

if (ie4_11||ns6_11)
document.write('<div id="dropmenudiv11" style="z-index:100;visibility:hidden;width:'+menuwidth11+';background-color:'+menubgcolor11+'" onMouseover="clearhidemenu11()" onMouseout="dynamichide11(event)"></div>')


function getposOffset11(what, offsettype11){
var totaloffset11=(offsettype11=="left")? what.offsetLeft : what.offsetTop;
var parentEl11=what.offsetParent;
while (parentEl11!=null){
totaloffset11=(offsettype11=="left")? totaloffset11+parentEl11.offsetLeft : totaloffset11+parentEl11.offsetTop;
parentEl11=parentEl11.offsetParent;
}
return totaloffset11;
}

function showhide11(obj, e, visible, hidden, menuwidth11){
if (ie4_11||ns6_11)
dropmenuobj11.style.left=dropmenuobj11.style.top=-500
if (menuwidth11>=0){
dropmenuobj11.widthobj=dropmenuobj11.style
dropmenuobj11.widthobj.width=menuwidth11
}
if (menuwidth11<0){
dropmenuobj11.widthobj=dropmenuobj11.style
dropmenuobj11.widthobj.width=-0.8*menuwidth11
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe11()
} 
else if (e.type=="click"){
setTimeout("hideIframe11();",0);
obj.visibility=hidden
}
}

function iecompattest11(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge11(obj, whichedge11){
var edgeoffset11=0
if (whichedge11=="rightedge"){
var windowedge11=ie4_11 && !window.opera? iecompattest11().scrollLeft+iecompattest11().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj11.contentmeasure=dropmenuobj11.offsetWidth
if (windowedge11-dropmenuobj11.x < dropmenuobj11.contentmeasure)
edgeoffset11=dropmenuobj11.contentmeasure-obj.offsetWidth
}
else{
var topedge11=ie4_11 && !window.opera? iecompattest11().scrollTop : window.pageYOffset
var windowedge11=ie4_11 && !window.opera? iecompattest11().scrollTop+iecompattest11().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj11.contentmeasure=dropmenuobj11.offsetHeight
if (windowedge11-dropmenuobj11.y < dropmenuobj11.contentmeasure){ //move up?
//edgeoffset11=dropmenuobj11.contentmeasure+obj.offsetHeight
edgeoffset11=dropmenuobj11.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj11.y-topedge11)<dropmenuobj11.contentmeasure) //up no good either?
edgeoffset11=dropmenuobj11.y+obj.offsetHeight-topedge11
}
}
return edgeoffset11
}

function populatemenu11(what){
if (ie4_11||ns6_11)
dropmenuobj11.innerHTML=what.join("")
}


function dropdownmenu11(obj, e, menucontents, menuwidth11){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu11()

dropmenuobj11=document.getElementById? document.getElementById("dropmenudiv11") : dropmenudiv11
populatemenu11(menucontents)

if (ie4_11||ns6_11){
showhide11(dropmenuobj11.style, e, "visible", "hidden", menuwidth11)
dropmenuobj11.x=getposOffset11(obj, "left")
dropmenuobj11.y=getposOffset11(obj, "top")
dropmenuobj11.style.left=dropmenuobj11.x-clearbrowseredge11(obj, "rightedge")+"px"
dropmenuobj11.style.top=dropmenuobj11.y-clearbrowseredge11(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe11()
}

return clickreturnvalue11()
}

function clickreturnvalue11(){
if (ie4_11||ns6_11) return false
else return true
}

function contains_ns6_11(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide11(e){
if (ie4_11&&!dropmenuobj11.contains(e.toElement))
delayhidemenu11()
else if (ns6_11&&e.currentTarget!= e.relatedTarget&& !contains_ns6_11(e.currentTarget, e.relatedTarget))
delayhidemenu11()
}

function hidemenu11(e){
if (typeof dropmenuobj11!="undefined"){
if (ie4_11||ns6_11)
dropmenuobj11.style.visibility="hidden"
hideIframe11()
}
}

function delayhidemenu11(){
if (ie4_11||ns6_11)
delayhide11=setTimeout("hidemenu11()",disappeardelay11)
}

function clearhidemenu11(){
if (typeof delayhide11!="undefined")
clearTimeout(delayhide11)
}

if (hidemenu_onclick11=="yes")
document.onclick=hidemenu11

// Hide IFrame
function hideIframe11() {
if (ie5_5_11){
var theIframe11 = document.getElementById("dropmenuiframe11")
theIframe11.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe11() {
if (ie5_5_11){
var theIframe11 = document.getElementById("dropmenuiframe11")
var theDiv11 = document.getElementById("dropmenudiv11");
theIframe11.style.width = theDiv11.offsetWidth+'px';
theIframe11.style.height = theDiv11.offsetHeight+'px';
theIframe11.style.top = theDiv11.offsetTop+'px';
theIframe11.style.left = theDiv11.offsetLeft+'px';
theIframe11.style.display = "block";
}
}