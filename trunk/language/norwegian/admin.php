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

define("_AD_MULTIMENU_ADMIN", 	"Administrasjon : ");
define("_AD_MULTIMENU_EDITIMENU", 	"Endre");
define("_AD_MULTIMENU_NEWIMENU", 	"Ny lenke");
define("_AD_MULTIMENU_NEW",		"Ny lenke");
define("_AD_MULTIMENU_TITLE",		"Tittel");
define("_AD_MULTIMENU_STATUS",	"Status");
define("_AD_MULTIMENU_ONLINE",	"Pålogget");
define("_AD_MULTIMENU_OFFLINE",	"Avlogget");
define("_AD_MULTIMENU_SUBMENU",	"Type");
define("_AD_MULTIMENU_SUBMENUEXP",	"");
define("_AD_MULTIMENU_SUBYES",	"Ja");
define("_AD_MULTIMENU_SUBNO",		"Nei");
define("_AD_MULTIMENU_MAINLINK",	"Hovedlenke");
define("_AD_MULTIMENU_SUBLINK",	"Related Sublink");
define("_AD_MULTIMENU_PERMSUBLINK",	"Permanent underlenke");
define("_AD_MULTIMENU_NOTE",		"Notis");
define("_AD_MULTIMENU_TARGET",	"Mål");
define("_AD_MULTIMENU_GROUPS",	"Grupper");
define("_AD_MULTIMENU_LINK",		"Lenke <font color='red'>*</font>");
define("_AD_MULTIMENU_OPERATION",	"Funksjoner");
define("_AD_MULTIMENU_UP",		"Opp");
define("_AD_MULTIMENU_DOWN",		"Ned");
define("_AD_MULTIMENU_TARG_SELF",	"selv");
define("_AD_MULTIMENU_TARG_BLANK",	"blank");
define("_AD_MULTIMENU_TARG_PARENT",	"over");
define("_AD_MULTIMENU_TARG_TOP",	"topp");
define("_AD_MULTIMENU_SUREDELETE",	"Er du sikker på at du vil slette denne lenken?");
define("_AD_MULTIMENU_UPDATED",	"Databasen ble oppdatert!");
define("_AD_MULTIMENU_NOTUPDATED",	"Kunne ikke oppdatere databasen!");
define("_AD_MULTIMENU_SUBMIT", 	"Send");
define("_AD_MULTIMENU_IMAGE", 	"Bilde <font color='red'>*</font>");
define("_AD_MULTIMENU_GUIDET_TEMPLATE", 	"Create a custom template");

