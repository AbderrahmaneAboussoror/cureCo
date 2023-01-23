<?php

class Instances{
    public static function adminCheckInstance(){
        if(isset($_POST['submitSI'])){
            if(isset($_POST['email']) and isset($_POST['password'])){
                $adminCheck = new userController();
                $adminCheck->checkUser();
            }
        }
    }

    public static function registerInstance(){
        if(isset($_POST['submitSU'])){
            if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['nom']) and isset($_POST['prenom'])){
                $adminCheck = new userController();
                $adminCheck->registerController();
            }
        }
    }

    public static function changeStatus(){
        $adminCheck = new userController();
        $adminCheck->loggedIn();
    }

    public static function changeDirection(){
        $adminCheck = new userController();
        $adminCheck->redirection();
    }

    public static function changeStatusForAdmin(){
        $adminCheck = new userController();
        $adminCheck->adminDashboard();
    }
    
    public static function changeDirection2(){
        $adminCheck = new userController();
        $adminCheck->redirection2();
    }

    public static function changeProductStatus(){
        $adminCheck = new userController();
        $adminCheck->productName();
    }

    public static function changeProductDirection(){
        $adminCheck = new userController();
        $adminCheck->productRedirection();
    }

    public static function changeAboutStatus(){
        $adminCheck = new userController();
        $adminCheck->aboutName();
    }

    public static function changeAboutDirection(){
        $adminCheck = new userController();
        $adminCheck->aboutRedirection();
    }

    public static function changeSignStatus(){
        $adminCheck = new userController();
        $adminCheck->signName();
    }

    public static function changeSignDirection(){
        $adminCheck = new userController();
        $adminCheck->signRedirection();
    }

    public static function getAllProductsInstance(){
        $admin = new adminController();
        if(isset($_POST['submitDesc'])){
            unset($_POST['submitDesc']);
            return $admin->getProductsByPriceDescController();
        }
        elseif(isset($_POST['submitAsc'])){
            unset($_POST['submitAsc']);
            return $admin->getProductsByPriceAscController();
        }else
            return $admin->getProductsController();
        
    }

    public static function deleteProductInstance(){
        if(isset($_POST['id'])){
            $admin = new adminController();
            $admin->deleteProductController();
        }
    }

    public static function editProductInstance(){
        if(isset($_POST['submitE'])){
            $admin = new adminController();
            $admin->editProductController();
        }
    }

    public static function getProductInstance(){
        $admin = new adminController();
        return $admin->getProductController();
    }

    public static function addProductInstance(){
        if(isset($_POST['submitAdd'])){
            $admin = new adminController();
            $admin->addProductController();
        }
    }
    
    public static function total_max(){
        $admin = new adminController();
        $total = $admin->totalController();
        $max = $admin->maxController();

        $data = array(
            'total' => $total['total'],
            'max' => $max['max']
        );
        return $data;
    }
}