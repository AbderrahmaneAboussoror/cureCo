<?php

class admin{
    public static function getProducts()
    {
        $stmt = DB::connecter()->prepare('SELECT * from produit');
        if ($stmt->execute())
            return $stmt->fetchAll();
        else
            return 'error';

    }

    public static function getProduct($id)
    {
        $stmt = DB::connecter()->prepare('SELECT * from produit where id = :id');
        $stmt->bindParam(':id', $id);
        if ($stmt->execute())
            return $stmt->fetch();
        else
            return 'error';

    }

    public static function deleteProduct($id){
        $stmt = DB::connecter()->prepare('DELETE from produit where id = :id');
        $stmt->bindParam(':id', $id);
        if ($stmt->execute())
            return 'ok';
        else
            return 'error';
    }

    public static function updateProduct($data)
    {
        $stmt = DB::connecter()->prepare("UPDATE produit SET libelle = :lib, prix = :prix, image = :img where id = :id");
        $stmt->bindParam(":id", $data['id']);
        $stmt->bindParam(":prix", $data['prix']);
        $stmt->bindParam(":lib", $data['libelle']);
        $stmt->bindParam(":img", $data['img']);
        if ($stmt->execute())
            return 'ok';
        else
            return 'error';
    }
    
    public static function addProduct($data)
    {
        $stmt = DB::connecter()->prepare("INSERT INTO produit(libelle, image, prix) values(:lib, :img, :prix)");
        $stmt->bindParam(":prix", $data['prix']);
        $stmt->bindParam(":lib", $data['nom']);
        $stmt->bindParam(":img", $data['img']);
        if ($stmt->execute())
            return 'ok';
        else
            return 'error';
    }

    public static function getProductsByPriceAsc()
    {
        $stmt = DB::connecter()->prepare('SELECT * from produit order by prix');
        if ($stmt->execute())
            return $stmt->fetchAll();
        else
            return 'error';

    }

    public static function getProductsByPriceDesc()
    {
        $stmt = DB::connecter()->prepare('SELECT * from produit order by prix desc');
        if ($stmt->execute())
            return $stmt->fetchAll();
        else
            return 'error';

    }

    public static function total()
    {
        $stmt = DB::connecter()->prepare('SELECT count(*) as total from produit');
        if ($stmt->execute())
            return $stmt->fetch();
        else
            return 'error';

    }

    public static function max()
    {
        $stmt = DB::connecter()->prepare('SELECT max(prix) as max from produit');
        if ($stmt->execute())
            return $stmt->fetch();
        else
            return 'error';

    }
}