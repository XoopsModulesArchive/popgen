<?php
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System    		     //
//                    Copyright (c) 2004 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//                   							     //
//                  Authors :						     //
//						- solo (www.wolfpackclan.com)//
//                  Popgen v1.0						     //
//  ------------------------------------------------------------------------ //

// Common values
 	$com_val_array =  array( 'name'        => 'Popgen',
  	                         'dsc'         => 'Module de gestion de menus',
  	                         'clone'       => 'Cloner',
  	                         'submit'      => 'Envoyer',
  	                         'menu'        => 'Menu',
  	                         'link'        => 'Liens',
  	                         'query'        => 'Requ�tes',
  	                         'block'        => 'Blocs',
  	                         'utils'        => 'Utilitaires',

  	                         'index'       => 'Index',
  	                         'sitemap'     => 'Plan du site',
  	                         'edit'        => 'Edition',
  	                         'help'        => 'Aide',
  	                         'settings'    => 'Param�tres',
  	                         'item'        => 'Item',
  	                         'meta'        => 'Meta',
  	                         'slideshow'   => 'Diapo',

  	                         'indexdsc'       => 'Param�tres de la page d\'index du module.',
  	                         'editdsc'        => 'Param�tres d\'�dition des pages du module.',
  	                         'helpdsc'        => 'Aide du module',
  	                         'settingsdsc'    => 'Liste de tous les param�tres g�n�raux du module',
  	                         'itemdsc'        => 'Param�tres des pages du module.',
  	                         'metadsc'        => 'Param�tres des metas du module.',
  	                         'slideshowdsc'   => 'Param�tres du mode diaporama.',

  	                         'index_dsc'       => 'Retourner � la page d\'accueil du module.',
  	                         'menu_dsc'        => 'Ajouter, supprimer, dupliquer, �diter un menu.',
  	                         'link_dsc'        => 'Ajouter, supprimer, dupliquer, �diter un lien.',
  	                         'query_dsc'       => 'Ajouter, supprimer, dupliquer, �diter une requ�te dans la base de donn�e.',
  	                         'image_dsc'       => 'Ajouter, supprimer, modifier une image.',
  	                         'template_dsc'    => 'Personnaliser les templates, feuilles de style et script d\'un menu.',
  	                         'block_dsc'       => 'Param�ter un bloc.',
  	                         'settings_dsc'    => 'Param�trer les pr�f�rences g�n�rales du module.',
  	                         'utils_dsc'       => 'Cloner le module.',
  	                         'help_dsc'        => 'Acc�der � l\'aide.'
                                 );

// Modinfo values
 	$pref_val_array =  array( 'mode_clickshow'        => 'Click & Show',
 	                          'mode_galery'           => 'Galerie',
 	                          'mode_panoramic'        => 'Panoramique 360�',
 	                          'mode_rollshow'         => 'D�roulante',
 	                          'mode_scrollshow'       => 'D�filante',
 	                          'mode_slideshow'        => 'Diaporame 1',
 	                          'mode_slideshow_II'     => 'Diaporame 2',
 	                          'mode_slideshow_moz'    => 'Diaporame 3 (Mozilla)',
 	                          'mode_table'            => 'Tableau',
                                  'mode_highslide'        => 'Highslide',
 	                          'mode_test'             => '* Valeurs',

 	                          'image'                 => 'Images',
 	                          'imagedsc'              => 'Afficher les images dans l\index des pages',
 	                          'mode_item_thumb'        => 'Vignettes',
 	                          'mode_item_slideshow'    => 'Diaporama',

 	                          'display_none'           => '- Aucune -',
 	                          'display_images'         => 'Vignettes',
 	                          'display_select'         => 'Bo�te de s�lection',
 	                          'display_ul'             => 'Liste � puce',
 	                          
 	                          'mode_menu_extended'     => 'Edtendu',
 	                          'mode_menu_image'        => 'Vignettes',
 	                          'mode_menu_select'       => 'Bo�te de s�lection',
 	                          'mode_menu_menu'         => 'Menu principal',
 	                          'mode_menu_ul'           => 'Liste � puce',

 	                          'mode_list_image'        => 'Images',
 	                          'mode_list_select'       => 'Bo�te de s�lection',
 	                          'mode_list_ul'           => 'Liste � puce',

 	                          'welcome'                => '',
 	                          'metakeywords'           => '',
 	                          'metadescription'        => '',

 	                          'display_thumb'          => 'Vignette',
 	                          'display_description'    => 'Description',
 	                          'display_admin'          => 'Liens admin',

 	                          'infobulle'              => 'Infobulles',
 	                          'infobulledsc'           => 'Forcer l\'affichage des infobulles',

 	                          'blocks'                 => 'Nombre de blocs',
 	                          'blocksdsc'              => 'D�finir le nombre de bloc actifs.',

 	                          'form_dhtml'             => 'DHTML',
 	                          'form_compact'           => 'Compact',
 	                          'form_htmlarea'          => 'HTML',
 	                          'form_koivi'             => 'Koivi',
 	                          'form_inbetween'         => 'Inbetween',
 	                          'form_tinyeditor'        => 'Tiny Editor',
 	                          'form_spaw'              => 'Spaw',
 	                          'form_fck'               => 'FCK Editor',

 	                          'deactivated'            => 'D�sactiv�',
 	                          'all'                    => 'Tous'
                                 );

