
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_19=document.all
var ie5_5_19=typeof dropmenuiframe19=='undefined'? 0 : 1
var ns6_19=document.getElementById&&!document.all

if (ie4_19||ns6_19)
document.write('<div id="dropmenudiv19" style="z-index:190;visibility:hidden;width:'+menuwidth19+';background-color:'+menubgcolor19+'" onMouseover="clearhidemenu19()" onMouseout="dynamichide19(event)"></div>')

function getposOffset19(what, offsettype19){
var totaloffset19=(offsettype19=="left")? what.offsetLeft : what.offsetTop;
var parentEl19=what.offsetParent;
while (parentEl19!=null){
totaloffset19=(offsettype19=="left")? totaloffset19+parentEl19.offsetLeft : totaloffset19+parentEl19.offsetTop;
parentEl19=parentEl19.offsetParent;
}
return totaloffset19;
}

function showhide19(obj, e, visible, hidden, menuwidth19){
if (ie4_19||ns6_19)
dropmenuobj19.style.left=dropmenuobj19.style.top=-500
if (menuwidth19!=""){
dropmenuobj19.widthobj=dropmenuobj19.style
dropmenuobj19.widthobj.width=menuwidth19
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe19()
}
else if (e.type=="click"){
setTimeout("hideIframe19();",0);
obj.visibility=hidden
}
}

function iecompattest19(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge19(obj, whichedge19){
var edgeoffset19=0
if (whichedge19=="rightedge"){
var windowedge19=ie4_19 && !window.opera? iecompattest19().scrollLeft+iecompattest19().clientWidth-19 : window.pageXOffset+window.innerWidth-19
dropmenuobj19.contentmeasure=dropmenuobj19.offsetWidth
if (windowedge19-dropmenuobj19.x < dropmenuobj19.contentmeasure)
edgeoffset19=dropmenuobj19.contentmeasure-obj.offsetWidth
}
else{
var topedge19=ie4_19 && !window.opera? iecompattest19().scrollTop : window.pageYOffset
var windowedge19=ie4_19 && !window.opera? iecompattest19().scrollTop+iecompattest19().clientHeight-19 : window.pageYOffset+window.innerHeight-19
dropmenuobj19.contentmeasure=dropmenuobj19.offsetHeight
if (windowedge19-dropmenuobj19.y < dropmenuobj19.contentmeasure){ //move up?
edgeoffset19=dropmenuobj19.contentmeasure+obj.offsetHeight
if ((dropmenuobj19.y-topedge19)<dropmenuobj19.contentmeasure) //up no good either?
edgeoffset19=dropmenuobj19.y+obj.offsetHeight-topedge19
}
}
return edgeoffset19
}

function populatemenu19(what){
if (ie4_19||ns6_19)
dropmenuobj19.innerHTML=what.join("")
}


function dropdownmenu19(obj, e, menucontents, menuwidth19){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu19()

dropmenuobj19=document.getElementById? document.getElementById("dropmenudiv19") : dropmenudiv19
populatemenu19(menucontents)

if (ie4_19||ns6_19){
showhide19(dropmenuobj19.style, e, "visible", "hidden", menuwidth19)
dropmenuobj19.x=getposOffset19(obj, "left")
dropmenuobj19.y=getposOffset19(obj, "top")
dropmenuobj19.style.left=dropmenuobj19.x-clearbrowseredge19(obj, "rightedge")+"px"
dropmenuobj19.style.top=dropmenuobj19.y-clearbrowseredge19(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe19()
}

return clickreturnvalue19()
}

function clickreturnvalue19(){
if (ie4_19||ns6_19) return false
else return true
}

function contains_ns6_19(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide19(e){
if (ie4_19&&!dropmenuobj19.contains(e.toElement))
delayhidemenu19()
else if (ns6_19&&e.currentTarget!= e.relatedTarget&& !contains_ns6_19(e.currentTarget, e.relatedTarget))
delayhidemenu19()
}

function hidemenu19(e){
if (typeof dropmenuobj19!="undefined"){
if (ie4_19||ns6_19)
dropmenuobj19.style.visibility="hidden"
hideIframe19()
}
}

function delayhidemenu19(){
if (ie4_19||ns6_19)
delayhide19=setTimeout("hidemenu19()",disappeardelay19)
}

function clearhidemenu19(){
if (typeof delayhide19!="undefined")
clearTimeout(delayhide19)
}

if (hidemenu_onclick19=="yes")
document.onclick=hidemenu19

// Hide IFrame
function hideIframe19() {
if (ie5_5_19){
var theIframe19 = document.getElementById("dropmenuiframe19")
theIframe19.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe19() {
if (ie5_5_19){
var theIframe19 = document.getElementById("dropmenuiframe19")
var theDiv19 = document.getElementById("dropmenudiv19");
theIframe19.style.width = theDiv19.offsetWidth+'px';
theIframe19.style.height = theDiv19.offsetHeight+'px';
theIframe19.style.top = theDiv19.offsetTop+'px';
theIframe19.style.left = theDiv19.offsetLeft+'px';
theIframe19.style.display = "block";
}
}