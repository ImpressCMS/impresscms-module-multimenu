<?php
//  ------------------------------------------------------------------------- //
//                XOOPS - PHP Content Management System				//
//                    Copyright (c) 2004 XOOPS.org					//
//                       <http://www.xoops.org/>					//
//													//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)			//
//                                 	- herve (www.herve-thouzard.com)		//
//                  multiMenu v1.8								//
//  ------------------------------------------------------------------------	//


define("_AD_MULTIMENU_ADMIN", 	"Administration : ");
define("_AD_MULTIMENU_EDITIMENU", 	"Editer");
define("_AD_MULTIMENU_NEWIMENU", 	"Nouveau Lien");
define("_AD_MULTIMENU_NEW",		"Nouveau Lien");
define("_AD_MULTIMENU_TITLE",		"Titre");
define("_AD_MULTIMENU_STATUS",	"Etat");
define("_AD_MULTIMENU_ONLINE",	"Activé");
define("_AD_MULTIMENU_OFFLINE",	"Désactivé");
define("_AD_MULTIMENU_SUBMENU",	"Type");
define("_AD_MULTIMENU_SUBMENUEXP",	"");
define("_AD_MULTIMENU_SUBYES",	"Oui");
define("_AD_MULTIMENU_SUBNO",		"Non");
define("_AD_MULTIMENU_MAINLINK",	"Lien standard");
define("_AD_MULTIMENU_SUBLINK",	"Lien secondaire relatif");
define("_AD_MULTIMENU_PERMSUBLINK",	"Lien secondaire permanent");
define("_AD_MULTIMENU_NOTE",		"Note");
define("_AD_MULTIMENU_TARGET",	"Cible");
define("_AD_MULTIMENU_GROUPS",	"Groupes");
define("_AD_MULTIMENU_LINK",		"Lien <font color='red'>*</font>");
define("_AD_MULTIMENU_OPERATION",	"Fonction");
define("_AD_MULTIMENU_UP",		"Monter");
define("_AD_MULTIMENU_DOWN",		"Descendre");
define("_AD_MULTIMENU_TARG_SELF",	"self");
define("_AD_MULTIMENU_TARG_BLANK",	"blank");
define("_AD_MULTIMENU_TARG_PARENT",	"parent");
define("_AD_MULTIMENU_TARG_TOP",	"top");
define("_AD_MULTIMENU_SUREDELETE",	"Etes-vous certain de vouloir supprimer ce lien ?");
define("_AD_MULTIMENU_UPDATED",	"Base de donnée mise à Jour !");
define("_AD_MULTIMENU_NOTUPDATED",	"Impossible de mettre la Base de donné à jour !");
define("_AD_MULTIMENU_SUBMIT", 	"Proposer");
define("_AD_MULTIMENU_IMAGE", 	"Image <font color='red'>*</font>");
define("_AD_MULTIMENU_CATEGORY",	"Categorie");
define("_AD_MULTIMENU_NOTES",		"<font color='red'>*</font> multiMenu supporte les url absolues et relatives.<br /><br />

<b><u>Exemples</u> :</b><br /><br />
<u>URL absolue</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>URL relative</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>Pour que les liens relatifs puissent fonctionner,<br />il est nécessaire de toujours ajouter un ' / ' (slash)<br />à la fin des liens pointants vers un répertoire !</td><tr></table><br />
<br />
Vous pouvez utiliser les tags suivant dans l'url de l'image :<ul>
<li>{theme} ce qui affichera le nom du thème courant.</li><br />
Par exemple  : http://www.monsite.com/themes/{theme}/test.gif<br />
Nous donnerait en lien d'image : http://www.monsite.com/themes/default/test.gif<br /><br />
<li>{module} ce qui affichera le module courant.</li><br />
Par exemple  : http://www.monsite.com/modules/{module}/images/test.gif<br />
Nous donnerait en lien d'image : http://www.monsite.com/module/multiMenu/images/test.gif<br /><br />
</ul><p />
Vous pouvez utiliser les tags suivants dans le titre :
<li>{pm_new} ce qui affichera le nombre de message(s) privé(s) non lu(s).</li></ul>
<li>{pm_readed} ce qui affichera le nombre de message(s) privé(s) lu(s).</li></ul>
<li>{pm_total} ce qui affichera le nombre de message(s) privé(s) au total.</li></ul>
<br />
Un exemple pour le titre : Vous avez {pm_new} nouveaux PM.<br />
Et on peut indiquer le lien vers la boîte de messagerie privée.<br>
<br />
<li>{alt} ce qui affichera une description personnalisée pour les attributs alt et title.</li></ul><br>
Un exemple pour le Titre : Discussions{alt}Accès aux forums<br />
Tout le texte se trouvant après la balise {alt}, sera utilisé pour renseigner les attributs alt et title.<br />
Si vous n'utilisez pas cette balise, ces attributs utiliseront simplement le libellé du Titre.<br/>
Et si vous notez cette balise, sans mettre de texte après, les balises title et alt resteront vides.<br /><br />
Vous pouvez utiliser le tag suivant dans le titre et les liens:<br /><br />
<li>{user_id} permet de récupérer l'id du membre connecté, et de l'utiliser dans des liens ou des titres.</li></ul><br>
Exemple : pour créer un lien vers le compte du membre connecté : userinfo.php?uid={user_id}<br />
<br />
");

define("_AD_MULTIMENU_PREFERENCES", "Préférences");
define("_AD_MULTIMENU_HELP",		"Aide");
define("_AD_MULTIMENU_GOING",		"Quand multiMenu devient dynamique");

define("_AD_MULTIMENU_BLOCK_LINK",	"Liste des blocs visibles");

define("_AD_MULTIMENU_GUIDET_GENERAL",	"Général");
define("_AD_MULTIMENU_GUIDET_PREF",		"Préférences");
define("_AD_MULTIMENU_GUIDET_INDEX",	"Index");
define("_AD_MULTIMENU_GUIDET_BLOCKS",	"Blocs");
define("_AD_MULTIMENU_GUIDET_MENU",		"Tableau des options");
define("_AD_MULTIMENU_GUIDET_TEMPLATE", "Créer un template personnalisé");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>Comment utiliser multiMenu ?</font>
</strong></p><br />
<br />
<strong><u>GENERAL</u>
</strong>
<br />multiMenu est un gestionnaire de liens multifonction. Il a été créé pour gérer simplement l'affichage des liens et menus sur un site Xoops. L'ajout de liens se fait par les webmasters depuis l'administration du module. Ce module inclut une interface Sitemap, ce qui permet au webmaster/visiteur d'avoir un aperçu de la navigation sur le site.
<br />
<br />
<strong><u>POSSIBILITES</u>
</strong>
<br />L'objectif principal de ce module est de permettre aux webmasters qui n'en ont pas l'habitude, de gérer facilement leurs propres menus. Les possibilités de paramétrage de ce module font partie de ses nombreux atouts. Ce qui inclut une gestion des blocs très flexible, qui permet toutes sortes d'affichage comme nous le verrons plus tard dans ce guide.
<br />
<br /><strong><u>CREDITS</u></strong>
<br />En remerciements pour le travail réalisé, les crédits vont à quelques xoopsers déjà bien connnus : Herv&eacute;, Marcan et Solo pour leur aide et collaboration à ce projet.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>Comment utiliser multiMenu ?</font></strong>
</p>
<br /><strong><u>ADMINISTRATION<br /></u></strong>
<br /><strong><u>Préférences (ou paramètres généraux du module)</u>
</strong>
<br /><br />Avant d'utiliser multiMenu, nous vous suggérons de regarder de plus près la page de paramètrage du module. C'est l'endroit où vous définirez les paramètres personnels et fonctionnels du module. Ces paramètres ont un impact direct sur la page d'index (mais pas sur les paramètres des blocs).
<br />
<br />
<br /><strong><em>~Afficher la page principale : <br /></em></strong>
Ici, vous pouvez activer ou non l'option 'Sitemap' du module. Si vous la désactivez, vous pouvez éventuellement l'utiliser comme faux module pour afficher les blocs que vous voulez, ou l'utiliser comme seconde page d'accueil. Gardez à l'esprit que ceci désactive seulement la page d'accueil principale de Sitemap, mais pas l'accès au détail de chaque menu.
<br />
<br />
<strong><em>~Texte d'introduction : <br /></em></strong>
Indiquez ici le texte que vous voulez voir apparaître en haut de la page principale. Ce texte accepte les codes Xoops et le code HTML. Laissez vide pour ne pas faire apparaitre de texte.
<br />
<br />
<strong><em>~Afficher la bannière :</em></strong>
Vous avez la possibilité d'afficher ou non, un logo ou le nom du menu en haut de la page. Si vous voulez changer le logo, modifiez le fichier '/module/multiMenu/images/logo.gif'.
<br />
<br />
<strong><em>~Afficher dans l'index (de 1 à 8):</em></strong>
Choisissez les blocs de multiMenu que vous voulez afficher sur la page d'index. 
<br />
<br />
<strong><em>~Titre de Menu (de 1 à 8): <br /></em></strong>
Définit les titres des menus sur la page d'index et dans l'admin de multiMenu. Attention, ceci n'affecte pas les titres des blocs correspondants !
<br />
<br />
<strong><em>~Afficher le menu de navigation :</em></strong>
 <br />Une barre de navigation avec la liste des menus apparaîtra en haut de chacune des pages. Si vous ne voulez pas de cette fonctionnalité, vous pouvez la désactiver ici.
<br />
<br /><strong><em>~Largeur de l'image par défaut :</em>
</strong>
<br />Limite la largeur maximale d'affichage pour les images sur les pages d'index. Cela redimensionnera seulement les images plus larges que cette valeur (ainsi il n'y aura pas d'effet d'étirement).
<br />
<br />
<br /><strong><em>~Afficher les icônes :</em></strong>
<br />Cette fonction permet d'afficher des icônes devant chaque lien. Il y a actuellement 4 types de liens :<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Lien principal absolu</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Lien secondaire absolu</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Lien principal relatif</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Lien secondaire relatif</li>
</ul>
<br />
<br />
");
define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>Comment utiliser multiMenu ?</font></strong></p>
<br /><strong><u>ADMINISTRATION<br /></u></strong><br />
<strong><u>Index de l'Administration</u></strong>
<br />
<br />
Il y a 2 parties différentes ici : Une barre de navigation dynamique et le menu édité en cours.
<br />
<br />
<strong>La barre de navigation consiste en :</strong>
<ul><li> Page principale d'index de multiMenu</li>
<li>Préférences</li>
<li> Aide</li>
<li> Liens d'Administration</li>
<li> multiMenu (classés de 1 à 8)</li></ul><br />
Note : il y a un code couleur qui indique si le bloc menu édité est affiché ou pas sur la page d'index (Sitemap).<br />
<br />
Vous pouvez naviguer sur tout le module et ses options grâce à cette barre de navigation.
<br />
<br />
<strong><u>Page d'index de multiMenu</u></strong><br />
<br />
Affiche tous les liens de vos blocs menu. <br />
Sur la page principale, vous pouvez voir quelques informations intéressantes concernant vos liens :<br />
<ul>
<li>Image : affiche une miniature de l'image utilisée.</li>
<li>Titre</li>
<li>Lien</li>
<li>Etat : Vert pour 'en ligne', rouge pour 'hors-ligne'.</li>
<li>Type</li>
<li>Fonctions : fonctions d'administration principales : éditer, supprimer, déplacer vers le haut ou le bas.</li>
</ul>
Les liens sont affichés dans l'ordre visible à l'écran. Cet ordre peut-être modifié en cliquant sur les flèches vertes (haut et bas).
<br />
<br />
Cliquer sur 'Nouveau lien' pour créer une nouvelle entrée. 
<br />
<br />
<strong><u>Nouveau lien</u></strong><br />
<br />
multiMenu est conçu pour créer facilement des menus composés de liens. Vous avez juste à remplir le formulaire pour créer un nouveau lien.<br />
Vous pouvez choisir d'afficher une image, avec ou sans lien, dans différents formats d'affichage.<br />
<br />
<strong><em>~Titre :</em></strong> est le titre du lien. Vous pouvez utiliser du code HTML (pour colorer votre lien par exemple) ou des smileys. Il vaut mieux éviter d'utiliser du BBCode.<br />
<br />
<strong><em>~Lien :</em></strong> est l'url sur laquelle vous voulez que pointe votre lien. Laissez vide si vous ne voulez pas un lien cliquable (juste pour informer par exemple). L'url peut être absolue ou relative. En cas d'adresse relative, multiMenu ajoutera automatiquement le chemin du site courant, ainsi, peut importe où votre bloc apparaîtra sur votre site, l'url aura le bon chemin.<br />
<br />
<strong><em>~Image :</em></strong> est l'image de l'adresse du lien courant. Même chose que pour les liens concernant l'adresse relative ou absolue. Si l'image n'est pas disponible, multiMenu affichera une image par défaut (une patte rouge).<br />
Vous avez la possibilité d'utiliser 2 tags différents <strong>{module}</strong> <strong>{theme}</strong>, affichant respectivement le module ou le thème utilisé sur la page en cours. Ces options  permettent d'afficher des logos spécifiques selon le module ou le thème, sur lequel l'utilisateur se trouve.<br />
<br />
<strong><em>~Etat :</em></strong> définit si votre lien doit être affiché ou non.<br />
<br />
<strong><em>~Type :</em></strong> définit le type de lien que vous voulez appliquer à votre lien. Il y a 5 type de liens différents :<br />
<ul>
<li><strong>Catégorie :</strong> affiche le lien comme une catégorie.</li>
<li><strong>Lien standard :</strong> lien principal standard.</li>
<li><strong>Lien secondaire permanent :</strong> lien secondaire qui s'affichera en permanence.</li>
<li><strong>Lien secondaire relatif :</strong>lien secondaire qui s'affichera de manière dynamique, en fonction de son lien parent. Notez que pour faire fonctionner les liens dynamiques, il est nécessaire de toujours ajouter '/' à la fin du lien principal pointant sur un répertoire !
</li>
<li><strong>Note :</strong> affiche le lien comme un commentaire.</li>
</ul><br />
<strong><em>~Cible :</em></strong> 4 classiques types de cible.</li><br />
<br />
<strong><em>~Groupes :</em></strong> indique quel groupe peut (ou ne peut pas) voir le lien courant.</li></ul>
");

define("_AD_MULTIMENU_GUIDE_BLOCKS",	"
<p align='center'><strong><font size='5'>Comment utiliser multiMenu ?</font></strong></p><br />
<br />
<strong><u>Blocs multiMenu</u></strong><br />
<br />
Une des fonctionnalités la plus importante de multiMenu sont ses blocs. Comme vu précédement, vous avez pour chaque menu un bloc correspondant (classé de 1 à 7 + celui d'administration), plus 2 autres blocs personnalisés (A et B). Pour chaque bloc, vous avez un large choix d'utilisation, d'affichage et d'options.<br /><br />Lorsque vous éditez un bloc multiMenu, vous trouvez des paramètres, classés en 6 catégories.<br />
<br />
<strong>1) Format de Bloc</strong><br />
<br />
<strong><em>~Format:</em></strong><br />
Vous pouvez afficher les liens sous 20 formes différentes :<br />
- Menu Standard (comme le Menu Principal)<br />
- Switch Vertical (un clic gauche déroule les menus secondaires)<br />
- Déroulant vertical (menu dynamique vertical - les menus se déroulent vers la gauche ou la droite)<br />
- Déroulant vertical 2 (autre type de menu vertical - même fonctions que le vertical)<br />
- Déroulant vertical CSS (pur CSS)<br />
- Déroulant horizontal (menu dynamique horizontal - les menus se déroulent vers le bas)<br />
- Déroulant horizontal CSS (menu dynamique horizontal en pur CSS- les menus se déroulent vers le bas)<br />
- Liens horizontaux<br />
- Contextuel<br />
- Contextuel2 : gère les liens secondaires (permanents et relatifs)<br />
- Menu avec arborescence (arbre, type explorateur windows)<br />
- Image fixe<br />
- Image défilante (défilement sans pause)<br />
- Image diaporama (défilement avec pause)<br />
- Liste à puces<br />
- Liste à chiffre (à condition que la feuille de style soit bien configurée : balise ol)<br />
- Liste défilante (défilement sans pause)<br />
- Liste diapo (défilement avec pause à la fin)<br />
- Liste déroulante<br />
- Boîte de sélection<br />
<br />
<strong><em>~Nombre de colonnes :</em></strong><br />
Définit sur quel nombre de colonnes les liens doivent être affichés. Cette option est valable seulement pour les menus standards et ceux avec une image non défilante.<br />
<br />
<strong>2) Liens</strong><br />
<br />
<strong><em>~Type de liens à afficher :</em></strong><br />
Définit le type de liens à afficher parmi tous les types de liens. <br />
<strong><em>~Trié par :</em></strong><br />
Ordre dans lequel vous voulez afficher les liens : par poids (définit dans l'admin) ou par ordre alphabétique (descendant ou ascendant).<br />
<br />
<strong>3) Titres</strong><br />
<br />
<strong><em>~Afficher le titre :</em></strong><br />
Voulez-vous afficher le titre du lien. Cette option doit être utilisée uniquement avec les liens qui ont une image d'illustration !<br />
<strong><em>~Longeur max. :</em></strong><br />
Longueur maximale du titre ? Définissez la valeur maximale ici.<br />
<br />
<strong>4) Image</strong><br />
<br />
<strong><em>~Afficher l'image :</em></strong><br />
Voulez-vous afficher l'image ?.<br />
<strong><em>~Largeur max. :</em></strong><br />
Définit la largeur maximale de l'image afin de garder un aspect uniforme de vos illustrations et menus. Si l'image est plus petite, elle ne sera pas redimensionnée pour éviter un effet de pixellisation.<br />
<br />
<strong>5) Paramètres de défilement</strong><br />
<br />Ces options s'appliquent seulement si vous choisissez le format 'Images défilantes'.<br />
<strong><em>~Hauteur et largeur de bloc :</em></strong><br />
Définit la taille générale du bloc. Vérifiez la l'option de largeur d'image pour affiner le réglage.<br />
<strong><em>~Vitesse :</em><br /></strong>
Définit la vitesse générale de défilement de vos lien et images. <br />
<br />
<strong>6) Liens aléatoires</strong><br />
<br />
<strong><em>~Liens aléatoires :</em></strong></strong><br />
multiMenu vous donne la possibilité  d'afficher une sélection de liens aléatoires. Définit ici si vous le voulez ou non. Bien entendu, cette option doit être utilisée avec précaution si vous utilisez différents types de liens (catégorie, liens principal, lien secondaire et note) et fonctionne mieux avec un seul type de lien.<br />
<strong><em>~Nombre de liens aléatoires à afficher :</em></strong><br />
Cette option définit le nombre de lien aléatoire à afficher. Gardez à l'esprit que cela affichera X liens après le premier lien aléatoire choisi. <br /><br />

