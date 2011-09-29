
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_01=document.all
var ie5_5_01=typeof dropmenuiframe01=='undefined'? 0 : 1
var ns6_01=document.getElementById&&!document.all

if (ie4_01||ns6_01)
document.write('<div id="dropmenudiv01" style="z-index:100;visibility:hidden;width:'+menuwidth01+';background-color:'+menubgcolor01+'" onMouseover="clearhidemenu01()" onMouseout="dynamichide01(event)"></div>')


function getposOffset01(what, offsettype01){
var totaloffset01=(offsettype01=="left")? what.offsetLeft : what.offsetTop;
var parentEl01=what.offsetParent;
while (parentEl01!=null){
totaloffset01=(offsettype01=="left")? totaloffset01+parentEl01.offsetLeft : totaloffset01+parentEl01.offsetTop;
parentEl01=parentEl01.offsetParent;
}
return totaloffset01;
}

function showhide01(obj, e, visible, hidden, menuwidth01){
if (ie4_01||ns6_01)
dropmenuobj01.style.left=dropmenuobj01.style.top=-500
if (menuwidth01>=0){
dropmenuobj01.widthobj=dropmenuobj01.style
dropmenuobj01.widthobj.width=menuwidth01
}
if (menuwidth01<0){
dropmenuobj01.widthobj=dropmenuobj01.style
dropmenuobj01.widthobj.width=-0.8*menuwidth01
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe01()
} 
else if (e.type=="click"){
setTimeout("hideIframe01();",0);
obj.visibility=hidden
}
}

function iecompattest01(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge01(obj, whichedge01){
var edgeoffset01=0
if (whichedge01=="rightedge"){
var windowedge01=ie4_01 && !window.opera? iecompattest01().scrollLeft+iecompattest01().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj01.contentmeasure=dropmenuobj01.offsetWidth
if (windowedge01-dropmenuobj01.x < dropmenuobj01.contentmeasure)
edgeoffset01=dropmenuobj01.contentmeasure-obj.offsetWidth
}
else{
var topedge01=ie4_01 && !window.opera? iecompattest01().scrollTop : window.pageYOffset
var windowedge01=ie4_01 && !window.opera? iecompattest01().scrollTop+iecompattest01().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj01.contentmeasure=dropmenuobj01.offsetHeight
if (windowedge01-dropmenuobj01.y < dropmenuobj01.contentmeasure){ //move up?
//edgeoffset01=dropmenuobj01.contentmeasure+obj.offsetHeight
edgeoffset01=dropmenuobj01.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj01.y-topedge01)<dropmenuobj01.contentmeasure) //up no good either?
edgeoffset01=dropmenuobj01.y+obj.offsetHeight-topedge01
}
}
return edgeoffset01
}

function populatemenu01(what){
if (ie4_01||ns6_01)
dropmenuobj01.innerHTML=what.join("")
}


function dropdownmenu01(obj, e, menucontents, menuwidth01){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu01()

dropmenuobj01=document.getElementById? document.getElementById("dropmenudiv01") : dropmenudiv01
populatemenu01(menucontents)

if (ie4_01||ns6_01){
showhide01(dropmenuobj01.style, e, "visible", "hidden", menuwidth01)
dropmenuobj01.x=getposOffset01(obj, "left")
dropmenuobj01.y=getposOffset01(obj, "top")
dropmenuobj01.style.left=dropmenuobj01.x-clearbrowseredge01(obj, "rightedge")+"px"
dropmenuobj01.style.top=dropmenuobj01.y-clearbrowseredge01(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe01()
}

return clickreturnvalue01()
}

function clickreturnvalue01(){
if (ie4_01||ns6_01) return false
else return true
}

function contains_ns6_01(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide01(e){
if (ie4_01&&!dropmenuobj01.contains(e.toElement))
delayhidemenu01()
else if (ns6_01&&e.currentTarget!= e.relatedTarget&& !contains_ns6_01(e.currentTarget, e.relatedTarget))
delayhidemenu01()
}

function hidemenu01(e){
if (typeof dropmenuobj01!="undefined"){
if (ie4_01||ns6_01)
dropmenuobj01.style.visibility="hidden"
hideIframe01()
}
}

function delayhidemenu01(){
if (ie4_01||ns6_01)
delayhide01=setTimeout("hidemenu01()",disappeardelay01)
}

function clearhidemenu01(){
if (typeof delayhide01!="undefined")
clearTimeout(delayhide01)
}

if (hidemenu_onclick01=="yes")
document.onclick=hidemenu01

// Hide IFrame
function hideIframe01() {
if (ie5_5_01){
var theIframe01 = document.getElementById("dropmenuiframe01")
theIframe01.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe01() {
if (ie5_5_01){
var theIframe01 = document.getElementById("dropmenuiframe01")
var theDiv01 = document.getElementById("dropmenudiv01");
theIframe01.style.width = theDiv01.offsetWidth+'px';
theIframe01.style.height = theDiv01.offsetHeight+'px';
theIframe01.style.top = theDiv01.offsetTop+'px';
theIframe01.style.left = theDiv01.offsetLeft+'px';
theIframe01.style.display = "block";
}
}