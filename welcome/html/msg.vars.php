<?php 
$url='./';$title='Message';
$_msgbox['common']=[
    'success'=>[
        'title'=>'Opération réussie',
        'header'=>'Opération réussie !',
        'content'=>'','icon'=>'up'
    ],
    'fail'=>[
        'title'=>'Opération échoué',
        'header'=>'Echec Opération !',
        'content'=>'','icon'=>'down'
    ],
    'expired'=>[
        'title'=>'Page expiré',
        'header'=>'Page inaccessible !',
        'content'=>"La page n'est pas accessible",
        'icon'=>'down'
    ],
    'pass-error'=>[
        'title'=>'Pass sanitaire invalide',
        'header'=>'Votre pass sanitaire est invalide !',
        'content'=>"Désolé, votre pass sanitaire est probablement contrefait. Veuillez générer un autre",
        'icon'=>'down'
    ],
    'pass-expired'=>[
        'title'=>'Pass sanitaire expiré',
        'header'=>'Votre pass sanitaire est expiré !',
        'content'=>"Veuillez générer une nouvelle pass ou contacter l'administration",
        'icon'=>'down'
    ],
    'contact'=>[
        'title'=>'Message envoyé',
        'header'=>'Envoi réussi !',
        'content'=>"Merci de nous avoir  contacter, Nous vous contacterons dans <br/>72 heures si nécessaire",
        'icon'=>'up'
    ],
];
$_msgbox['user']=[
    'insert'=>[
        'title'=>'Opération réussie',
        'header'=>'Opération réussie !',
        'content'=>"Merci de consulter votre adresse e-mail pour recevoir votre mot de passe par défaut. <br><b class=\"text-danger\">Vous pouvez le modifier à tout moment dans les paramètres de votre compte.</b>",
        'icon'=>'up'
    ],
    'exists'=>[
        'title'=>'Compte existant',
        'header'=>'Ce compte existe',
        'content'=>"Désolé, Ce compte existe déjà dans le système.",
        'icon'=>'down'
    ],
    'not_exists'=>[
        'title'=>'Compte inexistant',
        'header'=>'Ce compte est inexistant',
        'content'=>"Désolé, Ce compte n'existe pas dans le système.",
        'icon'=>'down'
    ],
    'active'=>[
        'title'=>'Compte actif',
        'header'=>'Ce compte est déjà activée',
        'content'=>"",
        'icon'=>'down'
    ],
    'not_active'=>[
        'title'=>'Compte inactif',
        'header'=>'Ce compte est inactif',
        'content'=>"",
        'icon'=>'down'
    ],
    'activate'=>[
        'title'=>'Activation',
        'header'=>'Votre compte est actif !',
        'content'=>"",
        'icon'=>'up'
    ],
    'init'=>[
        'title'=>'Réinitialisation',
        'header'=>'Votre mot de passe est réinitialisé avec succès !',
        'content'=>"",
        'icon'=>'up'
    ],
    'update'=>[
        'title'=>'Mise à jour',
        'header'=>'Mise à jour réussie !',
        'content'=>"Votre compte est mis à jour avec succès",
        'icon'=>'up'
    ],
    'photo'=>[
        'title'=>'Photo non chargé',
        'header'=>'La photo est non chargée !',
        'content'=>"Veuillez charger une photo dans votre profil",
        'icon'=>'down'
    ],
    'old'=>[
        'title'=>'Opération échouée',
        'header'=>'Ancien mot de passe incorrect',
        'content'=>"Merci de saisir le bon mot de passe.",
        'icon'=>'down'
    ],
    'confirm'=>[
        'title'=>'Opération échouée',
        'header'=>'Incohérence mot de passe',
        'content'=>"Merci de saisir correctement votre nouveau mot de passe.",
        'icon'=>'down'
    ],
];
$_msgbox['voyage']=[
    'date'=>[
        'title'=>'Date du voyage incorrecte',
        'header'=>"La date de votre voyage est incorrecte",
        'content'=>"Merci de selectionner une date de voyage valide",
        'icon'=>'down',
    ]
];
