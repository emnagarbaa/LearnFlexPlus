<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class ChatbotService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;
    
    // ✅ MODE DÉMO - Change à false pour utiliser Hugging Face
    private const DEMO_MODE = false;
    
    private const PLATFORM_CONTEXT = <<<EOT
Tu es l'assistant virtuel de LearnFlex+, une plateforme d'apprentissage en ligne.

Tu peux UNIQUEMENT répondre aux questions concernant :
- Les fonctionnalités de LearnFlex+ (forum, communications, publications, cours)
- La gestion des utilisateurs (étudiants, enseignants, administrateurs)
- Les modules disponibles (évaluation, questionnaire, orientation)
- L'utilisation de la plateforme
- Les statistiques et rapports
- Les problèmes techniques liés à la plateforme

Tu dois REFUSER poliment de répondre aux questions sur l'environnement, la météo, l'actualité, la politique, la religion ou des sujets personnels non liés à l'éducation.

Si une question est hors sujet, réponds : "Je suis désolé, mais je suis l'assistant de LearnFlex+ et je ne peux répondre qu'aux questions concernant notre plateforme d'apprentissage."
EOT;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $_ENV['HUGGINGFACE_API_KEY'] ?? '';
    }

    /**
     * Envoie une question au chatbot et retourne la réponse
     */
    public function chat(string $userMessage, array $conversationHistory = []): array
    {
        // ✅ MODE DÉMO
        if (self::DEMO_MODE) {
            return $this->getDemoResponse($userMessage);
        }

        if (empty($this->apiKey)) {
            return [
                'response' => 'Erreur : Clé API Hugging Face non configurée.',
                'error' => true
            ];
        }

        try {
            // ✅ Appel à l'API Hugging Face (modèle gratuit)
            $prompt = self::PLATFORM_CONTEXT . "\n\nQuestion: " . $userMessage . "\nRéponse:";
            
            $response = $this->httpClient->request('POST', 'https://api-inference.huggingface.co/models/mistralai/Mistral-7B-Instruct-v0.2', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'inputs' => $prompt,
                    'parameters' => [
                        'max_new_tokens' => 300,
                        'temperature' => 0.7,
                        'top_p' => 0.9,
                        'return_full_text' => false,
                    ]
                ]
            ]);

            $data = $response->toArray();
            
            // Extraire la réponse
            $botResponse = $data[0]['generated_text'] ?? 'Aucune réponse générée.';
            
            return [
                'response' => trim($botResponse),
                'error' => false
            ];

        } catch (\Exception $e) {
            // En cas d'erreur, utiliser les réponses prédéfinies
            return $this->getDemoResponse($userMessage);
        }
    }

    /**
     * ✅ RÉPONSES DÉMO PRÉDÉFINIES
     */
   /**
 * ✅ RÉPONSES DÉMO PRÉDÉFINIES (VERSION COMPLÈTE)
 */
