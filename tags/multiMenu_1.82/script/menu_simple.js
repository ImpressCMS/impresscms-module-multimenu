/* * * *
 *
 *   Menu dynamique multi-niveaux
 *   Version 2.1
 *   Par Raphael Wils
 *   Email : info@r-wils.com
 *   web site : www.r-wils.com
 *
 * * * */

//--parametres --------------
var tab = 10;             // tabindex du premier élément <a>
var id_menu = "menu";      // id du menu
var horloge_auto = true;   // true : avec temporisation ; false : pas de temporisation
var horloge_duree = 2000;  // durée de la temporisation en millisecondes
//---------------------------

var nav = navigator.userAgent;
var ie5mac = nav.indexOf("Opera")==-1 && nav.indexOf("MSIE 5")>-1 && nav.indexOf("Mac")>-1;
var w3cdom = document.getElementById && document.getElementsByTagName && document.createElement;

if (w3cdom && !ie5mac)
{
	var menu, liste_ul, horloge;
	addevent(window,'load',chargerMenu,false);
}

function chargerMenu(){
	menu = document.getElementById(id_menu);
	liste_ul = menu.getElementsByTagName('ul');
	liste_a = menu.getElementsByTagName('a');
	menu.className = 'jav';
	var s = document.createElement('span');
	for(i=0;i<liste_a.length;i++)
	{
		// ajout d'un span à l'interieur de chaque <a>
		a = liste_a[i];
		sBis = s.cloneNode(true);
		aBis = a.cloneNode(false);
		f = a.childNodes;
		for(j=0;j<f.length;j++)
		{
			x = f[j].cloneNode(true);
			sBis.appendChild(x);
		}
		aBis.appendChild(sBis);
		a.parentNode.replaceChild(aBis,a);
		// evenements
		a = liste_a[i];
		a.tabIndex = tab++;
		a.num = i;
		span = a.firstChild;
		addevent(span,'mouseover',afficheSousMenu,false);
		if(horloge_auto)
			addevent(span,'mouseout',tempo,false);
		addevent(a,'focus',afficheSousMenu,false);
		if(a.parentNode.getElementsByTagName('ul')[0])
			a.className = 'fleche';
	}
	//reinitialisation lorsque le dernier lien perd le focus
	la = document.getElementsByTagName('a');
	if(la[0]!=liste_a[0])
		addevent(la[0],'focus',effacetout,false);
	//reinitialisation au click de la souris sur le corps de page
	addevent(document.body,'click',effacetout,false);
	//la préparation du menu est finie, on l'affiche
	menu.style.display = "block";
}

function tempo(){
	horloge = setTimeout('effacetout()', horloge_duree);
}

function effacetout(){
	for (j=0;j<liste_ul.length;j++)
		if (liste_ul[j].parentNode == menu)
			effacemenu(liste_ul[j]);
}

function effacemenu(ulParent){
	li = ulParent.getElementsByTagName('li');
	for (i=0;i<li.length;i++)
	{
		ul = li[i].getElementsByTagName('ul')[0]; 
		if (ul && ul.style.visibility=='visible')
		{
			li[i].getElementsByTagName('a')[0].className = 'fleche';
			ul.style.visibility = "hidden";
			ul.style.marginTop = "-" + borderTopWidth(ul);
		}
	}
}

function afficheSousMenu(e){
	//Trouver la cible de l'evenement - 4 juillet 2005
	//Credit : www.quirkmode.org/js/events_properties.html
	var targ;
	if (!e) var e = window.event;
	if (e.target) targ = e.target;
	else if (e.srcElement) targ = e.srcElement;
	if (targ.nodeType == 3) // Bug Safari
		targ = targ.parentNode;
	//--------
	a=(targ.nodeName.toLowerCase()=='span'?targ.parentNode:targ);
	liParent = a.parentNode;
	ulParent = liParent.parentNode;
	ulEnfant = liParent.getElementsByTagName('ul')[0];
	if (horloge_auto) clearTimeout(horloge);
	//effacement
	if (ulParent.parentNode == menu)
		effacetout();
	else
		effacemenu(ulParent);
	//affichage
	if (ulEnfant) 
	{
		ulEnfant.style.visibility = 'visible';
		a.className = "flecheActive";
		//positionnement par rapport au bas de l'écran
		h = ulEnfant.offsetHeight;       //hauteur du sous menu
		y = findPosY(ulEnfant);          //coordonnée verticale du sous menu
		basPage =windowH() + scrollY(); //bas de l'écran par rapport au haut du document
		if( (h+y) > basPage)
		{
			// si le menu sort de l'écran il est décalagé vers le haut avec une marge négative
			bordE = parseFloat (borderTopWidth(ulEnfant));
			bordP = parseFloat (borderTopWidth(ulParent));
			margeSup = basPage - (isNaN(bordE)?0:bordE) - (isNaN(bordP)?0:bordP) -  (h + y);
			ulEnfant.style.marginTop = margeSup +'px';
		}
	}
}

/* gestionnaire d'evenement */
function addevent(obj,evt,fn,capt){
	if(obj.addEventListener)
	{
		obj.addEventListener(evt, fn, capt);
		return true;
	}
	else if(obj.attachEvent)
	{
		obj.attachEvent('on'+evt, fn);
		return true;
	}
	else return false;
}
/* position d'un objet */
function findPosY(obj){
	var curtop = 0;
	if (obj.offsetParent)
	{
		while (obj.offsetParent)
		{
			curtop += obj.offsetTop;
			obj = obj.offsetParent;
		}
	}
	else if (obj.y)
		curtop += obj.y;
	return curtop;
}
/* hauteur de la fenetre */
function windowH(){
 	if (self.innerHeight)
		return self.innerHeight;
	else if (document.documentElement)
		return document.documentElement.clientHeight;
	else if (document.body)
		return document.body.clientHeight;
	else return 0;
}
/* hauteur du scroll vertical */
function scrollY(){
 	if (self.pageYOffset)
		return self.pageYOffset;
	else if (document.documentElement)
		return document.documentElement.scrollTop;
	else if (document.body)
		return document.body.scrollTop;
	else return 0;
}
/* border-top-width d'un élément */
function borderTopWidth(obj){
	if (obj.currentStyle)
		return obj.currentStyle['borderTopWidth'];
	else if (document.defaultView.getComputedStyle)
	{
		var compStyle = document.defaultView.getComputedStyle(obj, "");
		return compStyle.getPropertyValue('border-top-width');
	}
	else return 0;
}