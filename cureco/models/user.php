<?php

class user
{
    public static function getUser($email, $pw)
    {
        $stmt = DB::connecter()->prepare('SELECT * from user where email = :email and pw = :pw');
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pw', $pw);
        if ($stmt->execute())
            return $stmt->fetchAll();
        else
            return 'error';

    }

    public static function register($data)
    {
        $stmt = DB::connecter()->prepare("INSERT INTO user(nom, prenom, email, pw, role) values(:n, :p, :email, :pw," . 0 . ")");
        $stmt->bindParam(":n", $data['nom']);
        $stmt->bindParam(":p", $data['p']);
        $stmt->bindParam(":email", $data['email']);
        $stmt->bindParam(":pw", $data['pw']);

        if ($stmt->execute())
            return 'ok';
        else
            return 'error';
    }
}