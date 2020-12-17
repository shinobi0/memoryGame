<?php

namespace Controller;

class Controller
{

    private $db;
    public function __construct()
    {
        $this->db = new \Model\EntityRepository;
    }

    public function redirect($location)
    {
        header('location:' . $location);
        exit();
    }

    public function run()
    {
        $op = $_GET['op'] ?? 'list';
        $resultat = $_GET['chrono'] ?? '';
        switch ($op) {
            case 'list':
                $this->listeAll();
                break;
            case 'new':
                $this->register($resultat);
                break;
        }
    }

    public function listeAll()
    {
        $donnees = $this->db->selectAll();
        $title = ' | Liste';
        require('View/memory.php');
    }


    public function register($resultat)
    {
                $this->db->insert($resultat); 
    }

   
}
