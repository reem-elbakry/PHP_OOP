/**
 * Form inputs
 */
let sku = document.getElementById("sku");
let name = document.getElementById("name");
let price = document.getElementById("price");

let productType = document.getElementById("productType");
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

function validateNumInput(input) {
  var regex = /^[0-9 ]+$/g;
  if (regex.test(input)) {
    return true;
  }
  return false;
}

function validateCharInput(input) {
  var regex = /^[A-Za-z ]+$/g;
  if (regex.test(input)) {
    return true;
  }
  return false;
}

function validateCharNumInput(input) {
  var regex = /^[A-Za-z0-9 ]+$/g;
  if (regex.test(input)) {
    return true;
  }
  return false;
}

function validateSku() {
  if ($("#sku").val().length <= 0) {
    $("#skuValidator").show();
    return false;
  } else {
    let isValid = validateCharNumInput($("#sku").val());
    if (!isValid) {
      $("#skuValidator").hide();
      $("#skuValidator1").show();
      return false;
    }

    $("#skuValidator").hide();
    $("#skuValidator1").hide();

    return true;
  }
}

function validateName() {
  if ($("#name").val().length <= 0) {
    $("#nameValidator").show();
    return false;
  } else {
    let isValid = validateCharInput($("#name").val());
    if (!isValid) {
      $("#nameValidator").hide();
      $("#nameValidator1").show();
      return false;
    }

    $("#nameValidator").hide();
    $("#nameValidator1").hide();

    return true;
  }
}

function validatePrice() {
  if ($("#price").val().length <= 0) {
    $("#priceValidator").show();
    return false;
  } else {
    let isValid = validateNumInput($("#price").val());
    if (!isValid) {
      $("#priceValidator").hide();
      $("#priceValidator1").show();
      return false;
    }

    $("#priceValidator").hide();
    $("#priceValidator1").hide();

    return true;
  }
}

function validateProductType() {
  if ($("#productType").val().length <= 0) {
    $("#productTypeValidator").show();
    return false;
  }
  $("#productTypeValidator").hide();
  return true;
}

function validateSize() {
  if ($("#size").val().length <= 0) {
    $("#sizeValidator").show();
    return false;
  } else {
    let isValid = validateNumInput($("#size").val());
    if (!isValid) {
      $("#sizeValidator").hide();
      $("#sizeValidator").show();
      return false;
    }

    $("#sizeValidator").hide();
    $("#sizeValidator1").hide();

    return true;
  }
}

function validateHeight() {
  if ($("#height").val().length <= 0) {
    $("#heightValidator").show();
    return false;
  } else {
    let isValid = validateNumInput($("#height").val());
    if (!isValid) {
      $("#heightValidator").hide();
      $("#heightValidator1").show();
      return false;
    }

    $("#heightValidator").hide();
    $("#heightValidator1").hide();

    return true;
  }
}

function validateWidth() {
  if ($("#width").val().length <= 0) {
    $("#widthValidator").show();
    return false;
  } else {
    let isValid = validateNumInput($("#width").val());
    if (!isValid) {
      $("#widthValidator").hide();
      $("#widthValidator1").show();
      return false;
    }

    $("#widthValidator").hide();
    $("#widthValidator1").hide();

    return true;
  }
}

function validateLength() {
  if ($("#length").val().length <= 0) {
    $("#lengthValidator").show();
    return false;
  } else {
    let isValid = validateNumInput($("#length").val());
    if (!isValid) {
      $("#lengthValidator").hide();
      $("#lengthValidator1").show();
      return false;
    }

    $("#lengthValidator").hide();
    $("#lengthValidator1").hide();

    return true;
  }
}

function validateWeight() {
  if ($("#weight").val().length <= 0) {
    $("#weightValidator").show();
    return false;
  } else {
    let isValid = validateNumInput($("#weight").val());
    if (!isValid) {
      $("#weightValidator").hide();
      $("#weightValidator1").show();
      return false;
    }

    $("#weightValidator").hide();
    $("#weightValidator1").hide();

    return true;
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

  let productType = $("#productType").val();

  if (productType == "DVD") {
    sizeValidator = validateSize();
    weightValidator = true;
    heightValidator = true;
    lengthValidator = true;
    widthValidator = true;
  }

  if (productType == "Book") {
    weightValidator = validateWeight();
    sizeValidator = true;
    heightValidator = true;
    lengthValidator = true;
    widthValidator = true;
  }

  if (productType == "Furniture") {
    heightValidator = validateHeight();
    lengthValidator = validateLength();
    widthValidator = validateWidth();
    weightValidator = true;
    sizeValidator = true;
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
  return validation();
});
