<?php

$lang_admin_settings = array(

'Settings updated'				=>	'Paramètres mis à jour.',

// Setup section
'Setup personal'				=>	'Personnalisez votre installation de PunBB',
'Setup personal legend'			=>	'Installation de PunBB ',
'Board description label'		=>	'Description du site',
'Board title label'				=>	'Titre du site',
'Default style label'			=>	'Style par défaut',
'Setup local'					=>	'Configurez PunBB pour votre région',
'Setup local legend'			=>	'Paramètres régionaux',
'Default timezone label'		=>	'Fuseau horaire par défaut',
'DST label'						=>	'L’heure d’été est activée (avance d’une heure).',
'Default language label'		=>	'Langue par défaut',
'Default language help'			=>	'(si vous supprimez une langue, pensez à mettre à jour ce paramètre)',
'Time format label'				=>	'Format de l’heure',
'Date format label'				=>	'Format de la date',
'Current format'				=>	'[ Format actuel : %s ] %s',
'External format help'			=>	'Voir <a class="exthelp" href="http://www.php.net/manual/fr/function.date.php">ici</a> les options de formattage.',
'Setup timeouts'				=>	'Délais par défaut',
'Setup timeouts legend'			=>	'Dépassements de temps par défaut',
'Visit timeout label'			=>	'Délai de visite',
'Visit timeout help'			=>	'Secondes d’inactivité avant de mettre à jour la date de dernière visite',
'Online timeout label'			=>	'Délai de présence',
'Online timeout help'			=>	'Secondes d’inactivité avant d’être retiré de la liste des utilisateurs en ligne',
'Redirect time label'			=>	'Délai de redirection',
'Redirect time help'			=>	'S’il est égal à 0 secondes, il n’y aura pas de page de redirection (ce qui n’est pas recommandé)',
'Setup pagination'				=>	'Pagination par défaut des sujets, messages et revues',
'Setup pagination legend'		=>	'Pagination par défaut',
'Topics per page label'			=>	'Sujets par page',
'Posts per page label'			=>	'Messages par page',
'Topic review label'			=>	'Revue de sujet',
'Topic review help'				=>	'Trié par date décroissante. 0 pour désactiver.',
'Setup reports'					=>	'Méthode d’envoi des rapports de message et de sujet',
'Setup reports legend'			=>	'Envoyer les rapports',
'Reporting method'				=>	'Méthode de rapport',
'Report internal label'			=>	'Par le système interne de rapport.',
'Report both label'				=>	'Par le système interne de rapport et par e-mail aux membres de la liste de publication.',
'Report email label'			=>	'Par e-mail aux membres de la liste de publication.',
'Setup URL'						=>	'Schéma des URL (<abbr title ="Search Engine Friendly">SEF</abbr>) pour les pages du site',
'Setup URL legend'				=>	'Choisissez un shéma',
'URL scheme info'				=>	'<strong>Attention !</strong> Si vous choisissez un shéma différent de celui par défaut vous devez copier / renommer le fichier <em>.htaccess.dist</em> en <em>.htaccess</em> dans le répertoire racine du forum. Le serveur du site doit être configuré avec le support de mod_rewrite et doit autoriser l’utilisation des fichiers <em>.htaccess</em>. Si votre serveur n’est pas Apache, voyez sa documentation spécifique.',
'URL scheme label'				=>	'Schéma d’URL',
'URL scheme help'				=>	'Assurez-vous d’avoir lu et compris les informations ci-dessus.',
'Setup links'					=>	'Ajouter vos propres liens au menu principal de navigation',
'Setup links info'				=>	'Vous pouvez ajouter le nombre d’items que vous souhaitez au menu de navigation en haut de chaque page, en saisissant ici des hyperliens HTML. Le format attendu est X = &lt;a href="URL"&gt;LIEN&lt;/a&gt; où X est la position à laquelle insérer le lien dans le menu (par ex. 0 pour l’insérer au début, ou 2 pour l’insérer après « Membres »). Mettez un item par ligne.',
'Setup links legend'			=>	'Items de menu',
'Enter links label'				=>	'Saisissez vos liens',
'Error no board title'			=>	'Vous devez donner un nom au site.',
'Error timeout value'			=>	'La valeur de « Délai de présence » doit être inférieure à celle de « Délai de visite ».',


// Features section
'Features general'				=>	'Fonctions générales de PunBB',
'Features general legend'		=>	'Fonctions générales',
'Searching'						=>	'Rechercher',
'Search all label'				=>	'Autoriser les utilisateurs à chercher dans tous les forums plutôt qu’un par un. A désactiver si la charge du serveur est trop grande.',
'User ranks'					=>	'Classement des utilisateurs',
'User ranks label'				=>	'Activer le classement des utilisateurs selon le nombre de messages.',
'Censor words'					=>	'Censure',
'Censor words label'			=>	'Activer la censure par mot.',
'Quick jump'					=>	'Menu d’accès rapide',
'Quick jump label'				=>	'Activer la liste d’accès rapide (aller au forum).',
'Show version'					=>	'Montrer la version',
'Show version label'			=>	'Montrer la version de PunBB dans le pied de page.',
'Show moderators'				=>	'Afficher moderateurs',
'Show moderators label'			=>	'Afficher les moderateurs sur la page d\'index.',
'Online list'					=>	'Liste des connectés',
'Users online label'			=>	'Afficher la liste des invités et des utilisateurs inscrits actuellement connectés.',
'Features posting'				=>	'Fonctions et informations liées aux sujets et messages',
'Features posting legend'		=>	'Fonctions des messages',
'Quick post'					=>	'Message rapide',
'Quick post label'				=>	'Ajouter un formulaire de message rapide au pied des sujets.',
'Subscriptions'					=>	'Abonnements',
'Subscriptions label'			=>	'Autoriser les utilisateurs à s’abonner aux sujets (recevoir un e-mail quand une réponse est publiée).',
'Guest posting'					=>	'Messages des invités',
'Guest posting label'			=>	'Les invités doivent fournir une adresse e-mail pour écrire.',
'User has posted'				=>	'Marque de participation',
'User has posted label'			=>	'Afficher un point devant les sujets où l’utilisateur a précédemment écrit. À désactiver si la charge du serveur est trop grande.',
'Topic views'					=>	'Compteur de lectures',
'Topic views label'				=>	'Garder le compte des lectures par sujet. À désactiver si la charge du serveur est trop grande.',
'User post count'				=>	'Compteur individuel',
'User post count label'			=>	'Montrer le nombre de messages écrits par l’utilisateur dans les messages, le profil et la liste des membres.',
'User info'						=>	'Informations sur l’utilisateur',
'User info label'				=>	'Montrer la localisation, la date d’inscription, le compteur de message, l’e-mail et l’URL de l’utilisateur dans les messages.',
'Features posts'				=>	'Contenu des sujets et messages',
'Features posts legend'			=>	'Options du contenu des sujets et messages',
'Post content group'			=>	'Options des messages',
'Allow BBCode label'			=>	'Autoriser le BBCode dans les messages (recommandé).',
'Allow img label'				=>	'Autoriser le tag BBCode [img] dans les messages.',
'Smilies in posts label'		=>	'Convertir les binettes en icônes dans les messages.',
'Make clickable links label'	=>	'Autoriser l’analyseur de BBCode à identifier les URLs et à les mettre dans un tag [url].',
'Allow capitals group'			=>	'Autoriser tout en majuscules',
'All caps message label'		=>	'Autoriser les messages à ne contenir que des majuscules.',
'All caps subject label'		=>	'Autoriser les sujets à ne contenir que des majuscules.',
'Indent size label'				=>	'Tabulation du tag [code]',
'Indent size help'				=>	'Tabuler le texte d’autant d’espaces. Si défini à 8, une tabulation normale sera utilisée.',
'Quote depth label'				=>	'Imbrication du tag [quote]',
'Quote depth help'				=>	'Le nombre maximale de fois que le tag [quote] peut être imbriqué dans un autre tag [quote], les tags supplémentaires étant supprimés.',
'Features sigs'					=>	'Signature des utilisateurs',
'Features sigs legend'			=>	'Options de la signature',
'Allow signatures'				=>	'Autoriser la signature',
'Allow signatures label'		=>	'Autoriser les utilisateurs à ajouter une signature à leurs messages.',
'Signature content group'		=>	'Contenu de la signature',
'BBCode in sigs label'			=>	'Autoriser le BBCode dans les signatures.',
'Img in sigs label'				=>	'Autoriser le tag BBCode [img] dans les signatures (non recommandé).',
'All caps sigs label'			=>	'Autoriser les signatures à être entièrement en majuscules.',
'Smilies in sigs label'			=>	'Convertir les binettes en icônes dans les signatures.',
'Max sig length label'			=>	'Nombre maximal de caractères',
'Max sig lines label'			=>	'Nombre maximal de lignes',
'Features Avatars'				=>	'Avatars des utilisateurs (téléchargement et taille)',
'Features Avatars legend'		=>	'Paramètres des avatars des utilisateurs',
'Allow avatars'					=>	'Autoriser les avatars',
'Allow avatars label'			=>	'Autoriser les utilisateurs à télécharger des avatars à afficher dans les messages.',
'Avatar directory label'		=>	'Répertoire de téléchargement des avatars',
'Avatar directory help'			=>	'Relatif au répertoire racine de PunBB. PHP doit pouvoir écrire dans ce répertoire.',
'Avatar Max width label'		=>	'Largeur maximale des avatars',
'Avatar Max width help'			=>	'Pixels (60 recommandé).',
'Avatar Max height label'		=>	'Hauteur maximale des avatars',
'Avatar Max height help'		=>	'Pixels (60 recommandé).',
'Avatar Max size label'			=>	'Poids maximal des avatars',
'Avatar Max size help'			=>	'Octets (10240 recommandé).',
'Features update'				=>	'Vérifier automatiquement les mises à jour',
'Features update info'			=>	'PunBB peut vérifier régulièrement si des mises à jour sont disponibles. Il peut s’agir de nouvelles versions, de correctifs, de mise à jour d’extensions. Quand des mises à jour sont disponibles une alerte pour l’administrateur s’affiche.',
'Features update disabled info'	=>	'La fonctionnalité de recherche automatique de mise à jour est indisponible. Pour qu’elle fonctionne, l’environnement PHP de PunBB doit avoir soit l’<a  class="exthelp" href="http://www.php.net/manual/fr/ref.curl.php">extension cURL</a>, soit la <a class="exthelp" href="http://www.php.net/manual/fr/function.fsockopen.php">fonction fsockopen()</a> ou l’option <a class="exthelp" href="http://www.php.net/manual/fr/ref.filesystem.php#ini.allow-url-fopen">allow_url_fopen</a> doit être activée.',
'Features update legend'		=>	'Mises à jour automatiques',
'Update check'					=>	'Rechercher les mises à jour',
'Update check label'			=>	'Activer la recherche automatique de mises à jour.',
'Check for versions'			=>	'Rechercher les nouvelles versions',
'Auto check for versions'		=>	'Activer la recherche de nouvelles versions des extensions.',

'Features mask passwords'			=>	'Masquer les mots de passe dans les formulaires',
'Features mask passwords legend'	=>	'Cacher mots de passe',
'Features mask passwords info'		=>	' Si elle est activée, PunBB peut masquer tous les champs de mots de passe et de montrer le champ de confirmation de mot de passe le cas échéant. Si elle est désactivée, les champs de mot de passe ne seront pas masqués et les utilisateurs n\'auront qu\'à entrer leurs mots de passe une fois quand ENREGISTRER et de les changer. Le champ mot de passe sur le formulaire de connexion est toujours masqué (indépendamment de cette option).',
'Enable mask passwords'				=>	'Activer le masquage des mots de passe',
'Enable mask passwords label'		=>	'Activation du masquage.',

'Features gzip'					=>	'Comprimer les pages avec gzip',
'Features gzip legend'			=>	'Compression des pages',
'Features gzip info'			=>	'Si cette option est activée, PunBB compressera avec <a class="exthelp" href="http://fr.wikipedia.org/wiki/Gzip">gzip</a> les pages envoyées aux navigateurs. Cela réduit la consommation de bande passante, mais charge le serveur. Il faut que PHP soit configuré avec zlib (--with-zlib). Note : si les modules d’Apache mod_gzip ou mod_deflate sont déjà configurés pour comprimer les scripts PHP, désactivez cette option.',
'Enable gzip'					=>	'Activer gzip',
'Enable gzip label'				=>	'Activer la compression des pages par gzip.',

// Announcements section
'Announcements head'			=>	'Afficher une annonce sur chaque page du site',
'Announcements legend'			=>	'Annonce',
'Enable announcement'			=>	'Activer l’annonce',
'Enable announcement label'		=>	'Afficher un message d’annonce.',
'Announcement heading label'	=>	'Titre de l’annonce',
'Announcement message label'	=>	'Message de l’annonce',
'Announcement message help'		=>	'Vous pouvez utiliser du HTML dans votre message. Les annonces ne sont pas analysées comme les messages.',
'Announcement message default'	=>	'<p>Saisissez votre annonce ici.</p>',

// Registration section
'Registration new'				=>	'Nouvelles inscriptions',
'New reg info'					=>	'Vous pouvez faire confirmer chaque nouvelle inscription. Quand cette option est activée, les utilisateurs reçoivent un e-mail d’activation. Ils suivent le lien qu’il contient pour définir leur mot de passe et se connecter. Cette fonction impose aussi aux utilisateurs de confirmer leur adresse e-mail lorsqu’ils en changent. C’est un bon moyen d’éviter les abus d’inscription et de s’assurer que les adresses e-mail des profils sont « correctes ».',
'Registration new legend'		=>	'Paramètres d’inscription',
'Allow new reg'					=>	'Autoriser l’inscription',
'Allow new reg label'			=>	'Autoriser les nouveaux utilisateurs à s’inscrire. À ne désactiver que pour une bonne raison.',
'Verify reg'					=>	'Faire confirmer l’inscription',
'Verify reg label'				=>	'Impose la confirmation par e-mail de toute nouvelle inscription.',
'Reg e-mail group'				=>	'E-mail d’inscription',
'Allow banned label'			=>	'Autoriser l’inscription avec des adresses e-mail bannies.',
'Allow dupe label'				=>	'Autoriser l’inscription avec des adresses e-mail déjà utilisées.',
'Report new reg'				=>	'Avertir par e-mail',
'Report new reg label'			=>	'Avertir les utilisateurs de la liste de diffusion lors d’une nouvelle inscription.',
'E-mail setting group'			=>	'Paramètres e-mail par défaut',
'Display e-mail label'			=>	'Montrer l’adresse e-mail aux autres utilisateurs.',
'Allow form e-mail label'		=>	'Cacher l’adresse e-mail mais autoriser les e-mail via le forum.',
'Disallow form e-mail label'	=>	'Cacher l’adresse e-mail et interdire les e-mails via le forum.',
'Registration rules'			=>	'Règles du forum (activer et définir les règles du forum)',
'Registration rules info'		=>	'Vous pouvez exiger des nouveaux utilisateurs qu’ils acceptent les règles pour s’inscrire. Les règles sont disponibles via un lien dans le menu de navigation en tête de chaque page. Vous pouvez activer les règles et les écrire ci-dessous.',
'Registration rules legend'		=>	'Règles du forum',
'Require rules'					=>	'Appliquer les règles',
'Require rules label'			=>	'Les utilisateurs doivent accepter les règles du forum pour s’inscrire.',
'Compose rules label'			=>	'Écrire les règles',
'Compose rules help'			=>	'Vous pouvez utiliser du HTML, car le texte n’est pas analysé.',
'Rules default'					=>	'Saisissez vos règles ici.',

// Email section
'E-mail addresses'				=>	'Adresses e-mail du forum et liste de diffusion',
'E-mail addresses legend'		=>	'Adresses e-mails',
'Admin e-mail'					=>	'E-mail de l’administrateur',
'Webmaster e-mail label'		=>	'E-mail du webmestre',
'Webmaster e-mail help'			=>	'L’adresse d’origine des e-mails envoyés par le forum',
'Mailing list label'			=>	'Créer une liste de diffusion',
'Mailing list help'				=>	'Une liste de destinataires des alertes de rapports et / ou de nouvelles inscriptions. Séparés par des virgules.',
'E-mail server'					=>	'Configuration du serveur de courrier pour envoyer des e-mails depuis le forum',
'E-mail server legend'			=>	'Serveur E-mail',
'E-mail server info'			=>	'Dans la plupart des cas, PunBB pourra envoyer des e-mails via le logiciel local, auquel cas vous pouvez ignorer ces paramètres. PunBB peut aussi être configuré pour utiliser un serveur de courrier externe. Saisissez l’adresse de ce serveur et, si le serveur SMTP n’écoute pas sur le port par défaut 25, un numéro de port particulier (par exemple : mail.exemple.com:3580).',
'SMTP address label'			=>	'Adresse du serveur SMTP',
'SMTP address help'				=>	'Pour les serveurs externes. Laisser vide pour utiliser le serveur local',
'SMTP username label'			=>	'Utilisateur du serveur SMTP',
'SMTP username help'			=>	'La plupart des serveurs SMTP ne le demandent pas',
'SMTP password label'			=>	'Mot de passe du serveur SMTP',
'SMTP password help'			=>	'La plupart des serveurs SMTP ne le demandent pas',
'SMTP SSL'						=>	'Chiffrer le SMTP avec SSL',
'SMTP SSL label'				=>	'Si votre version de PHP supporte le SSL et que votre serveur SMTP l’exige.',
'Error invalid admin e-mail'	=>	'L’adresse e-mail de l’administrateur que vous avez fournie est invalide.',
'Error invalid web e-mail'		=>	'L’adresse e-mail du webmestre que vous avez fournie est invalide.',

// Maintenance section
'Maintenance head'				=>	'Définir le message de maintenance et activer le mode maintenance',
'Maintenance mode info'			=>	'<strong>Important !</strong> Mettre le site en maintenance limite son accès aux administrateurs. A n’utiliser que lors d’opérations de maintenance nécessitant une mise hors ligne.',
'Maintenance mode warn'			=>	'<strong>Attention !</strong> NE VOUS DECONNECTEZ PAS quand le site est en maintenance. Vous ne pourriez pas vous reconnecter.',
'Maintenance legend'			=>	'Maintenance',
'Maintenance mode'				=>	'Mode maintenance',
'Maintenance mode label'		=>	'Mettre le site en maintenance.',
'Maintenance message label'		=>	'Message de maintenance',
'Maintenance message help'		=>	'Le message affiché quand le site est en maintenance. Vous pouvez laisser le message par défaut ou définir le vôtre. Vous pouvez utiliser du HTML dans votre message.',
'Maintenance message default'	=>	'Les forums sont temporairement fermés pour maintenance. Merci d’essayer à nouveau dans quelques minutes.<br />L’administrateur.',

);
