
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_18=document.all
var ie5_5_18=typeof dropmenuiframe18=='undefined'? 0 : 1
var ns6_18=document.getElementById&&!document.all

if (ie4_18||ns6_18)
document.write('<div id="dropmenudiv18" style="z-index:180;visibility:hidden;width:'+menuwidth18+';background-color:'+menubgcolor18+'" onMouseover="clearhidemenu18()" onMouseout="dynamichide18(event)"></div>')

function getposOffset18(what, offsettype18){
var totaloffset18=(offsettype18=="left")? what.offsetLeft : what.offsetTop;
var parentEl18=what.offsetParent;
while (parentEl18!=null){
totaloffset18=(offsettype18=="left")? totaloffset18+parentEl18.offsetLeft : totaloffset18+parentEl18.offsetTop;
parentEl18=parentEl18.offsetParent;
}
return totaloffset18;
}

function showhide18(obj, e, visible, hidden, menuwidth18){
if (ie4_18||ns6_18)
dropmenuobj18.style.left=dropmenuobj18.style.top=-500
if (menuwidth18!=""){
dropmenuobj18.widthobj=dropmenuobj18.style
dropmenuobj18.widthobj.width=menuwidth18
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe18()
}
else if (e.type=="click"){
setTimeout("hideIframe18();",0);
obj.visibility=hidden
}
}

function iecompattest18(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge18(obj, whichedge18){
var edgeoffset18=0
if (whichedge18=="rightedge"){
var windowedge18=ie4_18 && !window.opera? iecompattest18().scrollLeft+iecompattest18().clientWidth-18 : window.pageXOffset+window.innerWidth-18
dropmenuobj18.contentmeasure=dropmenuobj18.offsetWidth
if (windowedge18-dropmenuobj18.x < dropmenuobj18.contentmeasure)
edgeoffset18=dropmenuobj18.contentmeasure-obj.offsetWidth
}
else{
var topedge18=ie4_18 && !window.opera? iecompattest18().scrollTop : window.pageYOffset
var windowedge18=ie4_18 && !window.opera? iecompattest18().scrollTop+iecompattest18().clientHeight-18 : window.pageYOffset+window.innerHeight-18
dropmenuobj18.contentmeasure=dropmenuobj18.offsetHeight
if (windowedge18-dropmenuobj18.y < dropmenuobj18.contentmeasure){ //move up?
edgeoffset18=dropmenuobj18.contentmeasure+obj.offsetHeight
if ((dropmenuobj18.y-topedge18)<dropmenuobj18.contentmeasure) //up no good either?
edgeoffset18=dropmenuobj18.y+obj.offsetHeight-topedge18
}
}
return edgeoffset18
}

function populatemenu18(what){
if (ie4_18||ns6_18)
dropmenuobj18.innerHTML=what.join("")
}


function dropdownmenu18(obj, e, menucontents, menuwidth18){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu18()

dropmenuobj18=document.getElementById? document.getElementById("dropmenudiv18") : dropmenudiv18
populatemenu18(menucontents)

if (ie4_18||ns6_18){
showhide18(dropmenuobj18.style, e, "visible", "hidden", menuwidth18)
dropmenuobj18.x=getposOffset18(obj, "left")
dropmenuobj18.y=getposOffset18(obj, "top")
dropmenuobj18.style.left=dropmenuobj18.x-clearbrowseredge18(obj, "rightedge")+"px"
dropmenuobj18.style.top=dropmenuobj18.y-clearbrowseredge18(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe18()
}

return clickreturnvalue18()
}

function clickreturnvalue18(){
if (ie4_18||ns6_18) return false
else return true
}

function contains_ns6_18(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide18(e){
if (ie4_18&&!dropmenuobj18.contains(e.toElement))
delayhidemenu18()
else if (ns6_18&&e.currentTarget!= e.relatedTarget&& !contains_ns6_18(e.currentTarget, e.relatedTarget))
delayhidemenu18()
}

function hidemenu18(e){
if (typeof dropmenuobj18!="undefined"){
if (ie4_18||ns6_18)
dropmenuobj18.style.visibility="hidden"
hideIframe18()
}
}

function delayhidemenu18(){
if (ie4_18||ns6_18)
delayhide18=setTimeout("hidemenu18()",disappeardelay18)
}

function clearhidemenu18(){
if (typeof delayhide18!="undefined")
clearTimeout(delayhide18)
}

if (hidemenu_onclick18=="yes")
document.onclick=hidemenu18

// Hide IFrame
function hideIframe18() {
if (ie5_5_18){
var theIframe18 = document.getElementById("dropmenuiframe18")
theIframe18.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe18() {
if (ie5_5_18){
var theIframe18 = document.getElementById("dropmenuiframe18")
var theDiv18 = document.getElementById("dropmenudiv18");
theIframe18.style.width = theDiv18.offsetWidth+'px';
theIframe18.style.height = theDiv18.offsetHeight+'px';
theIframe18.style.top = theDiv18.offsetTop+'px';
theIframe18.style.left = theDiv18.offsetLeft+'px';
theIframe18.style.display = "block";
}
}