define("_AD_MULTIMENU_CATEGORY",	"Kategori");
define("_AD_MULTIMENU_NOTES",		"<font color='red'>*</font> multiMenu støtter absolutte og relative baner.<br /><br />
<b><u>Eksempler</u> :</b><br /><br />
<u>Absolutt URL</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>Relativ URL</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>For at dynamiske lenker skal virke,<br />må man legge til en ' / ' (følge-slash)<br />på slutten av lenker til mapper!</td><tr></table><br />
<br />
Du kan bruke følgende tag i bildebaner:<br />
- {theme} som viser gyldig utseende.<br />
- {module} som viser gyldig modul.");

define("_AD_MULTIMENU_PREFERENCES", "Valg");
define("_AD_MULTIMENU_HELP",		"Guide");
define("_AD_MULTIMENU_GOING",		"When multiMenu goes dynamic");

define("_AD_MULTIMENU_FATHER_INDEX","Overindeks");
define("_AD_MULTIMENU_CANTPARENT",	"En lenke kan ikke lenke til seg selv eller en underlenke!");
define("_AD_MULTIMENU_ID",		"Id");
define("_AD_MULTIMENU_PID",		"Pid");
define("_AD_MULTIMENU_BLOCK_LINK",	"Synlig blokk-liste");

define("_AD_MULTIMENU_GUIDET_GENERAL",	"Generelt");
define("_AD_MULTIMENU_GUIDET_PREF",		"Valg");
define("_AD_MULTIMENU_GUIDET_INDEX",	"Indeks");
define("_AD_MULTIMENU_GUIDET_BLOCKS",	"Blokker");
define("_AD_MULTIMENU_GUIDET_TEMPLATE",	"Custom templates");
define("_AD_MULTIMENU_GUIDET_MENU",		"Menus options table");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>Hvordan bruke multiMenu ?</font>
</strong></p><br />
<br />
<strong><u>GENERELT</u>
</strong>
<br />multiMenu er en multifunksjonell lenkemeny-behandler. Den er bygget for enkelt å vise lenker og menyer på et Xoops-nettsted. For webmastere kan lenker legges til enten fra administration siden, eller direkte fra en lenke på modulens hovedside. Denne 1.7-versionen har også et sidekartsgrensesnitt, som lar webmasteren bygge en egen navigation.
<br />
<br />
<strong><u>FUNKSJONER</u>
</strong>
<br />Hovedobjektivet for denne modulen er å la webmastere som ikke er vant med behandling av nettsteder og moduler, enkelt vise egendefinerte menyer. Den har tallrike finksjoner som lar webmasteren skreddersy menyene. Modulen har også en meget fleksibel blokk med mange visningsvalg, som vi vil se senere i denne korte guiden.
<br />
<br /><strong><u>CREDITS</u></strong>
<br />Når det gjelder design og utvikling av denne modulen, må honnør og takk rettes til flere velkjente xoopere: <br />Herv&eacute;, Marcan and Solo for deres hjelp og medvirkning i dette prosjektet.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>Hvordan bruke multiMenu ?</font></strong>
</p>
<br /><strong><u>ADMINISTRASJON<br /></u></strong>
<br /><strong><u>Valg (eller generelle modulinnstillinger)</u>
</strong>
<br /><br />Før du bruker multiMenu-modulen, foreslår vi at du ser nøye på admin-innstillingene. Det er her du definerer funksjonaliteten og egne innstillinger i modulen. Innstillingene har direkte innflytelse på indeks-sidene (men ikke på blokkenes innstillinger).
<br />
<br />
<br /><strong><em>~Vis hovedside: <br /></em></strong>
Du kan aktivere valget om nettstedskart her. Om du slår det av, kan du fortsette å bruke det som en skinnmodul for å vise hvilken blokk du vil, eller som en sekundær hjemmeside. Husk at dette bare deaktivèrer hovedoversiktssiden, og ikke undersidene på nettstedskartet.
<br />
<br />
<strong><em>~Introduksjonstekst: <br /></em></strong>
Her setter du det du vil se over hovedoversiktssiden. Denne teksten støtter Xoops-kode og HTML.
<br />
<br />
<strong><em>~Vis banner:</em></strong>
Du kan vbelge om du vil vise et banner eller modulnavnet over alle modulsidene. Om du velger banner må du endre filen '/module/multiMenu/images/logo.gif'.
<br />
<br />
<strong><em>~Vis multiMenu-siden (fra 1 til 4):</em></strong>
Velg multiMenu-innholdet som du vil vise på hovedsidene. 
<br />
<br />
<strong><em>~Menytittel (fra 1 til 4): <br /></em></strong>
Definèr titler på multiMenu's forside og adminside. Husk at dette ikke påvirker titlene på relaterte blokker!
<br />
<br />
<strong><em>~Vis navigasjonsbjelke:</em></strong>
 <br />Viser en navigasjonsbjelke med aktiv indeks-side på alle sider. Om du ikke vil ha dette, kan du slå det av her.
<br />
<br /><strong><em>~Normal bildebredde:</em>
</strong>
<br />Sett standard maksverdi for visning av bilder på hovedsidene. Bare større bilder blir endret (men de strekkes ikke).
<br />
<br />
<br /><strong><em>~Vis ikoner:</em></strong>
<br />Slå på dette for å vise ikoner foran alle lenker. Det er 4 typer lenker :<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Absolutte hovedlenker</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Absolutte underlenker</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Relative hovedlenker</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Relative underlenker</li>
</ul>
<br />
<br />
<strong><em>~Meny som vises i utseende (theme):<br /></em></strong>
Her kan du velge en multiMeny som vises direkte i utseendet ditt. Du trenger bare å sette inn følgende kode i utseendet *:
<p align='center'><font color='blue'><nobr><{include file=\"../modules/multiMenu/theme/multimenu.php\"}></nobr></font></p>
<br />
<i>* Merk: Bare hovedlenker vises i utseendet!</i>
");

define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>Hvordan bruke multiMenu ?</font></strong></p>
<br /><strong><u>ADMINISTRATION<br /></u></strong><br />
<strong><u>Adminhovedside</u></strong>
<br />
<br />
Det er 2 deler her: En dynamisk modulnavigasjonsbjelke, og gjeldende multiMeny.
<br />
<br />
<strong>Modulnavigasjonsbjelken består av-</strong>
<ul><li> multiMenu hovedside</li>
<li>Valg</li>
<li> Hjelp</li>
<li> Adminlenker</li>
<li> multiMenu (fra 1 til 4)</li></ul><br />
Merk: en fargekode indikerer om gjeldende multiMeny vises på hovedsiden eller ikke.<br />
<br />
Du kan navigere i modulen og dens valg med denne navigasjonsbjelken. Husk at på alle sider som genereres, vil du som moduladministrator ha tilgang til endrings-, slette- og alle administrasjonsfunksjoner.
<br />
<br />
<strong><u>multiMenu hovedside</u></strong><br />
<br />
Viser alle multiMeny-lenkene. <br />
På hovedsiden kan du finne nødvendig informasjon om dine egendefinerte lenker :<br />
<ul>
<li>Bilde: viser en forminsket versjon av brukt bilde.</li>
<li>Tittel</li>
<li>Lenke</li>
<li>Status: Grønn for aktiv, Rød for død.</li>
<li>Type</li>
<li>Funksjoner: administrative hovedfunksjoner, endre, slett, flytt opp og ned.</li>
</ul>
Lenker rangeres i vist rekkefølge. Denne rekkefølgen kan endres ved å klikke på grønne piler (opp og ned).
<br />
<br />
Klikk på 'Ny lenke' for å opprette en ny lenke. 
<br />
<br />
<strong><u>Ny lenke</u></strong><br />
<br />
multiMenu er laget for enkelt å kunne opprette menylenker. Du trenger bare å fylle ut skjemaet.<br />
Du kan velge å vise et bilde med eller uten lenker, med forskjellige visningsmuligheter.<br />
<br />
<strong><em>~Tittel:</em></strong> er lenkens tittel. Du kan bruke html kode (f.eks. for å gi lenken farge) eller smilies. BBCode bør ikke brukes.<br />
<br />
<strong><em>~Lenke:</em></strong> er adressen som du vil at lenken skal peke til. La det stå tomt om du ikke vil ha en klikkbar lenke (f.eks. for informasjonsformål). Adressen kan være absolutt eller relativ. Hvis den er relativ vil multiMenu automatisk legge til nettstedets bane, slik at når blokken din vises på nettstedet ditt så vil adressen være en korrekt lenke. <br />
<br />
<strong><em>~Bilde:</em></strong> er adressen til bildet som vises for gjeldende lenke. Reglene for relative og absolutte adresser er de samme som for lenker. Om bildet ikke finnes eller er ugyldig, vil multiMenu vise et standardbilde (en rød pote).<br />
I denne versjonen kan du bruke de to taggene <strong>{module}</strong> og <strong>{theme}</strong>, henholdsvis for å vise modulnavn eller utseende som brukes på gjeldende side. Dette valget for å la deg endre utseende eller logo alt etter hvor på nettstedet brukeren befinner seg.<br />
<br />
<strong><em>~Status:</em></strong> oppgi om du vil at lenken skal vises eller ikke.<br />
<br />
<strong><em>~Type:</em></strong> sett hvilken type du vil at gjeldende lenke skal være. Det finnes 5 forskjellige lenketyper :<br />
<ul>
<li><strong>Kategori:</strong> vis som en kategorilenke.</li>
<li><strong>Hovedlenke:</strong> standard hovedlenke.</li>
<li><strong>Permanent underlenke:</strong> underlenke som vises permanent.</li>
<li><strong>Dynamisk underlenke:</strong> underlenke som vises dynamisk avhengig av overlenken. Merk at dynamiske lenker bare vil virke om hovedlenken har '\ / ' (følge-slash) på slutten!
</li>
<li>Notat: vises som vanlig kommentar-tekst.</li>
</ul><br />
<strong><em>~Mål:</em></strong> 4 klassiske måltyper.</li><br />
<br />
<strong><em>~Grpper:</em></strong> velg hvilke grupper som kan se gjeldenede lenke.</li></ul>
");

define("_AD_MULTIMENU_GUIDE_BLOCKS",	"
<p align='center'><strong><font size='5'>How to use multiMenu?</font></strong></p>
<p>For more informations about block options, see <a href='info.php?Help=06'>Menu Option Table...</a> page.</p>
<strong><u>multiMenu's blocks</u></strong><br />
<br />
One of the most important features of multiMenu are his blocks. As stated above, you have for each menu a corresponding block (ranging from 1 to 4 + the admin one), plus 2 other custom menu blocks (A and B). For each and every available blocks, you can have a very wide range of applications, display and options.When editing a multiMenu block, use the &ldquo;Setting&rdquo; option, in 6 different catégories.<br />
<br />
<strong>1) Block Format</strong><br />
<br />
<strong><em>~Format:</em></strong><br />
You can display the multiMenu links under 20 different forms:<br />
- Standard  Menu (like Xoops menu)<br />
- Vertical Switch (left click displays sublinks)<br />
- Drop Down Vertical (Dynamic - drop to the left or the right side)<br />
- Drop Down Vertical 2 (Another dropdown vertical menu)<br />
- CSS Drop Down Vertical (pure CSS)<br />
- Drop Down Horizontal (Dynamic - drop to the bottom)<br />
- CSS Drop Down Horizontal (Dynamic full CSS menu - drop to the bottom)<br />
- Horizontal Link<br />
- Context<br />
- Context2 (secondary links are supported)<br />
- Treemenu<br />
- Picture<br />
- Scrolling (Scrooling without pause)<br />
- Sliding (Slide with pause)<br />
- List<br />
- Ordered List<br />
- Scrolling list (scrolling without pause)<br />
- Slide List (sliding with pause)<br />
- Drop Down<br />
- Select Box<br />
<br />
<strong><em>~Antall kolonner:</em></strong><br />
Oppgi antall kolonner du vil vise lenkene i. Dette valget er bare tilgjengelig for Standardmenyer og Faste bilder.<br />
<br />
<strong>2) Lenker</strong><br />
<br />
<strong><em>~Lenketype som vises:</em></strong><br />
Velg hvilken type lenker du vil vise. <br />
<strong><em>~Ordne etter:</em></strong><br />
I hvilken rekkefølge vil du vise lenkene: etter vekt (definert av admin) eller alfabetisk, forover eller bakover.<br />
<br />
<strong>3) Tittel</strong><br />
<br />
<strong><em>~Vis Tittel:</em></strong><br />
Vil du vise lenkens tittel? Dette valget brukes bare på lenker som har et illustrerende bilde!<br />
<strong><em>~Maks lengde:</em></strong><br />
Hvor lang kan tittelen være ? Sett maksverdien her.<br />
<br />
<strong>4) Bilde</strong><br />
<br />
<strong><em>~Vis bilde:</em></strong><br />
Vil du vise lenkens bilde?<br />
<strong><em>~Maks bredde:</em></strong><br />
Sett bildebreddens maksverdi for å uniformere utseendet på menyer og illustrasjoner. Om bildet er mindre vil det ikke skaleres, for å unngå pikselisering.<br />
<br />
<strong>5) Bevegelsesinnstillinger</strong><br />
<br />Disse valgene gjelder bare om du har valgt Bevegelig bilde-formatet. 
<strong><em>~Blokkbredde og -høydet:</em></strong><br />
Defin*er blokkens størrelse. Sjekk bildebredden for å finne den beste innstillingen.<br />
<strong><em>~Hastighet:</em><br /></strong>
Sett hvilken fart bilder og lenker skal røre seg i. <br />
<br />
<strong>6) Tilfeldige lenker</strong><br />
<br />
<strong><em>~Tilfeldige lenker:</em></strong></strong><br />
multiMenu gir deg muligheten til å vise et utvalg av tilfeldige lenker. Sett om du vil ha dette her. Dette valget brukes selvfølgelig med forsiktighet om du bruker mange forskjellige lenketyper (kategori, hovedlenker, underlenker og notater) og virker bedre med bare en lenketype.<br />
<strong><em>~Antall tilfeldige lenker som vises:</em></strong><br />
Dette valget setter antall tilfeldige lenker som skal vises. Husk at det vil vise X antall lenker etter de første tilfeldig valgte lenkene. 
<br /><br />Takk for at du valgte multiMenu, som alltid er vi glade for å motta kommentarer og tilbakemeldinger slik at vi kan fortsette å forbedre kvaliteten og egenskapene til denne modulen.<br /><br />- Utviklerne");

