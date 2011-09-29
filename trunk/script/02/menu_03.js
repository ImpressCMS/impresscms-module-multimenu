
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_03=document.all
var ie5_5_03=typeof dropmenuiframe03=='undefined'? 0 : 1
var ns6_03=document.getElementById&&!document.all

if (ie4_03||ns6_03)
document.write('<div id="dropmenudiv03" style="z-index:100;visibility:hidden;width:'+menuwidth03+';background-color:'+menubgcolor03+'" onMouseover="clearhidemenu03()" onMouseout="dynamichide03(event)"></div>')


function getposOffset03(what, offsettype03){
var totaloffset03=(offsettype03=="left")? what.offsetLeft : what.offsetTop;
var parentEl03=what.offsetParent;
while (parentEl03!=null){
totaloffset03=(offsettype03=="left")? totaloffset03+parentEl03.offsetLeft : totaloffset03+parentEl03.offsetTop;
parentEl03=parentEl03.offsetParent;
}
return totaloffset03;
}

function showhide03(obj, e, visible, hidden, menuwidth03){
if (ie4_03||ns6_03)
dropmenuobj03.style.left=dropmenuobj03.style.top=-500
if (menuwidth03>=0){
dropmenuobj03.widthobj=dropmenuobj03.style
dropmenuobj03.widthobj.width=menuwidth03
}
if (menuwidth03<0){
dropmenuobj03.widthobj=dropmenuobj03.style
dropmenuobj03.widthobj.width=-0.8*menuwidth03
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe03()
} 
else if (e.type=="click"){
setTimeout("hideIframe03();",0);
obj.visibility=hidden
}
}

function iecompattest03(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge03(obj, whichedge03){
var edgeoffset03=0
if (whichedge03=="rightedge"){
var windowedge03=ie4_03 && !window.opera? iecompattest03().scrollLeft+iecompattest03().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj03.contentmeasure=dropmenuobj03.offsetWidth
if (windowedge03-dropmenuobj03.x < dropmenuobj03.contentmeasure)
edgeoffset03=dropmenuobj03.contentmeasure-obj.offsetWidth
}
else{
var topedge03=ie4_03 && !window.opera? iecompattest03().scrollTop : window.pageYOffset
var windowedge03=ie4_03 && !window.opera? iecompattest03().scrollTop+iecompattest03().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj03.contentmeasure=dropmenuobj03.offsetHeight
if (windowedge03-dropmenuobj03.y < dropmenuobj03.contentmeasure){ //move up?
//edgeoffset03=dropmenuobj03.contentmeasure+obj.offsetHeight
edgeoffset03=dropmenuobj03.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj03.y-topedge03)<dropmenuobj03.contentmeasure) //up no good either?
edgeoffset03=dropmenuobj03.y+obj.offsetHeight-topedge03
}
}
return edgeoffset03
}

function populatemenu03(what){
if (ie4_03||ns6_03)
dropmenuobj03.innerHTML=what.join("")
}


function dropdownmenu03(obj, e, menucontents, menuwidth03){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu03()

dropmenuobj03=document.getElementById? document.getElementById("dropmenudiv03") : dropmenudiv03
populatemenu03(menucontents)

if (ie4_03||ns6_03){
showhide03(dropmenuobj03.style, e, "visible", "hidden", menuwidth03)
dropmenuobj03.x=getposOffset03(obj, "left")
dropmenuobj03.y=getposOffset03(obj, "top")
dropmenuobj03.style.left=dropmenuobj03.x-clearbrowseredge03(obj, "rightedge")+"px"
dropmenuobj03.style.top=dropmenuobj03.y-clearbrowseredge03(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe03()
}

return clickreturnvalue03()
}

function clickreturnvalue03(){
if (ie4_03||ns6_03) return false
else return true
}

function contains_ns6_03(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide03(e){
if (ie4_03&&!dropmenuobj03.contains(e.toElement))
delayhidemenu03()
else if (ns6_03&&e.currentTarget!= e.relatedTarget&& !contains_ns6_03(e.currentTarget, e.relatedTarget))
delayhidemenu03()
}

function hidemenu03(e){
if (typeof dropmenuobj03!="undefined"){
if (ie4_03||ns6_03)
dropmenuobj03.style.visibility="hidden"
hideIframe03()
}
}

function delayhidemenu03(){
if (ie4_03||ns6_03)
delayhide03=setTimeout("hidemenu03()",disappeardelay03)
}

function clearhidemenu03(){
if (typeof delayhide03!="undefined")
clearTimeout(delayhide03)
}

if (hidemenu_onclick03=="yes")
document.onclick=hidemenu03

// Hide IFrame
function hideIframe03() {
if (ie5_5_03){
var theIframe03 = document.getElementById("dropmenuiframe03")
theIframe03.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe03() {
if (ie5_5_03){
var theIframe03 = document.getElementById("dropmenuiframe03")
var theDiv03 = document.getElementById("dropmenudiv03");
theIframe03.style.width = theDiv03.offsetWidth+'px';
theIframe03.style.height = theDiv03.offsetHeight+'px';
theIframe03.style.top = theDiv03.offsetTop+'px';
theIframe03.style.left = theDiv03.offsetLeft+'px';
theIframe03.style.display = "block";
}
}