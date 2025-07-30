<?php
// Configuration des en-têtes pour permettre les requêtes CORS
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Gérer les requêtes OPTIONS (preflight)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Vérifier que la méthode est POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Méthode non autorisée. Utilisez POST.']);
    exit();
}

// Récupérer les données JSON
$input = json_decode(file_get_contents('php://input'), true);

// Vérifier que les données sont présentes
if (!$input) {
    http_response_code(400);
    echo json_encode(['error' => 'Données JSON invalides.']);
    exit();
}

// Extraire et valider les champs requis
$nom_complet = trim($input['nom_complet'] ?? '');
$email = trim($input['email'] ?? '');
$sujet = trim($input['sujet'] ?? '');
$message = trim($input['message'] ?? '');

// Validation des champs
$errors = [];

if (empty($nom_complet)) {
    $errors['nom_complet'] = 'Le nom complet est requis.';
}

if (empty($email)) {
    $errors['email'] = 'L\'email est requis.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'L\'email n\'est pas valide.';
}

if (empty($sujet)) {
    $errors['sujet'] = 'Le sujet est requis.';
}

if (empty($message)) {
    $errors['message'] = 'Le message est requis.';
}

// Si des erreurs sont présentes, les retourner
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['error' => 'Données invalides.', 'details' => $errors]);
    exit();
}

// Adresse de destination
$destinataire = 'maximeaupetit60@gmail.com';

// Préparer le contenu de l'email
$sujet_email = '[Contact Site Web] ' . $sujet;

$contenu_email = "Nouveau message reçu depuis le site web\n\n";
$contenu_email .= "Nom complet: " . $nom_complet . "\n";
$contenu_email .= "Email: " . $email . "\n";
$contenu_email .= "Sujet: " . $sujet . "\n\n";
$contenu_email .= "Message:\n" . $message . "\n\n";
$contenu_email .= "---\n";
$contenu_email .= "Ce message a été envoyé depuis le formulaire de contact du site web.\n";
$contenu_email .= "Date: " . date('d/m/Y à H:i:s') . "\n";

// Configuration des en-têtes de l'email
$headers = [];
$headers[] = 'From: noreply@' . $_SERVER['HTTP_HOST'];
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$headers_string = implode("\r\n", $headers);

// Tentative d'envoi de l'email
$envoi_reussi = mail($destinataire, $sujet_email, $contenu_email, $headers_string);

// Réponse selon le résultat
if ($envoi_reussi) {
    http_response_code(200);
    echo json_encode([
        'success' => true,
        'message' => 'Email envoyé avec succès!'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'error' => 'Erreur lors de l\'envoi de l\'email.',
        'message' => 'Veuillez réessayer plus tard ou nous contacter directement.'
    ]);
}

// Log pour le débogage (optionnel)
error_log("Tentative d'envoi d'email - De: $email, Sujet: $sujet, Succès: " . ($envoi_reussi ? 'Oui' : 'Non'));
?>
