<?php
########################################################
#  Admin version 1.1 pour Xoops 2.0.x	       #
#  						       #
#  � 2005, Solo ( www.wolfpackclan.com/wolfactory )    #
#  						       #
#  Licence : GPL 	         		       #
########################################################
defined( 'XOOPS_ROOT_PATH' )?'':header('Location: ./');

	if (file_exists('../language/' . $xoopsConfig['language'] . '/tips.php')) {
                $only_data = 1;
		include ('../language/' . $xoopsConfig['language'] . '/tips.php');
	} else {
                $only_data = 1;
		include ('../../language/english/tips.php');
	}

 $i=0;
 $main_val_array=array();
 
 $main_val_array['settings']  =  $settings_val_array;
 $main_val_array['know']      =  $info_val_array;
 $main_val_array['tips']      =  $tips_val_array;

 $main_val_array['article']   =  array( ''          => '<h3 style="text-align:center;">10 conseils pour faciliter l\'acc�s � vos contenus</h3>
Par Jean-Marc Hardy � <a href="http://www.redaction.be/exemples/contenus_profonds_sept_06.htm" target="_blank">Redaction.be</a> septembre 2006

Vous g�rez un portail d\'information ? Vous �tes responsables de l\'intranet d\'une grande entreprise ? Tr�s vite, la masse de documents risque de vous imposer un v�ritable d�fi, vous contraignant d\'adopter une architecture � plusieurs �tages. Voici 10 id�es pour permettre � vos visiteurs de trouver l\'aiguille dans la botte de foin.
Sommaire de l\'article :

   <ol><li style="list-style-type:decimal;">Multiplier les logiques d\'acc�s</li><li style="list-style-type:decimal;">Utiliser des m�tadonn�es</li><li style="list-style-type:decimal;">Optimiser le moteur de recherche</li><li style="list-style-type:decimal;">Int�grer un sentier de navigation</li><li style="list-style-type:decimal;">Pr�voir une carte du site</li><li style="list-style-type:decimal;">Proposer des menus d�roulants</li><li style="list-style-type:decimal;">Offrir des raccourcis</li><li style="list-style-type:decimal;">Alterner les contenus en vitrine</li><li style="list-style-type:decimal;">Personnaliser l\'acc�s � l\'information</li><li style="list-style-type:decimal;">Cr�er des sous-sites</li>
</ol><ol><li style="list-style-type:decimal;"><b>Multiplier les logiques d\'acc�s</b>

Le point de d�part est d\'adopter une cat�gorisation efficace de l\'information. Des rubriques aux intitul�s intuitifs. Des regroupements coh�rents. Une imbrication logique.

Et rien ne vous emp�che de proposer diff�rentes logiques d\'acc�s � l\'information.
</li>

<li style="list-style-type:decimal;"><b>Utiliser des m�tadonn�es</b>

Une autre fa�on de faciliter l\'acc�s � vos contenus, c\'est de les qualifier � l\'aide de m�tadonn�es.

Les m�tadonn�es permettent par exemple d\'identifier : les th�mes concern�s, l\'auteur, la date de publication,...

Gr�ce aux m�tadonn�es, un visiteur pourra, par exemple, obtenir la liste des articles publi�s entre janvier 2004 et janvier 2005, ou bien tous les articles �crits par un auteur particulier, ou encore tous les articles traitant d\'un th�me pr�cis et publi�s les six derniers mois.
</li>

<li style="list-style-type:decimal;"><b>Optimiser le moteur de recherche</b>

Le moteur de recherche par mot cl� reste une solution pour d�tecter des contenus profonds.

Entendons-nous bien : il s\'agit du moteur de recherche interne, propre � votre site web, � ne pas confondre avec un moteur global tel que Google.

L\'utilit� du moteur de recherche par mot cl� est parfois surestim�e. Bien souvent, � peine 10% des visiteurs d\'un site web y ont recours. Et pas toujours avec succ�s. Cependant, pour des recherches portant sur des termes pr�cis, le moteur par mot cl� demeure une arme redoutable.
</li>

<li style="list-style-type:decimal;"><b>Int�grer un sentier de navigation</b>

Le sentier de navigation aide les visiteurs � se situer dans un site profond.

Le sentier de navigation est �galement appel� "fil d\'Ariane" ou "breadcrumb trail" (traduisez : "sentier de pain d\'�pices") par les ergonomes... allusion aux contes pour enfants tel Le Petit Poucet. En effet, le sentier de navigation permet de retrouver son chemin dans une for�t de contenus, avec, en permanence, la possibilit� de remonter d\'un ou plusieurs niveaux.
</li>

<li style="list-style-type:decimal;"><b>Pr�voir une carte du site</b>

La carte du site ("site map") permet aux visiteurs qui le souhaitent d\'obtenir une vision panoramique des contenus, avec un acc�s direct vers la plupart des pages du site.

Attention ! La carte de votre site exige une mise � jour constante. Mieux vaut en automatiser l\'indexation.

Notez que la plupart des outils que nous avons �num�r�s jusqu\'� pr�sent, moteur de recherche, sentier de navigation et carte du site, ne conviennent qu\'aux sites � gros volume.

<ul><li>Si votre site web ne contient qu\'une vingtaine de pages, la carte du site n\'a pas vraiment de raison d\'�tre.</li>
<li>Si votre site tient sur deux niveaux, le sentier de navigation perd de son int�r�t.</li>
<li>En-de�a d\'une centaine de pages, le moteur de recherche risque d\'�tre une frustration plut�t qu\'une aide. Face � un volume de contenu trop maigre, de nombreuses recherches risquent, en effet, de n\'aboutir � aucun r�sultat.
</li></ul>

<li style="list-style-type:decimal;"><b>Proposer des menus d�roulants</b>

Certains menus d�voilent leurs sous-rubriques au passage de la souris. L\'utilisateur a la possibilit� de plonger directement vers des contenus profonds.

Cette forme de navigation n\'est pas sans risque sur le plan de l\'ergonomie :

<ul><li>le menu ne r�agit pas toujours instantan�ment (certains utilisateurs ne r�alisent pas qu\'il s\'agit de menus d�roulants) ;</li>
<li>l\'utilisation de ce type de menus demande beaucoup d\'adresse ; certaines personnes sont agac�es lorsqu\'elles d�rapent en tentant de faire leur choix (en particulier, comme dans notre exemple, lorsque le menu contient plusieurs niveaux) ;</li>
<li>certains menus d�roulants posent des probl�mes de compatibilit� technique (par exemple, un menu fonctionnera avec le navigateur Internet Explorer, mais pas avec Mozilla Firefox) ; nous conseillons le recours aux feuilles de style (langage CSS) plut�t que l\'utilisation du Javascript.</li></ul>

Mis � part ces obstacles, somme toute g�rables, les menus d�roulants offrent le gros avantage de proposer un acc�s direct aux contenus profonds sans encombrer l\'interface.
</li>

<li style="list-style-type:decimal;"><b>Offrir des raccourcis</b>

Il peut �tre utile de proposer � vos visiteurs, ind�pendamment de votre architecture th�matique, un acc�s direct vers les contenus cl�s de votre site.

"Quick links", "Top links", "Contenus les plus populaires", "Articles les plus visit�s",... quelle que soit la terminologie utilis�e, l\'id�e reste toujours la m�me : offrir des raccourcis vers les contenus � forte popularit� ou � forte valeur ajout�e, afin que ces derniers ne se perdent pas dans la masse.
</li>

<li style="list-style-type:decimal;"><b>Alterner les contenus en vitrine </b>

La page d\'accueil de votre site a pour mission de mettre en valeur la richesse de vos contenus. Tout comme la vitrine d\'un magasin, elle constitue un espace tr�s expos� qui permet de faire �talage de vos meilleurs produits.

Si vous poss�dez un site web particuli�rement volumineux et profond, il peut �tre judicieux de faire remonter en surface, � tour de r�le, diff�rents contenus.

Rien ne vous emp�che de profiter de la conjoncture ou d\'effets saisonniers pour mettre en valeur tel ou tel contenu. Par exemple, pendant la p�riode des f�tes de fin d\'ann�e, le site de la gendarmerie attirera l\'attention de ses visiteurs sur les risques de l\'abus d\'alcool au volant et renverra vers certaines tristes statistiques en la mati�re.
</li>

<li style="list-style-type:decimal;"><b>Personnaliser l\'acc�s � l\'information</b>

Certains sites web sugg�rent des articles � leurs visiteurs, en fonction de leur origine g�ographique ou en fonction de leur comportement lors de visites pr�c�dentes.

Par exemple, lorsque je me rends chez mon libraire virtuel Amazon, il m\'accueille comme ceci :

Ensuite, il me soumet quelques "recommandations" de lectures en fonction de mes achats ou consultations pr�c�dentes...
</li>

<li style="list-style-type:decimal;"><b>Cr�er des sous-sites</b>

Si vous g�rez le site d\'une grande multinationale ou d\'une institution d\'envergure, il arrivera un moment o�, quels que soient vos efforts de cat�goriser efficacement vos contenus, la masse d\'information sera telle qu\'il vous sera quasiment impossible de proposer un syst�me de navigation simple.

Je ne partage pas la r�gle des trois clics, r�gle pseudo-scientifique qui voudrait que tous les contenus d\'un site web soient accessibles en trois clics maximum. La clart� des options de navigation prime largement sur le nombre de clics.

En revanche, il peut �tre tr�s utile de cr�er plusieurs espaces d\'information distincts. 

Le gros avantage, en termes d\'ergonomie, c\'est que chaque sous-site dispose d\'un syst�me de navigation et de recherche autonome. Le visiteur se sentira moins noy�.

Du point de vue du r�f�rencement, la strat�gie des sous-sites s\'av�re �galement int�ressante. Elle permet une indexation plus pr�cise et des renvois d\'un site vers l\'autre.

Si vous cr�ez des sous-sites, vous veillerez � leur donner un air de famille graphique, de m�me que vous les ferez chapeauter par un site coupole.
</ol>         ' );


/* $main_val_array['author word'] =  array( ''      => 'Pour activer votre template personalis�e :
 1. copier la template dans le r�pertoire "templates/include/" ;
 2. mettre le module � jour ;
 3. activer la nouvelle template dans les pr�f�rences du module.' );
 */


                  echo'<div align="center">';

 //                 echo '<h1>'.admin_define( $sub ).'</h1>';



$i=0;
foreach ( $main_val_array as $items=>$items_val ) {
                  echo '<table cellspacing="1" cellpadding="3" class="outer" width="80%">';
                  echo '<tr>';
                        echo '<th colspan="2" align="left">';
                        echo admin_define( $items );
                        echo '</th>';
                  echo '</tr>';

 	foreach ( $items_val as $item_lg=>$item_val ) {

                 $item_val = explode('|',$item_val);
                 $title = explode(':',$item_val[0]);

                        echo '<tr>';
                 if( $item_lg || $item_lg == '0' ) {
                   $title = isset($title[1])?$title[1]:$title[0];
                   $title = isset($item_val[2])?'<a href="'.$item_val[2].'" target="blank">'.$title.'</a>':$title;
                        echo '<td class="head" width="30%">';
                        echo $item_lg.'. ' . $title ;
                        echo '</td>';
                        $colspan = '';
                 } else { $colspan = ' colspan="2"'; }

                        echo '<td class="even"'.$colspan.'>';
                        $text = isset($item_val[1])?$item_val[1]:$item_val[0];
                        echo $myts->makeTareaData4Show( $text );
                        echo '</td>';
                  echo '</tr>';

	}

                  echo '</table><p />';
}
                  echo'</div><p />';

//                  echo Admin_CloseTable();
?>