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
  	                         'edit'       => 'Editer',

                                 'upload'     => 'T�l�versement',
  	                         'images'     => 'Images',
                                 'medias'     => 'M�dias',
  	                         'div'        => 'DIV'
                                 );

// This block menu values
 	$block_val_array =  array( 'button'          => 'Boutons',
  	                           'select'          => 'Bo�te de s�lection',
  	                           'text'            => 'Texte',

  	                           'adlinks'            => 'Type de liens',
  	                           'adlinksdsc'            => 'Mode d\'affichage des liens',
  	                           'options'            => 'Options',

        	                   'display'      => 'Affichage',
        	                   'displaydsc'      => 'Information � afficher',
        	                   'background'      => 'L\'image de fond',
        	                   'search'          => '<font style="color:DarkBlue;">[REDIRECTION] sur recherche</font>',
        	                   'redir'           => '<font style="color:DarkBlue;">[REDIRECTION] par groupes</font>',
  	                           'image'           => 'Le logo',
                                   'admin'           => 'Liens admins',
  	                           'settings'        => 'Liste des param�tres',

  	                           'description'  => 'Description',
  	                           'descriptiondsc'  => 'Texte de description � afficher dans le block.'
                               );


// Render defines
        $item_val_array = array_merge( $com_val_array,
                                       $block_val_array
                                      );

 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_MB_POPGEN_'.$item_lg),$item_val);
	}
?>