
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4_15=document.all
var ie5_5_15=typeof dropmenuiframe15=='undefined'? 0 : 1
var ns6_15=document.getElementById&&!document.all

if (ie4_15||ns6_15)
document.write('<div id="dropmenudiv15" style="z-index:100;visibility:hidden;width:'+menuwidth15+';background-color:'+menubgcolor15+'" onMouseover="clearhidemenu15()" onMouseout="dynamichide15(event)"></div>')


function getposOffset15(what, offsettype15){
var totaloffset15=(offsettype15=="left")? what.offsetLeft : what.offsetTop;
var parentEl15=what.offsetParent;
while (parentEl15!=null){
totaloffset15=(offsettype15=="left")? totaloffset15+parentEl15.offsetLeft : totaloffset15+parentEl15.offsetTop;
parentEl15=parentEl15.offsetParent;
}
return totaloffset15;
}

function showhide15(obj, e, visible, hidden, menuwidth15){
if (ie4_15||ns6_15)
dropmenuobj15.style.left=dropmenuobj15.style.top=-500
if (menuwidth15>=0){
dropmenuobj15.widthobj=dropmenuobj15.style
dropmenuobj15.widthobj.width=menuwidth15
}
if (menuwidth15<0){
dropmenuobj15.widthobj=dropmenuobj15.style
dropmenuobj15.widthobj.width=-0.8*menuwidth15
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover"){
obj.visibility=visible
unhideIframe15()
} 
else if (e.type=="click"){
setTimeout("hideIframe15();",0);
obj.visibility=hidden
}
}

function iecompattest15(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge15(obj, whichedge15){
var edgeoffset15=0
if (whichedge15=="rightedge"){
var windowedge15=ie4_15 && !window.opera? iecompattest15().scrollLeft+iecompattest15().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj15.contentmeasure=dropmenuobj15.offsetWidth
if (windowedge15-dropmenuobj15.x < dropmenuobj15.contentmeasure)
edgeoffset15=dropmenuobj15.contentmeasure-obj.offsetWidth
}
else{
var topedge15=ie4_15 && !window.opera? iecompattest15().scrollTop : window.pageYOffset
var windowedge15=ie4_15 && !window.opera? iecompattest15().scrollTop+iecompattest15().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj15.contentmeasure=dropmenuobj15.offsetHeight
if (windowedge15-dropmenuobj15.y < dropmenuobj15.contentmeasure){ //move up?
//edgeoffset15=dropmenuobj15.contentmeasure+obj.offsetHeight
edgeoffset15=dropmenuobj15.contentmeasure-23 //gère la hauteur d'affichage du menu déroulant
if ((dropmenuobj15.y-topedge15)<dropmenuobj15.contentmeasure) //up no good either?
edgeoffset15=dropmenuobj15.y+obj.offsetHeight-topedge15
}
}
return edgeoffset15
}

function populatemenu15(what){
if (ie4_15||ns6_15)
dropmenuobj15.innerHTML=what.join("")
}


function dropdownmenu15(obj, e, menucontents, menuwidth15){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu15()

dropmenuobj15=document.getElementById? document.getElementById("dropmenudiv15") : dropmenudiv15
populatemenu15(menucontents)

if (ie4_15||ns6_15){
showhide15(dropmenuobj15.style, e, "visible", "hidden", menuwidth15)
dropmenuobj15.x=getposOffset15(obj, "left")
dropmenuobj15.y=getposOffset15(obj, "top")
dropmenuobj15.style.left=dropmenuobj15.x-clearbrowseredge15(obj, "rightedge")+"px"
dropmenuobj15.style.top=dropmenuobj15.y-clearbrowseredge15(obj, "bottomedge")+obj.offsetHeight+"px"
unhideIframe15()
}

return clickreturnvalue15()
}

function clickreturnvalue15(){
if (ie4_15||ns6_15) return false
else return true
}

function contains_ns6_15(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide15(e){
if (ie4_15&&!dropmenuobj15.contains(e.toElement))
delayhidemenu15()
else if (ns6_15&&e.currentTarget!= e.relatedTarget&& !contains_ns6_15(e.currentTarget, e.relatedTarget))
delayhidemenu15()
}

function hidemenu15(e){
if (typeof dropmenuobj15!="undefined"){
if (ie4_15||ns6_15)
dropmenuobj15.style.visibility="hidden"
hideIframe15()
}
}

function delayhidemenu15(){
if (ie4_15||ns6_15)
delayhide15=setTimeout("hidemenu15()",disappeardelay15)
}

function clearhidemenu15(){
if (typeof delayhide15!="undefined")
clearTimeout(delayhide15)
}

if (hidemenu_onclick15=="yes")
document.onclick=hidemenu15

// Hide IFrame
function hideIframe15() {
if (ie5_5_15){
var theIframe15 = document.getElementById("dropmenuiframe15")
theIframe15.style.display = "none";
}
}

// Unhide IFrame
function unhideIframe15() {
if (ie5_5_15){
var theIframe15 = document.getElementById("dropmenuiframe15")
var theDiv15 = document.getElementById("dropmenudiv15");
theIframe15.style.width = theDiv15.offsetWidth+'px';
theIframe15.style.height = theDiv15.offsetHeight+'px';
theIframe15.style.top = theDiv15.offsetTop+'px';
theIframe15.style.left = theDiv15.offsetLeft+'px';
theIframe15.style.display = "block";
}
}