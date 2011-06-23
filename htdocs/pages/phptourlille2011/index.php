<?php
require_once '../../include/prepend.inc.php';
require_once dirname(__FILE__) . '/_config.inc.php';
$smarty->caching = false;

$aujourdhui = time();
$date_forum = $config_forum['date_fin'];
$jours_avant_forum = $date_forum - $aujourdhui;

if ($jours_avant_forum < 0) {
	$alerte_avant_forum = "<fieldset>";
	$alerte_avant_forum .= "<legend>&nbsp;Inscriptions fermées !&nbsp;</legend>";
	$alerte_avant_forum .= "<h3>Les inscriptions sont désormais fermées.<br /> Rendez-vous l'année prochaine.</h3>";
	$alerte_avant_forum .= "</fieldset>";
} else {
	$alerte_avant_forum = "";
}
$smarty->assign('alerte_avant_forum', $alerte_avant_forum);

$infos_importantes = array(
	array(
		'date' => "23 juin 2011",
		'titre' => "Demandez le programme !",
		'contenu' => "<p>Le choix est ardu, les débats sont animés, pour satisfaire décideurs comme techniciens, amateurs comme développeurs expérimentés... Les premiers conférenciers pour le PHP Tour Lille 2011 sont enfin confirmés !</p>
			<p>Nous pouvons d'ores et déjà annoncer les retours d'expériences vécues au sein de Mediapart, Conforama ou 20 Minutes, des sujets pointus et innovants tels que &laquo;les services asynchrones et multilangages avec Mongrel2 et ZeroMQ&raquo; , &laquo;le traitement XML de pointe avec PHP et XQuery&raquo; et &laquo;concevoir de puissantes applications VoIP grâce à PHP&raquo;, et des interventions des Community Managers de SugarCRM et eZ Systems.</p>
			<p>Découvrez en détail notre programmation dans notre rubrique <strong>Programme</strong>. Et ce n'est que le début : affaire à suivre !</p>",
	),
	array(
		'date' => "30 avril 2011",
		'titre' => "L'appel à conférenciers est lancé !",
		'contenu' => "<p>Expert PHP, devenez conférencier lors du PHP Tour Lille 2011, le nouvel événement itinérant de l'AFUP ! Vous êtes expert dans le domaine du commerce en ligne, vous avez des connaissances pointues dans le domaine de l'intégration d'application hétérogènes dans les systèmes d'informations, vous pouvez nous faire bénéficier d'un retour d'expérience et de vos outils et astuces pour résister aux montées en charge: venez partager vos connaissances, en solo ou en groupe ! </p>
			<p>Rendez-vous dans la rubrique « Appel à conférenciers » et remplissez le formulaire avant le 31 mai 2011, minuit. </p>",
	),
);
$smarty->assign('infos_importantes', $infos_importantes);

$actualites = array(
	array(
		'date' => "18 avril 2011",
		'titre' => "PHP Tour Lille 2011<br>les 24 et 25 novembre 2011",
		'contenu' => "<p>Le <strong>PHP Tour Lille 2011</strong> est officiellement annoncé pour les <strong>24 et 25 novembre 2011</strong> à <strong>Euratechnologies / Lille</strong> (France).</p>
			<p>Nouvel événement annuel et itinérant lancé par l'AFUP, <strong>le PHP Tour se penche sur les problématiques et thématiques propres à la région d'accueil</strong>. Experts nationaux et internationaux animeront conférences, retours d'expérience et ateliers en lien avec le tissu économique local, pour aider la communauté PHP à parvenir au top de ses capacités ! </p>
			<p>Le PHP Tour Lille 2011 mettra notamment l'accent sur le <strong>commerce en ligne</strong>, <strong>l'intégration d'application hétérogènes au sein des systèmes d'informations</strong> et <strong>l'échelle du web</strong>.</p>
			<p>Évènement itinérant, mais ambition nationale: l'AFUP se donne pour mission de faire du PHP Tour un rendez-vous annuel incontournable pour les professionnels du monde PHP. Developpeurs, décideurs, journalistes, venez découvrir le PHP Tour Lille 2011 !</p>",
	),
);
$smarty->assign('actualites', $actualites);

$smarty->display('index.html');
