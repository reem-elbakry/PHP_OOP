<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $page_title ?> | Scandiweb</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/main.css" />
  </head>
  <body>
    <div class="container">
      <form action="/mass-delete" method="POST">
      <input type="hidden" name="_method" value="DELETE" />
        <div class="row mt-5">
          <header class="d-flex justify-content-between">
            <div class="page-title colored-text fw-bold fs-3">Product List</div>
            <div class="">
              <a class="btn colored-text" href="/add-product">ADD</a>
              <button type="submit" id="delete-product-btn" class="btn colored-text">
                MASS DELETE
              </button>
            </div>
          </header>
          <hr class="mt-2" />
          <section class="row d-flex justify-content-start mb-3">
            <?php 
            foreach ($products as $product) {
              echo "<div class='card m-3' style='width: 18rem'>
              <div class='card-body'>
                <input
                  type='checkbox'
                  name='delete-product[]'
                  value=" ?> <?= $product->sku ?> <?= "
                  class='delete-checkbox'
                />
                <div class='text-center'>
                  <h5 class='card-title'>" ?> <?= $product->sku ?> <?= "</h5>
                  <h6 class='card-subtitle mb-2 text-muted'>" ?> <?= $product->name ?> <?= "</h6>
                  <p class='card-text'>" ?> <?= $product->price . "$" ?> <?= "</p> 
                  <p class='card-text'>" ?> <?= $product->product_type == "DVD" ? "Size: ".$product->size."MB" : ""  ?> <?= "</p> 
                  <p class='card-text'>" ?> <?= $product->product_type == "Book"  ? "Weight: ".$product->weight."KG" : "" ?> <?= "</p> 
                  <p class='card-text'>" ?> <?= $product->product_type == "Furniture" ? "Dimension: ".$product->height."X".$product->width."X".$product->length : ""   ?> <?= "</p> 
                </div>
              </div>
            </div>";
            }
            ?>
          </section>
          <footer class="text-center text-lg-start text-dark">
            <div
              class="text-center p-3"
              style="background-color: rgba(0, 0, 0, 0.2)"
            >
              © 2023 Copyright:
              <a class="colored-text" href="https://scandiweb.com/">Scandiweb</a>
            </div>
          </footer>
        </div>
      </form>
    </div>
    <!-- <script src="<?= ASSETS_PATH ?>js/jquery3.4.1.min.js"></script> -->
    <!-- <script src="<?= ASSETS_PATH ?>js/main.js"></script> -->
  </body>
</html>

