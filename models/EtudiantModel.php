<?php

class EtudiantModel
{
    public function all()
    {
        return   [
    [
        "id" => 1,
        "nom" => "David",
        "promotion" => "L3 GL",
        "tel" => "0883456789",
        "url" => "assets/images/etudiant_images/david.png"
    ],
    [
        "id" => 2,
        "nom" => "Winny",
        "promotion" => "L3 MSI",
        "tel" => "0778902345",
        "url" => "assets/images/etudiant_images/winny.png"
    ],
    [
        "id" => 3,
        "nom" => "Artemis",
        "promotion" => "L3 Design",
        "tel" => "0962348989",
        "url" => "assets/images/etudiant_images/arte.png"
    ],
    [
        "id" => 4,
        "nom" => "Joel",
        "promotion" => "L3 GL",
        "tel" => "0851328486",
        "url" => "assets/images/etudiant_images/joel.png"
    ],
    [
        "id" => 5,
        "nom" => "Jonathan",
        "promotion" => "L3 GL",
        "tel" => "0962348988",
        "url" => "assets/images/etudiant_images/jonathan.png"
    ],
    [
        "id" => 6,
        "nom" => "Samantha",
        "promotion" => "L3 Informatique",
        "tel" => "0812345678",
        "url" => "assets/images/etudiant_images/samantha.png"
    ],
    [
        "id" => 7,
        "nom" => "Alexandre",
        "promotion" => "L3 CyberSécurité",
        "tel" => "0898765432",
        "url" => "assets/images/etudiant_images/alexandre.png"
    ],
    [
        "id" => 8,
        "nom" => "Mélissa",
        "promotion" => "L3 Marketing Digital",
        "tel" => "0823456789",
        "url" => "assets/images/etudiant_images/melissa.png"
    ],
    [
        "id" => 9,
        "nom" => "Hugo",
        "promotion" => "L3 Réseaux",
        "tel" => "0976543210",
        "url" => "assets/images/etudiant_images/hugo.png"
    ],
    [
        "id" => 10,
        "nom" => "Céline",
        "promotion" => "L3 Design Graphique",
        "tel" => "0798765432",
        "url" => "assets/images/etudiant_images/celine.png"
    ]
];


        
    }
    public function find($etudiant_id) {
    foreach ($this->all() as $etudiant) {
        if ($etudiant['id'] == $etudiant_id) {
            return $etudiant;
        }
    }
    return null; // ← ici c’est bon
}

}
