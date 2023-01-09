<?php
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

// fonctions utilitaires
require_once __DIR__ . '/utils/errors.php';

// pages existantes sur notre site internet
$pages = ['home', 'contact', 'admin_contact'];

// init variables vides pour le template
$page_scripts = "";
$head_metas = "";

// Inclure les classes
// NOUVELLE LIGNE            v             v
require_once __DIR__ . '/class/ContactForm.php';

// Inclure les managers
require_once __DIR__ . '/class/ContactFormManager.php';

// Initialiser les managers
$contactFormManager = new ContactFormManager($db);
