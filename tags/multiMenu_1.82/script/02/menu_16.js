
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_16=document.all
var ie5_5_16=typeof dropmenuiframe16=='undefined'? 0 : 1
var ns6_16=document.getElementById&&!document.all

if (ie4_16||ns6_16)
document.write('<div id="dropmenudiv16" style="z-index:100;visibility:hidden;width:'+menuwidth16+';background-color:'+menubgcolor16+'" onMouseover="clearhidemenu16()" onMouseout="dynamichide16(event)"></div>')


function getposOffset16(what, offsettype16){
var totaloffset16=(offsettype16=="left")? what.offsetLeft : what.offsetTop;
var parentEl16=what.offsetParent;
while (parentEl16!=null){
totaloffset16=(offsettype16=="left")? totaloffset16+parentEl16.offsetLeft : totaloffset16+parentEl16.offsetTop;
parentEl16=parentEl16.offsetParent;
}
return totaloffset16;
}

function showhide16(obj, e, visible, hidden, menuwidth16){
if (ie4_16||ns6_16)
dropmenuobj16.style.left=dropmenuobj16.style.top=-500
if (menuwidth16>=0){
dropmenuobj16.widthobj=dropmenuobj16.style
dropmenuobj16.widthobj.width=menuwidth16
}
if (menuwidth16<0){
dropmenuobj16.widthobj=dropmenuobj16.style
dropmenuobj16.widthobj.width=-0.8*menuwidth16
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe16()
} 
else if (e.type=="click"){
setTimeout("hideIframe16();",0);
obj.visibility=hidden
}
}

function iecompattest16(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge16(obj, whichedge16){
var edgeoffset16=0
if (whichedge16=="rightedge"){
var windowedge16=ie4_16 && !window.opera? iecompattest16().scrollLeft+iecompattest16().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj16.contentmeasure=dropmenuobj16.offsetWidth
if (windowedge16-dropmenuobj16.x < dropmenuobj16.contentmeasure)
edgeoffset16=dropmenuobj16.contentmeasure-obj.offsetWidth
}
else{
var topedge16=ie4_16 && !window.opera? iecompattest16().scrollTop : window.pageYOffset
var windowedge16=ie4_16 && !window.opera? iecompattest16().scrollTop+iecompattest16().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj16.contentmeasure=dropmenuobj16.offsetHeight
if (windowedge16-dropmenuobj16.y < dropmenuobj16.contentmeasure){ //move up?
//edgeoffset16=dropmenuobj16.contentmeasure+obj.offsetHeight
edgeoffset16=dropmenuobj16.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj16.y-topedge16)<dropmenuobj16.contentmeasure) //up no good either?
edgeoffset16=dropmenuobj16.y+obj.offsetHeight-topedge16
}
}
return edgeoffset16
}

function populatemenu16(what){
if (ie4_16||ns6_16)
dropmenuobj16.innerHTML=what.join("")
}


function dropdownmenu16(obj, e, menucontents, menuwidth16){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu16()

dropmenuobj16=document.getElementById? document.getElementById("dropmenudiv16") : dropmenudiv16
populatemenu16(menucontents)

if (ie4_16||ns6_16){
showhide16(dropmenuobj16.style, e, "visible", "hidden", menuwidth16)
dropmenuobj16.x=getposOffset16(obj, "left")
dropmenuobj16.y=getposOffset16(obj, "top")
dropmenuobj16.style.left=dropmenuobj16.x-clearbrowseredge16(obj, "rightedge")+"px"
dropmenuobj16.style.top=dropmenuobj16.y-clearbrowseredge16(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe16()
}

return clickreturnvalue16()
}

function clickreturnvalue16(){
if (ie4_16||ns6_16) return false
else return true
}

function contains_ns6_16(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide16(e){
if (ie4_16&&!dropmenuobj16.contains(e.toElement))
delayhidemenu16()
else if (ns6_16&&e.currentTarget!= e.relatedTarget&& !contains_ns6_16(e.currentTarget, e.relatedTarget))
delayhidemenu16()
}

function hidemenu16(e){
if (typeof dropmenuobj16!="undefined"){
if (ie4_16||ns6_16)
dropmenuobj16.style.visibility="hidden"
hideIframe16()
}
}

function delayhidemenu16(){
if (ie4_16||ns6_16)
delayhide16=setTimeout("hidemenu16()",disappeardelay16)
}

function clearhidemenu16(){
if (typeof delayhide16!="undefined")
clearTimeout(delayhide16)
}

if (hidemenu_onclick16=="yes")
document.onclick=hidemenu16

// Hide IFrame
function hideIframe16() {
if (ie5_5_16){
var theIframe16 = document.getElementById("dropmenuiframe16")
theIframe16.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe16() {
if (ie5_5_16){
var theIframe16 = document.getElementById("dropmenuiframe16")
var theDiv16 = document.getElementById("dropmenudiv16");
theIframe16.style.width = theDiv16.offsetWidth+'px';
theIframe16.style.height = theDiv16.offsetHeight+'px';
theIframe16.style.top = theDiv16.offsetTop+'px';
theIframe16.style.left = theDiv16.offsetLeft+'px';
theIframe16.style.display = "block";
}
}