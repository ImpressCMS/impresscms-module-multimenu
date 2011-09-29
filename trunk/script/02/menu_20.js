
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_20=document.all
var ie5_5_20=typeof dropmenuiframe20=='undefined'? 0 : 1
var ns6_20=document.getElementById&&!document.all

if (ie4_20||ns6_20)
document.write('<div id="dropmenudiv20" style="z-index:100;visibility:hidden;width:'+menuwidth20+';background-color:'+menubgcolor20+'" onMouseover="clearhidemenu20()" onMouseout="dynamichide20(event)"></div>')


function getposOffset20(what, offsettype20){
var totaloffset20=(offsettype20=="left")? what.offsetLeft : what.offsetTop;
var parentEl20=what.offsetParent;
while (parentEl20!=null){
totaloffset20=(offsettype20=="left")? totaloffset20+parentEl20.offsetLeft : totaloffset20+parentEl20.offsetTop;
parentEl20=parentEl20.offsetParent;
}
return totaloffset20;
}

function showhide20(obj, e, visible, hidden, menuwidth20){
if (ie4_20||ns6_20)
dropmenuobj20.style.left=dropmenuobj20.style.top=-500
if (menuwidth20>=0){
dropmenuobj20.widthobj=dropmenuobj20.style
dropmenuobj20.widthobj.width=menuwidth20
}
if (menuwidth20<0){
dropmenuobj20.widthobj=dropmenuobj20.style
dropmenuobj20.widthobj.width=-0.8*menuwidth20
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe20()
}
else if (e.type=="click"){
setTimeout("hideIframe20();",0);
obj.visibility=hidden
}
}

function iecompattest20(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge20(obj, whichedge20){
var edgeoffset20=0
if (whichedge20=="rightedge"){
var windowedge20=ie4_20 && !window.opera? iecompattest20().scrollLeft+iecompattest20().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj20.contentmeasure=dropmenuobj20.offsetWidth
if (windowedge20-dropmenuobj20.x < dropmenuobj20.contentmeasure)
edgeoffset20=dropmenuobj20.contentmeasure-obj.offsetWidth
}
else{
var topedge20=ie4_20 && !window.opera? iecompattest20().scrollTop : window.pageYOffset
var windowedge20=ie4_20 && !window.opera? iecompattest20().scrollTop+iecompattest20().clientHeight-15 : window.pageYOffset+window.innerHeight-20
dropmenuobj20.contentmeasure=dropmenuobj20.offsetHeight
if (windowedge20-dropmenuobj20.y < dropmenuobj20.contentmeasure){ //move up?
//edgeoffset20=dropmenuobj20.contentmeasure+obj.offsetHeight
edgeoffset20=dropmenuobj20.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj20.y-topedge20)<dropmenuobj20.contentmeasure) //up no good either?
edgeoffset20=dropmenuobj20.y+obj.offsetHeight-topedge20
}
}
return edgeoffset20
}

function populatemenu20(what){
if (ie4_20||ns6_20)
dropmenuobj20.innerHTML=what.join("")
}


function dropdownmenu20(obj, e, menucontents, menuwidth20){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu20()

dropmenuobj20=document.getElementById? document.getElementById("dropmenudiv20") : dropmenudiv20
populatemenu20(menucontents)

if (ie4_20||ns6_20){
showhide20(dropmenuobj20.style, e, "visible", "hidden", menuwidth20)
dropmenuobj20.x=getposOffset20(obj, "left")
dropmenuobj20.y=getposOffset20(obj, "top")
dropmenuobj20.style.left=dropmenuobj20.x-clearbrowseredge20(obj, "rightedge")+"px"
dropmenuobj20.style.top=dropmenuobj20.y-clearbrowseredge20(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe20()
}

return clickreturnvalue20()
}

function clickreturnvalue20(){
if (ie4_20||ns6_20) return false
else return true
}

function contains_ns6_20(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide20(e){
if (ie4_20&&!dropmenuobj20.contains(e.toElement))
delayhidemenu20()
else if (ns6_20&&e.currentTarget!= e.relatedTarget&& !contains_ns6_20(e.currentTarget, e.relatedTarget))
delayhidemenu20()
}

function hidemenu20(e){
if (typeof dropmenuobj20!="undefined"){
if (ie4_20||ns6_20)
dropmenuobj20.style.visibility="hidden"
hideIframe20()
}
}

function delayhidemenu20(){
if (ie4_20||ns6_20)
delayhide20=setTimeout("hidemenu20()",disappeardelay20)
}

function clearhidemenu20(){
if (typeof delayhide20!="undefined")
clearTimeout(delayhide20)
}

if (hidemenu_onclick20=="yes")
document.onclick=hidemenu20

// Hide IFrame
function hideIframe20() {
if (ie5_5_20){
var theIframe20 = document.getElementById("dropmenuiframe20")
theIframe20.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe20() {
if (ie5_5_20){
var theIframe20 = document.getElementById("dropmenuiframe20")
var theDiv20 = document.getElementById("dropmenudiv20");
theIframe20.style.width = theDiv20.offsetWidth+'px';
theIframe20.style.height = theDiv20.offsetHeight+'px';
theIframe20.style.top = theDiv20.offsetTop+'px';
theIframe20.style.left = theDiv20.offsetLeft+'px';
theIframe20.style.display = "block";
}
}