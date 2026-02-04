<?php session_start() ?>
<div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span> </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="service.php">Services </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <?php 
                  if(isset($_SESSION['username'])){
                      ?>
                        <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $_SESSION['username'] ?></a>
                  </li>
                  <a href="logout.php" class="btn nav-link" >signout</a>
                      <?php 
                  } else {
                      ?>  <a class="nav-link" href="login.php"> Login </a>  <?php 
                  }
                  ?>
                </ul>
                  
              </div>
            </div>
          </nav>
        </div>
      </div>