define("_AD_MULTIMENU_GUIDE_TEMPLATE",	"
<p align='center'><strong><font size='5'>How to create your own custom multiMenu templates?</font>
</strong></p>
<br />Ce petit guide &agrave; pour but de vous aider &agrave; vous constituer votre propre menu personnalis&eacute;. Nous nous attacherons &agrave; d&eacute;finir les proc&eacute;dure &agrave; respecter afin de cr&eacute;er des templates de menu. Les languages que nous aborderons seront le hmtl, Smarty et autres scripts de languages dynamiques (javascript). Il n'est donc pas n&eacute;cessaire de modifier le code php.<br />
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
<b>To personnalize the screen display according to the theme used.</b><br />
This Smarty's variable is available :<br/><br />
<textarea rows='1'><{&#36;block.css_file}></textarea>
<br /><br />
Usable in the menu's templates, it makes it possible (amongst other things) to allot a particular style to your menus, according to the theme used.<br />
Example :<br /><br />
<textarea rows='7'>
<{if &#36;block.css_file =='default'}>
<link rel='stylesheet' type='text/css' href='<{$xoops_url}>/modules/multiMenu/css/default.css' />
<{else}>
<link rel='stylesheet' type='text/css' href='<{$xoops_url}>/modules/multiMenu/css/second.css' />
<{/if}>
</textarea>
<br /><br />
If the used theme, is that by default, then a first stylesheet is loaded, and, if another theme is loaded, then another stylesheet will replace it.
");

define("_AD_MULTIMENU_OPTIONS_BLOCKOPTIONS", 	"Blocks options");
define("_AD_MULTIMENU_OPTIONS_FORMAT", 	"Format");
define("_AD_MULTIMENU_OPTIONS_LINKS", "Links");
define("_AD_MULTIMENU_OPTIONS_TITLE", "Title");
define("_AD_MULTIMENU_OPTIONS_PICTURES", "Pictures");
define("_AD_MULTIMENU_OPTIONS_ANSET", "Animation Settings");
define("_AD_MULTIMENU_OPTIONS_RANLINKS", "Random Links");
define("_AD_MULTIMENU_OPTIONS_TPL", "Templates");
define("_AD_MULTIMENU_OPTIONS_NUM", "N°");
define("_AD_MULTIMENU_OPTIONS_MENU", "Menu");
define("_AD_MULTIMENU_OPTIONS_DESC", "Description");
define("_AD_MULTIMENU_OPTIONS_COLUMNS", "Columns");
define("_AD_MULTIMENU_OPTIONS_TYPE", "Type");
define("_AD_MULTIMENU_OPTIONS_ORDER", "Order");
define("_AD_MULTIMENU_OPTIONS_DISPHI", "Display/Hide");
define("_AD_MULTIMENU_OPTIONS_MAXLENGHT", "Max.Lenght");
define("_AD_MULTIMENU_OPTIONS_MAXWIDTH", "Max. Width");
define("_AD_MULTIMENU_OPTIONS_WIDTH", "Width");
define("_AD_MULTIMENU_OPTIONS_HEIGHT", "Height");
define("_AD_MULTIMENU_OPTIONS_COLOR", "Color");
define("_AD_MULTIMENU_OPTIONS_SPEED", "Speed");
define("_AD_MULTIMENU_OPTIONS_NUMBER", "Number");
define("_AD_MULTIMENU_OPTIONS_INTHEME", "In theme");
define("_AD_MULTIMENU_OPTIONS_COMP", "Compatibility");

define("_AD_MULTIMENU_OPTIONS_SELBOX", "[Select Box]");
define("_AD_MULTIMENU_OPTIONS_DROPDOWN", "[Drop Down]");
define("_AD_MULTIMENU_OPTIONS_ORDERED", "Ordered");
define("_AD_MULTIMENU_OPTIONS_LIST", "[List]");
define("_AD_MULTIMENU_OPTIONS_SLIDING", "Sliding");
define("_AD_MULTIMENU_OPTIONS_SCROLLING", "Scrolling");
define("_AD_MULTIMENU_OPTIONS_PICTURE", "[Picture]");
define("_AD_MULTIMENU_OPTIONS_CONTEXT", "Context");
define("_AD_MULTIMENU_OPTIONS_CONTEXT2", "Context2");
define("_AD_MULTIMENU_OPTIONS_TABHORIZ", "Horizontal Link");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ", "Drop Down Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS", "CSS Drop Down Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT", "Drop Down Vertical");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2", "Drop Down Vertical2");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS", "CSS Drop Down Vertical");
define("_AD_MULTIMENU_OPTIONS_SWITCHVERT", "Switch vertical");
define("_AD_MULTIMENU_OPTIONS_PRINCMEN", "[Menu]");

define("_AD_MULTIMENU_OPTIONS_DESC1", "Xoops like main menu");
define("_AD_MULTIMENU_OPTIONS_DESC2", "Open and close submenus (compatible noscript)");
define("_AD_MULTIMENU_OPTIONS_DESC3", "Vertical dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC31", "2nd Vertical dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC32", "CSS Vertical dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC4", "Horizontal dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC41", "CSS Horizontal dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC5", "Horizontal dynamic hide/show sublinks");
define("_AD_MULTIMENU_OPTIONS_DESC6", "Dynamic, right-click context menu");
define("_AD_MULTIMENU_OPTIONS_DESC61", "Dynamic, right-click context menu. Secondary links supported. Html desactivated");
define("_AD_MULTIMENU_OPTIONS_DESC7", "Picture designed menu");
define("_AD_MULTIMENU_OPTIONS_DESC8", "Scrolling up&down picture menu");
define("_AD_MULTIMENU_OPTIONS_DESC9", "Sliding up picture menu");
define("_AD_MULTIMENU_OPTIONS_DESC10", "Standard unordered list menu");
define("_AD_MULTIMENU_OPTIONS_DESC11", "Ordered list menu");
define("_AD_MULTIMENU_OPTIONS_DESC12", "Scrolling up&down unordered list");
define("_AD_MULTIMENU_OPTIONS_DESC13", "Sliding up");
define("_AD_MULTIMENU_OPTIONS_DESC14", "Drop down box");
define("_AD_MULTIMENU_OPTIONS_DESC15", "Standard select box");

define("_AD_MULTIMENU_OPTIONS_TYPE2", "No links for mainlinks");
define("_AD_MULTIMENU_OPTIONS_TYPE21", "No links for mainlinks containing sublinks");
define("_AD_MULTIMENU_OPTIONS_TYPE8", "No distinction");
define("_AD_MULTIMENU_OPTIONS_TYPE14_15", "Categories separate boxes");

define("_AD_MULTIMENU_OPTIONS_NOPICT", "No pictures");

define("_AD_MULTIMENU_OPTIONS_WIDTH3", "Submenu width and position");
define("_AD_MULTIMENU_OPTIONS_WIDTH4", "Submenu width");
define("_AD_MULTIMENU_OPTIONS_WIDTH9", "Block width");

define("_AD_MULTIMENU_OPTIONS_HEIGHT9", "Block height");

define("_AD_MULTIMENU_OPTIONS_IE", "IE");
define("_AD_MULTIMENU_OPTIONS_FF", "IE");
define("_AD_MULTIMENU_OPTIONS_IEFF", "IE &amp; FF");
define("_AD_MULTIMENU_OPTIONS_IEMARQUEE", "IE (Marquee)");

//some tips about the menus

define("_AD_MULTIMENU_OPTIONS_TIPS", "You can click on some menus to display some councils of use.");

define("_AD_MULTIMENU_OPTIONS_SWITCHVERT_TITLE_TIPS", "Vertical Switch");
define("_AD_MULTIMENU_OPTIONS_SWITCHVERT_DESC_TIPS", "
<br />
<li>No url on primary links. They are used to display the submenu.<br /></li><br />
<li>Only one submenu is visible at same time. A click on a primary link will close submenu previously open.</li><br />
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT_TITLE_TIPS", "Vertical Dropdown");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT_DESC_TIPS", "
<br />
<li>If you use this menu in the right column of your site, you must define a negative block's width in the blocks options, so that the menu is displayed on the good side.</li><br /><br />
<li>Background color can be changed in blocks options of the menu.</li><br /><br />
<li>The settings for the submenu (height of display, distance compared to the principal menu...), can ben changed in this menu's template. Think of updating your templates after all modification.</li><br />
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2_TITLE_TIPS", "Vertical Dropdown 2");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2_DESC_TIPS", "
<br />
<li>This menu can be used  on the right or left columns of your site. We should not indicate negative block's width contrary to others menus.</li><br /><br />
<li>The arrows indicating that a sub-menu is present, is always directed towards to the right.</li><br /><br />
<li>You can use images, which will be placed before the titles. Size limited to 16px*16px</li><br /><br />
<li>You can change the appearance of the menu, by modifying the stylesheet :<br /> <i>script/07/style/mm_vertical2.css</i></li><br /><br />
An example of different presentation is available in the folder :<br />
<i>script/07/style_classic/mm_vertical2.css</i>
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS_TITLE_TIPS", "Vertical CSS Dropdown");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS_DESC_TIPS", "
<br />
<li>Pure CSS menu.</li><br /><br />
<li>The size of the menus is managed in the template.</li><br /><br />
<li>The management of the color is done in the corresponding style sheets.</li><br />
- script/09/flyout_ie.css (for internet explorer)</li><br />
- script/09/flyout.css (for firefox)</li><br /><br />
<li>The arrows indicating that a sub-menu is present are not managed..</li><br /><br />
<li>Indicate a negative value in the options of the menu (width of block) when you want to use it on the right on your site.</li><br />

<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ_TITLE_TIPS", "Horizontal Dropdown");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ_DESC_TIPS", "
<br />
<li>Size and color of this menu are managed in his template.</li>
<br />
");

define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS_TITLE_TIPS", "Horizontal CSS Dropdown");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS_DESC_TIPS", "
<br />
<li>Pure CSS code.</li><br /><br />
<li>The appearance of this menu is managed in the stylesheet :</li><br />
<i>script/08/basic_dd_ie.css</i> (for internet explorer)<br />
<i>script/08/basic_dd.css</i> (for firefox)<br /><br />
<li>The arrows indicating that a submenu is present are not managed.</li>
<br />
");

define("_AD_MULTIMENU_OPTIONS_CONTEXT_TITLE_TIPS", "Context Menu");
define("_AD_MULTIMENU_OPTIONS_CONTEXT_DESC_TIPS", "
<br />
<li>Appears by making a right click on the page.</li><br /><br />
<li>The sublinks are displayed simply shifted.</li><br /><br />
<li>The appearance of this menu is managed in the stylesheet :</li><br />
<i>script/05/context_menu.css</i><br /><br />
<br />
");

define("_AD_MULTIMENU_OPTIONS_CONTEXT2_TITLE_TIPS", "Context 2 Menu");
define("_AD_MULTIMENU_OPTIONS_CONTEXT2_DESC_TIPS", "
<br />
<li>Appears by making a right click on the page.</li><br /><br />
<li>The sublinks will appear in a submenu onmouseover a standard link.</li><br /><br />
<li>Images size is limited to 16px*16px.</li><br /><br />
<li>The appearance of this menu is managed in the style sheet :</li><br />
<i>/script/06/style/mm_context2.css</i><br /><br />
An example of different presentation is available in the folder :<br />
<i>script/06/style_classic/mm_context2.css</i>
<br />
");

define("_AD_MULTIMENU_OPTIONS_TREEMENU_TITLE_TIPS", "Menu Arborescent");
define("_AD_MULTIMENU_OPTIONS_TREEMENU_DESC_TIPS", "
<br />
<li> All standard, secondary (permanent/relative) links are managed.</li><br />
<li> Category/note links are used to create a new menu in the same block.</li><br />
<li> Cookies are used, so, those cookies will be used to restore the menu layout and setting.</li><br />
<li> To change 'open/close folder's icon', we only have to replace existing icons in the script folder.<br />
(with same name).</li><br />
<li> Same thing for the icon representing the small sheet (sublinks).</</li><br />
<li> You can also personalize each link with a different image, by indicating an image of your choice during creation of the link.</li><br />
<li>  By default, the principal menus (created with the categories) are open (the submenus are closed).</li><br />
<li>  You can define a URL for the standard links which have sublinks, while clicking on this link, that will cause to open the configured webpage, and to open the menu.</li><br />
<li> You can thus define relative secondary links, which will appear only if you click on the link, if not, while clicking simply on the cross unrolling the menu, you will see only the secondary permanents menus.</li><br />
<li> According to whether you indicate a positive or negative value, for the width of block, in the options of the menu, this treemenu will be read from right to left or from left to right (by default).</li><br />
<li> Sets of images of color black and white are provided with this menu. In order to remain readable according to your theme. You will have to update the template to use the good color of images. (or simply to reverse the name of the files containing the images.</li><br />
<li> If you propose to your visitors, the choice between several theme of dark and sunk colors, by modifying the template of this menu, it will be possible to automate the display of the menu with the images in the good color.</li><br />
See the help on the creation of customs templates, and more precisely the variable smarty <{&#36;block.css_file}><br /><br />
<b>There are some operational requirements :</b><br /><br />
<li> Each menu must start with 2 standards links.</li><br />
");

?>