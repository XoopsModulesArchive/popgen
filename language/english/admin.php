<?php
/**
* XOOPS - PHP Content Management System
* Copyright (c) 2001 - 2006 <http://www.xoops.org/>
*
* Module: multiMenu 2.x
* Licence : GPL
* Authors :
*           - solo (http://www.wolfpackclan.com/wolfactory)
*/
// 2.x

// Common values
$main_val_array =  array( 
// commons
                'IMAGE'        => 'Image',
                'ID'           => 'N�',
                'TITLE'        => 'Titre',
                'ADMIN'        => 'Admin',

                'ONLINE'       => 'Activ�',
                'OFFLINE'      => 'D�sactiv�',
                'HIDDEN'       => 'Cach�',
                'HIDE'         => 'Cacher',
                'OPTIONS'      => 'Options',
                'UPDATE'       => 'Mettre � jour',
                'NODATA'       => 'Aucune donn�e s�lectionn�e !',
                'SITEMAP'      => 'Plan du site',
                'DESC'         => 'Description',
                'OFF'          => 'En ligne',
                'ON'           => 'Hors ligne',

                'medias'       => 'M�dias',
                'div'          => 'Div',
                'dirselect'    => 'R�pertoire de stockage',

                'HELP'         => 'Aide',
                'INDEX'        => 'Index',
                'INDEXDSC'     => 'Index des pages',
                'CREDIT'       => '%s est une creation originale du %s.',
                'QUERIES'      => 'Requ�tes',
                'MENU'         => 'Menus',
                'LINK'         => 'Liens',
                'URL'          => 'Url',
                'QUERY'        => 'Requ�te',
                'BLOCKS'       => 'Blocs & Permissions',
                'IMAGES'       => 'Images',
                'SETTINGS'     => 'Pr�f�rences',
                'TEMPLATES'    => 'Templates',
                'UTILS'        => 'Utilitaires',
                'STATUS'       => 'Status',
                'EDIT'         => 'Editer',
                'CLONE'        => 'Cloner',
                'CANCEL'       => 'Annuler',
                'SUBMIT'       => 'Enregistrer',
                'DELETE'       => 'Supprimer',
                'OTHER'        => 'Autre :',
                'CSS'          => 'Feuille de style',

// Admin tab menus
                'SETTINGSDSC'  => '1. S�lectionner les pr�f�rences g�n�rales du module',
                'TEMPLATESDSC' => '2. G�rer les templates',
                'IMAGESDSC'    => '3. G�rer les images',
                'BLOCKSDSC'    => '4. Activer les blocs et permissions d\'acc�s',
                'UTILSDSC'     => '5. Utilitaire de clonage du module',
                'HELPDSC'      => '6. Aide sur le module.',

// SQL operations
                'INSERTED'     => 'Donn�es cr��es avec succ�s.',
                'UPDATED'      => 'Donn�es mises � jour avec succ�s.',
                'CONFIRM'      => 'Etes-vous certain de vouloir supprimer :',
                'DELETED'      => 'Donn�es supprim�es avec succ�s !',
                'SUREDELETE'   => 'Etes-vous certain de vouloir supprimer ce lien ?',
                'NOTUPDATED'   => 'Impossible de mettre la Base de donn� � jour !',


// Images
                'RESIZE'       => 'Redimensionner',
                'UPLOAD'       => 'T�l�verser',
                'NEWIMAGE'     => 'T�l�verser une nouvelle image',
                'SERVER_CONF'  => 'Infos configuration serveur',
                'XOOPS_VERSION'=> 'Version XOOPS',
                'GRAPH_GD_LIB_VERSION'      => 'Librairie GD',

                'GIF_SUPPORT'  => 'Support GIF',
                'JPEG_SUPPORT' => 'Support JPG',
                'PNG_SUPPORT'  => 'Support PNG',

                'NORMAL'       => 'Normal',
                'ROUNDED'      => 'Bords arrondis',
                'BW'           => 'Noir & Blanc',
                'SHADOW'       => 'Ombr�',
                'GRAD'         => 'D�grad�',
                'INFO'         => 'Texte',
                'CHECK_ALL'    => 'Tout s�lectionner',

                'THUMBGEN'     => 'G�n�rateur de vignette',
                'TEXT'         => 'Texte',
                'WIDTH'        => 'Largeur',
                'HEIGHT'       => 'Hauteur',
                'BCKCOLOR'     => 'Couleur de fond',
                'DIR'          => 'R�pertoire',
                'UPLOADED'     => 'Fichier t�l�vers� avec succ�s !',
                'NOTUPLOADED'  => 'Une erreure s\'est produite lors du t�l�versement du fichier !',
                'NOT_CREATED'  => 'Le r�pertoire de stockage n\'existe pas !',

// Templates
                'TPL'          => 'Template',
                'SCRIPT'       => 'Script',
                'TEMPLATES'    => 'Templates',

// Queries
                'NEW_QUERY'    => 'Cr�er une requ�te dans la Base de donn�e',
                'EDIT_QUERY'   => 'Editer une requ�te',
                'TABLE'        => '[BD] Table',
                'QID'          => '[BD] Champ ID',
                'QSUBJECT'     => '[BD] Champ Sujet',
                'QDESCRIPTION' => '[BD] Champ alternatif',
                'QIMAGE'       => '[BD] Champ image',
                'QIMAGEURL'    => 'R�pertoire de stockage des images',
                'QURL'         => 'Adresse des liens<br />
<font style="font-weight:normal;">{id} : valeur du champ id</font>',
                'QWHERE'       => '[BD] Conditions<br />
<font style="font-weight:normal;">{date} : heure courante</font>',
                'QORDER'       => '[BD] Ordre d\'affichage des donn�es',
                'QLIMIT'       => 'Nombre maximum de liens � afficher',
                'TROUBLE'      => 'Signal d\'erreur',
                'NEXT'         => 'Etape suivante...',
                'TABLE_CHECK'  => 'Voir la table',

 // Menus
                'NEW_MENU'     => 'Cr�er un menu',
                'EDIT_MENU'    => 'Editer un menu',
                'ALT_TITLE'    => 'Texte alternatif',
                'IMAGEDIR'     => 'R�pertoire de stockages des images',
// Links
                'NEW_LINK'     => 'Cr�er un lien',
                'EDIT_LINK'    => 'Editer un lien',
                'TYPE'         => 'Type',
                'WAITING'      => 'En attente...',
                'INFOS'        => 'Infos',
                'INFOBULLE'    => 'Infobulle',
                'IMAGEURL'     => 'Image distante',

                'LINKIN'       => 'Page locale',
                'LINKOUT'      => 'Page distante',
                'PERMANENT'    => 'Permanent',
                'RELATIVE'     => 'Relatif',
                'LINK_PERM'    => 'Permanent',
                'LINK_REL'     => 'Relatif',
                'LINK_IN'      => 'Local',
                'LINK_OUT'     => 'Distant',

                'TOP'          => 'Premier',
                'BOTTOM'       => 'Dernier',

                'TARG_AUTO'    => 'Auto (d�tecter la meilleure configuration)',
                '_SELF'        => 'Self (ouvrir dans la m�me page)',
                '_BLANK'       => 'Blank (ouvrir dans une nouvelle page)',

                'SELF'         => 'Ouvrir dans la m�me page',
                'BLANK'        => 'Ouvrir dans une nouvelle page',

                'LINKTO'       => 'Lier � :',
                'NONE'         => 'Aucun',

// Help

                'MENUCSSH'     => 'Aide sur la feuille de style des menus',
                'LINKCSSH'     => 'Aide sur la feuille de style des liens',
                'SAMPLE'       => 'Exemples',
                'ARTICLE'      => 'Article',

                'MAIN'         => 'Principal',
                'MAINDSC'      => 'Infos g�n�rales concernant le module.',
                'SMARTY'       => 'Variables Smarty',
                'SMARTYDSC'    => 'Liste des variables Smarty',
                'HELPS'        => 'Aide',
                'HELPSDSC'     => 'Aide � l\'utilisation du module',
                'TIPSDSC'      => 'Liste des astuces et faits du module.',
                'INTRODUCTION' => 'Intro',
                'KNOW'         => 'Le saviez-vous ?',
                'TIPS'         => 'Astuces',

                'DEVELOPPERS'  => 'D�veloppeurs',
                'INFORMATIONS' => 'Informations',
                'DISCLAIMER'   => 'Avertissement',
                'AUTHOR_WORD'  => 'Le mot de l\'auteur',
                'VERSION_HISTORY' => 'Historique des versions',
                'LANGUAGE_DEFINE' => 'D�finitions de langue',
                'FIXES_ITEM'   => 'Variables g�n�rales',
                'VARIABLES_ITEM' => 'Variables des liens',

// Utils
                'CLONEDSC'     => 'Utilitaire de clonage du module.',
                'CLONE_NAME'   => 'Nom du clone',
                'CLEAR'        => 'Annuler',
                'TEMPLATE'     => 'Templates',


                'EDITIMENU'    => 'Editer',
                'NEW'          => 'Nouveau Lien',
                'SUBMENU'      => 'Type',
                'SUBMENUEXP'   => '',
                'SUBYES'       => 'Oui',
                'SUBNO'        => 'Non',
                'MAINLINK'     => 'Lien standard',
                'SUBLINK'      => 'Lien secondaire relatif',
                'PERMSUBLINK'  => 'Lien secondaire permanent',
                'TARGET'       => 'Cible',
                'GROUPS'       => 'Groupes',
                'OPERATION'    => 'Fonction',
                'TARG_SELF'    => 'self',
                'TARG_BLANK'   => 'blank',
                'TARG_PARENT'  => 'parent',
                'TARG_TOP'     => 'top'
                 );

// Render defines

 	foreach ( $main_val_array as $item_lg=>$item_val ) {
                 define(strtoupper('_MD_POPGEN_'.$item_lg),$item_val);
	}
	
	
define('_MD_POPGEN_FIELD','Champ');
define('_MD_POPGEN_NULL','Null');
define('_MD_POPGEN_KEY','Cl�');
define('_MD_POPGEN_DEFAULT','Defaut');
define('_MD_POPGEN_EXTRA','Extra');
define('_MD_POPGEN_N','N�');
define('_MD_POPGEN_CLOSE','Fermer');
?>