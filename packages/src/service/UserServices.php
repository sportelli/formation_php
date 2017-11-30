<?php
namespace FormationPHP\Service;

use FormationPHP\DAO\UserDAO;
use FormationPHP\Exception\UserInconnuException;

/**
 * @author Felix SPORTELLI
 * 
 * Cette classe métier permet de traiter tout ce qui
 * a trait aux utilisateurs
 *  
 */
class UserServices 
{
    /**
     * La couche DAO pour les utilisateurs, injectée via le constructeur
     * @var UserDAO
     */
    private $userDAO;

    /**
     * Le constructeur se faisant injecter un UserDAO
     * 
     * @param UserDAO $userDAO l'instance UserDAO ayant accès aux informations de base 
     */
    public function __construct($userDAO)
    {
        $this->userDAO = $userDAO;
    }

    /**
     * 
     * Cette méthode permet d'aller requêter à la couche DAO pour savoir si un utilisateur existe
     * s'il n'existe pas, renvoie une exception UserInconnuException
     * 
     * @param int $id l'id de l'utilisateur recherché
     * @throws UserInconnuException si pas d'utilisateur trouvé
     * @return l'utilisateur trouvé
     */
    public function getUserById(int $id)
    {
        $user = $this->userDAO->findById($id);
        if ($user != ""){
            return $user;
        }
        else 
            throw new UserInconnuException();
    }
}