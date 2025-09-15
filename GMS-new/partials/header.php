<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'partials/connection.php';

// $select_basic_data = "SELECT * FROM basics";
// $fetch_basic       = mysqli_query($conn , $select_basic_data);
// $all_basic_data = array();
// while($basic_data = mysqli_fetch_assoc($fetch_basic)){
//     $all_basic_data[] = $basic_data;
// }

  $select_logo = "SELECT logo FROM logo ";
  $get_logo    = mysqli_query($conn , $select_logo);
  $logo = array();

  while($lg = mysqli_fetch_assoc($get_logo)){
    $logo[] = $get_logo;
  }

  // print_r($logo[0]);
  $logo = "";
  foreach($get_logo as $l){
    $logo = $l['logo'];
  }


  $bd = array();
  $select_basic_data = " SELECT * FROM basics";
  $fr                = mysqli_query($conn , $select_basic_data);
  if($fr){
    while($basic_data = mysqli_fetch_assoc($fr)){
      $bd[] = $basic_data;
    }
  }
  // print_r($bd);

  // echo $logo;

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>AFC</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img src="admin/<?php echo $logo ?>" alt="" />
            <span>
              AFC
            </span>
          </a>
          <div class="contact_nav" id="">
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="images/location.png" alt="" />
                  <span><?php echo $bd[0] ['address'] ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="images/call.png" alt="" />
                  <span>Call : + <?php  echo $bd[0]['phone_number'] ?></span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">
                  <img src="images/envelope.png" alt="" />
                  <span><?php  echo $bd[0]['email'] ?></span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

    </header>

   