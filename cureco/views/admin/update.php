<?php
$res = Instances::getProductInstance();
Instances::editProductInstance();
?>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">

            <div class="card">
                <div class="card-header">Modifier un produit</div>
                <div class="card-body bg-light">
                    <a href="dashboard" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fa fa-home"></i></a>
                    <form method="post" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="id" value="<?php echo $res['id'];?>">
                        <div class="form-group">
                            <label for="desc">Libelle</label>
                            <input type="text" name="lib" class="form-control" placeholder="Libelle" value="<?php echo $res['libelle'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Image</label>
                            <input type="file" accept=".jpg,.jpeg,.png" name="img" class="form-control"
                                placeholder="Image">
                        </div>
                        <div class="form-group">
                            <label for="desc">Prix</label>
                            <input type="text" name="prix" class="form-control" placeholder="Prix" required value="<?php echo $res['prix'];?>">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-3" name="submitE">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>