// Settings values
 	$sett_val_array =  array( 'banner'                 => 'Banni�re',
 	                          'background'             => 'Image de fond',
 	                          'activation'             => 'Pages actives',
 	                          'desc'                   => 'Texte de la page d\'index',
 	                          'display'                => 'Infos affich�es',
 	                          'cols'                   => 'Colonnes',
 	                          'item_list'              => 'Liste des pages',
 	                          'maximage'               => 'Image par page',
 	                          'perpage'               =>  'Nombre d\'items par page',

 	                          'thumbmw'                => 'Taille des vignettes',
 	                          'color'                  => 'Couleurs des vignettes',
                                  'thumbstyle'             => 'Bordures des vignettes',

 	                          'imagemw'                => 'Taille des vignettes',

 	                          'main'                   => 'Page d\'accueil',
 	                          'mode'                   => 'Template',
 	                          'template'               => 'Templates',
 	                          'dispsm'                 => 'Affichge des templates',
 	                          'edit_mode'              => 'Activer le mode "Editon de template"',
 	                          'selectmode'             => 'Templates disponibles',
 	                          'text'                   => 'Texte',
 	                          'button'                 => 'Bouton',
 	                          'select'                 => 'Bo�te de s�lection',
 	                          'buttons'                => 'Boutons admin',
 	                          'buttondsc'              => 'Format d\'affichage des boutons d\'administration.',

 	                          'item_name'              => 'Nom des items',
 	                          'metakeyword'            => 'Mots cl�s',
 	                          'metadesc'               => 'Meta Description',

 	                          'tip'                    => 'Afficher les astuces',
 	                          'dir'                    => 'R�pertoire de stockage',
 	                          'edit_description'       => 'Texte par d�faut',
 	                          'wysiwyg'                => 'Editeur de texte',
 	                          'ss'                     => 'Diaporama',
 	                          'urw'                    => 'URL Rewriting'
                                 );

// Settings values
 	$desc_val_array =  array( 'bannerdsc'                 => 'Url de la banni�re � afficher sur tout le module.',
 	                          'backgrounddsc'             => 'Url de l\'image de fond � afficher sur tout le module.',
 	                          'activationdsc'             => 'Liste des pages actives.',
 	                          'textdsc'                   => 'Texte � afficher sur la page d\'accueil du module',
 	                          'displaydsc'                => 'Liste des informations � afficher en page d\'accueil du module.',
 	                          'colsdsc'                   => 'Nombre de colonnes souhait�es pour l\'affichage des vignettes.',
 	                          'item_listdsc'              => 'Mode d\'affichage de la liste des autres pages disponibles du module. ',
 	                          'maximagedsc'               => 'Nombre maximum d\'images � afficher par page.',
 	                          'perpagedsc'                => 'Nombre maximum d\'items � afficher par page.',

 	                          'thumbmwdsc'                => 'D�fini la largeur et la hauteur des vignettes en px.',
 	                          'imagemwdsc'                => 'D�fini la largeur et la hauteur maximum des images en px.',

 	                          'colordsc'                  => 'D�fini la couleur de fond des vignettes',
  	                          'thumbstyledsc'             => 'D�fini le style des bordure de vignette',

 	                          'maindsc'                   => 'D�fini la page d\'accueil par d�faut du module. Peut �tre une url externe ou l\'ID d\'une des pages du module.',
 	                          'modedsc'                   => 'Mode d\'affichage par d�faut du module.',
 	                          'dispsmdsc'                 => 'Active ou non la liste de choix des diff�rents modes d\'affichage des pages du module.',
 	                          'selectmodedsc'             => 'Active les diff�rentes modes d\'affichages des pages du module. Attention : tous les modes sont toujours utilisable ! Ce param�tre ne d�fini que les modes disponibles dans la bo�te de s�lection des modes disponibles c�t� utilisateur. ',
 	                          'extdsc'                    => 'Type d\'extention d\'image disponible dans le module.',

 	                          'item_namedsc'              => 'Nom de remplacement pour le terme \'Item\'.',
 	                          'metakeyworddsc'            => 'Mots cl�s � utiliser par d�faut sur l\'ensemble du module.',
 	                          'metadescdsc'               => 'Meta Description � utiliser par d�faut sur l\'ensemble du module',

 	                          'dirdsc'                    => 'R�pertoire de stockage par d�faut utilis� lors de la cr�ation d\'une nouvelle page.',
 	                          'edit_descriptiondsc'       => 'Texte par d�faut utilis� lors de la cr�ation d\'une nouvelle page.',
 	                          'wysiwygdsc'                => 'D�fini le type d\'editeur utilis� par le module. Attention : s\'assurer que l\'�diteur est disponible sur le site (voir utilitaires du module). ',
 	                          'ssdsc'                     => 'Param�tre de transition des diaporamas en secondes. [Dur�e d\'affichage|Temps de transition]',
 	                          'urwdsc'                    => 'Param�tre de l\'url rewriting du module.
                                   <br />D�fini le nombre de caract�res minimum 
                                   <br />� employer pour g�n�rer les mots utilis�s dans l\'adresse de la page. '
                                 );

// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $pref_val_array,
                                       $sett_val_array,
                                       $desc_val_array );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MI_POPGEN_'.$item_lg),$item_val);
	}
?>

