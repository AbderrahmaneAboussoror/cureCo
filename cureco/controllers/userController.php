<?php

class userController{

    public function checkUser(){
        $msgs = user::getUser($_POST['email'], $_POST['password']);
        $check = false;
        if($msgs != 'error'){
            if(isset($msgs))
                foreach($msgs as $msg)
                    if ($msg['role'] == 1){
                        header('location:dashboard');
                        $_SESSION['loginAdmin'] = true;
                        $check = true;
                        break;
                    }
                    elseif($msg['role'] == 0){
                        $_SESSION['idUser'] = $msg['id_user'];
                        $_SESSION['loginUser'] = true;
                        $check = true;
                        header('location:product');
                        break;
                    }
                
            if(!$check)
                echo('email ou mot de pass invalide');
        } else{
            echo ($msgs);
            $_SESSION['loginAdmin'] = false;
            $_SESSION['loginUser'] = false;
        }
    }

    public function registerController(){
        $data = array(
            'nom' => $_POST['nom'],
            'p' => $_POST['prenom'],
            'email' => $_POST['email'],
            'pw' => $_POST['password']
        );

        $rep = user::register($data);
        if ($rep == 'ok')
            header('location:product');
        else
            echo $rep;
    }

    //nav links

    public function loggedIn(){
        if($_SESSION['loginAdmin'])
            echo 'Logout';
        else
            echo 'Sign Up';
    }

    public function redirection(){
        if($_SESSION['loginAdmin'])
            echo 'logout';
        else
            echo '#';
    }

    public function adminDashboard(){
        if($_SESSION['loginAdmin'])
            echo 'Dashboard';
        else
            echo 'Home';
    }

    public function redirection2(){
        if($_SESSION['loginAdmin'])
            echo 'dashboard';
        else
            echo 'home';
    }

    public function aboutRedirection(){
        if(!$_SESSION['loginAdmin'])
            echo 'block';
        else
            echo 'none';
    }

    public function aboutName(){
        if(!$_SESSION['loginAdmin'])
            echo 'About us';
    }

    public function productRedirection(){
        if(!$_SESSION['loginAdmin'])
            echo 'block';
        else
            echo 'none';
    }

    public function productName(){
        if(!$_SESSION['loginAdmin'])
            echo 'Products';
    }

    public function signRedirection(){
        if($_SESSION['loginAdmin'])
            echo 'none';
        else
            echo 'block';
            
    }

    public function signName(){
        if(!$_SESSION['loginAdmin'])
            echo 'Sign In';
    }

}
