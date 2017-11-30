<?php

use PHPUnit\Framework\TestCase;
use FormationPHP\Service\UserServices;
use FormationPHP\DAO\UserDAO;
use FormationPHP\Exception\UserInconnuException;

class UserServicesTest extends TestCase
{

    public function testGetUserById()
    {
        $userDAO = new UserDAO();
        $userService = new UserServices($userDAO);

        $this->assertEquals($userService->getUserById(1) , "ok3");
    }

    public function testGetUserByIdMock()
    {
        $userDAO = $this->createMock(UserDAO::class);
        $userDAO->method('findById')->willReturn("ok2");

        $userService = new UserServices($userDAO);

        $this->assertEquals($userService->getUserById(1) , "ok2");
    }

    public function testGetUserByIdMockException()
    {
        $userDAO = $this->createMock(UserDAO::class);
        $userDAO->method('findById')->willReturn("");

        $userService = new UserServices($userDAO);

        $this->expectException(UserInconnuException::class);
        $userService->getUserById(1);
    }

}