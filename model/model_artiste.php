<?php
    class Artiste extends Utilisateur{
        protected $id_artiste;
        protected $nom_scene_artiste;
        protected $photo_profil_artiste;
        protected $photo_couv_artiste;
        protected $bio_artiste;
        protected $concert_passes_artiste;
        protected $repertoire_artiste;
        protected $id_facture;
        //Constructeur
        public function __construct($nom_scene, $photo_profil, $photo_couv, $bio, $concert_passes, 
        $repertoire, $factur)
        {
            $this -> nom_scene_artiste = $nom_scene;
            $this -> photo_profil_artiste = $photo_profil;
            $this -> photo_couv_artiste = $photo_couv;
            $this -> bio_artiste = $bio;
            $this -> concert_passes_artiste = $concert_passes;
            $this -> repertoire_artiste = $repertoire;
            $this -> id_facture = $factur;
        }
        //GETTER
        public function getIdArtiste():int{
            return $this->id_artiste;
        }
        public function getNomSceneArtiste():string{
            return $this->nom_scene_artiste;
        }
        public function getPhotoProfilArtiste():string{
            return $this->photo_profil_artiste;
        }
        public function getPhotoCouvArtiste():string{
            return $this->photo_couv_artiste;
        }
        public function getBioArtiste():string{
            return $this->bio_artiste;
        }
        public function getConcertPassesArtiste():string{
            return $this->concert_passes_artiste;
        }
        public function getRepertoireArtiste():string{
            return $this->repertoire_artiste;
        }
        public function getFacturArtiste():string{
            return $this->id_factur;
        }
        //SETTER
        public function setIdArtiste($id):void{
            $this -> id_artiste = $id;
        }
        public function setNomSceneArtiste($nom_scene):void{
            $this -> nom_scene_artiste = $nom_scene;
        }
        public function setPhotoProfilArtiste($photo_profil):void{
            $this -> photo_profil_artiste = $photo_profil;
        }
        public function setPhotoCouvArtiste($photo_couv):void{
            $this -> photo_couv_artiste = $photo_couv;
        }
        public function setBioArtiste($bio):void{
            $this -> bio_artiste = $bio;
        }
        public function setConcertPassesArtiste($concert):void{
            $this -> concert_artiste = $concert;
        }
        public function setRepertoireArtiste($repertoire):void{
            $this -> repertoire_artiste = $repertoire;
        }
        public function setFacturArtiste($factur):void{
            $this -> factur_artiste = $factur;
        }
        //METHODE
        public function createUser($bdd):void{
        //Récuperation des valeurs de l'objet
            $nom = $this -> getNomUtil();
            $prenom = $this -> getPrenomUtil();
            $mail = $this -> getMailUtil();
            $mdp = $this -> getMdpUtil();
            $tel = $this -> getTelUtil();
            $fam = $this -> getIdFamUtil();
            try{
                $req = $bdd -> prepare('INSERT INTO artiste(nom_util, prenom_util, mail_util, mdp_util
                tel_util, fam_util) VALUES (:nom_util, :prenom_util, :mail_util, :mdp_util, :tel_util, :fam_util)');
                $req -> execute(array(
                    'nom_util' => $nom,
                    'prenom_util' => $prenom,
                    'mail_util' => $mail,
                    'mdp_util' => $mdp,
                    'tel_util' => $tel,
                    'fam_util' => $fam
                ));
            }
            catch(Exception $e){
                //Affichage d'une execption en cas d'erreur
                die('Erreur ; '.$e->getMessage());
            }
        }
        public function showUserByMail($bdd):array{
            try{
                $req = $bdd -> prepare('SELECT * FROM artiste WHERE mail_util = :mail_util');
                $req -> execute(array(
                    'mail_util' => $this -> getMailUtil()
                ));
                $data = $req -> fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e){
                die ('Erreur : '.$e->getMessage());
            }
        }
        //Récuperer tous les utilisateurs existant en bdd
        public function showAllUser($bdd):array{
            try{
                $req = $bdd -> prepare('SELECT nom_util, prenom_util, mail_util FROM utilisateurs');
                $req -> execute();
                $data = $req ->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e){
                //Affichafe d'une exception en cas d'erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>
