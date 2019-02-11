<?php require 'templates/header.php' ?>

<div class="container">
    <?php require 'templates/options.php' ?>
    <!-- Notification -->
    <?php 
    if(strlen($_SESSION['error']) > 0){
      echo '<div class="notification">';
      echo '<button type="button" id="close-notification" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>';
      echo '<h6>'. $_SESSION['error'] .'</h6>';
      echo '</div>';
      $_SESSION['error'] = "";
    }
    ?>
    <div class="messages-box">
        <h3>Inbox</h3>
        <div class="messages">
          <?php require 'scripts/messages.php' ?>
        </div>
    </div>
</div>


<?php require 'templates/footer.php' ?>