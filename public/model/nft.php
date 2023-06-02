<?php
class Nft
{
    private string $titre;
    private string $cheminStockage;
    private float $valeurNft;
    private int $nbDisponible;
    private string $creator;
    private string $typeNft;
    private string $extension;
    private string $theme;
    private string $sousCategorie;
    private string $categorie;
    private string $bibliotheque;
    public function __construct(
        string $titre,
        string $cheminStockage,
        float $valeurNft,
        int $nbDisponible,
        string $creator,
        string $typeNft,
        string $extension,
        string $theme,
        string $categorie,
        string $bibliotheque,
        string $sousCategorie
    ) {
        $this->titre = $titre;
        $this->cheminStockage = $cheminStockage;
        $this->valeurNft = $valeurNft;
        $this->nbDisponible = $nbDisponible;
        $this->creator = $creator;
        $this->typeNft = $typeNft;
        $this->extension = $extension;
        $this->theme = $theme;
        $this->sousCategorie = $sousCategorie;
        $this->categorie = $categorie;
    }

    public function validateTitre(string $titre): bool
    {
        if (strlen($titre) > 3 && strlen($titre) < 20) {
            return true;
        } else {
            return false;
        }
    }

    public function setTitre(string $titre): void
    {
        if (self::validateTitre($titre)) {
            $this->titre = $titre;
        } else {
            echo "Error";
        }
    }

    
}
