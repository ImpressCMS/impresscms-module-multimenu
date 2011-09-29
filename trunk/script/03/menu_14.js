
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_14=document.all
var ie5_5_14=typeof dropmenuiframe14=='undefined'? 0 : 1
var ns6_14=document.getElementById&&!document.all

if (ie4_14||ns6_14)
document.write('<div id="dropmenudiv14" style="z-index:140;visibility:hidden;width:'+menuwidth14+';background-color:'+menubgcolor14+'" onMouseover="clearhidemenu14()" onMouseout="dynamichide14(event)"></div>')

function getposOffset14(what, offsettype14){
var totaloffset14=(offsettype14=="left")? what.offsetLeft : what.offsetTop;
var parentEl14=what.offsetParent;
while (parentEl14!=null){
totaloffset14=(offsettype14=="left")? totaloffset14+parentEl14.offsetLeft : totaloffset14+parentEl14.offsetTop;
parentEl14=parentEl14.offsetParent;
}
return totaloffset14;
}

function showhide14(obj, e, visible, hidden, menuwidth14){
if (ie4_14||ns6_14)
dropmenuobj14.style.left=dropmenuobj14.style.top=-500
if (menuwidth14!=""){
dropmenuobj14.widthobj=dropmenuobj14.style
dropmenuobj14.widthobj.width=menuwidth14
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe14()
}
else if (e.type=="click"){
setTimeout("hideIframe14();",0);
obj.visibility=hidden
}
}

function iecompattest14(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge14(obj, whichedge14){
var edgeoffset14=0
if (whichedge14=="rightedge"){
var windowedge14=ie4_14 && !window.opera? iecompattest14().scrollLeft+iecompattest14().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj14.contentmeasure=dropmenuobj14.offsetWidth
if (windowedge14-dropmenuobj14.x < dropmenuobj14.contentmeasure)
edgeoffset14=dropmenuobj14.contentmeasure-obj.offsetWidth
}
else{
var topedge14=ie4_14 && !window.opera? iecompattest14().scrollTop : window.pageYOffset
var windowedge14=ie4_14 && !window.opera? iecompattest14().scrollTop+iecompattest14().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj14.contentmeasure=dropmenuobj14.offsetHeight
if (windowedge14-dropmenuobj14.y < dropmenuobj14.contentmeasure){ //move up?
edgeoffset14=dropmenuobj14.contentmeasure+obj.offsetHeight
if ((dropmenuobj14.y-topedge14)<dropmenuobj14.contentmeasure) //up no good either?
edgeoffset14=dropmenuobj14.y+obj.offsetHeight-topedge14
}
}
return edgeoffset14
}

function populatemenu14(what){
if (ie4_14||ns6_14)
dropmenuobj14.innerHTML=what.join("")
}


function dropdownmenu14(obj, e, menucontents, menuwidth14){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu14()

dropmenuobj14=document.getElementById? document.getElementById("dropmenudiv14") : dropmenudiv14
populatemenu14(menucontents)

if (ie4_14||ns6_14){
showhide14(dropmenuobj14.style, e, "visible", "hidden", menuwidth14)
dropmenuobj14.x=getposOffset14(obj, "left")
dropmenuobj14.y=getposOffset14(obj, "top")
dropmenuobj14.style.left=dropmenuobj14.x-clearbrowseredge14(obj, "rightedge")+"px"
dropmenuobj14.style.top=dropmenuobj14.y-clearbrowseredge14(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe14()
}

return clickreturnvalue14()
}

function clickreturnvalue14(){
if (ie4_14||ns6_14) return false
else return true
}

function contains_ns6_14(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide14(e){
if (ie4_14&&!dropmenuobj14.contains(e.toElement))
delayhidemenu14()
else if (ns6_14&&e.currentTarget!= e.relatedTarget&& !contains_ns6_14(e.currentTarget, e.relatedTarget))
delayhidemenu14()
}

function hidemenu14(e){
if (typeof dropmenuobj14!="undefined"){
if (ie4_14||ns6_14)
dropmenuobj14.style.visibility="hidden"
hideIframe14()
}
}

function delayhidemenu14(){
if (ie4_14||ns6_14)
delayhide14=setTimeout("hidemenu14()",disappeardelay14)
}

function clearhidemenu14(){
if (typeof delayhide14!="undefined")
clearTimeout(delayhide14)
}

if (hidemenu_onclick14=="yes")
document.onclick=hidemenu14

// Hide IFrame
function hideIframe14() {
if (ie5_5_14){
var theIframe14 = document.getElementById("dropmenuiframe14")
theIframe14.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe14() {
if (ie5_5_14){
var theIframe14 = document.getElementById("dropmenuiframe14")
var theDiv14 = document.getElementById("dropmenudiv14");
theIframe14.style.width = theDiv14.offsetWidth+'px';
theIframe14.style.height = theDiv14.offsetHeight+'px';
theIframe14.style.top = theDiv14.offsetTop+'px';
theIframe14.style.left = theDiv14.offsetLeft+'px';
theIframe14.style.display = "block";
}
}