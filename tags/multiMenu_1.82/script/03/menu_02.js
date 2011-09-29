
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_02=document.all
var ie5_5_02=typeof dropmenuiframe02=='undefined'? 0 : 1
var ns6_02=document.getElementById&&!document.all

if (ie4_02||ns6_02)
document.write('<div id="dropmenudiv02" style="z-index:100;visibility:hidden;width:'+menuwidth02+';background-color:'+menubgcolor02+'" onMouseover="clearhidemenu02()" onMouseout="dynamichide02(event)"></div>')

function getposOffset02(what, offsettype02){
var totaloffset02=(offsettype02=="left")? what.offsetLeft : what.offsetTop;
var parentEl02=what.offsetParent;
while (parentEl02!=null){
totaloffset02=(offsettype02=="left")? totaloffset02+parentEl02.offsetLeft : totaloffset02+parentEl02.offsetTop;
parentEl02=parentEl02.offsetParent;
}
return totaloffset02;
}

function showhide02(obj, e, visible, hidden, menuwidth02){
if (ie4_02||ns6_02)
dropmenuobj02.style.left=dropmenuobj02.style.top=-500
if (menuwidth02!=""){
dropmenuobj02.widthobj=dropmenuobj02.style
dropmenuobj02.widthobj.width=menuwidth02
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe02()
}
else if (e.type=="click"){
setTimeout("hideIframe02();",0);
obj.visibility=hidden
}
}

function iecompattest02(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge02(obj, whichedge02){
var edgeoffset02=0
if (whichedge02=="rightedge"){
var windowedge02=ie4_02 && !window.opera? iecompattest02().scrollLeft+iecompattest02().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj02.contentmeasure=dropmenuobj02.offsetWidth
if (windowedge02-dropmenuobj02.x < dropmenuobj02.contentmeasure)
edgeoffset02=dropmenuobj02.contentmeasure-obj.offsetWidth
}
else{
var topedge02=ie4_02 && !window.opera? iecompattest02().scrollTop : window.pageYOffset
var windowedge02=ie4_02 && !window.opera? iecompattest02().scrollTop+iecompattest02().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj02.contentmeasure=dropmenuobj02.offsetHeight
if (windowedge02-dropmenuobj02.y < dropmenuobj02.contentmeasure){ //move up?
edgeoffset02=dropmenuobj02.contentmeasure+obj.offsetHeight
if ((dropmenuobj02.y-topedge02)<dropmenuobj02.contentmeasure) //up no good either?
edgeoffset02=dropmenuobj02.y+obj.offsetHeight-topedge02
}
}
return edgeoffset02
}

function populatemenu02(what){
if (ie4_02||ns6_02)
dropmenuobj02.innerHTML=what.join("")
}


function dropdownmenu02(obj, e, menucontents, menuwidth02){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu02()

dropmenuobj02=document.getElementById? document.getElementById("dropmenudiv02") : dropmenudiv02
populatemenu02(menucontents)

if (ie4_02||ns6_02){
showhide02(dropmenuobj02.style, e, "visible", "hidden", menuwidth02)
dropmenuobj02.x=getposOffset02(obj, "left")
dropmenuobj02.y=getposOffset02(obj, "top")
dropmenuobj02.style.left=dropmenuobj02.x-clearbrowseredge02(obj, "rightedge")+"px"
dropmenuobj02.style.top=dropmenuobj02.y-clearbrowseredge02(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe02()
}

return clickreturnvalue02()
}

function clickreturnvalue02(){
if (ie4_02||ns6_02) return false
else return true
}

function contains_ns6_02(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide02(e){
if (ie4_02&&!dropmenuobj02.contains(e.toElement))
delayhidemenu02()
else if (ns6_02&&e.currentTarget!= e.relatedTarget&& !contains_ns6_02(e.currentTarget, e.relatedTarget))
delayhidemenu02()
}

function hidemenu02(e){
if (typeof dropmenuobj02!="undefined"){
if (ie4_02||ns6_02)
dropmenuobj02.style.visibility="hidden"
hideIframe02()
}
}

function delayhidemenu02(){
if (ie4_02||ns6_02)
delayhide02=setTimeout("hidemenu02()",disappeardelay02)
}

function clearhidemenu02(){
if (typeof delayhide02!="undefined")
clearTimeout(delayhide02)
}

if (hidemenu_onclick02=="yes")
document.onclick=hidemenu02

// Hide IFrame
function hideIframe02() {
if (ie5_5_02){
var theIframe02 = document.getElementById("dropmenuiframe02")
theIframe02.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe02() {
if (ie5_5_02){
var theIframe02 = document.getElementById("dropmenuiframe02")
var theDiv02 = document.getElementById("dropmenudiv02");
theIframe02.style.width = theDiv02.offsetWidth+'px';
theIframe02.style.height = theDiv02.offsetHeight+'px';
theIframe02.style.top = theDiv02.offsetTop+'px';
theIframe02.style.left = theDiv02.offsetLeft+'px';
theIframe02.style.display = "block";
}
}