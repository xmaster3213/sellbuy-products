<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
  <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php require_once("navbar_logged.php"); ?>
  <div id="modal-div" class="mdc-drawer-app-content mdc-top-app-bar--fixed-adjust">
    <main class="main-content center" id="main-content">
      <form id="form" action="">
        <div>
          <label for="password" class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-trailing-icon">
            <span class="mdc-notched-outline">
              <span class="mdc-notched-outline__leading"></span>
              <span class="mdc-notched-outline__notch">
                <span class="mdc-floating-label">Password</span>
              </span>
              <span class="mdc-notched-outline__trailing"></span>
            </span>
            <input id="password" type="password" class="mdc-text-field__input" aria-labelledby="my-label-id" required>
            <i id="password-visibility-icon" class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing"
              tabindex="0" role="button" onclick="togglePasswordVisibility()">visibility_off</i>
          </label>
        </div>
        <div>
          <label for="email" class="mdc-text-field mdc-text-field--outlined">
            <span class="mdc-notched-outline">
              <span class="mdc-notched-outline__leading"></span>
              <span class="mdc-notched-outline__notch">
                <span class="mdc-floating-label">E-mail</span>
              </span>
              <span class="mdc-notched-outline__trailing"></span>
            </span>
            <input id="email" type="email" class="mdc-text-field__input" aria-labelledby="my-label-id" required>
          </label>
        </div>
        <div>
          <label for="credit-card" class="mdc-text-field mdc-text-field--outlined">
            <span class="mdc-notched-outline">
              <span class="mdc-notched-outline__leading"></span>
              <span class="mdc-notched-outline__notch">
                <span class="mdc-floating-label">Credit Card Number</span>
              </span>
              <span class="mdc-notched-outline__trailing"></span>
            </span>
            <input id="credit-card" type="text" class="mdc-text-field__input" aria-labelledby="my-label-id" required>
          </label>
        </div>
        <div>
          <label for="image" class="mdc-text-field mdc-text-field--outlined">
            <span class="mdc-notched-outline">
              <span class="mdc-notched-outline__leading"></span>
              <span class="mdc-notched-outline__notch">
                <span class="mdc-floating-label">Image</span>
              </span>
              <span class="mdc-notched-outline__trailing"></span>
            </span>
            <input id="image" type="url" class="mdc-text-field__input" aria-labelledby="my-label-id" required>
          </label>
        </div>
        <div>
          <button id="save" type="submit" class="mdc-button mdc-button--raised">
            <span class="mdc-button__ripple"></span>
            <span class="mdc-button__touch"></span>
            <span class="mdc-button__label">Edit</span>
          </button>
        </div>
      </form>
    </main>
  </div>
  <script src="js/card_expansion.js"></script>
  <script src="js/navbar.js"></script>
  <script src="js/shared.js"></script>
</body>
</html>

<script>
  const passwordInput = document.getElementById('password')
  const passwordVisibilityIcon = document.getElementById('password-visibility-icon')

  function togglePasswordVisibility() {
    const visible = passwordVisibilityIcon.innerHTML === 'visibility';
    passwordVisibilityIcon.innerHTML = !visible ? 'visibility' : 'visibility_off';
    passwordInput.type = !visible ? 'text' : 'password';
  }

  new mdc.topAppBar.MDCTopAppBar(document.querySelector('.mdc-top-app-bar'));
  document.querySelectorAll('.mdc-text-field').forEach((el) => {
    new mdc.textField.MDCTextField(el);
  });
  document.querySelectorAll('.mdc-button').forEach((el) => {
    new mdc.ripple.MDCRipple(el);
  });
  changePageTitle("Profile");
  initializeProfile();
  setActiveListElement(null);
</script>