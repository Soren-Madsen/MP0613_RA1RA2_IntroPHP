<?php

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        $lang = $_GET['lang'] ?? 'en';
        
        if (!in_array($lang, $this->allowedLanguages)) {
            $lang = 'en';
        }
        
        $_SESSION['lang'] = $lang;
        echo "Language set to $lang";
    }
}
