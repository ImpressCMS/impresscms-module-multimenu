
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_05=document.all
var ie5_5_05=typeof dropmenuiframe05=='undefined'? 0 : 1
var ns6_05=document.getElementById&&!document.all

if (ie4_05||ns6_05)
document.write('<div id="dropmenudiv05" style="z-index:100;visibility:hidden;width:'+menuwidth05+';background-color:'+menubgcolor05+'" onMouseover="clearhidemenu05()" onMouseout="dynamichide05(event)"></div>')

function getposOffset05(what, offsettype05){
var totaloffset05=(offsettype05=="left")? what.offsetLeft : what.offsetTop;
var parentEl05=what.offsetParent;
while (parentEl05!=null){
totaloffset05=(offsettype05=="left")? totaloffset05+parentEl05.offsetLeft : totaloffset05+parentEl05.offsetTop;
parentEl05=parentEl05.offsetParent;
}
return totaloffset05;
}

function showhide05(obj, e, visible, hidden, menuwidth05){
if (ie4_05||ns6_05)
dropmenuobj05.style.left=dropmenuobj05.style.top=-500
if (menuwidth05!=""){
dropmenuobj05.widthobj=dropmenuobj05.style
dropmenuobj05.widthobj.width=menuwidth05
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe05()
}
else if (e.type=="click"){
setTimeout("hideIframe05();",0);
obj.visibility=hidden
}
}

function iecompattest05(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge05(obj, whichedge05){
var edgeoffset05=0
if (whichedge05=="rightedge"){
var windowedge05=ie4_05 && !window.opera? iecompattest05().scrollLeft+iecompattest05().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj05.contentmeasure=dropmenuobj05.offsetWidth
if (windowedge05-dropmenuobj05.x < dropmenuobj05.contentmeasure)
edgeoffset05=dropmenuobj05.contentmeasure-obj.offsetWidth
}
else{
var topedge05=ie4_05 && !window.opera? iecompattest05().scrollTop : window.pageYOffset
var windowedge05=ie4_05 && !window.opera? iecompattest05().scrollTop+iecompattest05().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj05.contentmeasure=dropmenuobj05.offsetHeight
if (windowedge05-dropmenuobj05.y < dropmenuobj05.contentmeasure){ //move up?
edgeoffset05=dropmenuobj05.contentmeasure+obj.offsetHeight
if ((dropmenuobj05.y-topedge05)<dropmenuobj05.contentmeasure) //up no good either?
edgeoffset05=dropmenuobj05.y+obj.offsetHeight-topedge05
}
}
return edgeoffset05
}

function populatemenu05(what){
if (ie4_05||ns6_05)
dropmenuobj05.innerHTML=what.join("")
}


function dropdownmenu05(obj, e, menucontents, menuwidth05){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu05()

dropmenuobj05=document.getElementById? document.getElementById("dropmenudiv05") : dropmenudiv05
populatemenu05(menucontents)

if (ie4_05||ns6_05){
showhide05(dropmenuobj05.style, e, "visible", "hidden", menuwidth05)
dropmenuobj05.x=getposOffset05(obj, "left")
dropmenuobj05.y=getposOffset05(obj, "top")
dropmenuobj05.style.left=dropmenuobj05.x-clearbrowseredge05(obj, "rightedge")+"px"
dropmenuobj05.style.top=dropmenuobj05.y-clearbrowseredge05(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe05()
}

return clickreturnvalue05()
}

function clickreturnvalue05(){
if (ie4_05||ns6_05) return false
else return true
}

function contains_ns6_05(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide05(e){
if (ie4_05&&!dropmenuobj05.contains(e.toElement))
delayhidemenu05()
else if (ns6_05&&e.currentTarget!= e.relatedTarget&& !contains_ns6_05(e.currentTarget, e.relatedTarget))
delayhidemenu05()
}

function hidemenu05(e){
if (typeof dropmenuobj05!="undefined"){
if (ie4_05||ns6_05)
dropmenuobj05.style.visibility="hidden"
hideIframe05()
}
}

function delayhidemenu05(){
if (ie4_05||ns6_05)
delayhide05=setTimeout("hidemenu05()",disappeardelay05)
}

function clearhidemenu05(){
if (typeof delayhide05!="undefined")
clearTimeout(delayhide05)
}

if (hidemenu_onclick05=="yes")
document.onclick=hidemenu05

// Hide IFrame
function hideIframe05() {
if (ie5_5_05){
var theIframe05 = document.getElementById("dropmenuiframe05")
theIframe05.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe05() {
if (ie5_5_05){
var theIframe05 = document.getElementById("dropmenuiframe05")
var theDiv05 = document.getElementById("dropmenudiv05");
theIframe05.style.width = theDiv05.offsetWidth+'px';
theIframe05.style.height = theDiv05.offsetHeight+'px';
theIframe05.style.top = theDiv05.offsetTop+'px';
theIframe05.style.left = theDiv05.offsetLeft+'px';
theIframe05.style.display = "block";
}
}