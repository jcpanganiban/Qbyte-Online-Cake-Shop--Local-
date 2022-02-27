<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/variables.css" type="text/css" />
  <link rel="stylesheet" href="./css/navbar.css" type="text/css" />
  <link rel="stylesheet" href="./css/profile.css" type="text/css" />
</head>
<?php
  include "./includes/header.inc.php";
?>
<div class="bg-img">
  <div class="account-content">
    <div class="upper-content">
      <div class="back-button">
        <img src="./img/icons/back-icon.svg" alt="back-icon" />
      </div>
      <h1>Hero Header</h1>
      <div class="user-icon">
        <img src="./img/icons/user-icon.svg" alt="user-icon" />
      </div>
    </div>
    <div class="main-content">
      <div class="display-name">
        <div class="displaycontent">
          <form action="./includes/update-name-profile.inc.php" method="post">
            <div class="textdisplay">
              <label id="displaylabel">DISPLAY NAME</label>

              <?php
                if (isset($_SESSION['useremail'])){
                  // echo '<span id="display">'.$_SESSION['username'].'</span>';
                  echo '<input type="text" name="name" id="display" class="input-name" value="' . $_SESSION['username'] . '" readonly>';
                }
                else{
                  echo '<span id="display">Name</span>';
                }
              ?>

            </div>
            <div class="modify-btns">
              <button id="edit-name" class="edit-btn">EDIT</button>
              <button id="save-name" class="edit-btn" name="update-name-submit">SAVE</button>
            </div>
          </form>
        </div>
      </div>
      <div class="display-name">
        <div class="displaycontent">
          <form action="./includes/update-name-profile.inc.php" method="post">
            <div class="textdisplay">
              <label id="displaylabel">CONTACT NUMBER</label>
              <?php
              if (isset($_SESSION['useremail'])){
                echo '<span id="display">'.$_SESSION['usercontact'].'</span>';
              }
              else{
                echo '<span id="display">Contact Number</span>';
              }
            ?>
            </div>
            <div class="modify-btns">
              <button id="edit-number" class="edit-btn">EDIT</button>
              <button id="edit-number" class="edit-btn">EDIT</button>
            </div>
          </form>
        </div>
      </div>
      <div class="display-name">
        <div class="displaycontent">
          <form action="./includes/update-name-profile.inc.php" method="post">
            <div class="textdisplay">
              <label id="displaylabel">EMAIL ADDRESS</label>
              <?php
              if (isset($_SESSION['useremail'])){
                echo '<span id="display">'.$_SESSION['useremail'].'</span>';
              }
              else{
                echo '<span id="display">Email Address</span>';
              }
            ?>
            </div>
            <div class="modify-btns">
              <button id="edit-email" class="edit-btn">EDIT</button>
              <button id="edit-email" class="edit-btn">EDIT</button>
            </div>
          </form>
        </div>
      </div>
      <div class="display-name">
        <div class="displaycontent">
          <form action="./includes/update-name-profile.inc.php" method="post">
            <div class="textdisplay">
              <span id="display">Password </span>
            </div>

            <div class="modify-btns">
              <button id="edit-password" class="edit-btn">EDIT</button>
              <button id="edit-password" class="edit-btn">EDIT</button>
            </div>
          </form>
        </div>
      </div>
      <div class="bottombutton">
        <button id="delete-btn" class="edit-btn">Delete Account</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<footer class="footer"></footer>
</body>
<script src="./js/profile.js"></script>

</html>