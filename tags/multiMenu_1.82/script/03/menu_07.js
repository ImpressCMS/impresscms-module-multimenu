
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_07=document.all
var ie5_5_07=typeof dropmenuiframe07=='undefined'? 0 : 1
var ns6_07=document.getElementById&&!document.all

if (ie4_07||ns6_07)
document.write('<div id="dropmenudiv07" style="z-index:100;visibility:hidden;width:'+menuwidth07+';background-color:'+menubgcolor07+'" onMouseover="clearhidemenu07()" onMouseout="dynamichide07(event)"></div>')

function getposOffset07(what, offsettype07){
var totaloffset07=(offsettype07=="left")? what.offsetLeft : what.offsetTop;
var parentEl07=what.offsetParent;
while (parentEl07!=null){
totaloffset07=(offsettype07=="left")? totaloffset07+parentEl07.offsetLeft : totaloffset07+parentEl07.offsetTop;
parentEl07=parentEl07.offsetParent;
}
return totaloffset07;
}

function showhide07(obj, e, visible, hidden, menuwidth07){
if (ie4_07||ns6_07)
dropmenuobj07.style.left=dropmenuobj07.style.top=-500
if (menuwidth07!=""){
dropmenuobj07.widthobj=dropmenuobj07.style
dropmenuobj07.widthobj.width=menuwidth07
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe07()
}
else if (e.type=="click"){
setTimeout("hideIframe07();",0);
obj.visibility=hidden
}
}

function iecompattest07(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge07(obj, whichedge07){
var edgeoffset07=0
if (whichedge07=="rightedge"){
var windowedge07=ie4_07 && !window.opera? iecompattest07().scrollLeft+iecompattest07().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj07.contentmeasure=dropmenuobj07.offsetWidth
if (windowedge07-dropmenuobj07.x < dropmenuobj07.contentmeasure)
edgeoffset07=dropmenuobj07.contentmeasure-obj.offsetWidth
}
else{
var topedge07=ie4_07 && !window.opera? iecompattest07().scrollTop : window.pageYOffset
var windowedge07=ie4_07 && !window.opera? iecompattest07().scrollTop+iecompattest07().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj07.contentmeasure=dropmenuobj07.offsetHeight
if (windowedge07-dropmenuobj07.y < dropmenuobj07.contentmeasure){ //move up?
edgeoffset07=dropmenuobj07.contentmeasure+obj.offsetHeight
if ((dropmenuobj07.y-topedge07)<dropmenuobj07.contentmeasure) //up no good either?
edgeoffset07=dropmenuobj07.y+obj.offsetHeight-topedge07
}
}
return edgeoffset07
}

function populatemenu07(what){
if (ie4_07||ns6_07)
dropmenuobj07.innerHTML=what.join("")
}


function dropdownmenu07(obj, e, menucontents, menuwidth07){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu07()

dropmenuobj07=document.getElementById? document.getElementById("dropmenudiv07") : dropmenudiv07
populatemenu07(menucontents)

if (ie4_07||ns6_07){
showhide07(dropmenuobj07.style, e, "visible", "hidden", menuwidth07)
dropmenuobj07.x=getposOffset07(obj, "left")
dropmenuobj07.y=getposOffset07(obj, "top")
dropmenuobj07.style.left=dropmenuobj07.x-clearbrowseredge07(obj, "rightedge")+"px"
dropmenuobj07.style.top=dropmenuobj07.y-clearbrowseredge07(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe07()
}

return clickreturnvalue07()
}

function clickreturnvalue07(){
if (ie4_07||ns6_07) return false
else return true
}

function contains_ns6_07(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide07(e){
if (ie4_07&&!dropmenuobj07.contains(e.toElement))
delayhidemenu07()
else if (ns6_07&&e.currentTarget!= e.relatedTarget&& !contains_ns6_07(e.currentTarget, e.relatedTarget))
delayhidemenu07()
}

function hidemenu07(e){
if (typeof dropmenuobj07!="undefined"){
if (ie4_07||ns6_07)
dropmenuobj07.style.visibility="hidden"
hideIframe07()
}
}

function delayhidemenu07(){
if (ie4_07||ns6_07)
delayhide07=setTimeout("hidemenu07()",disappeardelay07)
}

function clearhidemenu07(){
if (typeof delayhide07!="undefined")
clearTimeout(delayhide07)
}

if (hidemenu_onclick07=="yes")
document.onclick=hidemenu07

// Hide IFrame
function hideIframe07() {
if (ie5_5_07){
var theIframe07 = document.getElementById("dropmenuiframe07")
theIframe07.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe07() {
if (ie5_5_07){
var theIframe07 = document.getElementById("dropmenuiframe07")
var theDiv07 = document.getElementById("dropmenudiv07");
theIframe07.style.width = theDiv07.offsetWidth+'px';
theIframe07.style.height = theDiv07.offsetHeight+'px';
theIframe07.style.top = theDiv07.offsetTop+'px';
theIframe07.style.left = theDiv07.offsetLeft+'px';
theIframe07.style.display = "block";
}
}