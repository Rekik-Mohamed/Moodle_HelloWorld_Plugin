<?php
require_once('../../config.php'); //inclure le fichier de configuration de Moodle

$context = context_system::instance(); //obtenir le contexte système pour la page

$PAGE->set_context($context); //définir le contexte pour la page

$PAGE->set_url(new moodle_url('/local/greetings/index.php'));//définir l'URL du page

$PAGE->set_pagelayout('standard'); //définir la mise en page standard pour la page

echo $OUTPUT->header(); //afficher l'en-tête de la page

echo '<h3> HelloWorld '.fullname($USER).'</h3>'; //afficher le message de salutation

echo $OUTPUT->footer(); // afficher le pied de page de la page