private function getDemoResponse(string $userMessage): array
{
    $messageLower = strtolower($userMessage);
    
    // ===== CRÉATION DE PUBLICATION =====
    if ((str_contains($messageLower, 'publication') || str_contains($messageLower, 'post')) 
        && (str_contains($messageLower, 'créer') || str_contains($messageLower, 'creer') || str_contains($messageLower, 'ajouter'))) {
        return [
            'response' => "Pour créer une publication sur LearnFlex+ :\n\n1. Connectez-vous à votre compte\n2. Allez dans le module 'Forum'\n3. Cliquez sur 'Nouvelle Publication'\n4. Remplissez le titre et la description\n5. Choisissez une catégorie (Cours, Examen, Tutoriel, etc.)\n6. Cliquez sur 'Publier'\n\nVotre publication sera visible par tous les utilisateurs !",
            'error' => false
        ];
    }
    
    // ===== AJOUT D'UTILISATEUR =====
    if (str_contains($messageLower, 'utilisateur') 
        && (str_contains($messageLower, 'ajouter') || str_contains($messageLower, 'créer') || str_contains($messageLower, 'creer'))) {
        return [
            'response' => "Pour ajouter un utilisateur sur LearnFlex+ :\n\n1. Accédez au panneau d'administration\n2. Cliquez sur 'Gestion des Utilisateurs'\n3. Cliquez sur '+ Ajouter un utilisateur'\n4. Remplissez les informations (nom, prénom, email, téléphone)\n5. Choisissez le rôle (Étudiant, Enseignant, Administrateur)\n6. Enregistrez\n\nL'utilisateur recevra un email pour activer son compte.",
            'error' => false
        ];
    }
    
    // ===== FORUM =====
    if (str_contains($messageLower, 'forum') && (str_contains($messageLower, 'sert') || str_contains($messageLower, 'quoi') || str_contains($messageLower, 'c\'est'))) {
        return [
            'response' => "Le forum de LearnFlex+ permet :\n\n✅ Aux étudiants de poser des questions\n✅ Aux enseignants de partager du contenu pédagogique\n✅ De créer des discussions par catégorie\n✅ De liker et commenter les publications\n✅ De suivre les statistiques d'engagement\n\nC'est un espace d'échange pour toute la communauté !",
            'error' => false
        ];
    }
    
    // ===== LIKE =====
    if (str_contains($messageLower, 'like') || str_contains($messageLower, 'liker') || str_contains($messageLower, 'aimer')) {
        return [
            'response' => "Pour liker une publication sur LearnFlex+ :\n\n1. Ouvrez une publication dans le forum\n2. Cliquez sur l'icône ❤️ (coeur) sous la publication\n3. Le compteur de likes augmente instantanément\n\nVous pouvez aussi retirer votre like en recliquant sur le coeur. Les likes permettent de mettre en avant les contenus les plus appréciés !",
            'error' => false
        ];
    }
    
    // ===== ORIENTATION =====
    if (str_contains($messageLower, 'orientation')) {
        return [
            'response' => "Le module Orientation de LearnFlex+ aide les étudiants à :\n\n🎯 Choisir leur parcours académique\n📊 Découvrir les métiers correspondant à leurs compétences\n📚 Obtenir des recommandations de cours personnalisées\n💼 Planifier leur carrière professionnelle\n\nC'est un outil d'accompagnement personnalisé basé sur le profil de chaque étudiant !",
            'error' => false
        ];
    }
    
    // ===== LEARNFLEX+ (PRÉSENTATION) =====
    if ((str_contains($messageLower, 'learnflex') || str_contains($messageLower, 'learn flex'))
        && (str_contains($messageLower, 'c\'est quoi') || str_contains($messageLower, 'c est quoi') || str_contains($messageLower, 'qu\'est') || str_contains($messageLower, 'présent'))) {
        return [
            'response' => "LearnFlex+ est une plateforme d'apprentissage en ligne complète qui propose :\n\n📚 Gestion de contenu pédagogique\n💬 Forum de discussions et communications en direct\n📝 Système d'évaluation et questionnaires\n🎯 Module d'orientation personnalisée\n👥 Gestion des utilisateurs (étudiants, enseignants, admins)\n📊 Tableaux de bord et statistiques détaillées\n\nC'est une solution tout-en-un pour l'éducation en ligne !",
            'error' => false
        ];
    }
    
    // ===== COMMUNICATIONS =====
    if (str_contains($messageLower, 'communication')) {
        return [
            'response' => "Les communications sur LearnFlex+ permettent :\n\n📹 Créer des sessions en direct (live)\n📼 Programmer des enregistrements\n📅 Planifier des événements\n👥 Inviter des participants\n📊 Consulter les statistiques de participation\n\nGérez tout depuis le module 'Communications' du back-office !",
            'error' => false
        ];
    }
    
    // ===== STATISTIQUES =====
    if (str_contains($messageLower, 'statistique') || str_contains($messageLower, 'stat')) {
        return [
            'response' => "Les statistiques disponibles sur LearnFlex+ :\n\n📈 Publications : nombre de vues, likes, engagement\n👥 Utilisateurs : total, répartition par rôle\n💬 Communications : taux de participation\n📊 Activité globale de la plateforme\n🏆 Classements et performances\n\nAccédez-y via les pages 'Statistiques' de chaque module !",
            'error' => false
        ];
    }

    // ===== CONNEXION =====
    if (str_contains($messageLower, 'connexion') || str_contains($messageLower, 'connecter') || str_contains($messageLower, 'login')) {
        return [
            'response' => "Pour vous connecter à LearnFlex+ :\n\n1. Allez sur la page d'accueil\n2. Cliquez sur 'Connexion'\n3. Entrez votre email et mot de passe\n4. Cliquez sur 'Se connecter'\n\nMot de passe oublié ? Cliquez sur 'Mot de passe oublié' pour le réinitialiser par email.",
            'error' => false
        ];
    }
    
    // ===== PROBLÈMES TECHNIQUES =====
    if (str_contains($messageLower, 'problème') || str_contains($messageLower, 'probleme') 
        || str_contains($messageLower, 'bug') || str_contains($messageLower, 'erreur')
        || str_contains($messageLower, 'technique') || str_contains($messageLower, 'marche pas')) {
        return [
            'response' => "Pour les problèmes techniques sur LearnFlex+ :\n\n🔧 Vérifiez votre connexion internet\n🔄 Actualisez la page (F5)\n🚪 Déconnectez-vous et reconnectez-vous\n🗑️ Videz le cache de votre navigateur\n📧 Contactez le support : support@learnflex.com\n\nPrécisez votre problème (erreur de connexion, page qui ne charge pas, fonctionnalité bloquée, etc.) et je pourrai vous aider davantage !",
            'error' => false
        ];
    }
    
    // ===== ÉVALUATION / QUESTIONNAIRE =====
    if (str_contains($messageLower, 'évaluation') || str_contains($messageLower, 'evaluation')
        || str_contains($messageLower, 'questionnaire') || str_contains($messageLower, 'quiz') || str_contains($messageLower, 'test')) {
        return [
            'response' => "Le module Évaluation de LearnFlex+ permet :\n\n📝 Créer des questionnaires et quiz\n⏱️ Définir des durées limites\n✅ Correction automatique\n📊 Suivi des résultats des étudiants\n🏆 Classements et statistiques\n\nLes enseignants peuvent créer des évaluations personnalisées pour mesurer les progrès !",
            'error' => false
        ];
    }
    
    // ===== COURS =====
    if (str_contains($messageLower, 'cours') && !str_contains($messageLower, 'question')) {
        return [
            'response' => "Le contenu pédagogique sur LearnFlex+ comprend :\n\n📚 Cours en ligne avec vidéos et documents\n📄 Supports téléchargeables (PDF, slides)\n🎥 Vidéos et tutoriels\n📝 Exercices et travaux pratiques\n📊 Suivi de progression\n\nLes enseignants peuvent créer et gérer leurs cours depuis le back-office !",
            'error' => false
        ];
    }
    
    // ===== RÉPONSE GÉNÉRIQUE (plateforme) =====
    if (str_contains($messageLower, 'learnflex') || str_contains($messageLower, 'plateforme')) {
        return [
            'response' => "LearnFlex+ propose :\n\n📚 Contenu pédagogique\n💬 Forum et communications\n📝 Évaluations et questionnaires\n🎯 Orientation personnalisée\n👥 Gestion des utilisateurs\n📊 Statistiques détaillées\n\nQue souhaitez-vous savoir précisément ?",
            'error' => false
        ];
    }
    
    // ===== RÉPONSE PAR DÉFAUT =====
    return [
        'response' => "Je suis l'assistant de LearnFlex+ ! Je peux vous aider avec :\n\n✅ Création de publications et communications\n✅ Gestion des utilisateurs\n✅ Utilisation du forum\n✅ Module d'orientation\n✅ Évaluations et questionnaires\n✅ Statistiques de la plateforme\n✅ Problèmes techniques\n\nPosez-moi une question précise sur l'un de ces sujets !",
        'error' => false
    ];
}
public function isQuestionInContext(string $question): bool
{
    $keywords = [
        // Plateforme
        'learnflex', 'learn flex', 'plateforme', 'platform', 'site',
        
        // Forum et publications
        'cours', 'forum', 'publication', 'publier', 'poster', 'post',
        'discussion', 'sujet', 'topic', 'message',
        
        // Communications
        'communication', 'communiquer', 'video', 'vidéo', 'live', 'direct',
        'enregistrement', 'session', 'réunion', 'reunion', 'visio',
        
        // Utilisateurs
        'utilisateur', 'user', 'étudiant', 'etudiant', 'élève', 'eleve',
        'enseignant', 'prof', 'professeur', 'admin', 'administrateur',
        'compte', 'profil', 'inscription', 'inscrire',
        
        // Fonctionnalités
        'évaluation', 'evaluation', 'questionnaire', 'quiz', 'test',
        'orientation', 'orienter', 'chat', 'aide', 'help',
        'connexion', 'connecter', 'login', 'se connecter', 'deconnecter',
        
        // Interface
        'dashboard', 'tableau de bord', 'menu', 'navigation',
        'bouton', 'cliquer', 'page',
        
        // Statistiques (plusieurs variations)
        'statistique', 'stat', 'stats', 'statistiques', 'chiffre',
        'nombre', 'total', 'compteur', 'analyse', 'rapport',
        
        // Actions
        'créer', 'creer', 'ajouter', 'modifier', 'supprimer',
        'voir', 'afficher', 'consulter', 'gérer', 'gerer',
        
        // Problèmes
        'problème', 'probleme', 'erreur', 'bug', 'marche pas',
        'fonctionne pas', 'aide', 'comment'
    ];

    $questionLower = strtolower($question);
    
    // ✅ Recherche flexible (cherche des parties de mots)
    foreach ($keywords as $keyword) {
        if (str_contains($questionLower, $keyword)) {
            return true;
        }
    }

    // ❌ Mots-clés interdits (hors contexte)
    $forbiddenKeywords = [
        'météo', 'meteo', 'temps qu\'il fait', 'pluie', 'soleil',
        'politique', 'élection', 'election', 'président', 'president',
        'religion', 'dieu', 'prière', 'priere',
        'actualité', 'actualite', 'news', 'journal',
        'sport', 'foot', 'match', 'équipe', 'equipe',
        'recette', 'cuisine', 'manger', 'restaurant',
        'film', 'série', 'serie', 'musique', 'chanson'
    ];

    foreach ($forbiddenKeywords as $forbidden) {
        if (str_contains($questionLower, $forbidden)) {
            return false;
        }
    }

    // ✅ Par défaut, accepter si la question semble éducative
    $educativeWords = ['comment', 'pourquoi', 'qu\'est-ce', 'qu est-ce', 'quoi', 'où', 'ou'];
    foreach ($educativeWords as $word) {
        if (str_contains($questionLower, $word)) {
            return true;
        }
    }

    return false;
}
}