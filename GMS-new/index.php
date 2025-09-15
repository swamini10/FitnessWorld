<?php 

include 'partials/header.php';


?>
<style>
  .service-image{
    width:547px;
    height:307px;
  }
</style>
    <!-- end header section -->
    
    <!-- slider section -->
    <section class="slider_section position-relative">
    <?php include 'partials/nav-bar.php' ?>
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Get Your Body
                      </h2>
                      <h1>
                        Fitness Here
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <!-- <a href="" class="btn-2">
                          Get A Quote
                        </a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Get Your Body
                      </h2>
                      <h1>
                        Fitness Here
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <!-- <a href="" class="btn-2">
                          Get A Quote
                        </a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-7 offset-md-6 offset-md-5">
                    <div class="detail-box">
                      <h2>
                        Get Your Body
                      </h2>
                      <h1>
                        Fitness Here
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Read More
                        </a>
                        <!-- <a href="" class="btn-2">
                          Get A Quote
                        </a> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          About Ajinkya Fitness Club
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="admin/images/logo.png" alt="">
        </div>
        <div class="detail-box">
          <p>
            We're here to provide yo best tainers , best equipment and best service that we need of , we are fresh enegy gym institute in our region with more than 100 equipments and more than 15 tainers who are having more that 5 year of experiance in taining people
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Services
        </h2>
          <?php  
            $select_services = "SELECT * FROM services";
            $services[] = array();
            $get_services    = mysqli_query($conn , $select_services);  
            

           
            ?>
      </div>
      <div class="service_container">
        <?php

        while($data = mysqli_fetch_assoc($get_services)){

         ?>
         <div class="box">
         
         <img src="<?php echo $data['service_image'] ?>" alt="" class="service-image">
         <h6 class="visible_heading">
         <?php echo $data['service_name'] ?>
         </h6>
         <div class="link_box">
           <a href="service-detail.php?id=<?php echo $data['id'] ?>">
             <img src="images/link.png" alt="">
           </a>
           <h6>
             CROSSFIT TRAINING
           </h6>
         </div>
       </div>
         <?php 
        }
        
        ?>
        
      </div>
    </div>
  </section>

  <!-- end service section -->


  <!-- Us section -->

  <section class="us_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="us_container">
        <div class="box">
          <div class="img-box">
            <img src="images/u-1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              QUALITY EQUIPMENT
            </h5>
            <p>
              At AFC , we offer only the highest quality equipment for optimal performance and durability. Shop now
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              HEALTHY NUTRITION PLAN
            </h5>
            <p>
              Get on track to a healthier you with our personalized nutrition plans. Achieve your goals today
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              SHOWER SERVICE
            </h5>
            <p>
             Experience the ultimate relaxation with our luxurious shower service. Refresh and rejuvenate your body and mind
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/u-4.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              UNIQUE TO YOUR NEEDS
            </h5>
            <p>
             Our products and services are tailored to meet your unique needs. Get customized solutions for your business or personal goals."
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end us section -->


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
    
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client2.jpg" alt="" style="border-radius:50%;width:100%;height:100%;">
              </div>
              <div class="detail-box">
                <h5>
                  Rohan Desai
                </h5>
                <p>
                 I joined AFC and it's been great! Top-notch equipment, knowledgeable trainers, variety of classes, and always clean. Excited to continue my fitness journey here.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.png" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Devid John
                </h5>
                <p>
                  I've been a member of AFC for over a year now and it's been a game-changer for my fitness goals. The staff is friendly, the equipment is state-of-the-art, and the community is supportive. Highly recommend
                </p>
              </div>
            </div>
          </div>
         
          
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- result section -->

  <section class="result_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/result-img.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="detail-box">
            <h2>
              BUILT TO BRING <br>
              BEST RESULTS
            </h2>
            <p>
            Welcome to our fitness website! We're dedicated to helping you achieve your health and fitness goals through personalized workout plans, nutrition guidance, and expert advice. With our easy-to-use online platform, you can track your progress, connect with other like-minded individuals, and access a wealth of resources to help you stay motivated and on track. So why wait? Sign up today and start your journey to a healthier, happier you!
            </p>
         
</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end result section -->


  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Get In Touch
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
            <form action="" method="POST">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" name="name" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" name="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" name="phone" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" name="message" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit" name="send">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

 <!-- Quotation code  -->
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <?php include 'partials/footer.php' ?>

 <?php
 
 if(isset($_POST['send'])){
  echo "clicked";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $insert = "INSERT INTO contact_us (name ,email , phone , message) VALUES ('$name' , '$email' , '$phone' , '$message')";
  echo $insert;
  $act_insert = mysqli_query($conn , $insert);
  if($act_insert){
    echo " query Sent ";
  } else {
    echo "failed to send";
  }

 }
 
 
 ?>
 <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>