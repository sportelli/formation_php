<?php
namespace FormationPHP\view;

use FormationPHP\Service\UserServices;

class IndexView {
    public function getUserById(int $id)
    {
        $userServices = new UserServices();
        echo "user = " . $userServices->getUserById($id);
    }
}