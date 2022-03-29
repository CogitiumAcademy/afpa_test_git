<?php

class User 
{
    // Propriétés
    private $pseudo;
    private $email;
    private $signature;
    private $actif;

    // Méthodes
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($newPseudo)
    {
        if (!empty($newPseudo) and strlen($newPseudo) < 10 ) {
            $this->pseudo = $newPseudo;
        } else {
            echo "<p>Pseudo vide ou trop long !</p>";
        }
    }
    public function setEmail($newEmail)
    {
        if (!empty($newEmail) and strlen($newEmail) < 100 ) {
            $this->email = $newEmail;
        } else {
            echo "<p>Email vide ou trop long !</p>";
        }
    }
    public function envoyerEMail($titre, $message) {
        mail($this->email, $titre, $message);
    }
}
