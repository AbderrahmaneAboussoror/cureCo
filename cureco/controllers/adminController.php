<?php

class adminController
{
    public function getProductsController()
    {
        $res = admin::getProducts();
        if ($res != 'error')
            return $res;
        else
            echo $res;
    }

    public function getProductController()
    {
        $res = admin::getProduct($_POST['id']);
        if ($res != 'error')
            return $res;
        else
            echo $res;
    }

    public function deleteProductController()
    {
        $res = admin::deleteProduct($_POST['id']);
        if ($res != 'error')
            header('location:dashboard');
        else
            echo $res;
    }

    public function editProductController()
    {
        $filename = $_FILES['img']['name'];
        $imageEx = explode('.', $filename);
        $imageEx = strtolower(end($imageEx));
        $newImageName = uniqid();
        $newImageName .= '.' . $imageEx;
        move_uploaded_file($_FILES['img']['tmp_name'], './public/images/' . $newImageName);

        $data = array(
            'id' => $_POST['id'],
            'libelle' => $_POST['lib'],
            'img' => $newImageName,
            'prix' => $_POST['prix']
        );

        $res = admin::updateProduct($data);
        if ($res != 'error')
            header('location:dashboard');
        else
            echo $res;
    }

    public function addProductController()
    {

        if (isset($_POST['total'])) {
            for ($i = 1; $i <= (int) $_POST['total']; $i++) {
                $filename = $_FILES['img' . $i]['name'];
                $imageEx = explode('.', $filename);
                $imageEx = strtolower(end($imageEx));
                $newImageName = uniqid();
                $newImageName .= '.' . $imageEx;
                move_uploaded_file($_FILES['img' . $i]['tmp_name'], './public/images/' . $newImageName);

                $data = array(
                    'nom' => $_POST['nom' . $i],
                    'img' => $newImageName,
                    'prix' => $_POST['prix' . $i]
                );

                $res = admin::addProduct($data);
            }
        }
        if ($res != 'error')
            header('location:dashboard');
        else
            echo $res;
    }

    public function getProductsByPriceAscController()
    {
        $res = admin::getProductsByPriceAsc();
        if ($res != 'error')
            return $res;
        else
            echo $res;
    }

    public function getProductsByPriceDescController()
    {
        $res = admin::getProductsByPriceDesc();
        if ($res != 'error')
            return $res;
        else
            echo $res;
    }

    public function totalController()
    {
        $res = admin::total();
        if ($res != 'error')
            return $res;
        else
            echo $res;
    }

    public function maxController()
    {
        $res = admin::max();
        if ($res != 'error')
            return $res;
        else
            echo $res;
    }
}