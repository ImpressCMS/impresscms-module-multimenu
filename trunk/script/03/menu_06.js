
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_06=document.all
var ie5_5_06=typeof dropmenuiframe06=='undefined'? 0 : 1
var ns6_06=document.getElementById&&!document.all

if (ie4_06||ns6_06)
document.write('<div id="dropmenudiv06" style="z-index:100;visibility:hidden;width:'+menuwidth06+';background-color:'+menubgcolor06+'" onMouseover="clearhidemenu06()" onMouseout="dynamichide06(event)"></div>')

function getposOffset06(what, offsettype06){
var totaloffset06=(offsettype06=="left")? what.offsetLeft : what.offsetTop;
var parentEl06=what.offsetParent;
while (parentEl06!=null){
totaloffset06=(offsettype06=="left")? totaloffset06+parentEl06.offsetLeft : totaloffset06+parentEl06.offsetTop;
parentEl06=parentEl06.offsetParent;
}
return totaloffset06;
}

function showhide06(obj, e, visible, hidden, menuwidth06){
if (ie4_06||ns6_06)
dropmenuobj06.style.left=dropmenuobj06.style.top=-500
if (menuwidth06!=""){
dropmenuobj06.widthobj=dropmenuobj06.style
dropmenuobj06.widthobj.width=menuwidth06
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe06()
}
else if (e.type=="click"){
setTimeout("hideIframe06();",0);
obj.visibility=hidden
}
}

function iecompattest06(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge06(obj, whichedge06){
var edgeoffset06=0
if (whichedge06=="rightedge"){
var windowedge06=ie4_06 && !window.opera? iecompattest06().scrollLeft+iecompattest06().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj06.contentmeasure=dropmenuobj06.offsetWidth
if (windowedge06-dropmenuobj06.x < dropmenuobj06.contentmeasure)
edgeoffset06=dropmenuobj06.contentmeasure-obj.offsetWidth
}
else{
var topedge06=ie4_06 && !window.opera? iecompattest06().scrollTop : window.pageYOffset
var windowedge06=ie4_06 && !window.opera? iecompattest06().scrollTop+iecompattest06().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj06.contentmeasure=dropmenuobj06.offsetHeight
if (windowedge06-dropmenuobj06.y < dropmenuobj06.contentmeasure){ //move up?
edgeoffset06=dropmenuobj06.contentmeasure+obj.offsetHeight
if ((dropmenuobj06.y-topedge06)<dropmenuobj06.contentmeasure) //up no good either?
edgeoffset06=dropmenuobj06.y+obj.offsetHeight-topedge06
}
}
return edgeoffset06
}

function populatemenu06(what){
if (ie4_06||ns6_06)
dropmenuobj06.innerHTML=what.join("")
}


function dropdownmenu06(obj, e, menucontents, menuwidth06){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu06()

dropmenuobj06=document.getElementById? document.getElementById("dropmenudiv06") : dropmenudiv06
populatemenu06(menucontents)

if (ie4_06||ns6_06){
showhide06(dropmenuobj06.style, e, "visible", "hidden", menuwidth06)
dropmenuobj06.x=getposOffset06(obj, "left")
dropmenuobj06.y=getposOffset06(obj, "top")
dropmenuobj06.style.left=dropmenuobj06.x-clearbrowseredge06(obj, "rightedge")+"px"
dropmenuobj06.style.top=dropmenuobj06.y-clearbrowseredge06(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe06()
}

return clickreturnvalue06()
}

function clickreturnvalue06(){
if (ie4_06||ns6_06) return false
else return true
}

function contains_ns6_06(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide06(e){
if (ie4_06&&!dropmenuobj06.contains(e.toElement))
delayhidemenu06()
else if (ns6_06&&e.currentTarget!= e.relatedTarget&& !contains_ns6_06(e.currentTarget, e.relatedTarget))
delayhidemenu06()
}

function hidemenu06(e){
if (typeof dropmenuobj06!="undefined"){
if (ie4_06||ns6_06)
dropmenuobj06.style.visibility="hidden"
hideIframe06()
}
}

function delayhidemenu06(){
if (ie4_06||ns6_06)
delayhide06=setTimeout("hidemenu06()",disappeardelay06)
}

function clearhidemenu06(){
if (typeof delayhide06!="undefined")
clearTimeout(delayhide06)
}

if (hidemenu_onclick06=="yes")
document.onclick=hidemenu06

// Hide IFrame
function hideIframe06() {
if (ie5_5_06){
var theIframe06 = document.getElementById("dropmenuiframe06")
theIframe06.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe06() {
if (ie5_5_06){
var theIframe06 = document.getElementById("dropmenuiframe06")
var theDiv06 = document.getElementById("dropmenudiv06");
theIframe06.style.width = theDiv06.offsetWidth+'px';
theIframe06.style.height = theDiv06.offsetHeight+'px';
theIframe06.style.top = theDiv06.offsetTop+'px';
theIframe06.style.left = theDiv06.offsetLeft+'px';
theIframe06.style.display = "block";
}
}