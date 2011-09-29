
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_08=document.all
var ie5_5_08=typeof dropmenuiframe08=='undefined'? 0 : 1
var ns6_08=document.getElementById&&!document.all

if (ie4_08||ns6_08)
document.write('<div id="dropmenudiv08" style="z-index:100;visibility:hidden;width:'+menuwidth08+';background-color:'+menubgcolor08+'" onMouseover="clearhidemenu08()" onMouseout="dynamichide08(event)"></div>')


function getposOffset08(what, offsettype08){
var totaloffset08=(offsettype08=="left")? what.offsetLeft : what.offsetTop;
var parentEl08=what.offsetParent;
while (parentEl08!=null){
totaloffset08=(offsettype08=="left")? totaloffset08+parentEl08.offsetLeft : totaloffset08+parentEl08.offsetTop;
parentEl08=parentEl08.offsetParent;
}
return totaloffset08;
}

function showhide08(obj, e, visible, hidden, menuwidth08){
if (ie4_08||ns6_08)
dropmenuobj08.style.left=dropmenuobj08.style.top=-500
if (menuwidth08>=0){
dropmenuobj08.widthobj=dropmenuobj08.style
dropmenuobj08.widthobj.width=menuwidth08
}
if (menuwidth08<0){
dropmenuobj08.widthobj=dropmenuobj08.style
dropmenuobj08.widthobj.width=-0.8*menuwidth08
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe08()
} 
else if (e.type=="click"){
setTimeout("hideIframe08();",0);
obj.visibility=hidden
}
}

function iecompattest08(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge08(obj, whichedge08){
var edgeoffset08=0
if (whichedge08=="rightedge"){
var windowedge08=ie4_08 && !window.opera? iecompattest08().scrollLeft+iecompattest08().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj08.contentmeasure=dropmenuobj08.offsetWidth
if (windowedge08-dropmenuobj08.x < dropmenuobj08.contentmeasure)
edgeoffset08=dropmenuobj08.contentmeasure-obj.offsetWidth
}
else{
var topedge08=ie4_08 && !window.opera? iecompattest08().scrollTop : window.pageYOffset
var windowedge08=ie4_08 && !window.opera? iecompattest08().scrollTop+iecompattest08().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj08.contentmeasure=dropmenuobj08.offsetHeight
if (windowedge08-dropmenuobj08.y < dropmenuobj08.contentmeasure){ //move up?
//edgeoffset08=dropmenuobj08.contentmeasure+obj.offsetHeight
edgeoffset08=dropmenuobj08.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj08.y-topedge08)<dropmenuobj08.contentmeasure) //up no good either?
edgeoffset08=dropmenuobj08.y+obj.offsetHeight-topedge08
}
}
return edgeoffset08
}

function populatemenu08(what){
if (ie4_08||ns6_08)
dropmenuobj08.innerHTML=what.join("")
}


function dropdownmenu08(obj, e, menucontents, menuwidth08){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu08()

dropmenuobj08=document.getElementById? document.getElementById("dropmenudiv08") : dropmenudiv08
populatemenu08(menucontents)

if (ie4_08||ns6_08){
showhide08(dropmenuobj08.style, e, "visible", "hidden", menuwidth08)
dropmenuobj08.x=getposOffset08(obj, "left")
dropmenuobj08.y=getposOffset08(obj, "top")
dropmenuobj08.style.left=dropmenuobj08.x-clearbrowseredge08(obj, "rightedge")+"px"
dropmenuobj08.style.top=dropmenuobj08.y-clearbrowseredge08(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe08()
}

return clickreturnvalue08()
}

function clickreturnvalue08(){
if (ie4_08||ns6_08) return false
else return true
}

function contains_ns6_08(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide08(e){
if (ie4_08&&!dropmenuobj08.contains(e.toElement))
delayhidemenu08()
else if (ns6_08&&e.currentTarget!= e.relatedTarget&& !contains_ns6_08(e.currentTarget, e.relatedTarget))
delayhidemenu08()
}

function hidemenu08(e){
if (typeof dropmenuobj08!="undefined"){
if (ie4_08||ns6_08)
dropmenuobj08.style.visibility="hidden"
hideIframe08()
}
}

function delayhidemenu08(){
if (ie4_08||ns6_08)
delayhide08=setTimeout("hidemenu08()",disappeardelay08)
}

function clearhidemenu08(){
if (typeof delayhide08!="undefined")
clearTimeout(delayhide08)
}

if (hidemenu_onclick08=="yes")
document.onclick=hidemenu08

// Hide IFrame
function hideIframe08() {
if (ie5_5_08){
var theIframe08 = document.getElementById("dropmenuiframe08")
theIframe08.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe08() {
if (ie5_5_08){
var theIframe08 = document.getElementById("dropmenuiframe08")
var theDiv08 = document.getElementById("dropmenudiv08");
theIframe08.style.width = theDiv08.offsetWidth+'px';
theIframe08.style.height = theDiv08.offsetHeight+'px';
theIframe08.style.top = theDiv08.offsetTop+'px';
theIframe08.style.left = theDiv08.offsetLeft+'px';
theIframe08.style.display = "block";
}
}