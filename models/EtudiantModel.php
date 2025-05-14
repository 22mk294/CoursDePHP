<?php

class EtudiantModel
{
    public function all()
    {
        return  [
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
        ];

        
    }
    public function find($etudiant_id){
        foreach ($this->all() as $etudiant) {
        if ($etudiant['id'] == $etudiant_id) {
            //$etudiant = $etudiant['nom'];
            return $etudiant;
        }
        return null;
    }          
    }
}
