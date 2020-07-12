<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: multiMenu 1.90
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*			- herve (http://www.herve-thouzard.com)
*			- blueteen (http://myxoops.romanais.info)
*			- DuGris (http://www.dugris.info)
*/

define("_MI_POPGEN_MODULE",	"multiMenu");
define("_MI_POPGEN_NAME",	"multiMenu ");
/*define("_MI_POPGEN_NAME_",	"multiMenu ");

// Jusqu'� 20 popgen, changer la valeur ci-dessous par : 8,10,12,16,18,20
// Attention une fois le module install� cette valeur ne dois pas �tre modifi�e
// sous peine de disfonctionnement du module
define("_MI_POPGEN_NUMBER",	8);


for ($i = 1; $i <= _MI_POPGEN_NUMBER; $i++) {
	$idMenu = sprintf("%02d",$i);
	define("_MI_POPGEN_NAME_".$idMenu,	"multiMenu ".$idMenu);
	define("_MI_POPGEN_MM_INDEX_".$idMenu, "Afficher dans l'index le menu ".$idMenu);
	define("_MI_POPGEN_MM_TITLE_".$idMenu,	"Titre du Menu".$idMenu);
}
  */
define("_MI_POPGEN_NAME_A",	"multiMenu A");
define("_MI_POPGEN_NAME_B",	"multiMenu B");
define("_MI_POPGEN_DESC",		"Permet de cr�er jusqu'� 8 menus personnalis�s diff�rents.");

define("_MI_POPGEN_NAME_ADMIN",	"Bloc Admin");
define("_MI_POPGEN_TEXT_INDEX",	"Texte d'introduction de la page d'index");
define("_MI_POPGEN_TEXT_INDEXDSC","Ins�rez ici le texte d'introduction<br />� afficher dans la page d'accueil");
define("_MI_POPGEN_WELCOME",	"<div align='center'>Bienvenue dans multiMenu 1.8.
<i>\"Quand multiMenu devient Dynamique !\"</i>


Pour plus d'informations ou pour rapporter d'�ventuels beugs, visitez <a href='http://www.wolfpackclan.com/wolfactory/' target='_blank'>WolFactory</a>.

:-D
</div>
<div align='left'>Solo</div>

<div align='left'>Note : pour �diter ce texte, allez dans les pr�f�rences du module.</div>");
define("_MI_POPGEN_SHOW_MAIN",	"Afficher la page principale :");
define("_MI_POPGEN_DISPLAY_NAV",	"Afficher le menu de navigation :");

/*
define("_MI_POPGEN_MM01_INDEX",	"Afficher Menu 1 dans l'index");
define("_MI_POPGEN_MM02_INDEX",	"Afficher Menu2 dans l'index");
define("_MI_POPGEN_MM03_INDEX",	"Afficher Menu3 dans l'index");
define("_MI_POPGEN_MM04_INDEX",	"Afficher Menu4 dans l'index");
define("_MI_POPGEN_MM05_INDEX",	"Afficher Liens Admin dans l'index");

define("_MI_POPGEN_MM01_TITLE",	"Titre Menu 1");
define("_MI_POPGEN_MM02_TITLE",	"Titre Menu 2");
define("_MI_POPGEN_MM03_TITLE",	"Titre Menu 3");
define("_MI_POPGEN_MM04_TITLE",	"Titre Menu 4");
define("_MI_POPGEN_MM05_TITLE",	"Titre Menu Admin");
*/

define("_MI_POPGEN_INDEX",		"Index");
define("_MI_POPGEN_ADMIN",		"Admin");
define("_MI_POPGEN_READ",		"Lectures : ");
define("_MI_POPGEN_IMAGE_WIDTH",	"Largeur d'image par d�faut : ");
define("_MI_POPGEN_ICONS",		"Afficher les ic�nes : ");
define("_MI_POPGEN_COL",			"Nombre de colonne � afficher");

define("_MI_POPGEN_BANNER_DISP",	"Afficher la banni�re :");
define("_MI_POPGEN_BANNER",	"Banni�re");
define("_MI_POPGEN_MODULENAME",	"Nom du module");
define("_MI_POPGEN_NONE",		"- Rien -");
define("_MI_POPGEN_THEME_TYPE",	"Type de menu � afficher dans le th�me :");
define("_MI_POPGEN_THEME_TABLE",	"Table");
define("_MI_POPGEN_THEME_PATH",	"Chemin");

// multiMenu 1.9
define("_MI_POPGEN_IMG_FSIZE", "<font color='#CC0000'>[UPLOAD]</font>");
define("_MI_POPGEN_IMG_FSIZE_DSC", "Taille maximale (en octets) des images upload�es");

define("_MI_POPGEN_IMG_WIDTH", "<font color='#CC0000'>[UPLOAD]</font>");
define("_MI_POPGEN_IMG_WIDTH_DSC", "Largeur maximale des images upload�es");

define("_MI_POPGEN_IMG_HEIGHT", "<font color='#CC0000'>[UPLOAD]</font>");
define("_MI_POPGEN_IMG_HEIGHT_DSC", "Hauteur maximale des images upload�es");

?>