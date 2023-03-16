<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data["page_title"] ?> | Scandiweb</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= ASSETS_PATH ?>css/main.css" />
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <form action="/" method="POST" id="product_form">
          <header class="d-flex justify-content-between">
            <div class="page-title colored-text fw-bold fs-3">Add Product</div>
            <div class="actions">
              <button type="submit" class="btn colored-text">Save</button>
              <a role="button" class="btn colored-text" href="/">Cancel</a>
            </div>
          </header>
          <hr class="mt-2" />
          <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" id="sku" name="sku" class="form-control" />
            <p id="skuValidator" class="validator">SKU is required!</p>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" />
            <p id="nameValidator" class="validator">Name is required!</p>
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="text" id="price" name="price" class="form-control" />
            <p id="priceValidator" class="validator">Price is required!</p>
          </div>
          <div class="mb-3">
            <label for="product_type" class="form-label">Type Switcher</label>
            <select name="product_type" id="product_type">
              <option value=""></option>
              <option value="DVD">DVD</option>
              <option value="Book">Book</option>
              <option value="Furniture">Furniture</option>
            </select>
            <p id="productTypeValidator" class="validator">
              Product Type is required!
            </p>
          </div>
          <div id="DVD">
            <div class="mb-3">
              <label for="size" class="form-label">Size (MB)</label>
              <input type="text" id="size" name="size" class="form-control" />
              <p id="sizeValidator" class="validator">Size is required!</p>
              <div class="form-text">Please, provide size in MB.</div>
            </div>
          </div>
          <div id="Furniture">
            <div class="mb-3">
              <label for="height" class="form-label">Height (CM)</label>
              <input
                type="text"
                id="height"
                name="height"
                class="form-control"
              />
              <p id="heightValidator" class="validator">Height is required!</p>
            </div>
            <div class="mb-3">
              <label for="width" class="form-label">Width (CM)</label>
              <input type="text" id="width" name="width" class="form-control" />
              <p id="widthValidator" class="validator">Width is required!</p>
            </div>
            <div class="mb-3">
              <label for="length" class="form-label">Length (CM)</label>
              <input
                type="text"
                id="length"
                name="length"
                class="form-control"
              />
              <p id="lengthValidator" class="validator">Length is required!</p>
              <div class="form-text">
                Please, provide dimensions in HxWxL format.
              </div>
            </div>
          </div>
          <div id="Book">
            <div class="mb-3">
              <label for="weight" class="form-label">Weight (KG)</label>
              <input
                type="text"
                id="weight"
                name="weight"
                class="form-control"
              />
              <p id="weightValidator" class="validator">Weight is required!</p>
              <div class="form-text">Please, provide Weight in KG.</div>
            </div>
          </div>
        </form>
      </div>
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
    <script src="<?= ASSETS_PATH ?>js/jquery3.4.1.min.js"></script>
    <script src="<?= ASSETS_PATH ?>js/main.js"></script>
  </body>
</html>
