
/***********************************************
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/
///// No further editting needed

var ie4b=document.all
var ns6b=document.getElementById&&!document.all

if (ie4b||ns6b)
document.write('<div id="dropmenudiv02b" style="visibility:hidden;width:'+menuwidthb+';background-color:'+menubgcolorb+'" onMouseover="clearhidemenub()" onMouseout="dynamichideb(event)"></div>')

function getposOffsetb(what, offsettypeb){
var totaloffsetb=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentElb=what.offsetParent;
while (parentElb!=null){
totaloffsetb=(offsettype=="left")? totaloffsetb+parentElb.offsetLeft : totaloffsetb+parentElbb.offsetTop;
parentElb=parentElb.offsetParent;
}
return totaloffsetb;
}


function showhideb(objb, eb, visibleb, hiddenb, menuwidthb){
if (ie4b||ns6b)
dropmenuobjb.style.left=dropmenuobjb.style.top=-500
if (menuwidthb!=""){
dropmenuobjb.widthobj=dropmenuobjb.style
dropmenuobjb.widthobj.width=menuwidthb
}
if (eb.type=="click" && objb.visibility==hidden || eb.type=="mouseover")
objb.visibility=visible
else if (eb.type=="click")
objb.visibility=hidden
}

function iecompattestb(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredgeb(objb, whichedgeb){
var edgeoffsetb=0
if (whichedgeb=="rightedge"){
var windowedgeb=ie4b && !window.opera? iecompattestb().scrollLeft+iecompattestb().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobjb.contentmeasure=dropmenuobjb.offsetWidth
if (windowedgeb-dropmenuobjb.x < dropmenuobjb.contentmeasure)
edgeoffsetb=dropmenuobjb.contentmeasure-obj.offsetWidth
}
else{
var topedgeb=ie4b && !window.opera? iecompattestb().scrollTop : window.pageYOffset
var windowedgeb=ie4b && !window.opera? iecompattestb().scrollTop+iecompattestb().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobjb.contentmeasure=dropmenuobjb.offsetHeight
if (windowedgeb-dropmenuobjb.y < dropmenuobjb.contentmeasure){ //move up?
edgeoffsetb=dropmenuobjb.contentmeasure+objb.offsetHeight
if ((dropmenuobjb.y-topedge)<dropmenuobjb.contentmeasure) //up no good either?
edgeoffsetb=dropmenuobjb.y+objb.offsetHeight-topedge
}
}
return edgeoffsetb
}

function populatemenub(what){
if (ie4b||ns6b)
dropmenuobjb.innerHTML=what.join("")
}


function dropdownmenu02b(objb, eb, menucontentsb, menuwidthb){
if (window.event) event.cancelBubble=true
else if (eb.stopPropagation) eb.stopPropagation()
clearhidemenub()
dropmenuobjb=document.getElementById? document.getElementById("dropmenudiv02b") : dropmenudiv02b
populatemenub(menucontentsb)

if (ie4b||ns6b){
showhideb(dropmenuobjb.style, eb, "visible", "hidden", menuwidthb)
dropmenuobjb.x=getposOffset(objb, "left")
dropmenuobjb.y=getposOffset(objb, "top")
dropmenuobjb.style.left=dropmenuobjb.x-clearbrowseredgeb(objb, "rightedge")+"px"
dropmenuobjb.style.top=dropmenuobjb.y-clearbrowseredgeb(objb, "bottomedge")+objb.offsetHeight+"px"
}

return clickreturnvalue02b()
}

function clickreturnvalue02b(){
if (ie4b||ns6b) return false
else return true
}

function contains_ns6b(ab, bb) {
while (bb.parentNode)
if ((bb = bb.parentNode) == ab)
return true;
return false;
}

function dynamichideb(eb){
if (ie4b&&!dropmenuobjb.contains(eb.toElement))
delayhidemenu02b()
else if (ns6b&&eb.currentTarget!= eb.relatedTarget&& !contains_ns6(eb.currentTarget, eb.relatedTarget))
delayhidemenu02b()
}

function hidemenub(eb){
if (typeof dropmenuobjb!="undefined"){
if (ie4b||ns6b)
dropmenuobjb.style.visibility="hidden"
}
}

function delayhidemenu02b(){
if (ie4b||ns6b)
delayhideb=setTimeout("hidemenub()",disappeardelayb)
}

function clearhidemenub(){
if (typeof delayhideb!="undefined")
clearTimeout(delayhideb)
}

if (hidemenu_onclickb=="yes")
document.onclick=hidemenub

