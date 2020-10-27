<?php

namespace App\src\controller;

use App\src\config\Session;
use App\src\model\Client;
use App\src\repository\ClientRepository;

class ClientController{
    private $clientRepo;
    private $session;

    public function __construct()
    {
        if (!isset($this->clientRepo)) {
            $this->clientRepo = new ClientRepository;
        }
        
        if (!isset($this->session)) {            
            $this->session = new Session;
        }

    }

    public function list()
    {
        $client = $this->clientRepo->getClient(); 
    }

    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $client = new Client;
            $client->setFirstName($_POST['prenom']);
            $client->setLastName($_POST['nom']);
            $client->setUsername($_POST['username']);
            $client->setPass($_POST['password']);
            $client->setIsAdmin($_POST['admin']);
            $client->setMail($_POST['mail']);

            $this->clientRepo->createClient($client);

            header('Location: index.php?page=post&action=list');
        }

        require_once 'templates/createAcc.php';
    }

    public function read()
    {
        
        if($this->session->get('username'))
            header('Location: ?page=post&action=list');

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $client = new Client;
            $client->setUsername($_POST['username']);
            $client->setPass($_POST['password']);

            if(($this->clientRepo->passwordVerify($client))){
                $this->clientRepo->loginClient($client);

                $this->session->set('username', $client->getUsername());

                header('Location: ?page=post&action=list');
            }
            
            $this->session->set('error', "Id/mdp incorrects");
        }
        
        require_once 'templates/login.php';
        $this->session->remove('error');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }

    public function profil()
    {
        if(!($this->session->get('username')))
            header('Location: ?page=post&action=list');

        require_once 'templates/profil.php';
    }
    
}
