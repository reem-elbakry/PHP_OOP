/**
 * Form inputs
 */
let sku = document.getElementById("sku");
let name = document.getElementById("name");
let price = document.getElementById("price");

let productType = document.getElementById("product_type");
let DVD = document.getElementById("DVD");
let Book = document.getElementById("Book");
let Furniture = document.getElementById("Furniture");

let size = document.getElementById("size");
let height = document.getElementById("height");
let width = document.getElementById("width");
let length = document.getElementById("length");
let weight = document.getElementById("weight");

/**
 * Form validators
 */
let skuValidator = document.getElementById("skuValidator");
let nameValidator = document.getElementById("nameValidator");
let priceValidator = document.getElementById("priceValidator");
let productTypeValidator = document.getElementById("productTypeValidator");
let sizeValidator = document.getElementById("sizeValidator");
let heightValidator = document.getElementById("heightValidator");
let widthValidator = document.getElementById("widthValidator");
let lengthValidator = document.getElementById("lengthValidator");
let weightValidator = document.getElementById("weightValidator");

/**
 * The form changed dynamically when the product type is switched
 */
productType.addEventListener("change", function () {
  let productTypeValue = productType.options[productType.selectedIndex].value;
  if (productTypeValue === "DVD") {
    DVD.style.display = "block";
    Book.style.display = "none";
    Furniture.style.display = "none";
  } else if (productTypeValue === "Book") {
    DVD.style.display = "none";
    Book.style.display = "block";
    Furniture.style.display = "none";
  } else if (productTypeValue === "Furniture") {
    DVD.style.display = "none";
    Book.style.display = "none";
    Furniture.style.display = "block";
  }
});

/**
 * Add Product Form Validation <required - datatypes>
 */

function validateSku() {
  if ($("#sku").val().length <= 0) {
    $("#skuValidator").show();
    return false;
  }
}

function validateName() {
  if ($("#name").val().length <= 0) {
    $("#nameValidator").show();
    return false;
  }
}

function validatePrice() {
  if ($("#price").val().length <= 0) {
    $("#priceValidator").show();
    return false;
  }
}

function validateProductType() {
  if ($("#product_type").val().length <= 0) {
    $("#productTypeValidator").show();
    return false;
  }
}

function validateSize() {
  if ($("#size").val().length <= 0) {
    $("#sizeValidator").show();
    return false;
  }
}

function validateHeight() {
  if ($("#height").val().length <= 0) {
    $("#heightValidator").show();
    return false;
  }
}

function validateWidth() {
  if ($("#width").val().length <= 0) {
    $("#widthValidator").show();
    return false;
  }
}

function validateLength() {
  if ($("#length").val().length <= 0) {
    $("#lengthValidator").show();
    return false;
  }
}

function validateWeight() {
  if ($("#weight").val().length <= 0) {
    $("#weightValidator").show();
    return false;
  }
}

function validation() {
  let skuValidator = validateSku();
  let nameValidator = validateName();
  let priceValidator = validatePrice();
  let productTypeValidator = validateProductType();
  let sizeValidator;
  let weightValidator;
  let heightValidator;
  let lengthValidator;
  let widthValidator;

  let productType = $("#product_type").val();

  if (productType == "DVD") {
    sizeValidator = validateSize();
  }

  if (productType == "Book") {
    weightValidator = validateWeight();
  }

  if (productType == "Furniture") {
    heightValidator = validateHeight();
    lengthValidator = validateLength();
    widthValidator = validateWidth();
  }

  if (
    !skuValidator ||
    !nameValidator ||
    !priceValidator ||
    !productTypeValidator ||
    !sizeValidator ||
    !weightValidator ||
    !heightValidator ||
    !lengthValidator ||
    !widthValidator
  ) {
    return false;
  }

  return true;
}

$("#product_form").submit(function () {
  $("#product_form").trigger("reset");
  $("#product_form select").trigger("change");
  return validation();
});
