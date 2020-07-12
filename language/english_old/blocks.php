<?php
//  ------------------------------------------------------------------------ 	//
//                XOOPS - PHP Content Management System    				//
//                    Copyright (c) 2004 XOOPS.org                       	//
//                       <http://www.xoops.org/>                              //
//                   										//
//                  Authors :									//
//						- solo (www.wolfpackclan.com)         	//
//                  Popgen v1.0								//
//  ------------------------------------------------------------------------ 	//

// Common values
 	$com_val_array =  array( 'option'     => 'Options',
  	                         'settings'   => 'Param�tres',
  	                         'item'      => 'Item',

  	                         'admin'      => 'Admin',
  	                         'edit'      => 'Editer',
  	                         'clone'      => 'Dupliquer'
                                 );

// This block menu values
 	$block_val_array =  array( 'tpl'   => 'Template',
  	                           'tpldsc'=> 'Type d\'affichage du bloc.',
  	                           'ul'=> 'Liste � puce',
  	                           'menu'=> 'Menu principal de Xoops',
  	                           'image'=> 'Images *',
  	                           'extended'=> 'Etendu **',

        	                   'display'      => 'Affichage',
        	                   'displaydsc'      => 'Information � afficher',
        	                   'title'      => 'Titre',
        	                   'logo'      => 'Logo',

  	                           'status'   => 'Status',
  	                           'statusdsc'=> 'Status des pages � afficher.',
  	                           'online'=> 'Activ�',
  	                           'hidden'=> 'Cach�',
  	                           'offline'=> 'D�sactiv�',

  	                           'description'=> 'Description',
  	                           'descriptiondsc'=> 'Texte de description � afficher dans le block.',

  	                           'max'=> 'Maximum',
  	                           'maxdsc'=> 'Maximum de lien � afficher.',


                                   'order'=> 'Classer par',
                                   'orderdsc'=> 'Attention : liens principaux et sous-liens seront m�lang�s.',
                                   'weight'=> 'Poids',
  	                           'titleasc'=> 'Ordre alphab�tique',
                                   'titledesc'=> 'Ordre alphab�tique inverse',
                                   

  	                           'relative'=> 'forcer les liens relatifs',

  	                           'cols'=> 'Colonnes **',
  	                           'colsdsc'=> 'Nombre de colonnes � afficher.',

  	                           'maxwidth'=> 'Taille des vignettes * **',
  	                           'maxwidthdsc'=> 'Taille d\'affichage des vignettes.<br />
                                     (L-H).',
                                   'pix'=> 'pixels',

  	                           'maxtitle'=> 'Longueur des titres',
  	                           'maxtitledsc'=> 'Longueur maximum des titres de lien.',
                                   'char'=> 'caract�res',

  	                           'ext'=> 'Extensions * **',
  	                           'extdsc'=> 'Formats autoris�s des images � afficher.',
  	                           'ast'=> '* Menus auxquels s\'appliquent ces param�tres.'
                                 );
                                 
// This item values
 	$block_item_array =  array( 'link'       => 'Liens',
 	                           'description' => 'Description',
 	                           'random'      => 'Al�atoire',
 	                           'latest'      => 'Dernier',
 	                           'popular'     => 'Populaire',
 	                           'slideshow'   => 'Diaporama **',
 	                           'select'      => 'Page',
 	                           'selectdsc'   => 'Choix de la page � afficher.',
 	                           'list'        => 'Liste des menus',
 	                           'maxi'        => 'Nombre de lien',
 	                           'maxdsc'      => 'Nombre maximum de lien principaux � afficher dans le bloc.<br />
                                    Attention : cette fonctionnalit� d�sactive les sous-liens !',
 	                           'all'         => '[Tous]',
 	                           'alt_title'   => 'Infobulles'
                                 );

// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $block_val_array,
                                       $block_item_array
                                      );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MB_POPGEN_'.$item_lg),$item_val);
	}
?>