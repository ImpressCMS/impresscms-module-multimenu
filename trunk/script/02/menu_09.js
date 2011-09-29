
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_09=document.all
var ie5_5_09=typeof dropmenuiframe09=='undefined'? 0 : 1
var ns6_09=document.getElementById&&!document.all

if (ie4_09||ns6_09)
document.write('<div id="dropmenudiv09" style="z-index:100;visibility:hidden;width:'+menuwidth09+';background-color:'+menubgcolor09+'" onMouseover="clearhidemenu09()" onMouseout="dynamichide09(event)"></div>')


function getposOffset09(what, offsettype09){
var totaloffset09=(offsettype09=="left")? what.offsetLeft : what.offsetTop;
var parentEl09=what.offsetParent;
while (parentEl09!=null){
totaloffset09=(offsettype09=="left")? totaloffset09+parentEl09.offsetLeft : totaloffset09+parentEl09.offsetTop;
parentEl09=parentEl09.offsetParent;
}
return totaloffset09;
}

function showhide09(obj, e, visible, hidden, menuwidth09){
if (ie4_09||ns6_09)
dropmenuobj09.style.left=dropmenuobj09.style.top=-500
if (menuwidth09>=0){
dropmenuobj09.widthobj=dropmenuobj09.style
dropmenuobj09.widthobj.width=menuwidth09
}
if (menuwidth09<0){
dropmenuobj09.widthobj=dropmenuobj09.style
dropmenuobj09.widthobj.width=-0.8*menuwidth09
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe09()
} 
else if (e.type=="click"){
setTimeout("hideIframe09();",0);
obj.visibility=hidden
}
}

function iecompattest09(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge09(obj, whichedge09){
var edgeoffset09=0
if (whichedge09=="rightedge"){
var windowedge09=ie4_09 && !window.opera? iecompattest09().scrollLeft+iecompattest09().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj09.contentmeasure=dropmenuobj09.offsetWidth
if (windowedge09-dropmenuobj09.x < dropmenuobj09.contentmeasure)
edgeoffset09=dropmenuobj09.contentmeasure-obj.offsetWidth
}
else{
var topedge09=ie4_09 && !window.opera? iecompattest09().scrollTop : window.pageYOffset
var windowedge09=ie4_09 && !window.opera? iecompattest09().scrollTop+iecompattest09().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj09.contentmeasure=dropmenuobj09.offsetHeight
if (windowedge09-dropmenuobj09.y < dropmenuobj09.contentmeasure){ //move up?
//edgeoffset09=dropmenuobj09.contentmeasure+obj.offsetHeight
edgeoffset09=dropmenuobj09.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj09.y-topedge09)<dropmenuobj09.contentmeasure) //up no good either?
edgeoffset09=dropmenuobj09.y+obj.offsetHeight-topedge09
}
}
return edgeoffset09
}

function populatemenu09(what){
if (ie4_09||ns6_09)
dropmenuobj09.innerHTML=what.join("")
}


function dropdownmenu09(obj, e, menucontents, menuwidth09){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu09()

dropmenuobj09=document.getElementById? document.getElementById("dropmenudiv09") : dropmenudiv09
populatemenu09(menucontents)

if (ie4_09||ns6_09){
showhide09(dropmenuobj09.style, e, "visible", "hidden", menuwidth09)
dropmenuobj09.x=getposOffset09(obj, "left")
dropmenuobj09.y=getposOffset09(obj, "top")
dropmenuobj09.style.left=dropmenuobj09.x-clearbrowseredge09(obj, "rightedge")+"px"
dropmenuobj09.style.top=dropmenuobj09.y-clearbrowseredge09(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe09()
}

return clickreturnvalue09()
}

function clickreturnvalue09(){
if (ie4_09||ns6_09) return false
else return true
}

function contains_ns6_09(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide09(e){
if (ie4_09&&!dropmenuobj09.contains(e.toElement))
delayhidemenu09()
else if (ns6_09&&e.currentTarget!= e.relatedTarget&& !contains_ns6_09(e.currentTarget, e.relatedTarget))
delayhidemenu09()
}

function hidemenu09(e){
if (typeof dropmenuobj09!="undefined"){
if (ie4_09||ns6_09)
dropmenuobj09.style.visibility="hidden"
hideIframe09()
}
}

function delayhidemenu09(){
if (ie4_09||ns6_09)
delayhide09=setTimeout("hidemenu09()",disappeardelay09)
}

function clearhidemenu09(){
if (typeof delayhide09!="undefined")
clearTimeout(delayhide09)
}

if (hidemenu_onclick09=="yes")
document.onclick=hidemenu09

// Hide IFrame
function hideIframe09() {
if (ie5_5_09){
var theIframe09 = document.getElementById("dropmenuiframe09")
theIframe09.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe09() {
if (ie5_5_09){
var theIframe09 = document.getElementById("dropmenuiframe09")
var theDiv09 = document.getElementById("dropmenudiv09");
theIframe09.style.width = theDiv09.offsetWidth+'px';
theIframe09.style.height = theDiv09.offsetHeight+'px';
theIframe09.style.top = theDiv09.offsetTop+'px';
theIframe09.style.left = theDiv09.offsetLeft+'px';
theIframe09.style.display = "block";
}
}