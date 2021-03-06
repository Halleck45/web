<?php

/**
    TODO en plus de cette config :
    Créer la ligne afup_forum et mettre l'id de la ligne dans $config_forum['id']
    Il faut aussi verifier le contenu des template (rechercher la date de l'année précedente )
    Modifer le pdf du formulaire papier dans "/site/templates/forumphpXXXX/inscription-forum.pdf"
       à partir du doc dans "/sources/doc/inscription au forum.odt"
    Modifer le pdf du dossier sponsors dans "/site/templates/forumphp2009/pdf/Forum-PHP-2009-dossier-sponsor.pdf"
       à partir du doc dans "/sources/forum/2009/Forum-PHP-2009-dossier-sponsor.odt"

 */
date_default_timezone_set("Europe/Paris");

$config_forum['id'] = 4;
$coupons = array('PHPFRANCE','POLENORD','DIGIPORT', 'WAMPSERVER',
                  'ALTERWAY','ADOBE','SENSIO','SENSIOLABS','4D',
                  'HSC','MICROSOFT','ZEND', 'CODEUR',
                  'AFUP','CONFERENCIER', 'TWITTER',
                  'CAKEPHP','POLLEN', 'PIWAM',
                  'FINEFS','HOA',  'PIC', 'DRUPAL',
                  'FREEDOM','JELIX', 'HAVEFNUBB','PHPTV', 'ELAO','PRESTASHOP','DEVELOPPEZ',
                );