<b>Concernant les blocs personnalisés A et B :</b><br />
Ce sont des blocs complémentaires, non liés à un menu en particulier.<br />
Dans les préférences du blocs, ont peu lui affecter tel ou tel menu déjà créé.<br />
L'intérêt ? Vous pouvez par exemple afficher un même menu, sous 2 formes différentes. (un sous forme de menu dynamique, et l'autre sous forme de menu déroulant par exemple).<br />
Vous pouvez afficher les 2 menus sur la même page, ou répartir ces 2 mêmes menus (mais blocs différents), à divers endroits du site.<br /><br />

<b>Intégration de menus directement dans le thème :</b><br />
Exemple avec le menu horizontal dynamique, en 3 étapes :<br /><br />
<b>1)</b> Activer le bloc du menu voulu, au format dynamique horizontal<br />
Dans les préférences mettre comme titre de bloc : 'navbar' et le positionner en colonne de gauche.<br /><br />
<b>2)</b> Editer le fichier theme.html (ou theme.php), et positionner le code suivant à l'emplacement où l'on veut afficher le menu :<br /><br />

<textarea rows='5'>
<{foreach item=block from=&#36;xoops_lblocks}>
  <{if &#36;block.title == 'navbar'}>
    <{&#36;block.content}>
  <{/if}>
<{/foreach}>
</textarea>
<br /><br />

<b>3)</b> Ensuite, repérer le code smarty utilisé pour générer les blocs de gauche et changer comme suit :
<br /><br />
Avant :
<br /><br />
<textarea rows='3'>
<{foreach item=block from=&#36;xoops_lblocks}>
   <{include file='default/theme_blockleft.html'}>
<{/foreach}>
</textarea>
<br /><br />

Après :
<br /><br />
<textarea rows='5'>
<{foreach item=block from=&#36;xoops_lblocks}>
  <{if &#36;block.title != 'navbar'}>
   <{include file=='default/theme_blockleft.html'}>
  <{/if}>
<{/foreach}>
</textarea>
<br /><br />
<i>Noter les infos suivantes.</i>
<br /><br />
- 'navbar' est le nom du bloc menu qui doit s'afficher ou non.
<br /><br />
- Le premier code affiche le ou les blocs de gauche ayant pour titre 'navbar'.
<br /><br />
- Le deuxième code affiche tous les blocs, sauf celui (ou ceux) ayant pour titre 'navbar'.
<br />
<br /><br />

<b>Afficher le contenu d'un menu sans le titre du bloc</b><br />

Pour certains menus, et pour une meilleur ergonomie, vous pouvez souhaiter afficher seulement le contenu du menu, sur la gauche, la droite ou le centre de votre site, tout en cachant le titre du bloc.<br />
Le code se rapproche beaucoup de celui vu précédement, pour l'intégration d'un menu dans votre thème.<br />
Par exemple, j'ai un menu situé dans la colonne de gauche, qui se nomme <b>Tree</b>.<br />
J'édite donc mon thème, et je cherche la séquence qui affiche les blocs de gauche.<br />
Je trouve le code suivant :<br /><br />

<textarea rows='9'>
<{foreach item=block from=&#36;xoops_lblocks}>
<table cellspacing='0' cellpadding='2'>
<tr>
<td class='blockTitle'>&nbsp;<{&#36;block.title}></td>
</tr>
<tr>
<td class='blockContent'><{&#36;block.content}></td>
</tr></table><br />
<{/foreach}>
</textarea>
<br /><br />

Et je le modifie de la façon suivante :<br /><br />

<textarea rows='11'>
<{foreach item=block from=&#36;xoops_lblocks}>
<table cellspacing='0' cellpadding='2'>
<{if &#36;block.title != 'Tree'}>
<tr>
<td class='blockTitle'>&nbsp;<{&#36;block.title}></td>
</tr>
<{/if}>
<tr>
<td class='blockContent'><{&#36;block.content}></td>
</tr></table><br />
<{/foreach}>
</textarea>
<br /><br />
Si le titre du bloc est <b>Tree</b>, alors je ne l'affiche pas.<br />
On peut procéder ainsi pour plusieurs blocs si nécessaire.<br />
Prenons <b>Tree1</b> et <b>Tree2</b>.<br>
Le test devient alors : <br /><br />
<textarea rows='1'>
<{if &#36;block.title != 'Tree1' AND &#36;block.title != 'Tree2' }>
</textarea>

<br />
<br /><br />
<b>Changer rapidement l'ordre d'affichage d'un lien  :</b><br />
Vous souhaitez ajouter un nouveau lien tout en haut de votre menu ?<br /><br />
Vous avez sans doute remarqué les flèches vertes qui permettent de faire monter et descendre les liens, mais qui ne sont pas très pratiques lorsque votre bloc contient de très nombreux liens...<br />
Voici une astuce pour positionner rapidement et facilement un lien à un endroit choisit :<br /><br />

1er clic : Ajoutez un lien<br />
2ème clic: Montez le d'un cran<br />
3ème clic : Modifiez dans l'adresse (URL), le poids weight et le tour est joué !<br /><br />

Par exemple, on change le lien :<br /><br />

<i>http://monsite.fr/modules/multiMenu/admin/index.php?op=move&id=18&weight=<b>21</b>&Menu=01<br /></i>

<br />
en<br /><br />

<i>http://monsite.fr/modules/multiMenu/admin/index.php?op=move&id=18&weight=<b>1</b>&Menu=01</i>

<br />
<br />
Et on valide. Le lien se retrouve alors en première position.<br />
La valeur de poids peut varier en fonction de l'endroit où on veut le positionner...<br />


<br /><br />Merci d'avoir choisi multiMenu, comme toujours, nous sommees heureux de recevoir vos commentaires et retours afin de continuer à améliorer la qualité et les possibilités de ce module.<br /><br />- Les auteurs");

define("_AD_MULTIMENU_GUIDE_TEMPLATE",	"
<p align='center'><strong><font size='5'>Comment créer votre template personnalisé</font>
</strong></p>
<br />Ce petit guide &agrave; pour but de vous aider &agrave; vous constituer votre propre menu personnalis&eacute;. Nous nous attacherons &agrave; d&eacute;finir les proc&eacute;dure &agrave; respecter afin de cr&eacute;er des templates de menu. Les languages que nous aborderons seront le hmtl, Smarty et autres scripts de languages dynamiques (javascript). Il n'est donc pas n&eacute;cessaire de modificer le code php.<br />
<br /><b>A. <u>Les bases</u></b>
<br />
<br />Afin de se constituer son propre template multiMenu, voici les informations minimums qu&#34;il faut conna&icirc;tre.
<br />
<br /><b>1) <u>Les variables smarty</u></b>
<br />
<br />2 types de variables sont disponibles pour cr&eacute;er vos menus. 
<br />
<br /><b>a. Les variables de pr&eacute;f&eacute;rences du bloc : &lt;{&#36;block.variable}></b>
<br />Elles d&eacute;finisent les pr&eacute;f&eacute;rences du bloc activ&eacute; :
<br />
<br />&lt;{&#36;block.format}> : Format de menu employ&eacute; (ul, ol, menu, menu_01 &agrave; 05, etc.)
<br />&lt;{&#36;block.marquee}> : Balise marquee.
<br />&lt;{&#36;block.columns}> : Nombre de liens &agrave; afficher avant d'activer le passage &agrave; une nouvelle colonne.
<br />&lt;{&#36;block.block_size}> : Largeur du bloc, surtout utile pour les script n&eacute;cessitant cette information
<br />&lt;{&#36;block.marquee_height}> : Hauteur du bloc, idem
<br />&lt;{&#36;block.marquee_delay}> : Temps de d&eacute;lai &agrave; afficher pour les balises marquee.
<br />&lt;{block.mm}> : Num&eacute;ro du menu en cours (valeur comprise entre 01 et 08). Cette valeur est utilis&eacute;e pour diff&eacute;rencier les variables utilis&eacute;es dans les scripts et &eacute;viter les confusions de valeurs lorsque plusieurs menu utilisant le m&ecirc;me script s'affichent dans une page.
<br />
<br />
<br /><b>b. Variables de contenu : &lt;{&#36;imenu.variable}></b>
<br />Ce sont les variables g&eacute;n&eacute;r&eacute;e par le modules et qui permettent de cr&eacute;er les liens.
<br />&lt;{&#36;imenu.submenu}> : type de lien. 
<br />0 = lien principal
<br />1 = lien secondaire permanents
<br />2 = lien secondaire relatif
<br />3 = note
<br />4 = cat&eacute;gorie
<br />
<br />&lt;{&#36;imenu.title}>
<b>: titre du lien (code actif)</b>
<br />
<br />&lt;{&#36;imenu.alt_title}>
<b>: titre du lien (code d&eacute;sactiv&eacute;)</b>
<br />
<br /> &lt;{&#36;imenu.target}>
<b>: balise target (_self, _blank, _parent, _child)</b>
<br /> 
<br />&lt;{&#36;imenu.link}> 
<b>: Lien constitu&eacute; (url - cible - nom de l'image). Ex : &lt;a href=&#34;http://www.monsite.com/index.php&#34; target=&#34;_self&#34; title=&#34;Mon site&#34;></b>
<br />
<br />&lt;{&#36;imenu.linkurl}>
<b>: Uniquement l'url : ex : http://www.monsite.com/index.php.</b>
<br />
<br />&lt;{&#36;imenu.a}>
<b>: En fonction si l'url existe ou non, prend la valeur : &lt;/a></b>
<br />
<br />&lt;{&#36;imenu.image}>
<b>: Image constitu&eacute;e (url - largeur - nom de l'image). Ex : &lt;img href=&#34;http://www.monsite.com/illu.gif&#34; width=&#34;160&#34; alt=&#34;Mon site&#34; /></b>
<br />
<br />
<br />
<br /><b>2) <u>Cr&eacute;er une url</u></b>
<br />
<br /><b>A. M&eacute;thode simple</b>
<br />La m&eacute;thode la plus simple est la suivante, qu'il y ait une url ou non dans le lien :
<br />
<br />&lt;{&#36;imenu.link}>
<b>// Le lien complet (contenant la cible et le titre</b>
<br />&lt;{&#36;imenu.image}>
<b>// L'image &eacute;ventuelle</b>
<br />&lt;{&#36;imenu.title}> <b>// Le texte &eacute;ventuel</b>
<br />&lt;{&#36;imenu.a}>
<b>// Le tag de fermeture &eacute;ventuel</b>
<br />
<br /><b>B. M&eacute;thode compl&egrave;te</b>
<br />La deuxi&egrave;me m&eacute;thode disponible, si l'on veut conserver l'aspect de lien, ou si on utilise par exemple des classes de feuille de style, est la suivante :
<br />
<br />&lt;a class=&#34;mainMenu&#34;
<b>// D&eacute;finition de la classe du lien</b>
<br />&lt;{if &#36;imenu.link}>href=&#34;&lt;{&#36;imenu.linkurl}>&#34; &lt;{&#36;imenu.target}>&lt;{/if}><b>// L'url contenant ou non le lien</b>
<br /> title=&#34;&lt;{&#36;imenu.alt_title}>&#34;> <b>// La balise title</b>
<br />&lt;{&#36;imenu.image}><b>// L'image &eacute;ventuelle</b>
<br />&lt;{&#36;imenu.title}>
<b>// Le texte &eacute;ventuel</b>
<br />&lt;{&#36;imenu.a}>
<b>// Le tag de fermeture &eacute;ventuel</b>
<br />
<br /><b>C. M&eacute;thode diff&eacute;renti&eacute;e</b>
<br />Enfin, la troisi&egrave;me m&eacute;thode permet d'affecter un aspect diff&eacute;rent si le lien existe ou non.
<br />
<br />&lt;{if &#36;imenu.link}>
<b>// Y a-til un lien ?</b>
<br />'>
<b>// Oui, je cr&eacute;e un lien normal</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<br />&lt;{else}>
<b>// Non, alors je lui donne un autre aspect</b>
<br />&lt;font color=&#34;red&#34;>&lt;{&#36;imenu.title}>&lt;/font>
<br />&lt;{/if}>
<br />
<br />Dans le deuxi&egrave;me cas de figure on peut lui ajouter une image qui soulignera le fait qu'il s'agit d'un lien d'information ou de transition dans le cas d'un menu dynamique.
<br />
<br />
<br /><b><u>3) Cr&eacute;er la liste des liens disponibles</u></b>
<br />
<br />Voici les codes &agrave; utiliser pour distinguer les diff&eacute;rents types de liens disponibles &agrave; int&eacute;grer :
<br />
<br />&lt;{foreach item=imenu from=&#36;block.contents}>
<b>// Cr&eacute;er la boucle pour r&eacute;cup&eacute;rer les liens</b>
<br />
<br />&lt;{if &#36;imenu.submenu == 0}>
<b>// Lien principal</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<b>// Lien secondaire relatif ou permanent</b>
<br />&lt;{elseif &#36;imenu.submenu == 1 OR &#36;imenu.submenu == 2}>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 3}>
<b>// Note d'information</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 4}>
<b>// Cat&eacute;gories</b>
<br />&lt;h3>&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/h3>
<br />&lt;{/if}>
<br />
<br />&lt;{/foreach}>
<b>// Fin de la boucle
</b>
<br />
<br />
<br />4) Cr&eacute;er un tableau &agrave; plusieurs colonnes
<br />
<br />
&lt;{counter start=0 print=false}> 
<b>// Cr&eacute;er le compteur</b>
<br />
<br />&lt;table>
<b>// Ouvrir le tableau</b>
<br />&lt;tr>
<br />&lt;td>
<br />
<br /> 
&lt;{foreach item=imenu from=&#36;block.contents}>
<b>// Cr&eacute;er la boucle pour r&eacute;cuperer les liens</b>
<br />
<br />
&lt;{if &#36;count >= &#36;block.columns_limit}> 
<b>// V&eacute;rifier si le compteur atteint la limite du nombre d'&eacute;lements</b>
<br />&lt;/td>&lt;td>
<b>// Si oui, cr&eacute;er une nouvelle colonne</b>
<br />&lt;{counter start=0 print=false}>
// Remettre le compteur &agrave; zero
<br />&lt;{/if}> 
<b>// Fin de v&eacute;rification</b>
<br />
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<b>// G&eacute;n&eacute;rer le contenu du tableau</b>
<br />
&lt;{counter assign=count print=false}>
<b>// Pour chaque lien, incr&eacute;menter le compteur de 1</b>
<br />
<br />&lt;{/foreach}>
<b>// Fin de la boucle </b>
<br />
<br />&lt;/td>
<b>// Fermer le tableau</b>
<br />&lt;tr>
<br />&lt;/table>
<br /> 
<br />
<br /><b>B. <u>Les menus complexes</u></b>
<br />
<br />La mise en forme de menu demande des mises en place complexe dans le code. Par exemple, si vous souhaitez diff&eacute;rencier le contenu en fonction qu&#34;il s&#34;agit d&#34;un lien principal, secondaire, d&#34;une cat&eacute;gorie ou d&#34;une note, voici quelques trucs et astuces.
<br />
<br />
<br /><b><u>1) Cr&eacute;er une liste &agrave; puce</u></b>
<br />
<br />Toute la difficult&eacute; r&eacute;side dans le fait de savoir quand ouvrir ou fermer les tags de liste. Pour cela, nous cr&eacute;ons une variable smarty &#34;url&#34; &agrave; laquelle on affectera une valeur 1 pour ouverte et 0 pour fermer. En v&eacute;rifiant l'&eacute;tat de cette valeur &agrave; chaque tour de boucle, on sait si on doit l'ouvrir ou la fermer, et ce pour les liens principaux ou les liens secondaires.
<br />
<br />&lt;{counter start=0 print=false}>
<br />&lt;{assign var=ul_main value=0}>
<b>// Initialiser la variable de liste &agrave; puce principale : ul_main</b>
<br />&lt;{assign var=ul_sec value=0}>
<b>// Initialiser la variable de liste &agrave; puce secondaire : ul_sec</b>
<br /> &lt;{foreach item=imenu from=&#36;block.contents}>
<br /> 
<br />&lt;{if &#36;imenu.submenu == 0}>
<b>// Lien principal</b>
<br />&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{assign var=ul_sec value=0}>&lt;{/if}>
<b>// Si la liste secondaire est ouverte, la fermer</b>
<br />&lt;{if &#36;ul_main == 0}>&lt;ul>&lt;{assign var=ul_main value=1}>&lt;{/if}> 
<b>// Si la liste principale est ferm&eacute;e, l'ouvrir</b>
<br />&lt;li>&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/li>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 1 OR &#36;imenu.submenu == 2}>
<b>// Lien secondaire</b>
<br />&lt;{if &#36;ul_sec == 0}>&lt;ul>&lt;{assign var=ul_sec value=1}>&lt;{/if}>
<b>// Si la liste secondaire est ferm&eacute;e, l'ouvrir</b>
<br />
<br />&lt;li>&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/li>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 3}>
<b>// Note</b>
<br />&lt;{if &#36;ul_main == 1}>&lt;/ul>&lt;{assign var=ul_main value=0}>&lt;{/if}>
<b>// Si la liste principale est ouverte, la fermer</b>
<br />&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{assign var=ul_sec 
value=0}>&lt;{/if}> 
<b>// Si la liste secondaire est ouverte, la fermer</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/p>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 4}>
<b>// Cat&eacute;gorie</b>
<br />&lt;{if &#36;ul_main == 1}>&lt;/ul>&lt;{assign var=ul_main value=0}>&lt;{/if}>
<b>// Si la liste principale est ouverte, la fermer</b>
<br />&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{assign var=ul_sec 
value=0}>&lt;{/if}> 
<b>// Si la liste secondaire est ouverte, la fermer</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;h3>&lt;{&#36;imenu.title}>&lt;/h3>&lt;{&#36;imenu.a}>
<br />&lt;{/if}>
<br />&lt;{/foreach}>
<br /><span style='mso-tab-count: 11'> 
<b>// Apr&egrave;s avoir fait le tour des liens existant, v&eacute;rifier ce qu'il reste &agrave; fermer</b>
<br />&lt;{if &#36;ul_main == 1}>&lt;/ul>&lt;{/if}>
<b>// Si la liste principale est ouverte, la fermer</b>
<br />
&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{/if}>
<b>// Si la liste secondaire est ouverte, la fermer</b>
<br />
<br />
<br />
<br /><b><u>2) Cr&eacute;er un menu dynamique en v&eacute;rifiant si un lien principal dispose de sous-liens</u></b>
<br />
<br />La difficult&eacute; des listes dynamiques est de pr&eacute;voir si un lien principal dispose de sous-liens, puisque multiMenu affiche les liens les uns apr&egrave;s les autres. La seule fa&ccedil;on de proc&eacute;der est de &#34;retarder&#34; l'affichage des liens en cr&eacute;ant une sorte de tampon. Les valeurs en cours s'&eacute;civent : 
&#36;imenu.submenu, les valeurs en cache s'&eacute;crivent &#36;submenu. Dans le script ci-dessous, nous avons inclu la gestion des liens sous forme de liste &agrave; puce.
<br />
<br /> &lt;{counter start=0 print=false}>
<br /> &lt;{counter assign=count print=false}>
<br />&lt;{assign var=ul value=0}>
<br />
<br />&lt;{foreach item=imenu from=&#36;block.contents}> 
<b>// Cr&eacute;er la boucle pour r&eacute;cuperer les liens</b>
<br />&lt;{if &#36;submenu == &#34;0&#34;}>
<b>// Le lien en cache est un lien principal. En m&ecirc;me temps, on v&eacute;rifie s'il existe d&eacute;j&agrave; une valeur en cache, dans le cas contraire, on passe un tour et on affiche rien (valeur &eacute;gale &#34;0&#34; et non 0).</b>
<br />&lt;{if &#36;ul == 0}>&lt;ul>&lt;{assign var=ul value=1}>&lt;{/if}> 
<br />&lt;!-- Main link -->
<br />
&lt;{if &#36;imenu.submenu == &#34;1&#34; OR &#36;imenu.submenu == &#34;2&#34;}> 
<b>// Si le lien en cours est un lien secondaire, on sait que le lien en cache doit disposer du script d'activation des liens secondaire</b>
<br />&lt;li class=&#34;multimenu&#34;>
<br />
&lt;a title=&#34;&lt;{&#36;alt_title}>&#34;
<b>// Cr&eacute;er le lien en cache avec le script, puisqu'il dispose d'au moins un lien secondaire</b>
<br />
&lt;{if &#36;linkurl}>&lt;{&#36;target}>href=&#34;&lt;{&#36;linkurl}>&#34;&lt;{else}>onClick=&#34;return clickreturnvalue03()&#34;&lt;{/if}>
<br />
onMouseover=&#34;dropdownmenu03(this, event, menu&lt;{&#36;block.mm}>&lt;{&#36;count}>, menuwidth)&#34; 
<br />onMouseout=&#34;delayhidemenu03()&#34;>
<br />
&lt;img src=&#34;&lt;{&#36;xoops_url}>/modules/multiMenu/script/images/arrow1.gif&#34; alt=&#34;&lt;{&#36;alt_title}>&#34; /> // Le lien en cours est un lien secondaire, donc on affiche une fl&egrave;che sur le lien en cache
<br />&lt;{else}>
<b>// Le lien en cours n'est pas un lien secondaire, donc on ne met pas une fl&egrave;che et on d&eacute;sactive le script pour le lien en cache</b>
<br />&lt;li class=&#34;multimenu&#34;>
<br /> &lt;a title=&#34;&lt;{&#36;alt_title}>&#34;
<br /> &lt;{if &#36;linkurl}>&lt;{&#36;target}>href=&#34;&lt;{&#36;linkurl}>&#34;&lt;{/if}>>
<br />&lt;{/if}>
<br /> &lt;{&#36;image}>
<br />&lt;{&#36;title}>
<br /> &lt;/a>
<br /> &lt;/li>
<br /> 
<br />&lt;{counter assign=count print=false}>
<br />&lt;{elseif &#36;submenu == &#34;3&#34;}>
<b>// Le menu en cache est une note</b>
<br />&lt;{if &#36;ul == 1}>&lt;/ul>&lt;/div>&lt;{assign var=ul value=0}>&lt;{/if}>
<br />&lt;!-- Note -->
<br />&lt;div class=&#34;menuNote&#34;>&lt;{&#36;link}>&lt;{&#36;image}>&lt;{&#36;title}>&lt;{&#36;a}>&lt;/div>
<br /> &lt;{counter assign=count print=false}>
<br /> 
<br />&lt;{elseif &#36;submenu == &#34;4&#34;}>
<b>// Le menu en cache est une cat&eacute;gorie</b>
<br />&lt;!-- Categorie -->
<br />&lt;{if &#36;ul == 1}>&lt;/ul>&lt;/div>&lt;{assign var=ul value=0}>&lt;{/if}>
<br />&lt;div class=&#34;menuCat&#34;>&lt;h3>&lt;{&#36;link}>&lt;{&#36;image}>&lt;{&#36;title}>&lt;/h3&lt;/div>
<br />&lt;{/if}>
<br />
<br />&lt;{assign var=submenu
value=&#36;imenu.submenu}>
<b>// R&eacute;cup&eacute;ration des valeurs du lien en cours pour les mettre en cache</b>
<br />&lt;{assign var=linkurl
value=&#36;imenu.linkurl}>
<b>// Ces valeurs seront utilis&eacute;es pour afficher le lien lors du tours suivant</b>
<br /> &lt;{assign var=link value=&#36;imenu.link}>
<br /> &lt;{assign var=counter value=&#36;count}>
<br /> &lt;{assign var=target value=&#36;imenu.target}>
<br /> &lt;{assign var=alt_title value=&#36;imenu.alt_title}>
<br /> &lt;{assign var=image value=&#36;imenu.image}>
<br /> &lt;{assign var=title value=&#36;imenu.title}>
<br /> &lt;{assign var=a value=&#36;imenu.a}>
<br /> 
<br />&lt;{/foreach}>
<b>// Fin de la boucle </b>
<br />
<br />&lt;{if &#36;submenu == &#34;0&#34;}>
<b>// Du fait de la mise en cache des liens, et que les liens en cours ont pass&eacute; le premier tour, nous affichons la derni&egrave;re valeure qui reste en cache</b>
<br /> &lt;{if &#36;ul == 0}>&lt;ul>&lt;{/if}>
<br /> &lt;!-- Main link -->
<br />
&lt;{if &#36;imenu.submenu == &#34;1&#34; OR &#36;imenu.submenu == &#34;2&#34;}>
<br /> &lt;li class=&#34;multimenu&#34;>
<br /> &lt;a title=&#34;&lt;{&#36;alt_title}>&#34;
<br /> &lt;{if &#36;linkurl}>&lt;{&#36;target}> href=&#34;&lt;{&#36;linkurl}>&#34;&lt;{else}>onClick=&#34;return clickreturnvalue03()&#34;&lt;{/if}>
<br /> onMouseover=&#34;dropdownmenu03(this, event, menu&lt;{&#36;block.mm}>&lt;{&#36;count}>, menuwidth)&#34; 
<br /> onMouseout=&#34;delayhidemenu03()&#34;>
<br /> &lt;img src=&#34;&lt;{&#36;xoops_url}>/modules/multiMenu/script/images/arrow1.gif&#34; alt=&#34;&lt;{&#36;alt_title}>&#34; align=&#34;left&#34; />
<br />&lt;{else}>
<br /> &lt;li class=&#34;multimenu&#34;>
<br /> &lt;a&lt;{if &#36;linkurl}>&lt;{&#36;target}> href=&#34;&lt;{&#36;linkurl}>&#34;&lt;{/if}> title=&#34;&lt;{&#36;alt_title}>&#34;>
<br />&lt;{/if}>
<br /> &lt;{&#36;image}>
<br /> &lt;{&#36;title}>
<br /> &lt;/a>
<br /> &lt;/li>
<br /> 
<br /> &lt;{elseif &#36;submenu == &#34;3&#34;}>
<br /> &lt;{if &#36;ul == 1}>&lt;/ul>&lt;{/if}>
<br /> &lt;!-- Note -->
<br />&lt;div class=&#34;menuNote&#34;>&lt;{&#36;link}>&lt;{&#36;image}>&lt;{&#36;title}>&lt;{&#36;a}>&lt;/div>
<br /> 
<br /> &lt;{elseif &#36;submenu == &#34;4&#34;}>
<br /> &lt;{if &#36;ul == 1}>&lt;/ul>&lt;{/if}>
<br /> &lt;!-- Categorie -->
<br />&lt;div class=&#34;menuCat&#34;>&lt;h3>&lt;{&#36;link}>&lt;{&#36;image}>&lt;{&#36;title}>&lt;{&#36;a}>&lt;/h3&lt;/div>
<br /> &lt;{/if}>
<br /> &lt;{if &#36;ul == 1}>&lt;/ul>&lt;{/if}>
<br /><br /><br />
<b>Personnaliser le style d'affichage en fonction du thème en cours.</b><br />
La variable Smarty suivante est disponible :<br/><br />
<textarea rows='1'><{&#36;block.css_file}></textarea>
<br /><br />
Utilisable dans les templates de menu, elle permet (entre autre) d'attribuer un style particulier à vos menus, en fonction du thème utilisé.<br />
Exemple d'utilisation :<br /><br />
<textarea rows='7'>
<{if &#36;block.css_file =='default'}>
<link rel='stylesheet' type='text/css' href='<{$xoops_url}>/modules/multiMenu/css/default.css' />
<{else}>
<link rel='stylesheet' type='text/css' href='<{$xoops_url}>/modules/multiMenu/css/second.css' />
<{/if}>
</textarea>
<br /><br />
Si le thème en cours, est celui par défaut, alors une certaine feuille de style est chargée, et si un autre thème est chargé, alors la feuille de style alternative la remplacera.
");

define("_AD_MULTIMENU_OPTIONS_BLOCKOPTIONS", 	"Options de blocs");
define("_AD_MULTIMENU_OPTIONS_FORMAT", 	"Format");
define("_AD_MULTIMENU_OPTIONS_LINKS", "Lien");
define("_AD_MULTIMENU_OPTIONS_TITLE", "Titre");
define("_AD_MULTIMENU_OPTIONS_PICTURES", "Images");
define("_AD_MULTIMENU_OPTIONS_ANSET", "Paramètres d'animation");
define("_AD_MULTIMENU_OPTIONS_RANLINKS", "Liens aléatoires");
define("_AD_MULTIMENU_OPTIONS_TPL", "Templates");
define("_AD_MULTIMENU_OPTIONS_NUM", "N°");
define("_AD_MULTIMENU_OPTIONS_MENU", "Menu");
define("_AD_MULTIMENU_OPTIONS_DESC", "Description");
define("_AD_MULTIMENU_OPTIONS_COLUMNS", "Colonnes");
define("_AD_MULTIMENU_OPTIONS_TYPE", "Type");
define("_AD_MULTIMENU_OPTIONS_ORDER", "Ordre");
define("_AD_MULTIMENU_OPTIONS_DISPHI", "Afficher/Masquer");
define("_AD_MULTIMENU_OPTIONS_MAXLENGHT", "Longueur Max");
define("_AD_MULTIMENU_OPTIONS_MAXWIDTH", "Largeur Max");
define("_AD_MULTIMENU_OPTIONS_WIDTH", "Largeur");
define("_AD_MULTIMENU_OPTIONS_HEIGHT", "Hauteur");
define("_AD_MULTIMENU_OPTIONS_COLOR", "Couleur");
define("_AD_MULTIMENU_OPTIONS_SPEED", "Vitesse");
define("_AD_MULTIMENU_OPTIONS_NUMBER", "Nombre");
define("_AD_MULTIMENU_OPTIONS_INTHEME", "Dans le thème");
define("_AD_MULTIMENU_OPTIONS_COMP", "Compatibilité");

define("_AD_MULTIMENU_OPTIONS_SELBOX", "[Boite de sélection Box]");
define("_AD_MULTIMENU_OPTIONS_DROPDOWN", "[Déroulant]");
define("_AD_MULTIMENU_OPTIONS_ORDERED", "Numéroté");
define("_AD_MULTIMENU_OPTIONS_LIST", "[Liste à puce]");
define("_AD_MULTIMENU_OPTIONS_SLIDING", "Diaporama");
define("_AD_MULTIMENU_OPTIONS_SCROLLING", "Défilant");
define("_AD_MULTIMENU_OPTIONS_PICTURE", "[Image]");
define("_AD_MULTIMENU_OPTIONS_CONTEXT", "Contextuel");
define("_AD_MULTIMENU_OPTIONS_CONTEXT2", "Contextuel2");
define("_AD_MULTIMENU_OPTIONS_TREE", "Arborescent");
define("_AD_MULTIMENU_OPTIONS_TABHORIZ", "Lien Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ", "Déroulant Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS", "Déroulant Horizontal CSS");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT", "Déroulant Vertical");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2", "Déroulant Vertical2");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS", "Déroulant Vertical CSS");
define("_AD_MULTIMENU_OPTIONS_SWITCHVERT", "Switch Vertical");
define("_AD_MULTIMENU_OPTIONS_PRINCMEN", "[Menu]");

define("_AD_MULTIMENU_OPTIONS_DESC1", "Semblable au menu principal de Xoops");
define("_AD_MULTIMENU_OPTIONS_DESC2", "Ouvre et ferme les sous-menus (compatible noscript)");
define("_AD_MULTIMENU_OPTIONS_DESC3", "Menu déroulant dynamique vertical");
define("_AD_MULTIMENU_OPTIONS_DESC31", "Menu déroulant dynamique vertical 2");
define("_AD_MULTIMENU_OPTIONS_DESC32", "Menu déroulant dynamique vertical CSS");
define("_AD_MULTIMENU_OPTIONS_DESC4", "Menu déroulant dynamique horizontal");
define("_AD_MULTIMENU_OPTIONS_DESC41", "Menu déroulant dynamique horizontal pur CSS");
define("_AD_MULTIMENU_OPTIONS_DESC5", "Affiche/Masque les sous-menus dynamiquement");
define("_AD_MULTIMENU_OPTIONS_DESC6", "Menu contextuel : clic droit dans la page");
define("_AD_MULTIMENU_OPTIONS_DESC61", "Menu contextuel : clic droit dans la page. Liens secondaires gérés. Html désactivé");
define("_AD_MULTIMENU_OPTIONS_DESC62", "Menu arborescent : type explorateur Windows");
define("_AD_MULTIMENU_OPTIONS_DESC7", "Menu composé d'une image");
define("_AD_MULTIMENU_OPTIONS_DESC8", "Menu composé d'images défilantes (haut/bas)");
define("_AD_MULTIMENU_OPTIONS_DESC9", "Menu sous forme de diaporama d'images");
define("_AD_MULTIMENU_OPTIONS_DESC10", "Liste standard de liens non classés");
define("_AD_MULTIMENU_OPTIONS_DESC11", "Liste de liens classés");
define("_AD_MULTIMENU_OPTIONS_DESC12", "Menu défilant de liens non classés");
define("_AD_MULTIMENU_OPTIONS_DESC13", "Diaporama de liens");
define("_AD_MULTIMENU_OPTIONS_DESC14", "Menu déroulant");
define("_AD_MULTIMENU_OPTIONS_DESC15", "Boite de sélection standard");

define("_AD_MULTIMENU_OPTIONS_TYPE2", "Pas d'url sur le lien principal");
define("_AD_MULTIMENU_OPTIONS_TYPE21", "Pas d'url sur le lien principal contenant des sous-liens");
define("_AD_MULTIMENU_OPTIONS_TYPE8", "Pas de distinction");
define("_AD_MULTIMENU_OPTIONS_TYPE14_15", "Les catégories séparent les menus");

define("_AD_MULTIMENU_OPTIONS_NOPICT", "Pas d'images");

define("_AD_MULTIMENU_OPTIONS_WIDTH3", "Largeur et emplacement (gauche/droite) du menu déroulant");
define("_AD_MULTIMENU_OPTIONS_WIDTH4", "Largeur du menu déroulant");
define("_AD_MULTIMENU_OPTIONS_WIDTH9", "Largeur de bloc");

define("_AD_MULTIMENU_OPTIONS_HEIGHT9", "Hauteur de bloc");

define("_AD_MULTIMENU_OPTIONS_IE", "IE");
define("_AD_MULTIMENU_OPTIONS_FF", "IE");
define("_AD_MULTIMENU_OPTIONS_IEFF", "IE &amp; FF");
define("_AD_MULTIMENU_OPTIONS_IEMARQUEE", "IE (Marquee)");

//conseils pour l'utilisation des menus

define("_AD_MULTIMENU_OPTIONS_TIPS", "Vous pouvez cliquer sur le nom de certains menus pour accéder aux conseils d'utilisation.");

define("_AD_MULTIMENU_OPTIONS_SWITCHVERT_TITLE_TIPS", "Menu Switch Vertical");
define("_AD_MULTIMENU_OPTIONS_SWITCHVERT_DESC_TIPS", "
<br />
<li>Ne pas mettre de liens sur les liens principaux, qui servent à dérouler le sous-menu.<br />
Ils seraient de toute façon inefficaces.</li><br />
<li>Un seul sous-menu est visible à la fois. Un clic sur un autre lien principal ferme le sous-menu précédement ouvert.</li><br />
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT_TITLE_TIPS", "Menu Déroulant Vertical");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT_DESC_TIPS", "
<br />
<li>Si vous utilisez ce menu dans la colonne de droite de votre site, vous devez définir une largeur de bloc négative dans les options de blocs, pour que le menu se déroule du bon côté.</li><br /><br />
<li>La couleur de fond du sous-menu se définit dans les options de bloc du menu.</li><br /><br />
<li>Le paramétrage de l'emplacement du sous-menu (hauteur, éloignement par rapport au menu principal...), se fait dans le template de ce menu. Pensez à mettre à jour vos templates en cas de modification.</li><br />
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2_TITLE_TIPS", "Menu Déroulant Vertical 2");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2_DESC_TIPS", "
<br />
<li>Ce menu s'utilise dans les colonnes de droite ou de gauche. Il ne faut pas indiquer de largeur de bloc négative contrairement à d'autres menus.</li><br /><br />
<li>Les flèches indiquant qu'un sous-menu est présent, sont toujours orientées vers la droite.</li><br /><br />
<li>Vous pouvez utiliser des images, qui seront placées avant les titres. Taille limitée à 16px*16px.</li><br /><br />
<li>Vous pouvez changer l'apparence du menu, en modifiant la feuille de style :<br /> <i>script/07/style/mm_vertical2.css</i></li><br /><br />
Un exemple de présentation différente est disponible dans le dossier :<br />
<i>script/07/style_classic/mm_vertical2.css</i>
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS_TITLE_TIPS", "Menu Déroulant Vertical CSS");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS_DESC_TIPS", "
<br />
<li>Menu en pur code CSS.</li><br /><br />
<li>La taille des menus est gérée dans le template.</li><br /><br />
<li>La gestion des couleur se fait dans les feuilles de style correspondantes.</li><br />
- script/09/flyout_ie.css (pour internet explorer)</li><br />
- script/09/flyout.css (pour firefox)</li><br /><br />
<li>Les flèches indiquant qu'un sous-menu est présent ne sont pas gérées.</li><br /><br />
<li>Indiquez une valeur négative dans les options du menu (largeur de bloc) lorsque vous voulez l'utiliser à droite sur votre site.</li><br />

<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ_TITLE_TIPS", "Menu Déroulant Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ_DESC_TIPS", "
<br />
<li>La taille et la couleur de ce menu sont gérées dans le template.</li>
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS_TITLE_TIPS", "Menu Déroulant Horizontal CSS");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS_DESC_TIPS", "
<br />
<li>Menu en pur code CSS.</li><br /><br />
<li>L'apparence de ce menu est gérée dans les feuilles de style :</li><br />
<i>script/08/basic_dd_ie.css</i> (pour internet explorer)<br />
<i>script/08/basic_dd.css</i> (pour firefox)<br /><br />
<li>Les flèches indiquant qu'un sous-menu est présent ne sont pas gérées.</li>
<br />
");

define("_AD_MULTIMENU_OPTIONS_CONTEXT_TITLE_TIPS", "Menu contextuel");
define("_AD_MULTIMENU_OPTIONS_CONTEXT_DESC_TIPS", "
<br />
<li>Apparaît en faisant un clic droit sur la page.</li><br /><br />
<li>Les sous-liens apparaissent simplement décalés.</li><br /><br />
<li>L'apparence de ce menu est gérée dans la feuille de style :</li><br />
<i>script/05/context_menu.css</i><br /><br />
<br />
");

define("_AD_MULTIMENU_OPTIONS_CONTEXT2_TITLE_TIPS", "Menu contextuel 2");
define("_AD_MULTIMENU_OPTIONS_CONTEXT2_DESC_TIPS", "
<br />
<li>Apparaît en faisant un clic droit sur la page.</li><br /><br />
<li>Les sous-liens apparaissent dans un sous-menu déroulant au passage de la souris sur un lien standard.</li><br /><br />
<li>Les images sont limitées à 16px*16px.</li><br /><br />
<li>L'apparence de ce menu est gérée dans la feuille de style :</li><br />
<i>/script/06/style/mm_context2.css</i><br /><br />
Un exemple de présentation différente est disponible dans le dossier :<br />
<i>script/06/style_classic/mm_context2.css</i>
<br />
");

define("_AD_MULTIMENU_OPTIONS_TREEMENU_TITLE_TIPS", "Menu Arborescent");
define("_AD_MULTIMENU_OPTIONS_TREEMENU_DESC_TIPS", "
<br />
<li> Tous les liens standards et secondaires (permanents et relatifs) sont pris en compte.</li><br />
<li> Les liens de type catégorie et note servent à créer un nouveau menu dans le même bloc.</li><br />
<li> Les cookies sont utilisés, ce qui permet de conserver au fur et à mesure du surf,<br />
le positionnement des menus (ouvert/fermé).</li><br />
<li> Pour changer rapidement l'aspect des icônes 'dossier ouvert/fermé', il suffit de remplacer ces fichiers par ceux de votre choix.</li><br />
<li> Même chose pour l'icône représentant la petite feuille (sous-liens).</li><br />
<li> Vous pouvez aussi personnaliser chaque lien avec une image différente, en indiquant une image de votre choix lors de la création du lien.</li><br />
<li> Par défaut, les menus principaux (créés avec les catégories) sont ouverts (les sous-menus sont fermés)</li><br />
<li> Vous pouvez définir une url pour les liens standards comportant des sous-menus, en cliquant dessus, cela aura pour effet d'ouvrir la page web configurée, et d'ouvrir le menu.</li><br />
<li> Vous pouvez ainsi définir des liens secondaires relatifs, qui n'apparaîtront que si vous cliquez sur le lien, sinon, en cliquant simplement sur la croix déroulant le menu, vous ne verrez que les menus secondaires permanents.</li><br />
<li> Selon que vous indiquerez une valeur positive ou négative, pour la largeur de bloc, dans les options du menu, ce menu arborescent se lira de gauche à droite (par défaut), ou de droite à gauche.</li><br />
<li> Des jeux d'images de couleur noir et blanche sont fournis avec ce menu. Afin de rester lisible selon vos thèmes. Vous devrez mettre à jour le template pour utiliser la bonne couleur d'images. (ou simplement inverser le nom des dossiers contenant les images.</li><br />
<li> Si vous proposez à vos visiteurs, le choix entre plusieurs thèmes de couleurs sombres et foncées, en modifiant le template de ce menu, il sera possible d'automatiser l'affichage du menu avec les images dans la bonne couleur.</li><br />
Voir l'aide sur la création de templates personnalisés, et plus précisément la variable smarty : <{&#36;block.css_file}><br /><br />
<b>Il y a quelques contraintes :</b><br /><br />
<li> Chaque menu doit commencer par 2 liens standards.</li><br />
");

?>