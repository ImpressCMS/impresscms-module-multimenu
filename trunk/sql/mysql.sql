CREATE TABLE `multimenu_counter` (
  `conf_key` varchar(255) NOT NULL default '',
  `conf_value` varchar(255) NOT NULL default ''
) TYPE=MyISAM;

#
# Dumping data for table `multimenu_counter`
#

INSERT INTO `multimenu_counter` VALUES ('multimenu_index', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_01', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_02', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_03', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_04', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_05', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_06', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_07', '0');
INSERT INTO `multimenu_counter` VALUES ('multimenu_08', '0');


CREATE TABLE multimenu01 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;


CREATE TABLE multimenu02 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;

CREATE TABLE multimenu03 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;

 
CREATE TABLE multimenu04 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;

CREATE TABLE multimenu05 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;


CREATE TABLE multimenu06 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;


CREATE TABLE multimenu07 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;


CREATE TABLE multimenu08 (
  id int(5) unsigned NOT NULL auto_increment,
  pid int(5) unsigned NOT NULL default '0',
  title varchar(255) NOT NULL default '',
  hide tinyint(1) unsigned NOT NULL default '0',
  submenu tinyint(1) NOT NULL default '0',
  link varchar(255) default NULL,
  imageurl varchar(255) NOT NULL default '',  
  weight tinyint(4) unsigned NOT NULL default '0',
  target varchar(10) default NULL,
  groups varchar(255) default NULL,
  PRIMARY KEY (id)
) TYPE=MyISAM;

#
# Contenu de la table `multimenu08`
#

INSERT INTO `multimenu08` VALUES (1, 2, 'General Settings', 1, 1, 'modules/system/admin.php?fct=preferences&op=show&confcat_id=1', '', 3, '_blank', '1');
INSERT INTO `multimenu08` VALUES (2, 2, 'Preferences', 1, 0, 'modules/system/admin.php?fct=preferences', '', 2, '_blank', '1');
INSERT INTO `multimenu08` VALUES (3, 2, 'User Settings', 1, 1, 'modules/system/admin.php?fct=preferences&op=show&confcat_id=2', '', 4, '_blank', '1');
INSERT INTO `multimenu08` VALUES (4, 2, 'Meta & Footer', 1, 1, 'modules/system/admin.php?fct=preferences&op=show&confcat_id=3', '', 5, '_blank', '1');
INSERT INTO `multimenu08` VALUES (5, 5, 'Admin', 1, 4, 'admin.php', '', 0, '_blank', '1');
INSERT INTO `multimenu08` VALUES (6, 2, 'Word Censorship', 1, 1, 'modules/system/admin.php?fct=preferences&op=show&confcat_id=4', '', 6, '_blank', '1');
INSERT INTO `multimenu08` VALUES (7, 2, 'Search Options', 1, 1, 'modules/system/admin.php?fct=preferences&op=show&confcat_id=5', '', 7, '_blank', '1');
INSERT INTO `multimenu08` VALUES (8, 2, 'Mail Setup', 1, 1, 'modules/system/admin.php?fct=preferences&op=show&confcat_id=6', '', 8, '_blank', '1');
INSERT INTO `multimenu08` VALUES (38, 37, 'Admin', 1, 2, 'modules/news/admin/', '', 31, '_blank', '1');
INSERT INTO `multimenu08` VALUES (36, 36, 'Modules', 1, 4, '', '', 29, '_self', '1 2 3');
INSERT INTO `multimenu08` VALUES (37, 37, 'News', 1, 0, 'modules/news/', '', 30, '_self', '1 2 3');
INSERT INTO `multimenu08` VALUES (12, 12, 'Blocks', 1, 0, 'modules/system/admin.php?fct=blocksadmin&selmod=-1&selgrp=2&selvis=2', '', 10, '_blank', '1');
INSERT INTO `multimenu08` VALUES (13, 12, 'Visible', 1, 1, 'modules/system/admin.php?fct=blocksadmin&selmod=-1&selgrp=2&selvis=1', '', 11, '_blank', '1');
INSERT INTO `multimenu08` VALUES (14, 12, 'Hidden', 1, 1, 'modules/system/admin.php?fct=blocksadmin&selmod=-1&selgrp=2&selvis=0', '', 12, '_blank', '1');
INSERT INTO `multimenu08` VALUES (39, 37, 'Create article', 1, 2, 'modules/news/admin/index.php?op=newarticle', '', 32, '_blank', '1');
INSERT INTO `multimenu08` VALUES (16, 12, 'Add custom block', 1, 1, 'modules/system/admin.php?fct=blocksadmin#newblock', '', 13, '_blank', '1');
INSERT INTO `multimenu08` VALUES (18, 18, 'Groups', 1, 0, 'modules/system/admin.php?fct=groups', '', 18, '_blank', '1');
INSERT INTO `multimenu08` VALUES (19, 19, 'Users', 1, 0, 'modules/system/admin.php?fct=users', '', 14, '_blank', '1');
INSERT INTO `multimenu08` VALUES (20, 19, 'Find', 1, 1, 'modules/system/admin.php?fct=findusers', '', 15, '_blank', '1');
INSERT INTO `multimenu08` VALUES (21, 21, 'Modules', 1, 0, 'modules/system/admin.php?fct=modulesadmin', '', 9, '_blank', '1');
INSERT INTO `multimenu08` VALUES (22, 19, 'Mail', 1, 1, 'modules/system/admin.php?fct=mailusers', '', 16, '_blank', '1');
INSERT INTO `multimenu08` VALUES (23, 19, 'Ranks', 1, 1, 'modules/system/admin.php?fct=userrank', '', 17, '_blank', '1');
INSERT INTO `multimenu08` VALUES (25, 18, 'Webmaster', 1, 1, 'modules/system/admin.php?fct=groups&op=modify&g_id=1', '', 19, '_blank', '1');
INSERT INTO `multimenu08` VALUES (26, 18, 'Registered', 1, 1, 'modules/system/admin.php?fct=groups&op=modify&g_id=2', '', 20, '_blank', '1');
INSERT INTO `multimenu08` VALUES (27, 18, 'Anonymous', 1, 1, 'modules/system/admin.php?fct=groups&op=modify&g_id=3', '', 21, '_blank', '1');
INSERT INTO `multimenu08` VALUES (28, 28, 'Misc.', 1, 0, '', '', 22, '_blank', '1');
INSERT INTO `multimenu08` VALUES (29, 28, 'Banner', 1, 1, 'modules/system/admin.php?fct=banners', '', 23, '_blank', '1');
INSERT INTO `multimenu08` VALUES (30, 28, 'Image manager', 1, 1, 'modules/system/admin.php?fct=images', '', 24, '_blank', '1');
INSERT INTO `multimenu08` VALUES (31, 28, 'Smilies', 1, 1, 'modules/system/admin.php?fct=smilies', '', 25, '_blank', '1');
INSERT INTO `multimenu08` VALUES (32, 28, 'Avatars', 1, 1, 'modules/system/admin.php?fct=avatars', '', 26, '_blank', '1');
INSERT INTO `multimenu08` VALUES (33, 28, 'Template manager', 1, 1, 'modules/system/admin.php?fct=tplsets', '', 27, '_blank', '1');
INSERT INTO `multimenu08` VALUES (34, 28, 'Comments', 1, 1, 'modules/system/admin.php?fct=comments', '', 28, '_blank', '1');
INSERT INTO `multimenu08` VALUES (35, 35, 'System admin', 1, 4, 'modules/system/admin.php', '', 1, '_blank', '1 2 3');
INSERT INTO `multimenu08` VALUES (40, 37, 'Submit new', 1, 2, 'modules/news/submit.php', '', 33, '_self', '1 2 3');
        