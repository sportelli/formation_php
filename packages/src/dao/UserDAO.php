<?php
namespace FormationPHP\DAO;

/**
 * @author Felix SPORTELLI
 * 
 * Cette classe permet de gérer les accès données à la base 
 * pour les utilisateurs 
 * 
 */
class UserDAO {

    /**
     * Permet de récupérer l'objet User en fonction de l'id
     * 
     * @param int $id l'identifiant de l'utilisateur qu'on recherche
     * @return User l'utilisateur trouvé, ou null si rien trouvé 
     */
    public function findById($id) 
    {
        return "ok3";
    }
}