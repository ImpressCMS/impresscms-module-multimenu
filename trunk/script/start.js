function addToStart(fnc){
  if(!window.listStart) window.listStart = new Array();
  window.listStart.push(fnc)
}

function start(){
  var ls = window.listStart;
  if(ls){
    for(i=0; i<ls.length; i++){
      ls[i]();
    }
  }
}

window.onload = start;