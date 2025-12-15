<?php

class User {
    
    // Array de usuarios hardcodeado
    private static $usuarios = [
        "admin@torneos.com" => [
            "id" => 1,
            "nombre" => "Administrador",
            "email" => "admin@torneos.com",
            "password" => "12345" 
        ],
        "user1@example.com" => [
            "id" => 2,
            "nombre" => "Ane López",
            "email" => "user1@example.com",
            "password" => "123Abc"
        ],
        "user2@example.com" => [
            "id" => 3,
            "nombre" => "Amaia Otsoa",
            "email" => "user2@example.com",
            "password" => "456Xyz"
        ]
    ];
    
    
    public static function findByEmail($email) {
        
    }
    
    
    public static function verifyPassword($user, $password) {
        
    }
    

}