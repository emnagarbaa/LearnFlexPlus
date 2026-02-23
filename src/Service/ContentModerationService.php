<?php

namespace App\Service;

class ContentModerationService
{
    // Liste de mots inappropriés (à personnaliser selon vos besoins)
    private const BANNED_WORDS = [
        // Insultes
        'connard', 'salaud', 'enculé', 'putain', 'merde', 'con',
        'idiot', 'imbécile', 'débile', 'crétin', 'abruti',
        
        // Vulgarités
        'fuck', 'shit', 'bitch', 'ass', 'dick',
        
        // Discriminations
        'racist', 'raciste', 'nazi', 'facho',
        
        // Violence
        'tuer', 'meurtre', 'mort', 'suicide',
        
        // Spam
        'viagra', 'casino', 'pornographie', 'xxx',
        
        // Ajoutez vos propres mots ici
    ];

    /**
     * Vérifie si un texte contient des mots inappropriés
     * 
     * @return array ['isClean' => bool, 'foundWords' => array]
     */
    public function checkContent(string $text): array
    {
        $foundWords = [];
        $textLower = strtolower($text);
        
        // Normaliser le texte (enlever accents, etc.)
        $textNormalized = $this->normalizeText($textLower);
        
        foreach (self::BANNED_WORDS as $word) {
            $wordNormalized = $this->normalizeText(strtolower($word));
            
            // Vérifier si le mot est présent (avec frontières de mots)
            if (preg_match('/\b' . preg_quote($wordNormalized, '/') . '\b/u', $textNormalized)) {
                $foundWords[] = $word;
            }
        }
        
        return [
            'isClean' => empty($foundWords),
            'foundWords' => $foundWords
        ];
    }

    /**
     * Normalise un texte pour la comparaison
     */
    private function normalizeText(string $text): string
    {
        // Enlever les accents
        $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);
        
        // Enlever les caractères spéciaux (sauf lettres et chiffres)
        $text = preg_replace('/[^a-z0-9\s]/u', '', $text);
        
        return $text;
    }

    /**
     * Censure les mots inappropriés dans un texte
     */
    public function censorContent(string $text): string
    {
        $textLower = strtolower($text);
        
        foreach (self::BANNED_WORDS as $word) {
            $wordNormalized = $this->normalizeText(strtolower($word));
            $replacement = str_repeat('*', strlen($word));
            
            // Remplacer en préservant la casse
            $text = preg_replace('/\b' . preg_quote($word, '/') . '\b/ui', $replacement, $text);
        }
        
        return $text;
    }

    /**
     * Retourne la liste des mots bannis
     */
    public function getBannedWords(): array
    {
        return self::BANNED_WORDS;
    }
}