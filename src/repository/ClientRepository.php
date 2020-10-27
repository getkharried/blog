<?php
namespace App\src\repository;

use App\src\config\Database;
use App\src\model\Client;

class ClientRepository
{
    private $database;

    public function __construct()
    {
        if (!isset($this->postRepo)) {
            $this->database = new Database;
        }
    }

    public function getClient()
    {
        $db = $this->database->checkConnection();
        $result = $db->query('SELECT * FROM `client`');
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createClient(Client $client)
    {
        $hash = password_hash($client->getPass(), PASSWORD_DEFAULT);
        $client->setPass($hash);
        $db = $this->database->checkConnection();

        $result = $db->prepare('INSERT INTO client (username, mail, nom, prenom, password, isAdmin)
        VALUES (:username, :mail, :nom, :prenom, :password, :isAdmin)');
        $result->bindValue(':username', $client->getUsername(), \PDO::PARAM_STR);
        $result->bindValue(':mail', $client->getMail(), \PDO::PARAM_STR);
        $result->bindValue(':nom', $client->getLastName(), \PDO::PARAM_STR);
        $result->bindValue(':prenom', $client->getFirstName(), \PDO::PARAM_STR);
        $result->bindValue(':password', $client->getPass(), \PDO::PARAM_STR);
        $result->bindValue(':isAdmin', $client->getIsAdmin(), \PDO::PARAM_INT);
        $result->execute();
    }

    public function loginClient(Client $client)
    {
        $db = $this->database->checkConnection();
        $query = $db->prepare("UPDATE client SET last_Connection_At = :lastConnect WHERE username = :username");
        $data = [
            'lastConnect' => date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'))),
            'username' => $client->getUsername(),
        ];
        $query->execute($data);
    }

    public function passwordVerify(Client $client)
    {
        $db = $this->database->checkConnection();

        $query = $db->prepare('SELECT password FROM client WHERE username = :username');
        $query->bindParam(':username', $_POST["username"]);
        $query->execute();
        $result = $query->fetch();
        
        return password_verify($client->getPass(), $result['password'] ?? null);
    }
}
?>