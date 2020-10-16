<?php

namespace App\src\controller;

use App\src\repository\ClientRepository;

class ClientController{

    public function list()
    {
        $clientRepo = new ClientRepository;
        $client = $clientRepo->getClient(); 
        return dump($client);
    }

    public function create()
    {

    }

    public function read()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
    
}
?>