<?php
$res = Instances::getAllProductsInstance();
Instances::addProductInstance();
$tm = Instances::total_max();
?>

<!-- Modal add-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajout</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data" autocomplete="off">
          <div id="form">

            <div class="form-outline mb-4">
              <input type="text" name="nom1" id="form3Example3" class="form-control" placeholder="Libellé" required />
            </div>

            <div class="form-outline mb-4">
              <input type="file" name="img1" id="" class="form-control">
            </div>

            <div class="form-outline mb-4">
              <input type="number" name="prix1" id="" class="form-control" placeholder="Prix">
            </div>

            <input type="hidden" name="total" id="total" value="1">

          </div>

          <!-- Submit button -->
          <button type="submit" name="submitAdd" class="btn btn-danger btn-block mb-4 w-25" style="color: white;">
            Enregistrer
          </button>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>

        <button type="button" class="btn btn-primary" onclick="ajouter()">
          Ajouter un nouveau produit
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal tm-->
<div class="modal fade" id="exampleModalTotal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Total des produits & Prix max</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <div class="form-outline mb-4">
          <input type="text" name="" id="form3Example3" class="form-control" value="<?php echo $tm['total']; ?>"
            disabled />
          <label for="">Total</label>
        </div>

        <div class="form-outline mb-4">
          <input type="number" name="prix1" id="" class="form-control" value="<?php echo $tm['max']; ?>" disabled>
          <label for="">Prix max</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>




<div class="container-fluid text-center">
  <div class="cruises-header mt-md-5 pt-5">
    <h2>Admin Dashboard</h2>
    <h5>You can add, edit or delete products</h5>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12 me-md-3 mt-md-5">
      <a href="#" class="btn btn-sm btn-primary mr-2 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
          class="fas fa-plus"></i></a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Libellé</th>
            <th scope="col">Image</th>
            <th scope="col">Prix</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($res as $row):
            ?>
            <tr>
              <th scope="row">
                <?php echo $row['id']; ?>
              </th>
              <td>
                <?php echo $row['libelle']; ?>
              </td>
              <td>
                <?php echo $row['image']; ?>
              </td>
              <td>
                <?php echo $row['prix']; ?>
              </td>
              <td class="d-flex flex-row">
                <!-- <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModalEdit"><i class="fas fa-edit"></i></a> -->
                <form method="post" class="" action="update">
                  <input type="hidden" name="id" value="<?php echo ($row['id']); ?>">
                  <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                </form>
                <form method="post" class="ms-2" action="delete">
                  <input type="hidden" name="id" value="<?php echo ($row['id']); ?>">
                  <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            <?php
          endforeach;
          ?>
        </tbody>
      </table>
      <div class="d-flex">
        <form method="post">
          <label for="" class=""><b>Tri par prix</b></label>
          <button class="btn btn-sm btn-primary ms-2" name="submitAsc">croissant</button>
          <button class="btn btn-sm btn-primary ms-2" name="submitDesc">décroissant</button>
        </form>
        <div>
          <label for="" class="ms-md-5"><b>Total & Prix max</b></label>
          <!-- <button class="btn btn-sm btn-primary ms-2">afficher</button> -->
          <a href="#" class="btn btn-sm btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#exampleModalTotal">afficher</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  var form = document.getElementById('form');
  form.style.overflowY = "scroll";
  form.style.maxHeight = "400px";
  var totalAjout = 2;
  function ajouter() {
    var div = document.createElement("div");
    div.setAttribute("class", "form-outline mb-4");
    var div2 = document.createElement("div");
    div2.setAttribute("class", "form-outline mb-4");
    var div3 = document.createElement("div");
    div3.setAttribute("class", "form-outline mb-4");
    var lab = document.createElement("label");
    lab.innerHTML = 'Produit ' + totalAjout;
    lab.setAttribute('class', 'mt-3');
    var nomInput = document.createElement("input");
    nomInput.setAttribute('type', 'text');
    nomInput.setAttribute('class', 'form-control');
    nomInput.setAttribute('name', 'nom' + totalAjout);
    nomInput.setAttribute('placeholder', 'Libellé');
    var imageInput = document.createElement("input");
    imageInput.setAttribute('type', 'file');
    imageInput.setAttribute('class', 'form-control');
    imageInput.setAttribute('name', 'img' + totalAjout);
    var priceInput = document.createElement("input");
    priceInput.setAttribute('type', 'number');
    priceInput.setAttribute('class', 'form-control');
    priceInput.setAttribute('name', 'prix' + totalAjout);
    priceInput.setAttribute('placeholder', 'Prix');

    var total = document.getElementById('total');
    total.value = totalAjout;

    totalAjout++;
    div.appendChild(nomInput);
    div2.appendChild(imageInput);
    div3.appendChild(priceInput);
    form.appendChild(document.createElement('br'));
    form.appendChild(lab);
    form.appendChild(div);
    form.appendChild(div2);
    form.appendChild(div3);
  }

  xhr = new XMLHttpRequest();

</script>