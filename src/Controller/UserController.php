<?php

namespace Hetic\ReshomeH\Controller;

use Hetic\ReshomeH\Model\Class\User;

class UserController extends AbstractController
{
    public function listUsers()
    {
        // Tableau vide, à changer
        $users = [];

        require $this->viewDir . 'user/list.php';
    }

    public function createUser()
    {
        // Afficher le formulaire de création d'utilisateur.
        require $this->viewDir . 'user/create.php';
    }

    public function storeUser()
    {
        // Données factices, à changer
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);

        // Permet à l'utilisateur de rester connecté via une session temporaire
        session_start();
        $_SESSION['user_id'] = $user->getId();

        // Redirige vers la page de profil de l'utilisateur
        // À supprimer éventuellement
        header('Location: ?action=profile&id=' . $user->getId());

        // À changer en fonction de la redirection qu'on souhaite
        header('Location: ?action=home');
    }
}
