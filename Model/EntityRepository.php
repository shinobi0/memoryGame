<?php

namespace Model;

use PDO, PDOException, Exception; // Je déclare que je vais avoir besoin de la classe PDO de l'espace global de PHP

class EntityRepository{

    private $db;
    private $table;
    private $idColumnName;

    public function getDb(){
        // On rentre ici une seule fois : le tout premier appel à getDb() 
        if( !$this->db ){
            // Si db n'est pas défini, il faut réaliser la connexion
            try{
                $xml = simplexml_load_file('App/config.xml');
                $this->table = $xml->table;
                try{
                    $this->db = new PDO(
                        'mysql:host=' . $xml->host . ';dbname=' . $xml->dbname,
                        $xml->user,
                        $xml->password,
                        array(
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ 
                        )
                    );
                }
                catch(PDOException $e){
                    die('Problème connexion BDD');
                }
            }
            catch(Exception $e){
                die('Problème : fichier xml manquant');
            }
        }
        return $this->db;
    }

    // Méthodes du CRUD
    // Lecture BDD
    public function selectAll(){
        $query = $this->getDb()->query("SELECT * FROM " . $this->table. " ORDER BY resultat DESC LIMIT 0, 3");
        $result = $query->fetchAll();
        return $result;
    }
    // Insertion BDD
    public function insert($infos){
        $liste_marqueurs = $infos;
        $query = $this->getDb()->prepare("INSERT INTO " . $this->table . " (resultat) VALUES (?)");
        $query->execute(array($liste_marqueurs));
            
    }


}