
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_10=document.all
var ie5_5_10=typeof dropmenuiframe10=='undefined'? 0 : 1
var ns6_10=document.getElementById&&!document.all

if (ie4_10||ns6_10)
document.write('<div id="dropmenudiv10" style="z-index:100;visibility:hidden;width:'+menuwidth10+';background-color:'+menubgcolor10+'" onMouseover="clearhidemenu10()" onMouseout="dynamichide10(event)"></div>')

function getposOffset10(what, offsettype10){
var totaloffset10=(offsettype10=="left")? what.offsetLeft : what.offsetTop;
var parentEl10=what.offsetParent;
while (parentEl10!=null){
totaloffset10=(offsettype10=="left")? totaloffset10+parentEl10.offsetLeft : totaloffset10+parentEl10.offsetTop;
parentEl10=parentEl10.offsetParent;
}
return totaloffset10;
}

function showhide10(obj, e, visible, hidden, menuwidth10){
if (ie4_10||ns6_10)
dropmenuobj10.style.left=dropmenuobj10.style.top=-500
if (menuwidth10!=""){
dropmenuobj10.widthobj=dropmenuobj10.style
dropmenuobj10.widthobj.width=menuwidth10
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe10()
}
else if (e.type=="click"){
setTimeout("hideIframe10();",0);
obj.visibility=hidden
}
}

function iecompattest10(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge10(obj, whichedge10){
var edgeoffset10=0
if (whichedge10=="rightedge"){
var windowedge10=ie4_10 && !window.opera? iecompattest10().scrollLeft+iecompattest10().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj10.contentmeasure=dropmenuobj10.offsetWidth
if (windowedge10-dropmenuobj10.x < dropmenuobj10.contentmeasure)
edgeoffset10=dropmenuobj10.contentmeasure-obj.offsetWidth
}
else{
var topedge10=ie4_10 && !window.opera? iecompattest10().scrollTop : window.pageYOffset
var windowedge10=ie4_10 && !window.opera? iecompattest10().scrollTop+iecompattest10().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj10.contentmeasure=dropmenuobj10.offsetHeight
if (windowedge10-dropmenuobj10.y < dropmenuobj10.contentmeasure){ //move up?
edgeoffset10=dropmenuobj10.contentmeasure+obj.offsetHeight
if ((dropmenuobj10.y-topedge10)<dropmenuobj10.contentmeasure) //up no good either?
edgeoffset10=dropmenuobj10.y+obj.offsetHeight-topedge10
}
}
return edgeoffset10
}

function populatemenu10(what){
if (ie4_10||ns6_10)
dropmenuobj10.innerHTML=what.join("")
}


function dropdownmenu10(obj, e, menucontents, menuwidth10){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu10()

dropmenuobj10=document.getElementById? document.getElementById("dropmenudiv10") : dropmenudiv10
populatemenu10(menucontents)

if (ie4_10||ns6_10){
showhide10(dropmenuobj10.style, e, "visible", "hidden", menuwidth10)
dropmenuobj10.x=getposOffset10(obj, "left")
dropmenuobj10.y=getposOffset10(obj, "top")
dropmenuobj10.style.left=dropmenuobj10.x-clearbrowseredge10(obj, "rightedge")+"px"
dropmenuobj10.style.top=dropmenuobj10.y-clearbrowseredge10(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe10()
}

return clickreturnvalue10()
}

function clickreturnvalue10(){
if (ie4_10||ns6_10) return false
else return true
}

function contains_ns6_10(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide10(e){
if (ie4_10&&!dropmenuobj10.contains(e.toElement))
delayhidemenu10()
else if (ns6_10&&e.currentTarget!= e.relatedTarget&& !contains_ns6_10(e.currentTarget, e.relatedTarget))
delayhidemenu10()
}

function hidemenu10(e){
if (typeof dropmenuobj10!="undefined"){
if (ie4_10||ns6_10)
dropmenuobj10.style.visibility="hidden"
hideIframe10()
}
}

function delayhidemenu10(){
if (ie4_10||ns6_10)
delayhide10=setTimeout("hidemenu10()",disappeardelay10)
}

function clearhidemenu10(){
if (typeof delayhide10!="undefined")
clearTimeout(delayhide10)
}

if (hidemenu_onclick10=="yes")
document.onclick=hidemenu10

// Hide IFrame
function hideIframe10() {
if (ie5_5_10){
var theIframe10 = document.getElementById("dropmenuiframe10")
theIframe10.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe10() {
if (ie5_5_10){
var theIframe10 = document.getElementById("dropmenuiframe10")
var theDiv10 = document.getElementById("dropmenudiv10");
theIframe10.style.width = theDiv10.offsetWidth+'px';
theIframe10.style.height = theDiv10.offsetHeight+'px';
theIframe10.style.top = theDiv10.offsetTop+'px';
theIframe10.style.left = theDiv10.offsetLeft+'px';
theIframe10.style.display = "block";
}
}