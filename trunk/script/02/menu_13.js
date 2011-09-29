
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_13=document.all
var ie5_5_13=typeof dropmenuiframe13=='undefined'? 0 : 1
var ns6_13=document.getElementById&&!document.all

if (ie4_13||ns6_13)
document.write('<div id="dropmenudiv13" style="z-index:100;visibility:hidden;width:'+menuwidth13+';background-color:'+menubgcolor13+'" onMouseover="clearhidemenu13()" onMouseout="dynamichide13(event)"></div>')


function getposOffset13(what, offsettype13){
var totaloffset13=(offsettype13=="left")? what.offsetLeft : what.offsetTop;
var parentEl13=what.offsetParent;
while (parentEl13!=null){
totaloffset13=(offsettype13=="left")? totaloffset13+parentEl13.offsetLeft : totaloffset13+parentEl13.offsetTop;
parentEl13=parentEl13.offsetParent;
}
return totaloffset13;
}

function showhide13(obj, e, visible, hidden, menuwidth13){
if (ie4_13||ns6_13)
dropmenuobj13.style.left=dropmenuobj13.style.top=-500
if (menuwidth13>=0){
dropmenuobj13.widthobj=dropmenuobj13.style
dropmenuobj13.widthobj.width=menuwidth13
}
if (menuwidth13<0){
dropmenuobj13.widthobj=dropmenuobj13.style
dropmenuobj13.widthobj.width=-0.8*menuwidth13
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe13()
} 
else if (e.type=="click"){
setTimeout("hideIframe13();",0);
obj.visibility=hidden
}
}

function iecompattest13(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge13(obj, whichedge13){
var edgeoffset13=0
if (whichedge13=="rightedge"){
var windowedge13=ie4_13 && !window.opera? iecompattest13().scrollLeft+iecompattest13().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj13.contentmeasure=dropmenuobj13.offsetWidth
if (windowedge13-dropmenuobj13.x < dropmenuobj13.contentmeasure)
edgeoffset13=dropmenuobj13.contentmeasure-obj.offsetWidth
}
else{
var topedge13=ie4_13 && !window.opera? iecompattest13().scrollTop : window.pageYOffset
var windowedge13=ie4_13 && !window.opera? iecompattest13().scrollTop+iecompattest13().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj13.contentmeasure=dropmenuobj13.offsetHeight
if (windowedge13-dropmenuobj13.y < dropmenuobj13.contentmeasure){ //move up?
//edgeoffset13=dropmenuobj13.contentmeasure+obj.offsetHeight
edgeoffset13=dropmenuobj13.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj13.y-topedge13)<dropmenuobj13.contentmeasure) //up no good either?
edgeoffset13=dropmenuobj13.y+obj.offsetHeight-topedge13
}
}
return edgeoffset13
}

function populatemenu13(what){
if (ie4_13||ns6_13)
dropmenuobj13.innerHTML=what.join("")
}


function dropdownmenu13(obj, e, menucontents, menuwidth13){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu13()

dropmenuobj13=document.getElementById? document.getElementById("dropmenudiv13") : dropmenudiv13
populatemenu13(menucontents)

if (ie4_13||ns6_13){
showhide13(dropmenuobj13.style, e, "visible", "hidden", menuwidth13)
dropmenuobj13.x=getposOffset13(obj, "left")
dropmenuobj13.y=getposOffset13(obj, "top")
dropmenuobj13.style.left=dropmenuobj13.x-clearbrowseredge13(obj, "rightedge")+"px"
dropmenuobj13.style.top=dropmenuobj13.y-clearbrowseredge13(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe13()
}

return clickreturnvalue13()
}

function clickreturnvalue13(){
if (ie4_13||ns6_13) return false
else return true
}

function contains_ns6_13(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide13(e){
if (ie4_13&&!dropmenuobj13.contains(e.toElement))
delayhidemenu13()
else if (ns6_13&&e.currentTarget!= e.relatedTarget&& !contains_ns6_13(e.currentTarget, e.relatedTarget))
delayhidemenu13()
}

function hidemenu13(e){
if (typeof dropmenuobj13!="undefined"){
if (ie4_13||ns6_13)
dropmenuobj13.style.visibility="hidden"
hideIframe13()
}
}

function delayhidemenu13(){
if (ie4_13||ns6_13)
delayhide13=setTimeout("hidemenu13()",disappeardelay13)
}

function clearhidemenu13(){
if (typeof delayhide13!="undefined")
clearTimeout(delayhide13)
}

if (hidemenu_onclick13=="yes")
document.onclick=hidemenu13

// Hide IFrame
function hideIframe13() {
if (ie5_5_13){
var theIframe13 = document.getElementById("dropmenuiframe13")
theIframe13.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe13() {
if (ie5_5_13){
var theIframe13 = document.getElementById("dropmenuiframe13")
var theDiv13 = document.getElementById("dropmenudiv13");
theIframe13.style.width = theDiv13.offsetWidth+'px';
theIframe13.style.height = theDiv13.offsetHeight+'px';
theIframe13.style.top = theDiv13.offsetTop+'px';
theIframe13.style.left = theDiv13.offsetLeft+'px';
theIframe13.style.display = "block";
}
}