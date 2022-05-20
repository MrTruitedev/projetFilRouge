<?php
    class Utilisateur{
        protected $id_util;
        protected $nom_util;
        protected $prenom_util;
        protected $mail_util;
        protected $tel_util;
        protected $mdp_util;
        protected $id_fam_util;
        // Constructeur
        public function __construct($nom, $prenom, $mail, $tel, $mdp, $fam){
            $this->nom_util = $nom;
            $this->prenom_util = $prenom;
            $this->mail_util = $mail;
            $this->tel_util = $tel;
            $this->mdp_util = $mdp;
            $this->id_fam_util = $fam;
        }
        // Getter
        public function getIdUtil():int{
            return $this->id_util;
        }
        public function getNomUtil():string{
            return $this->nom_util;
        }
        public function getPrenomUtil():string{
            return $this->prenom_util;
        }
        public function getMailUtil():string{
            return $this->mail_util;
        }
        public function getMdpUtil():string{
            return $this->mdp_util;
        }
        public function getTelUtil():int{
            return $this->tel_util;
        }
        public function getIdFamUtil():int{
            return $this->id_fam_util;
        }
        // Setter
        public function setIdUtil($id):void{
            $this->id_util = $id;
        }
        public function setNomUtil($nom):void{
            $this->nom_util = $nom;
        }
        public function setPrenomUtil($prenom):void{
            $this->prenom_util = $prenom;
        }
        public function setMailUtil($mail):void{
            $this->mail_util = $mail;
        }
        public function setMdpUtil($mdp):void{
            $this->mdp_util = $mdp;
        }
        public function setTelUtil($tel):void{
            $this->tel_util = $tel;
        }
        public function setIdFamUtil($fam):void{
            $this->id_fam_util = $fam;
        }
        // Méthodes
        public function createUser($bdd){
            $nom = $this -> getNomUtil();
            $prenom = $this -> getPrenomUtil();
            $mail = $this -> getMailUtil();
            $mdp = $this -> getMdpUtil();
            $tel = $this -> getTelUtil();
            $fam = $this -> getIdFamUtil();
            try{
                $req = $bdd -> prepare('INSERT INTO utilisateurs(nom_util, prenom_util, mail_util, mdp_util, tel_util, id_fam_util)
                VALUES (:nom_util, :prenom_util, :mail_util, :mdp_util, :tel_util,:id_fam_util)');
                $req -> execute(array(
                    'nom_util' => $nom,
                    'prenom_util' => $prenom,
                    'mail_util' => $mail,
                    'mdp_util' => $mdp,
                    'tel_util' => $tel,
                    'id_fam_util' => $fam
                ));
            }
            catch(Exception $e){
                // Affichage d'une exception en cas d'erreur
                die('Erreur : '.$e -> getMessage());
            }
        }
        public function getUserByMail($bdd):array{
            try{
                $req = $bdd -> prepare('SELECT * FROM utilisateurs WHERE mail_util = :mail_util');
                $req -> execute(array(
                    'mail_util' => $this -> getMailUtil()
                ));
                $data = $req -> fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e){
                die('Erreur : '.$e -> getMessage());
            }
        }
    }
?>