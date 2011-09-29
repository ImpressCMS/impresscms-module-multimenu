
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_17=document.all
var ie5_5_17=typeof dropmenuiframe17=='undefined'? 0 : 1
var ns6_17=document.getElementById&&!document.all

if (ie4_17||ns6_17)
document.write('<div id="dropmenudiv17" style="z-index:170;visibility:hidden;width:'+menuwidth17+';background-color:'+menubgcolor17+'" onMouseover="clearhidemenu17()" onMouseout="dynamichide17(event)"></div>')

function getposOffset17(what, offsettype17){
var totaloffset17=(offsettype17=="left")? what.offsetLeft : what.offsetTop;
var parentEl17=what.offsetParent;
while (parentEl17!=null){
totaloffset17=(offsettype17=="left")? totaloffset17+parentEl17.offsetLeft : totaloffset17+parentEl17.offsetTop;
parentEl17=parentEl17.offsetParent;
}
return totaloffset17;
}

function showhide17(obj, e, visible, hidden, menuwidth17){
if (ie4_17||ns6_17)
dropmenuobj17.style.left=dropmenuobj17.style.top=-500
if (menuwidth17!=""){
dropmenuobj17.widthobj=dropmenuobj17.style
dropmenuobj17.widthobj.width=menuwidth17
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe17()
}
else if (e.type=="click"){
setTimeout("hideIframe17();",0);
obj.visibility=hidden
}
}

function iecompattest17(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge17(obj, whichedge17){
var edgeoffset17=0
if (whichedge17=="rightedge"){
var windowedge17=ie4_17 && !window.opera? iecompattest17().scrollLeft+iecompattest17().clientWidth-17 : window.pageXOffset+window.innerWidth-17
dropmenuobj17.contentmeasure=dropmenuobj17.offsetWidth
if (windowedge17-dropmenuobj17.x < dropmenuobj17.contentmeasure)
edgeoffset17=dropmenuobj17.contentmeasure-obj.offsetWidth
}
else{
var topedge17=ie4_17 && !window.opera? iecompattest17().scrollTop : window.pageYOffset
var windowedge17=ie4_17 && !window.opera? iecompattest17().scrollTop+iecompattest17().clientHeight-17 : window.pageYOffset+window.innerHeight-18
dropmenuobj17.contentmeasure=dropmenuobj17.offsetHeight
if (windowedge17-dropmenuobj17.y < dropmenuobj17.contentmeasure){ //move up?
edgeoffset17=dropmenuobj17.contentmeasure+obj.offsetHeight
if ((dropmenuobj17.y-topedge17)<dropmenuobj17.contentmeasure) //up no good either?
edgeoffset17=dropmenuobj17.y+obj.offsetHeight-topedge17
}
}
return edgeoffset17
}

function populatemenu17(what){
if (ie4_17||ns6_17)
dropmenuobj17.innerHTML=what.join("")
}


function dropdownmenu17(obj, e, menucontents, menuwidth17){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu17()

dropmenuobj17=document.getElementById? document.getElementById("dropmenudiv17") : dropmenudiv17
populatemenu17(menucontents)

if (ie4_17||ns6_17){
showhide17(dropmenuobj17.style, e, "visible", "hidden", menuwidth17)
dropmenuobj17.x=getposOffset17(obj, "left")
dropmenuobj17.y=getposOffset17(obj, "top")
dropmenuobj17.style.left=dropmenuobj17.x-clearbrowseredge17(obj, "rightedge")+"px"
dropmenuobj17.style.top=dropmenuobj17.y-clearbrowseredge17(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe17()
}

return clickreturnvalue17()
}

function clickreturnvalue17(){
if (ie4_17||ns6_17) return false
else return true
}

function contains_ns6_17(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide17(e){
if (ie4_17&&!dropmenuobj17.contains(e.toElement))
delayhidemenu17()
else if (ns6_17&&e.currentTarget!= e.relatedTarget&& !contains_ns6_17(e.currentTarget, e.relatedTarget))
delayhidemenu17()
}

function hidemenu17(e){
if (typeof dropmenuobj17!="undefined"){
if (ie4_17||ns6_17)
dropmenuobj17.style.visibility="hidden"
hideIframe17()
}
}

function delayhidemenu17(){
if (ie4_17||ns6_17)
delayhide17=setTimeout("hidemenu17()",disappeardelay17)
}

function clearhidemenu17(){
if (typeof delayhide17!="undefined")
clearTimeout(delayhide17)
}

if (hidemenu_onclick17=="yes")
document.onclick=hidemenu17

// Hide IFrame
function hideIframe17() {
if (ie5_5_17){
var theIframe17 = document.getElementById("dropmenuiframe17")
theIframe17.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe17() {
if (ie5_5_17){
var theIframe17 = document.getElementById("dropmenuiframe17")
var theDiv17 = document.getElementById("dropmenudiv17");
theIframe17.style.width = theDiv17.offsetWidth+'px';
theIframe17.style.height = theDiv17.offsetHeight+'px';
theIframe17.style.top = theDiv17.offsetTop+'px';
theIframe17.style.left = theDiv17.offsetLeft+'px';
theIframe17.style.display = "block";
}
}