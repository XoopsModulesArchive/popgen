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
        $i=1;
 	$info_val_array =  array( $i++        => 'Le saviez-vous ?|A l\'origine, popgen �tait une version am�lior�e de imenu, d�velopp� par un autre belge Linthuin.',
  	                          $i++        => 'Le saviez-vous ?|Dans sa version 1, popgen � connu plus de 9 versions successives. La derni�re �tant la 1.9.',
  	                          $i++        => 'Le saviez-vous ?|Pour leur majorit�, les personnes qui ont contribu� � la r�alisation de ce modules ne sont pas des d�veloppeurs professionnel !',
                                  $i++        => 'Le saviez-vous ?|popgen a �t� d�velopp� avec le logiciel �diteur de texte <a href="http://www.contexteditor.org/" target="_blank">ConTEXT</a>.',
                                  $i++        => 'Le saviez-vous ?|Dans sa premi�re version, popgen s\'�crivait "multiMenu". Le M a �t� r�duit en minuscule pour faciliter le clonage du module. Sur la toile, cela fait toute la diff�rence !',
                                  $i++        => 'Le saviez-vous ?|Le nombre d\'heures consacr�es au d�veloppement de ce module est incalculable. Depuis sa premi�res versions, des milliers d\'heures lui ont �t� consacr�...',
                                  $i++        => 'Le saviez-vous ?|Lors de la sortie de multiMenu 1.8, plus de 600 posts ont �t� publi�s � son sujet dans les forums de www.frxoops.org et www.xoops.org.',
                                  $i++        => 'Le saviez-vous ?|Les d�veloppeurs qui ont contribu� � popgen n\'en ont pas touch� un seul franc. C\'est �a l\'open source !',
                                  $i++        => 'Le saviez-vous ?|popgen a �t� d�velopp� pour Xoops 2.x uniquement. On ne retrouve aucun module similaire dans d\'autre CMS.',
                                  $i++        => 'Le saviez-vous ?|Les d�veloppeurs de popgen sont majoritairement  francophones et membres actifs de <a href="http://www.frxoops.org" target="_blank">FRXoops</a>.'
                                  );

  	 $tips_val_array =  array(
                                  $i++        => 'Astuce : Revenez nous voir !|Lorsque vous cr�ez un lien externe, assignez lui un target "blank" pour que vos visiteurs reviennent plus facilement !',
  	                          $i++        => 'Astuce : Le mode auto|En mode auto, le param�tre "target" d�fini automatiquement le mode � adopter si vous cr�ez un lien interne ou externe.',
  	                          $i++        => 'Astuce : En plein dans le mille !|Un target "blank" ouvre le lien dans une nouvelle page. Utilisez-le si vous souhaitez que vos visiteurs retrouvent plus facilement leur chemin.',
  	                          $i++        => 'Astuce : Restez chez nous !|Un target "self" ouvre le lien dans la m�me page. Le mode de navigation id�al pour rester � l\'int�rieur du site.',
  	                          $i++        => 'Astuce : Cr�ez vos propres templates !| ...puis glissez les dans le r�pertoire "templates/include/", mettez le module � jour, puis activer la nouvelle template dans les pr�f�rences du module.',
  	                          $i++        => 'Astuce : Utilisez le cache !|Surtout si vos menus ne font pas appelle � des liens dynamiques (requ�tes, liens relatifs, groupes d\'acc�s), optimisez les temps d\'acc�s en activant le cache de vos blocs.',
                                  $i++        => 'Astuce : Les CSS|Les feuilles de style permettent de personnaliser l\'affichage des liens et/ou des menus. Pour plus d\'info visitez <a href="http://www.w3.org/Style/CSS/" target="_blank">W3C</a>.',
                                  $i++        => 'Astuce : Menu cach�|Un menu cach� ne s\'affichera pas dans les pages d\'index du module. Mais est tout aussi accessbile et actif qu\'un menu "activ�".',
                                  $i++        => 'Astuce : Templates identiques|Les templates des pages d\'index et des blocs sont identiques. Plus besoin de chipoter � deux endroits pour les modifier.',
                                  $i++        => 'Astuce : Onglet image|Le gestionnaire d\'images vous permet de g�rer les illustrations de vos liens et de vos menus. Uniformisez leur format en quelques clics...',
                                  $i++        => 'Astuce : Onglet template|Le gestionnaire de template vous permet d\�diter facilement les templates, feuilles de styles et scripts des menus.',
                                  $i++        => 'Astuce : Onglet requ�te|Le gestionnaire de requ�tes permet de g�n�rer des listes de lien dynamiquement � partir de la base de donn�e du site. Choisissez la table qui vous int�resse et cliquez sur <b>[-][[BD] Table]</b> pour en savoir plus � son sujet.',
                                  $i++        => 'Astuce : Supprimer|Lorsque vous supprimez un menu, vous supprimez en m�me temps tous les liens qui lui sont rattach�s !',
                                  $i++        => 'Astuce : Auto-correction|Lorsque vous ins�rez une url avec le nom de domaine de votre site, popgen r��crira automatiquement l\'adresse pour en faire un lien interne.',
                                  $i++        => 'Astuce : Images|N\'utilisez que des images au format .jpg, .jpeg, .gif ou .png. Les autres formats d\'images sont � proscrire sur le web.',
                                  $i++        => 'Astuce : Images|Attention aux images de trop grande taille ! Passez par le gestionnaire d\'images pour les redimensionner au bon format � la vol�e.',
                                  $i++        => 'Astuce : Faites vos jeux !|Faites un tour par les pr�f�rences du module. R�glez les param�tres selon vos choix, et n\'y touchez plus.',
                                  $i++        => 'Astuce : Soyez "Robot Friendly".|Utilisez les textes alternatifs (infobulles) dans vos liens et placez-y vos mots cl�s.',
                                  $i++        => 'Astuce : Lien permanent|Un lien permanent s\'affichera en toute circonstance... pour peu que lui en donniez la permission.',
                                  $i++        => 'Astuce : Lien relatif|Un lien relatif ne s\'affichera que si le module indiqu� dans le lien principal correspond au module de la page en cours.',
                                  $i++        => 'Astuce : Les permissions|Les groupes permettent de d�finir qui a acc�s � quel menu et/ou quel lien. Soyez coh�rent dans vos choix !',
                                  $i++        => 'Astuce : Besoin de blocs suppl�mentaires ?|Dans les pr�f�rences g�n�rales du module, indiquez exactement le nombre qu\'il vous faut, et mettez votre module � jour !',
                                  $i++        => 'Astuce : Besoin de cloner le module ?|Allez voir dans les <a href="index.php?admin=utils">"utilitaires"</a>, et dupliquez votre module en deux clics de souris.',
                                  $i++        => 'Astuce : Requ�te|Pour cr�er une nouvelle requ�te dans la base de donn�e, inspirez-vous des requ�tes fournies par d�faut.',
                                  $i++        => 'Astuce : Ayez de l\'{id}.| Que ce soient pour les requ�tes, les feuilles de style ou les scripts, le tag {id} est utile pour r�f�renc� le menu en cours.',
                                  $i++        => 'Astuce : Clonage|Vous pouvez cloner un module avec tout ses liens en un seul clic. N\'oubliez pas de modifier son titre !',
                                  $i++        => 'Astuce : Image distante ou locale ?|Pr�f�rez les images stock�es sur votre serveur. Ce sont les seules sur lesquelles vous ayez un cont�le total !',
                                  $i++        => 'Astuce : Image distante|Une image distante peut �tre h�berg�e ailleurs que sur votre site. Mais attention aux petites croix rouges si on vient � les renommer, d�placer ou supprimer !',
                                  $i++        => 'Astuce : Image locale|Les images locales sont h�berg�es sur votre propre serveur. Vous pouvez aussi les redimenssionner � l\'aide du gestionnaire d\'image du module.',
                                  $i++        => 'Astuce : Facilitez la navigation !|T�chez de respecter la "r�gle des 3 clics" qui stipule que toute information do�t �tre accessible en moins de 3 clics',
                                  $i++        => 'Astuce : Facilitez la navigation !|Une liste d\'items doit de pr�f�rence comporter moins de 7 �l�ments. Evitez les menus "trop longs".',
                                  $i++        => 'Astuce : Optimisez vos images !|Il convient d\'optimiser au maximum la taille des images, en choisissant un format adapt� et un nombre de couleurs le plus petit possible. Il est recommand� de ne pas d�passer 30 � 40 ko maximum par image',
                                  $i++        => 'Astuce : Bien concevoir le menu principal !|A tout moment le visiteur doit pouvoir �tre en mesure de se rep�rer dans le site (et retrouver la Home page).',
                                  $i++        => 'Astuce : Uniformisez votre menu !|Les �l�ments de navigation doivent �tre situ�s au m�me endroit sur toutes les pages, si possible avec une pr�sentation uniforme d\'une page � une autre.',
                                  $i++        => 'Astuce : De bon titres !|Cr�ez des liens privil�giant le texte, aux libell�s clairs, sans "devinettes" ou messages cach�s, avec une pr�sentation standard.',
                                  $i++        => 'Astuce : Plan du site !|Offrez des pistes vers l\'ensemble des informations disponibles d�s la page d\'accueil',
                                  $i++        => 'Astuce : Allez � l\'essentiel !|Les liens les plus importants doivent �tre fortement mis en valeur (la boutique pour un site de vente en ligne, les nouveaut�s sur le site, etc.), mais cela n\'interdit pas que la page d\'accueil soit tr�s riche d\'autres liens.',
                                  $i++        => 'Astuce : Evitez les textes en image !|Le texte sous forme d\'image, m�me si cela permet de mieux en contr�ler la pr�sentation, est non seulement r�dhibitoire du point de vue du temps de chargement, mais �galement pour les moteurs de recherche.',
                                  $i++        => 'Astuce : "Keep it simple !"|Le syst�me de navigation doit �tre simple et intuitif. Inutile de proposer tous les liens sur la page accueil. Une barre de navigation vers les principales rubriques suffit (cela n\'interdit pas, n�anmoins, de proposer un syst�me d\'acc�s rapide sous forme, par exemple, de menu d�roulant en Javascript).',
                                  $i++        => 'Astuce : Deux valent mieux qu\'un !|Multipliez les syst�mes de navigation alternatifs (Ex: une barre de menu sous forme graphique, avec des effets "rollovers" simples, une barre de navigation texte, etc.) pourvu que ces syst�mes soient bien distincts visuellement. Evitez de les grouper tous au m�me endroit, et r�partissez les en tenant compte du parcours de l\'internaute.',
                                  $i++        => 'Astuce : HELP !|Cliquez sur le lien "[+][Aide]" pour afficher l\'aide en ligne dans les formulaires d\'�dition.',
                                  $i++        => 'Astuce : Virez-moi !|Pas besoin de ces astuces encombrantes ? D�sactivez les dans <a href="index.php?admin=settings&sub=edit">les pr�f�rences du module</a>.',
                                  $i++        => 'Astuce : Faites votre choix !|Choisissez vos templates pr�f�r�es et d�sactivez les autres dans <a href="index.php?admin=settings&sub=item">les pr�f�rences du module</a>.',
                                  $i++        => 'Astuce : Voir le code|Lorsque vous cr�ez ou modifiez un template, visualisez directement le code g�n�r� en activant la fonction <b>Activer le mode "Editon de template"</b> les dans <a href="index.php?admin=settings&sub=index">les pr�f�rences du module</a>.',
                                  $i++        => 'Astuce : Prenez le bon chemin|En cr�ant un menu, vous avez la possibilit� de d�terminer le r�pertoire de stockage des images. V�rifiez que celui-ci est bien ouvert en �criture !',
                                  $i++        => 'Astuce : Changement d\'adresse|Lorsque vous d�placez un lien avec une image d\'un menu � l\'autre, v�rifiez bien que le r�pertoire de stockage du nouveau menu dispose de l\'image.',
                                  $i++        => 'Astuce : A chaque menu son r�pertoire|En cr�ant un nouveau  menu, ajoutez lui son propre r�pertoire de stockage (cr�� automatiquement par le module) pour �viter tout conflit ult�rieur.',
                                  $i++        => 'Astuce : Au bon menu le bon bon bloc|Choisissez le bloc qui affichera votre menu dans <a href="index.php?admin=blocks">l\'onglet blocs</a>, et profitez-en pour v�rifier les param�tres de groupes du module.'
                                  );

if(!isset($only_data)) {
        $item_val_array = $info_val_array + $tips_val_array;
        $tips_count = count($item_val_array);

// Render defines
        $i=1;
 	foreach ($item_val_array as $item_lg=>$item_val) {
                 define(strtoupper('_TI_POPGEN_'.$item_lg),$item_val);
	}
}
?>