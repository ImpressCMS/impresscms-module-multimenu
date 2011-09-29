<?php
//------------------------------------------------------------------------- //
//XOOPS - PHP Content Management System				//
//Copyright (c) 2004 XOOPS.org					//
//<http://www.xoops.org/>					//
//													//
//Authors :									//
//						- solo (www.wolfpackclan.com)			//
// 	- herve (www.herve-thouzard.com)		//
//multiMenu v1.8								//
//------------------------------------------------------------------------	//

define("_AD_MULTIMENU_ADMIN", 	"Administration : ");
define("_AD_MULTIMENU_EDITIMENU", 	"Edit");
define("_AD_MULTIMENU_NEWIMENU", 	"New Link");
define("_AD_MULTIMENU_NEW",		"New Link");
define("_AD_MULTIMENU_TITLE",		"Title");
define("_AD_MULTIMENU_STATUS",	"Status");
define("_AD_MULTIMENU_ONLINE",	"Online");
define("_AD_MULTIMENU_OFFLINE",	"Offline");
define("_AD_MULTIMENU_SUBMENU",	"Type");
define("_AD_MULTIMENU_SUBMENUEXP",	"");
define("_AD_MULTIMENU_SUBYES",	"Yes");
define("_AD_MULTIMENU_SUBNO",		"No");
define("_AD_MULTIMENU_MAINLINK",	"Mainlink");
define("_AD_MULTIMENU_SUBLINK",	"Related Sublink");
define("_AD_MULTIMENU_PERMSUBLINK",	"Permanent Sublink");
define("_AD_MULTIMENU_NOTE",		"Note");
define("_AD_MULTIMENU_TARGET",	"Target");
define("_AD_MULTIMENU_GROUPS",	"Groups");
define("_AD_MULTIMENU_LINK",		"Link <font color='red'>*</font>");
define("_AD_MULTIMENU_OPERATION",	"Functions");
define("_AD_MULTIMENU_UP",		"Up");
define("_AD_MULTIMENU_DOWN",		"Down");
define("_AD_MULTIMENU_TARG_SELF",	"self");
define("_AD_MULTIMENU_TARG_BLANK",	"blank");
define("_AD_MULTIMENU_TARG_PARENT",	"parent");
define("_AD_MULTIMENU_TARG_TOP",	"top");
define("_AD_MULTIMENU_SUREDELETE",	"Are you sure you want to delete this link?");
define("_AD_MULTIMENU_UPDATED",	"Database successfully updated!");
define("_AD_MULTIMENU_NOTUPDATED",	"Could not update database!");
define("_AD_MULTIMENU_SUBMIT", 	"Submit");
define("_AD_MULTIMENU_IMAGE", 	"Picture <font color='red'>*</font>");
// define("_AD_MULTIMENU_GUIDET_TEMPLATE", 	"Create a custom template");