$config_forum['project_ids'] = array(353,354,355,356,357,358,359,361,362,363,364,366);
$config_forum['coupons'] = array_merge($coupons,array_map("strtolower",$coupons));
$config_forum['annee'] = 2009;
$config_forum['date_fin_appel_conferencier'] = mktime(23, 59, 59, 6, 30, $config_forum['annee']);
$config_forum['date_fin_prevente'] =$config_forum['date_fin_appel_conferencier'] ;
$config_forum['date_debut'] = mktime(0, 0, 0, 11, 12, $config_forum['annee']);
$config_forum['date_fin'] = mktime(0, 0, 0, 11, 13, $config_forum['annee']);
$smarty->assign('forum_annee', $config_forum['annee'] );
$sponsors_gold=array(
    array('nom'   => 'AlterWay',
          'site'  => 'http://www.alterway.fr/',
          'logo'  => 'logo_alter_way.png',
          'texte' => 'Créé en 2006, le groupe Alter Way a rapidement
                      <strong>rassemblé les équipes emblématiques</strong> des principaux segments du marché de l’Open Source&nbsp;:
                      <ul><li>Anaska (<a href="http://www.anaska.com">formation OpenSource</a> en général et <a href="http://www.anaska.com/formation-php.php">formation PHP</a> et <a href="http://www.anaska.com/formation-mysql.php">formation MySQL</a> en particulier),</li>
                      <li> Ingeniweb (solutions Web d’entreprise),</li>
                      <li>Solinux (développements spécifiques, infogérance système et intégration d’outils middleware),</li>
                      <li>Kanopée (<a href="http://www.alterway.fr/technologies/planete-php">développement php</a>) ,</li>
                      <li>O4DB (décisionnel et base de données) et ECLIP’S Software (solution ouverte d’administration et de configuration des services DNS et DHCP).</li>
                      <li>Nexen-Services (<a href="http://www.nexenservices.com">hébergement</a> à valeur ajoutée)</li></ul>
                      <strong>Alter Way continue de s’inscrire clairement dans un projet de consolidation de marché</strong>.')

    );

$smarty->assign('sponsors_gold', $sponsors_gold);

$sponsors_silver=array(
    array('nom'   => 'Adobe',
          'site'  => 'http://www.adobe.com/fr/',
          'logo'  => 'logo_adobe.jpg',
          'texte' => "Adobe révolutionne l'échange d'idées et d'informations. Depuis vingt cinq ans, les
                  technologies et les logiciels réputés de cet éditeur redéfinissent la communication des
                  entreprises, du marché des loisirs et des particuliers en établissant de nouveaux standards
                  de production et de diffusion de contenus véritablement fascinants - partout et à tout
                  moment. À travers des images d'une remarquable richesse visuelle pour l'impression, la
                  vidéo et le cinéma ou du contenu numérique dynamique adapté à une multitude de sup-
                  ports, l'impact des solutions est évident et peut être ressenti par quiconque crée, visualise
                  et manipule des informations. Fort de sa réputation d'excellence et d'une gamme consti-
                  tuée de nombreux produits parmi les plus appréciés et les plus connus du marché, Adobe
                  est l'un des principaux éditeurs de logiciels mondiaux les plus diversifiés."),
    array('nom'   => 'Microsoft',
          'site'  => 'http://www.microsoft.com/fr/fr/',
          'logo'  => 'logo_microsoft.png',
          'texte' => ''),
    array('nom'   => 'Sensio Labs',
          'site'  => 'http://www.sensiolabs.com/fr',
          'logo'  => 'logo_sensio.gif',
          'texte' => 'Cr&eacute;&eacute; en 1998, Sensio Labs figure aujourd&rsquo;hui parmi les <b>acteurs de r&eacute;f&eacute;rence du monde de l&rsquo;Open Source</b>. A l&rsquo;origine du framework PHP Symfony, projet internationalement reconnu et prim&eacute; et de diff&eacute;rents projets Open Source (Doctrine, Swift mailer, Sismo, Lime, &hellip;), Sensio Labs propose une vaste gamme de prestations et services &agrave; haute valeur ajout&eacute;e (conseil, formation, expertise, d&eacute;veloppement, documentation, &hellip;)<br /><br />

Entreprise innovante, Sensio Labs est &eacute;galement labellis&eacute; par le Minist&egrave;re de la Recherche. '),
    array('nom'   => 'Zend',
          'site'  => 'http://www.zend.com/fr/',
          'logo'  => 'logo_zend.png',
          'texte' => 'Les entreprises qui utilisent PHP savent que Zend détient l’expertise et les solutions technologiques de référence pour PHP. Andi Gutmans et Zeev Suraski, deux des fondateurs de Zend, sont les co-architectes historiques de PHP et créateurs du Zend Engine, moteur open-source de PHP. De par leur autorité reconnue internationalement, la société et ses fondateurs continuent à assurer le leadership au sein des communautés PHP et tiennent un rôle important dans la croissance explosive de PHP.<br />
De ce fait, Zend Technologies Inc., la PHP Company, est le leader des produits et services de développement, déploiement et gestion d\'applications Web critiques. Mondialement déployée dans plus de 25000 entreprises, la <a href="http://www.zend.com/fr/products/">gamme de produits Zend</a> apporte une solution complète durant tout le cycle de vie d\'une application PHP.<br />
Zend propose des <a href="http://www.zend.com/fr/services/training/">formations</a> en classe et en ligne sur ses technologies (Zend Studio, Zend Framework, Zend Server) et sur PHP, du <a href="http://www.zend.com/fr/services/consulting/">consulting</a> et de l’expertise (audits de performance, de sécurité…) ainsi que du <a href="http://www.zend.com/fr/services/support/">support</a>. <br />'),
    );
    //$sponsors = array();
$smarty->assign('sponsors_silver', $sponsors_silver);

$sponsors_bronze=array(
    array('nom'   => '4D',
          'site'  => 'http://www.4d.com/fr/',
          'logo'  => 'logo_4D.jpg',
          'texte' => "<p>Les développeurs PHP et 4D peuvent désormais collaborer et s'enrichir mutuellement de leur expérience, grâce aux différentes possibilités de connexion entre les deux univers, introduites dans la version 4D v11 SQL, et fortement étendues dans la prochaine version 4D v12 annoncée pour début 2010.</p>
                      <p>Depuis maintenant 25 ans, 4D est reconnue pour ses outils innovants dans le domaine du développement d'applications professionnelles. Nous proposons aux développeurs et utilisateurs finaux une plateforme intégrée orientée vers la conception et le déploiement rapides de solutions adaptées aux besoins des PME, des départements de grands comptes, des acteurs institutionnels. Les produits de la gamme 4D se veulent intuitifs, pratiques, productifs et ouverts sur les technologies tierces.</p>"),
    array('nom'   => 'HSC',
          'site'  => 'http://www.hsc.fr/',
          'logo'  => 'logo_hsc.png',
          'texte' => '<p>En tant qu\'acteur activement impliqué dans la diffusion des bonnes pratiques de développement sécurisé dans le domaine du PHP et créateur du e-learning &quot;programmation sécurisée en PHP&quot;, HSC est fier  de sponsoriser pour la première fois le forum &quot;PHP Paris 2009&quot;.<br />
  Adrien Pasquier, chef de projet e-learning PHP, et Nicolas Collignon, auteur du e-learning seront présents sur le forum les 12 et 13 novembre 2009.</p>
<p>Pour en savoir plus sur le e-learning &quot;Programmation sécurisée en PHP&quot;, rendez vous sur <a href="http://www.hsc-formation.fr/e-learning/programmation_php.html.fr">http://www.hsc-formation.fr/e-learning/programmation_php.html.fr</a></p>
<p>À propos d\'HSC :</p>
<p>Créée en 1989 par Hervé SCHAUER, Hervé Schauer Consultants est une<br />
  société de conseil et d\'expertise en sécurité des systèmes d’information.<br />
  Afin de satisfaire aux particularités de ce marché, HSC conserve<br />
  rigoureusement son indépendance commerciale et financière. L’expertise de nos consultants couvre l’ensemble des strates du métier, de la mission la plus technique (audit) au projet le plus structurant (politique de sécurité).<br />
  La pérennité de notre entreprise et la fidélité de nos clients sont dues à notre sens aigu de la confidentialité. Notre investissement quotidien dans le tissu associatif français et les sollicitations des médias nous permettent de communiquer librement sur nos travaux de recherche.<br />
  Enfin la sécurité des systèmes d’information étant une problématique<br />
  universelle, HSC intervient dans divers domaines d\'activités auprès de grands comptes en France, Europe, Afrique et Amérique du nord.<br />
  <a href="http://www.hsc.fr">http://www.hsc.fr</a></p>         '),
    array('nom'   => 'Codeur.com',
          'site'  => 'http://www.codeur.com',
          'logo'  => 'logo_codeur.gif',
          'a_title'  => 'developpeurs php',
          'texte' => '<a target="_blank" href="http://Codeur.com">Codeur.com</a>
est un service de mise en relation entre les porteurs de projets et les développeurs. C\'est la place de marché francophone des prestations informatiques. Les porteurs de projet définissent leur besoin gratuitement au moyen d\'un projet (appel d\'offre). Les prestataires font des propositions (prix, délais, description de la prestation) qui sont visibles par tous. En plus de la garantie de transparence, qui améliore la compétitivité, les prestataires sont évalués par leur client après chaque projet remporté, pour garantir la qualité des prestations.
<br/>
<br/>
Déjà plus de 1.800
<a target="_blank" href="http://www.codeur.com/index.php?m=recherche&motclef=php&cat=0&recherche_affine=Recherche&q=projet&pwhere=pcontenu&pin=pinboth">projets PHP</a>
ont été publiés sur
<a target="_blank" href="http://Codeur.com">Codeur.com</a>
et sont consultés par plus de 2.000
<a target="_blank" href="http://www.codeur.com/jla-recherche&q=membre&motclef=php">développeurs php</a>'),
    array('nom'   => 'Cité des sciences',
          'site'  => 'http://www.cite-sciences.fr/',
          'logo'  => 'logo_cite.png',
          'texte' => ''),
    );

$smarty->assign('sponsors_bronze', $sponsors_bronze);

$partenaires=array(
    array('nom'   => 'Developpez.com',
          'site'  => 'http://www.developpez.com/',
          'logo'  => 'logo_dvp-afup.gif',
          'texte' => 'Le club <a href="http://www.developpez.com">www.developpez.com</a> met à disposition gratuitement tous les
                      services utiles aux décideurs et professionnels en informatique :
                      newsletter, magazine, actualités, cours, tutoriels, articles, FAQ\'s,
                      tests, comparatifs, débats, sondages, outils, sources, composants et
                      exemples de codes, les BLOGs, et l\'hébergement gratuit de sites sur
                      l\'informatique. <a href="http://www.developpez.com">www.developpez.com</a> est la communauté en langue
                      française qui concentre le plus d\'informaticiens professionnel!'),
    array('nom'   => 'Eyrolles',
          'site'  => 'http://www.editions-eyrolles.com/',
          'logo'  => 'logo_eyrolles.gif',
          'texte' => 'Les Editions Eyrolles ont placé PHP au coeur de leur offre Développeurs,
                  de l\'initiation (<a href="http://www.editions-eyrolles.com/Livre/9782212114072/php-5">
                  manuels avec cours et exercices</a>,
                  <a href="http://www.editions-eyrolles.com/Livre/9782212116786/php-mysql-et-javascript">
                  apprentissage par la pratique</a>) à l\'exploitation professionnelle
                  (livres de référence dont <a href="http://www.editions-eyrolles.com/Livre/9782212123692/php-5-avance">PHP 5 avancé</a>,
                  études de cas détaillées dont une sur <a href="http://www.editions-eyrolles.com/Livre/9782212112344/php-5">PHP</a>).
                  Au-delà de la maîtrise de PHP, chaque ouvrage offre un véritable savoir-faire métier au développeur.<br/>
                  Suivez les nouveautés Eyrolles en vous abonnant au fil RSS
                  <a href="http://www.editions-eyrolles.com/rss.php?q=php">http://www.editions-eyrolles.com/rss.php?q=php</a> !'),
    array('nom'   => 'ENI',
          'site'  => 'http://www.editions-eni.fr/',
          'logo'  => 'logo_eni.jpg',
          'texte' => 'Le monde de l\'informatique est en perpétuelle évolution et les technologies liées notamment au
                  développement ne sont pas en reste. Editions ENI est au coeur de cette actualité technique et
                  accompagne les informaticiens dans leur apprentissage, leur évolution de carrière.
                  Nos différentes collections (manuels de référence, livres expert, mise en place de solution,
                  recueil d\'exercices) couvrent un grand nombre de besoins en proposant des approches pédagogique variées.
                  Nos livres sont écrits par des formateurs et/ou consultants.
                  Retrouvez tous les mois nos dernières nouveautés sur
                  <a href="http://www.editions-eni.fr">www.editions-eni.fr</a>.'),
//    array('nom'   => 'TooLinux',
//          'site'  => 'www.toolinux.com',
//          'logo'  => 'logo-toolinux.png',
//          'texte' => 'TOOLINUX.com est un quotidien d\'information sur Linux et les logiciels Libres. Généraliste, il offre chaque jour une revue de presse en ligne et des articles traitant du mouvement opensource, de l\'économie du libre ainsi que des logiciels Linux ou multi-plateformes. Depuis l\'été 2006, TOOLINUX.com s\'ouvre à la problématique de l\'interopérabilité des solutions informatiques.'),
//    array('nom'   => 'Linagora',
//          'site'  => 'www.linagora.com',
//          'logo'  => 'logo-linagora.png',
//          'texte' => 'Créateur des concepts de SS2L et de TM2L, LINAGORA se définit désormais comme un Editeur Orienté Service. Sa vocation est d\'être un spécialiste de l\'Open Source et d\'être un intermédiaire de confiance entre les communautés du logiciel libre ou des éditeurs Open Source d\'une part et les utilisateurs ou intégrateurs d\'autre part.'),
    array('nom'   => 'Programmez !',
          'site'  => 'http://www.programmez.com/',
          'logo'  => 'logo_programmez.gif',
          'texte' => 'Avec plus de 30.000 lecteurs mensuels, PROGRAMMEZ ! s\'est imposé comme
                  un magazine de référence des développeurs.',
    ),
    array('nom'   => 'PHP Solutions',
          'site'  => 'http://www.phpsolmag.org/',
          'logo'  => 'logo-php-solutions.png',
          'texte' => 'PHP Solutions est un magazine international pour tous ceux qui s\'intéressent
                  à la programmation en PHP et à la création d\'applications Web. C\'est le seul
                  magazine consacré entièrement au language PHP sur le marché français. Nous
                  décrivons des technologies les plus récentes, des projets complets et des
                  problèmes de programmeurs.'
    ),
    array('nom'   => 'Altrasys',
          'site'  => 'http://www.altrasys.fr/',
          'logo'  => 'logo_altrasys.gif',
          'texte' => 'Altrasys est une société de conseils et de services informatique pour
                  les petites et moyennes structures. Elle intervient sur des missions
                  de conseil (évolution de serveurs, de parc ou changement de technologie)
                  et de services (gestion de parc informatique, mise en oeuvre de solutions
                  de sauvegarde, de groupware, déploiement de serveurs, mise en place de VPN)
                  aussi bien dans les environnements OpenSource ou propriétaires que
                  sur l\'infrastructure réseau.',
    ),
);
$smarty->assign('partenaires', $partenaires);
?>