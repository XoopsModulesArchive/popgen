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

 $main_val_array['introduction']  =  array( ''      => 'Ce module permet de g�n�rer des listes de lien ou menus manuellement ou automatiquement.

Voici les variables de template disponibles pour vos templates personnalis�es.

2 types de variables : <ul>
<li><b>les variables fixes</b>
<i>Ces variables sont pour la plupart d�finies par d�faut, ou dans les pr�f�rences du module.</i>
</li>
<li><b>les variables dynamiques </b>
<i>Ces variables sont d�finies en fonction du contenu de chaque menu, ou des pages cr��es par l\'utilisateur. 
Elles sont valables aussi bien pour les pages de contenu du module que des blocs.</i></li>
</ul>' );

 $main_val_array['language_define'] =  array(
                                  '<{$index}>'        => 'Index',
                                  '<{$other}>'        => 'Autre',
                                  '<{$sourcecode}>'   => 'Code source'
                                   );


 $main_val_array['fixes_item'] =  array(
                                  '<{$id}>'            => '[MENU] id du menu.|1',
                                  '<{$css_link}>'      => '[MENU] Lien pointant vers le fichier CSS du menu en cours.|http:&#47;&#47;[..]/popgen_my_menu.css',
                                  '<{$script_link}>'   => '[MENU] Lien pointant vers le fichier de script .JS du menu en cours.|http:&#47;&#47;[..]/popgen_my_menu.js',
                                  '<{$menu}>'          => '[MENU] id du menu.|1',
                                  '<{$status}>'        => '[MENU] Status du menu en cours (0 : Hors ligne, 1 : en ligne, 2 : cach�).|1',
                                  '<{$title}>'         => '[MENU] Titre du menu en cours.|Menu Utilisateur',
                                  '<{$css}>'           => '[MENU] Feuille de style du menu.|popgen_1 {color:Red;}',
                                  '<{$description}>'   => '[MENU] Description du menu en cours.|Voici le menu utilisateur.',

                                  '<{$data_list}>'     => 'Liste des donn�es g�n�r�es par le lien. Liste compl�te ci-dessous.|Array',
                                  '<{$ii}>'            => 'Nombre total de liens.|10',
                                  '<{$i}>'             => 'Nombre de liens total par colonne (chiffre arrondi � l\'unit�).|5',
                                  '<{$i_main}>'        => 'Nombre de liens principaux (sans les liens secondaires) par colonne (chiffre arrondi � l\'unit�).|3',
                                  '<{$mode}>'          => 'Mode ou template de la page en cours (ou d�fini par d�faut dans les pr�f�rences du module).|include/popgen_ul.html',
                                  '<{$module}>'        => 'R�pertoire du module (ex : popgen)|popgen',
                                  '<{$banner}>'        => 'Code html de la banni�re du module.|&lt;img src="http:&#47;&#47;[..]/banner.gif" /&gt;',
                                  '<{$admin}>'         => 'Liens admin.|',

                                  '<{$banner_url}>'    => '[PREF] URL de la banni�re du module.|http:&#47;&#47;[..]/banner.gif',
                                  '<{$background}>'    => '[PREF] URL de l\'Image de fond du module.|http:&#47;&#47;[..]/background_image.gif',
                                  '<{$image_width}>'   => '[PREF] Largeur par d�faut des images.|160',
                                  '<{$image_height}>'  => '[PREF] Hauteur par d�faut des images.|160',
                                  '<{$edit_mode}>'     => '[PREF] Activation ou nom du mode "�dition" (affichage du code source du menu par d�faut).|1',
                                  '<{$cols}>'          => '[PREF] Nombre de colonnes.|3',
                                  '<{$duration}>'      => '[PREF] Dur�e en millisecondes.|1000',
                                  '<{$transition}>'    => '[PREF] Transition en millisecondes.|1000',
                                  '<{$item_list}>'     => '[PREF] Mode d\'affichage de la liste des menus disponibles.|1',
                                  '<{$item}>'          => '[PREF] Nom g�n�rique des "items".|Menus',
                                  '<{$item_display_selectmode}>'   => '[PREF] Mode d\'affichage des templates disponibles des menus.|ul.html'
                                   );


 $main_val_array['variables_item'] =  array(
                                  '<{item.id}>'          => 'ID du lien.|2',
                                  '<{$item.pid}>'        => 'ID du lien parent (principal).|1',
                                  '<{$item.catid}>'      => 'ID du menu.|1',
                                  '<{$item.type}>'       => 'Type de lien (permanent ou relatif).|permanent',
                                  '<{$item.status}>'     => 'Status du lien en cours (0 : Hors ligne ou 1 : en ligne).|1',
                                  '<{$item.weight}>'     => 'Poids du lien.|100',

                                  '<{$item.title}>'      => 'Titre du lien.|Accueil',
                                  '<{$item.alt_title}>'  => 'Balise alternative (ou texte compl�mentaire).|Page d\'accueil du site',
                                  '<{$item.query}>'      => 'Requ�te li�e � ce lien.|news',
                                  '<{$item.target}>'     => 'Cible du lien (target="_blank" ou code popgen pour une image).|_blank',
                                  '<{$item.css}>'        => 'D�finitions CSS (pas de class, ni ID).|color:Red;',
                                  '<{$item.link_status}>'=> 'Type de lien (top, link ou sublink).|link',
                                  '<{$item.num}>'        => 'Num�ro du lien en cours.|1',
                                  '<{$item.num_main}>'   => 'Num�ro du lien principal en cours.|1'
                                 );

$main_val_array['author word'] =  array( ''      => 'Pour activer votre template personalis�e :
 1. copier la template dans le r�pertoire "templates/include/" ;
 2. mettre le module � jour ;
 3. activer la nouvelle template dans les pr�f�rences du module.' );

?>