define("_AD_MULTIMENU_CATEGORY",	"Category");
define("_AD_MULTIMENU_NOTES",		"<font color='red'>*</font> multiMenu supports absolutes and relatives urls.<br /><br />
<b><u>Exemples</u> :</b><br /><br />
<u>Absolute URL</u> : <i>".XOOPS_URL."/modules/multiMenu/index.php</i><br />
<u>Relative URL</u> : <i>modules/multiMenu/</i><br /><br />
<table><tr><td><img src='../images/attention.png' /></td><td>To make the dynamic links to work,<br />it is necessary to add ' / ' (trailing slash)
<br />at the end of links linking to directory!</td><tr></table>
<br />
<br />You can use the following tag in your picture path:<ul>
<li>{theme} which would display the current used theme.</li>
<li>{module} which would display the current used module.</li></ul><p />
You can use the following tag as title:<ul>
<li>{pm_new}, {pm_readed}, {pm_total} which would display user's message box count.</li><br />
<li>{alt} which would display customised <b>alt and title</b>'s text</li>
All text after {alt} will be used by alt and title's attributes.<br />
Example of menu's Title : Discussions{alt}Go to the forums<br /><br />
<br />
You can use the following tag in your links and titles:<br /><br />
<li>{user_id} which would display user's id for the logged member.</li></ul><br>
Example : to create a link to the account of the connected member : userinfo.php?uid={user_id}<br />
<br />

</ul>");

define("_AD_MULTIMENU_PREFERENCES", "Preferences");
define("_AD_MULTIMENU_HELP",		"Guide");
define("_AD_MULTIMENU_GUIDE_MENU",	"Guide Menu");
define("_AD_MULTIMENU_GOING",		"When multiMenu goes dynamic");

define("_AD_MULTIMENU_FATHER_INDEX","Parent Index");
define("_AD_MULTIMENU_CANTPARENT",	"An entry can't link to itself or to a child!");
define("_AD_MULTIMENU_ID",		"Id");
define("_AD_MULTIMENU_PID",		"Pid");
define("_AD_MULTIMENU_BLOCK_LINK",	"Visible Block list");

define("_AD_MULTIMENU_GUIDET_GENERAL",	"General");
define("_AD_MULTIMENU_GUIDET_PREF",		"Preferences");
define("_AD_MULTIMENU_GUIDET_INDEX",	"Index");
define("_AD_MULTIMENU_GUIDET_BLOCKS",	"Blocks");
define("_AD_MULTIMENU_GUIDET_TEMPLATE",	"Custom templates");
define("_AD_MULTIMENU_GUIDET_MENU",		"Menus options table");

define("_AD_MULTIMENU_GUIDE_GENERAL",	"
<p align='center'><strong><font size='5'>How to use multiMenu ?</font>
</strong></p><br />
<br />
<strong><u>GENERAL</u>
</strong>
<br />multiMenu is a multifunction links menu manager. It has been designed to easily display links and menus on a Xoops site. For webmasters, links can be added either from the administration side, or directly from a link in the index pages of the module. This 1.7 version now includes a sitemap interface, which will allow the webmaster to design his own navigation.
<br />
<br />
<strong><u>FEATURES</u>
</strong>
<br />The main objective of this module is to allow webmasters who are not used with website or module management to easily display custom menus. Other benefits include plenty of features that allow the webmaster to personalise the use of the module. This includes very flexible block menu allowing many disply type options, as we will see later in this short guide.
<br />
<br /><strong><u>CREDITS</u></strong>
<br />With respect to the design and creation of this module, credits and thanks go to several well-known xoopers: <br />Herv&eacute;, Marcan and Solo for their help and collaboration on this project.
");

define("_AD_MULTIMENU_GUIDE_PREF",	"
<p align='center'><strong><font size='5'>How to use multiMenu ?</font></strong>
</p>
<br /><strong><u>ADMINISTRATION<br /></u></strong>
<br /><strong><u>Preferences (or module general settings)</u>
</strong>
<br /><br />Before using this multiMenu module, we suggest to have a careful look at the admin settings. This is where you will define the functional and personal settings of your module. Those settings have a direct impact on the index pages (but not on block settings).
<br />
<br />
<br /><strong><em>~Display Main page: <br /></em></strong>
You may activate or not the Sitemap option here. If you desactivate it, you may eventuellay keep using it as a fake module to display whatever block you want, or use is as a secondary homepage. Keep in mind this would only deactivate the main index page, not the sub-index sitemap pages.
<br />
<br />
<strong><em>~Introduction text: <br /></em></strong>
Put here the text you want to see above the main index page. This text accept Xoops and HTML codes.
<br />
<br />
<strong><em>~Display banner:</em></strong>
You have the possibility to display or not a banner or the module name above all the module pages. If you want to change the banner, change the '/module/multiMenu/images/logo.gif' file.
<br />
<br />
<strong><em>~Display multiMenu page (from 1 to 4):</em></strong>
Choose the multiMenu content you want to display in the index pages. 
<br />
<br />
<strong><em>~Menu Title (from 1 to 4): <br /></em></strong>
Define the index and admin multiMenu page titles. Pay attention, this won't affect the related blocks title!
<br />
<br />
<strong><em>~Display Nav Bar:</em></strong>
 <br />A navigation bar with the activated index page would display above each and every page. If you don't want this function, you can desactivate it here.
<br />
<br /><strong><em>~Default image width:</em>
</strong>
<br />Fix the standard maximum size value a picture would display on the index pages. It would only resize pictures which are bigger than this value (thus, no stretching effect).
<br />
<br />
<br /><strong><em>~Display icons:</em></strong>
<br />Activating this function would display icons in front of each and every links. There are actually 4 types of links :<br />
<ul>
<li><img src='../images/icon/urllink_01.gif' align='absmiddle' /> Absolute main links</li>
<li><img src='../images/icon/urllink.gif' align='absmiddle' /> Absolute sub links</li>
<li><img src='../images/icon/links_01.gif' align='absmiddle' /> Relative main links</li>
<li><img src='../images/icon/links.gif' align='absmiddle' /> Relative sub links</li>
</ul>");

define("_AD_MULTIMENU_GUIDE_INDEX",	"
<p align='center'><strong><font size='5'>How to use multiMenu ?</font></strong></p>
<br /><strong><u>ADMINISTRATION<br /></u></strong><br />
<strong><u>Admin Index</u></strong>
<br />
<br />
There are 2 differentparts here: A dynamic module navigation bar and the current edited multiMenu.
<br />
<br />
<strong>Module navigation bar consisting of-</strong>
<ul><li> multiMenu main Index Page</li>
<li>Preferences</li>
<li> Help</li>
<li> Admin links</li>
<li> multiMenu (ranging from 1 to 4)</li></ul><br />
Note: there is a color code which indicate if the current multiMenu is displayed or not in the index page.<br />
<br />
You can navigate through the whole module and it&#34;s option thanks to this nav bar. Keep in mind that on each and every page generated by Edito, as admin of the module, you will be able to directly access the edit, delete or administration function.
<br />
<br />
<strong><u>multiMenu index page</u></strong><br />
<br />
Display each and every multiMenu links. <br />
On the main page, you can get some valuable informations regarding your custom links :<br />
<ul>
<li>Picture: display a reduced version of the used picture.</li>
<li>Title</li>
<li>Link</li>
<li>Status: Green for online, red for offline.</li>
<li>Type</li>
<li>Functions: main admin functions, edit, delete, move up and down.</li>
</ul>
Links are ranked in display order. This order can be changed clicking on the green arrows (up and down).
<br />
<br />
Click on 'New Link' to create a new entry. 
<br />
<br />
<strong><u>New link</u></strong><br />
<br />
multiMenu is designed to easily create menu links. You just have to fill in the form to create a new link.<br />
You can choose to display a picture with or without links, with different possible display options.<br />
<br />
<strong><em>~Title:</em></strong> is the link title. You can use html code (to color your links for instance) or smilies. It is better not use the BBCodes.<br />
<br />
<strong><em>~Link:</em></strong> is the url you want your link to point at. Leave it blank if you don't want a clickable link (for information purpose, for instance). The url can beabsolute or relative. If set relative, multiMenu would automatically add the current website path, so that, wherever your block appears on your site, the url would be a correct link. <br />
<br />
<strong><em>~Image:</em></strong> is the picture url of the current link. Same goes as for link regarding the relative or absolute url. If the picture is unavailable or fake, multiMenu would display a default picture (a red paw).<br />
In this version, you have the possibility to use two different tages <strong>{module\}</strong> <strong>{theme\}</strong>, respectively displaying the module or theme used on the current page. Those option would allow you to display specific logos regarding the module or theme the user is navigating the website.<br />
<br />
<strong><em>~Status:</em></strong> define wether you want that link to be dispalyed or not.<br />
<br />
<strong><em>~Type:</em></strong> set the link type you want to apply to the current link. There are 5 different link type :<br />
<ul>
<li><strong>Category:</strong> display as a category link type.</li>
<li><strong>Main link:</strong> standard main link type.</li>
<li><strong>Permanent sublink:</strong> sublink type which would display permanently.</li>
<li><strong>Related sublink:</strong> sublink type which would display dynamically, regarding the parent mainlink. Note that to make the dynamic links to work, it is necessary to add '\ / ' (trailin slash) at the end of main links linking to a directory!
</li>
<li>Note: would display like a standard comment text.</li>
</ul><br />
<strong><em>~Target:</em></strong> 4 different classical target type.</li><br />
<br />
<strong><em>~Groups:</em></strong> selct which group can see or not the current link.</li></ul>
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
- Horizontal Link<br />
- CSS Drop Down Horizontal (Dynamic full CSS menu - drop to the bottom)<br />
- Context<br />
- Context2 (secondary links are supported)<br />
- Treemenu<br />
- Picture<br />
- Scrolling (Scrolling without pause)<br />
- Sliding (Slide with pause)<br />
- List<br />
- Ordered List<br />
- Scrolling list (scrolling without pause)<br />
- Slide List (sliding with pause)<br />
- Drop Down<br />
- Select Box<br />
<br />

<strong><em>~Number of columns:</em></strong><br />
Define the amount of columns you want your links to be displayed. This option is only available for Standard Menu and Fixed Picture option.<br />
<br />
<strong>2) Links</strong><br />
<br />
<strong><em>~Link type to display:</em></strong><br />
Define which kind of links your want to display amongs all links category. <br />
<strong><em>~Order by:</em></strong><br />
In which order do you want to display your links: by weight (defined by admin order) or by ordered or reversed alphabetical order.<br />
<br />
<strong>3) Title</strong><br />
<br />
<strong><em>~Display Title:</em></strong><br />
Do you want to display the links title. This option should be used only with links which have an illustration picture!<br />
<strong><em>~Max. Lenght:</em></strong><br />
How maximum long should be the title ? Define the maximum value here.<br />
<br />
<strong>4) Picture</strong><br />
<br />
<strong><em>~Display Picture:</em></strong><br />
Do you want to display the links title.<br />
<strong><em>~Max. Width:</em></strong><br />
Set the maximum picture width to keep a uniform look of your illustrations and menus. If the picture is smaller, it won't be resized to prevent any pixelisation effect.<br />
<br />
<strong>5) Scroll Settings</strong><br />
Those options are only valuable if you select the Sliding Picture format. <br />
<strong><em>~Block width and height:</em></strong><br />
Define the block general size. Check picture width option to tweak the perfect settings.<br />
<strong><em>~Speed:</em></strong><br />
Define the general scrolling speed of your pictures and links. <br />
<br />
<strong>6) Random Links</strong><br />
<br />
<strong><em>~Random links:</em></strong></strong><br />
multiMenu gives you the possibility to display a selection of random links. Define here wether you want it or not. Of course, this options should be used carefully if you are using several different link types (category, main links, sublinks and note) and work better with only one link type.<br />
<br />
<strong><em>~Number of random link to display:</em></strong><br />
This option define the number of random link to display. Keep in mind that it would display X links after the first random picked links. <br />
<br />
<hr />
<h1 align='center'>Tips and tricks</h1>
<br />
<b>1. <u>About A and B custom blocs</u></b><br />
<br />
A and B so called blocs are non linked to a specific menu.<br />
Only for those two blocs settings, you can attribuate them any created menu.<br />
What's the interest? For instance, you may display the same menu under two different aspects (i.e.: one dynamic and one drop down list).<br />
You may display both menues on the same page, or display 2 menues at different places on your website pages.
<br /><br />
<br />
<b>2. <u>Menu integration into a Xoops theme</u></b><br />
<br />
Here is an exemple with the horizontal dynamic menu, in 3 steps:<br /><br />
<b>1)</b> Activate your menu selecting the horizontal dynamic option.<br />
Into the bloc setting, set 'navbar' as bloc title and select column left display.<br /><br />
<b>2)</b> Edit your theme 'theme.html' file, and add the following code where you want your menu to be displayed:<br /><br />
<br />
<textarea rows='5'>
<{foreach item=block from=&#36;xoops_lblocks}>
  <{if &#36;block.title == 'navbar'}>
    <{&#36;block.content}>
  <{/if}>
<{/foreach}>
</textarea>
<br /><br />

<b>3)</b> Next step, spot the smarty lines used to generate your left side blocs and change it as following:
<br /><br />
Before :
<br /><br />
<textarea rows='3'>
<{foreach item=block from=&#36;xoops_lblocks}>
   <{include file='default/theme_blockleft.html'}>
<{/foreach}>
</textarea>
<br /><br />

After :
<br /><br />
<textarea rows='5'>
<{foreach item=block from=&#36;xoops_lblocks}>
  <{if &#36;block.title != 'navbar'}>
   <{include file=='default/theme_blockleft.html'}>
  <{/if}>
<{/foreach}>
</textarea>
<br /><br />
<i>Explanation:</i>
<br /><br />
- 'navbar' is the name of the bloc which needs to be displayed or not.
<br /><br />
- The first code displays the left bloc having 'navbar' as title.
<br /><br />
- Le second one displays all the blocs except the one which has 'navbar' as title.

<br />
<br /><br />

<b>To display block content without block title</b><br />

For certain menus, and better screen display, you can wish to display only the contents of the menu, on the left, the right or the center of your site, while hiding the title of the block.<br />
The code approaches much that considering previously, for the integration of a menu in your theme.<br />
For example, I have a menu located in the left-hand column, which names <b>Tree</b>.<br />
I edit my theme, and i seek the sequence which displays the left blocks.<br />
I find the following code :<br /><br />

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

And I modify it in the following way :<br /><br />

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
If the title of the block is <b>Tree</b>, then I do not display it.<br/>
One can proceed thus for several blocks where necessary. <br/>
Let us take <b>Tree1</b> and <b>Tree2</b>.<br>
The test becomes then : <br/><br/>
<textarea rows='1'>
<{if &#36;block.title != 'Tree1' AND &#36;block.title != 'Tree2' }>
</textarea>

<br />
<br /><br />
<b>3. <u>Quick link ordering</u> (The Fox tip)</b><br />
<br />
You probably have noticed that the green arrows allow you to rise up or down into links display order. Unfortunatly it's not very usefull when your menu has a lot of links...<br />
Here is the trick to quickly display a new link to a specific spot, in 3 clicks.<br /><br />
<ul>
<li>1st click: Add your new link.</li>
<li>2nd click: Click on its up green arrow.</li>
<li>3rd click: In the page adress (URL), change directly the weight value.</li></ul>

For instance, we change the followin link:<br />
<br />
<i>http://www.mysite.com/modules/multiMenu/admin/index.php?op=move&id=18&<b>weight=<font color='red'>21</font></b>&Menu=01<br /></i>
<br />
in<br /><br />
<i>http://www.mysite.com/modules/multiMenu/admin/index.php?op=move&id=18&<b>weight=<font color='red'>1</font></b>&Menu=01</i><br />
<br />
And validate. The link will now be displayed at first place.<br />
The weight value may vary following the place you want to display it...<br />
<br />
Thanks for choosing multiMenu, as always, we are happy to receive any comments and feedback so that we may continually improve the quality and features of this module.<br />
<br />- The authors");

define("_AD_MULTIMENU_GUIDE_TEMPLATE",	"
<p align='center'><strong><font size='5'>How to create your own custom multiMenu templates?</font>
</strong></p>
<br />This modest guide will help you to understand how to create your own own menu templates. We will define process to respect so that you may design your multiMenu bloc. Languages which we are talking about are hmtl and Smarty. Other dynamic script languages are not aborded in this guide. No php knowledge are required here.<br />
<br /><b>A. <u>Basis</u></b>
<br />
<br /><b>1) <u>Smarty variable</u></b>
<br />
<br />There are 2 types of variables available to create your menus. 
<br />
<br /><b>a. Blocs settings variables: &lt;{&#36;block.<i>variable</i>}></b>
<br />They define the activated bloc settings:
<br />
<br />&lt;{&#36;block.format}> : Used menu format (i.e.: ul, ol, menu, menu_01 to 05, etc.)
<br />&lt;{&#36;block.marquee}> : Marquee tag (for content scrolling).
<br />&lt;{&#36;block.columns}> : Number of links to display in a table column before activating a new column.
<br />&lt;{&#36;block.block_size}> : Block width, usefull for script using this information (i.e. Java script).
<br />&lt;{&#36;block.marquee_height}> : Block height.
<br />&lt;{&#36;block.marquee_delay}> : Delay time setting for marquee tag.
<br />&lt;{block.mm}> : Current activated menu (value ranging from 01 to 08). This value is used to make a difference in script codes and assure compatibility between menus displayed on the same pages.
<br />
<br />
<br /><b>b. Content variables: &lt;{&#36;imenu.variable}></b>
<br />Those are generated by the module content and allow links creation.
<br />&lt;{&#36;imenu.submenu}>: link type. 
<br />0 = main link
<br />1 = permanent secondary link
<br />2 = linked secondary link
<br />3 = note
<br />4 = category
<br />
<br />&lt;{&#36;imenu.title}><b>: link title (active code)</b>
<br />
<br />&lt;{&#36;imenu.alt_title}><b>: link title (inactive BBcode, html code)</b>
<br />
<br /> &lt;{&#36;imenu.target}><b>: target tag (_self, _blank, _parent, _child)</b>
<br /> 
<br />&lt;{&#36;imenu.link}><b>: Created link (url - target - alt title). ie: &lt;a href=&#34;http://www.mysite.com/index.php&#34; target=&#34;_self&#34; title=&#34;My site&#34;></b>
<br />
<br />&lt;{&#36;imenu.linkurl}><b>: URL only : ex : http://www.mysite.com/index.php.</b>
<br />
<br />&lt;{&#36;imenu.a}><b>: Wether the url exists or not, would display: &lt;/a></b>
<br />
<br />&lt;{&#36;imenu.image}><b>: Constituted image (url - width - image name). i.e.: &lt;img href=&#34;http://www.mysite.com/illu.gif&#34; width=&#34;160&#34; alt=&#34;My site&#34; /></b>
<br />
<br />&lt;{&#36;imenu.imageurl}><b>: Image url only. i.e.: http://www.mysite.com/illu.gif</b>
<br />
<br /><b>2) <u>Create an url</u></b>
<br />
<br /><b>A. Simple method</b>
<br />The easiest way is as following, wether there is ornot an url:
<br />
<br />&lt;{&#36;imenu.link}>
<b>// Full link (inlcuding target and title tag</b>
<br />&lt;{&#36;imenu.image}>
<b>// The picture if any</b>
<br />&lt;{&#36;imenu.title}> <b>// Title if any</b>
<br />&lt;{&#36;imenu.a}>
<b>// Closing tag if any</b>
<br />
<br /><b>B. Full method</b>
<br />This second method is available if we want to keep the link aspect or if we use the style sheet classes:
<br />
<br />&lt;a class=&#34;mainMenu&#34;
<b>// Style sheet class</b>
<br />&lt;{if &#36;imenu.link}>href=&#34;&lt;{&#36;imenu.linkurl}>&#34; &lt;{&#36;imenu.target}>&lt;{/if}><b>// url</b>
<br /> title=&#34;&lt;{&#36;imenu.alt_title}>&#34;> <b>// Title tag</b>
<br />&lt;{&#36;imenu.image}><b>// Picture</b>
<br />&lt;{&#36;imenu.title}>
<b>// Title</b>
<br />&lt;{&#36;imenu.a}>
<b>// Closing tag</b>
<br />
<br /><b>C. Alternative method</b>
<br />This third method allow to make a distinction wether the link includes an url or not.
<br />
<br />&lt;{if &#36;imenu.link}>
<b>// Is there an url?</b>
<br />'>
<b>// Yes, I generate a norml link</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<br />&lt;{else}>
<b>// No, I display another aspect</b>
<br />&lt;font color=&#34;red&#34;>&lt;{&#36;imenu.title}>&lt;/font>
<br />&lt;{/if}>
<br />
<br />In the second cas, we can add a picture which would enhance the fact that it is an informative or transitionnal link (used in the dynamic menus for instance). 
<br />
<br />
<br /><b><u>3) Create available links in a list</u></b>
<br />
<br />Here is a simple code to display the different available links:
<br />
<br />&lt;{foreach item=imenu from=&#36;block.contents}>
<b>// Generate the loop to get the available links</b>
<br />
<br />&lt;{if &#36;imenu.submenu == 0}>
<b>// Main links</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<b>// Secondary permanent or relative sublinks</b>
<br />&lt;{elseif &#36;imenu.submenu == 1 OR &#36;imenu.submenu == 2}>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 3}>
<b>// Information note</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 4}>
<b>// Categories</b>
<br />&lt;h3>&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/h3>
<br />&lt;{/if}>
<br />
<br />&lt;{/foreach}>
<b>// End of the loop
</b>
<br />
<br />
<br />4) Gerenation of a table with several columns
<br />
<br />
&lt;{counter start=0 print=false}> 
<b>// Creat counter</b>
<br />
<br />&lt;table>
<b>// Open table</b>
<br />&lt;tr>
<br />&lt;td>
<br />
<br /> 
&lt;{foreach item=imenu from=&#36;block.contents}>
<b>// Create loop to get links</b>
<br />
<br />
&lt;{if &#36;count >= &#36;block.columns_limit}> 
<b>// Check wether the counter has reached the total number of links to display in a single column</b>
<br />&lt;/td>&lt;td>
<b>// If yes, generate a new column</b>
<br />&lt;{counter start=0 print=false}>
// Reset counter
<br />&lt;{/if}> 
<b>// End of checking</b>
<br />
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>
<b>// Generate table content</b>
<br />
&lt;{counter assign=count print=false}>
<b>// For each link, add 1 to counter</b>
<br />
<br />&lt;{/foreach}>
<b>// End of loop</b>
<br />
<br />&lt;/td>
<b>// Close table</b>
<br />&lt;tr>
<br />&lt;/table>
<br /> 
<br />
<br /><b>B. <u>Complexe menu</u></b>
<br />
<br />Displaying complex menus, requires complex code. For instance, if you want to make a difference following the link type, wether it is a main, secondary, note or category.
<br />
<br />
<br /><b><u>1) Generation of a unordered list</u></b>
<br />
<br />The difficulty is to know when to open or close the tag list. For this purpose, we are going to create a smarty variable which will determine wether a tag is open or closed. Checking this value each time we generate a new link in the loop, we are going to know wether we need to close or open it.
<br />
<br />&lt;{counter start=0 print=false}>
<br />&lt;{assign var=ul_main value=0}>
<b>// Initiate smarty variable of the main list: ul_main</b>
<br />&lt;{assign var=ul_sec value=0}>
<b>// Initiate smarty variable of the secondary list: ul_sec</b>
<br /> &lt;{foreach item=imenu from=&#36;block.contents}>
<br /> 
<br />&lt;{if &#36;imenu.submenu == 0}>
<b>// Main link</b>
<br />&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{assign var=ul_sec value=0}>&lt;{/if}>
<b>// If secondary list is open, let's close it</b>
<br />&lt;{if &#36;ul_main == 0}>&lt;ul>&lt;{assign var=ul_main value=1}>&lt;{/if}> 
<b>// If main list is closed, let's open it</b>
<br />&lt;li>&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/li>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 1 OR &#36;imenu.submenu == 2}>
<b>// Secondary link</b>
<br />&lt;{if &#36;ul_sec == 0}>&lt;ul>&lt;{assign var=ul_sec value=1}>&lt;{/if}>
<b>// If secondary list is closed, let's open it</b>
<br />
<br />&lt;li>&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/li>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 3}>
<b>// Note</b>
<br />&lt;{if &#36;ul_main == 1}>&lt;/ul>&lt;{assign var=ul_main value=0}>&lt;{/if}>
<b>// If main list is open, let's close it</b>
<br />&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{assign var=ul_sec 
value=0}>&lt;{/if}> 
<b>// If secondary list is open, let's close it</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;{&#36;imenu.title}>&lt;{&#36;imenu.a}>&lt;/p>
<br />
<br />&lt;{elseif &#36;imenu.submenu == 4}>
<b>// Category</b>
<br />&lt;{if &#36;ul_main == 1}>&lt;/ul>&lt;{assign var=ul_main value=0}>&lt;{/if}>
<b>// If main list is open, let's close it</b>
<br />&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{assign var=ul_sec 
value=0}>&lt;{/if}> 
<b>// If secondary list is open, let's close it</b>
<br />&lt;{&#36;imenu.link}>&lt;{&#36;imenu.image}>&lt;h3>&lt;{&#36;imenu.title}>&lt;/h3>&lt;{&#36;imenu.a}>
<br />&lt;{/if}>
<br />&lt;{/foreach}>
<br /><span style='mso-tab-count: 11'> 
<b>// After the loop is done, check what is open, and let's close everything that need it.</b>
<br />&lt;{if &#36;ul_main == 1}>&lt;/ul>&lt;{/if}>
<b>// If the main list is open, let's close it</b>
<br />
&lt;{if &#36;ul_sec == 1}>&lt;/ul>&lt;{/if}>
<b>// If secondary list is open, let's close it</b>
<br />
<br />
<br />
<br /><b><u>2) Create a dynamic menu checking wether a main link has sublinks</u></b>
<br />
<br />The most difficult part of the dynamic lists are to forseen wether they have sublinks or not. The fact is that multiMenu displays all the links one by one. The only way to proceed it to delay the link display, creating a sort of temporary structure. Current values are writen &#36;imenu.submenu, while cached balues are writen &#36;submenu. In the below script, we have developped a classical unordered list.
<br />
<br /> &lt;{counter start=0 print=false}>
<br /> &lt;{counter assign=count print=false}>
<br />&lt;{assign var=ul value=0}>
<br />
<br />&lt;{foreach item=imenu from=&#36;block.contents}> 
<b>// Creat loop to get links</b>
<br />&lt;{if &#36;submenu == &#34;0&#34;}>
<b>// Cached link is a main link. In the same time, we check wether there is already a cached value. If not, we pass by (value egale &#34;0&#34; and not 0).</b>
<br />&lt;{if &#36;ul == 0}>&lt;ul>&lt;{assign var=ul value=1}>&lt;{/if}> 
<br />&lt;!-- Main link -->
<br />
&lt;{if &#36;imenu.submenu == &#34;1&#34; OR &#36;imenu.submenu == &#34;2&#34;}> 
<b>// If the current link is a sublink, we know that the cache must switch to the sublink activation script.</b>
<br />&lt;li class=&#34;multimenu&#34;>
<br />
&lt;a title=&#34;&lt;{&#36;alt_title}>&#34;
<b>// Create the cached mainlink with script, as it has a sublink</b>
<br />
&lt;{if &#36;linkurl}>&lt;{&#36;target}>href=&#34;&lt;{&#36;linkurl}>&#34;&lt;{else}>onClick=&#34;return clickreturnvalue03()&#34;&lt;{/if}>
<br />
onMouseover=&#34;dropdownmenu03(this, event, menu&lt;{&#36;block.mm}>&lt;{&#36;count}>, menuwidth)&#34; 
<br />onMouseout=&#34;delayhidemenu03()&#34;>
<br />
&lt;img src=&#34;&lt;{&#36;xoops_url}>/modules/multiMenu/script/images/arrow1.gif&#34; alt=&#34;&lt;{&#36;alt_title}>&#34; /> // The current link is a sublink, so we display a little arrow on the cached mainlink.
<br />&lt;{else}>
<b>// The current link is not a sublink (a mainlin, a category or a note) so we don't add a little arrow and we deactivate the script for the cached link. </b>
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
<b>// The cached link is a note.</b>
<br />&lt;{if &#36;ul == 1}>&lt;/ul>&lt;/div>&lt;{assign var=ul value=0}>&lt;{/if}>
<br />&lt;!-- Note -->
<br />&lt;div class=&#34;menuNote&#34;>&lt;{&#36;link}>&lt;{&#36;image}>&lt;{&#36;title}>&lt;{&#36;a}>&lt;/div>
<br /> &lt;{counter assign=count print=false}>
<br /> 
<br />&lt;{elseif &#36;submenu == &#34;4&#34;}>
<b>// The cached link is a category.</b>
<br />&lt;!-- Categorie -->
<br />&lt;{if &#36;ul == 1}>&lt;/ul>&lt;/div>&lt;{assign var=ul value=0}>&lt;{/if}>
<br />&lt;div class=&#34;menuCat&#34;>&lt;h3>&lt;{&#36;link}>&lt;{&#36;image}>&lt;{&#36;title}>&lt;/h3&lt;/div>
<br />&lt;{/if}>
<br />
<br />&lt;{assign var=submenu
value=&#36;imenu.submenu}>
<b>// Retrieve values of the current link to set in cache.</b>
<br />&lt;{assign var=linkurl
value=&#36;imenu.linkurl}>
<b>// Those values are used to display links at next loop </b>
<br /> &lt;{assign var=link value=&#36;imenu.link}>
<br /> &lt;{assign var=counter value=&#36;count}>
<br /> &lt;{assign var=target value=&#36;imenu.target}>
<br /> &lt;{assign var=alt_title value=&#36;imenu.alt_title}>
<br /> &lt;{assign var=image value=&#36;imenu.image}>
<br /> &lt;{assign var=title value=&#36;imenu.title}>
<br /> &lt;{assign var=a value=&#36;imenu.a}>
<br /> 
<br />&lt;{/foreach}>
<b>// End of loop</b>
<br />
<br />&lt;{if &#36;submenu == &#34;0&#34;}>
<b>// Because of the cache, we display the latest link kept in cache.</b>
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
<link rel='stylesheet' type='text/css' href='".ICMS_URL."/modules/multiMenu/css/default.css' />
<{else}>
<link rel='stylesheet' type='text/css' href='".ICMS_URL."/modules/multiMenu/css/second.css' />
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
define("_AD_MULTIMENU_OPTIONS_NUM", "No.");
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
define("_AD_MULTIMENU_OPTIONS_CONTEXT2", "Context2 (IE only!)");
define("_AD_MULTIMENU_OPTIONS_TREE", "Tree Menu");
define("_AD_MULTIMENU_OPTIONS_TABHORIZ", "Horizontal Link");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZ", "Drop Down Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNHORIZCSS", "CSS Drop Down Horizontal");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT", "Drop Down Vertical");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERT2", "Drop Down Vertical 2");
define("_AD_MULTIMENU_OPTIONS_DROPDOWNVERTCSS", "CSS Drop Down Vertical");
define("_AD_MULTIMENU_OPTIONS_SWITCHVERT", "Switch vertical");
define("_AD_MULTIMENU_OPTIONS_PRINCMEN", "[Menu]");

define("_AD_MULTIMENU_OPTIONS_DESC1", "ImpressCMS typical main menu");
define("_AD_MULTIMENU_OPTIONS_DESC2", "Open and close submenus (compatible noscript)");
define("_AD_MULTIMENU_OPTIONS_DESC3", "Vertical dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC31", "2nd Vertical dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC32", "CSS Vertical dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC4", "Horizontal dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC41", "CSS Horizontal dynamic drop down menu");
define("_AD_MULTIMENU_OPTIONS_DESC5", "Horizontal dynamic hide/show sublinks");
define("_AD_MULTIMENU_OPTIONS_DESC6", "Dynamic, right-click context menu");
define("_AD_MULTIMENU_OPTIONS_DESC61", "Dynamic, right-click context menu. Secondary links supported. Html desactivated. Works in IE only.");
define("_AD_MULTIMENU_OPTIONS_DESC62", "Tree Menu");
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

define("_AD_MULTIMENU_OPTIONS_SWITCHVERT_TITLE_TIPS", "Menu Switch Vertical");
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
