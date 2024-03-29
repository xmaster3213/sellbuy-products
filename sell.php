<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script>window.VIEW = "SELL";</script>
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php require_once("navbar_logged.php"); ?>
  <div id="modal-div" class="mdc-drawer-app-content mdc-top-app-bar--fixed-adjust">
    <main class="main-content" id="main-content">
      <!-- confirm purchase button -->
      <button id="add-product" class="mdc-button mdc-button--raised center-horizontal margin-top-30">
        <span class="mdc-button__ripple"></span>
        <span class="mdc-button__touch"></span>
        <span class="mdc-button__label">ADD PRODUCT</span>
      </button>

      <!-- grid -->
      <div id="cards" class="cards-grid">

      </div>
    </main>
  </div>
  <script src="js/card_expansion.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/shared.js"></script>
</body>
</html>

<script>
  const selector = '.mdc-button, .mdc-icon-button, .mdc-card__action';
  const ripples = [].map.call(document.querySelectorAll(selector), function(el) {
    return new mdc.ripple.MDCRipple(el);
  });
  changePageTitle("Sell");
  renderSell();
  setActiveListElement("list-item-sell");
</script>