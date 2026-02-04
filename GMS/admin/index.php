<?php include 'partials/header.php';
include 'partials/connection.php';
?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <?php echo $_SESSION['user_login'] ?></h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">3 unread alerts!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card tale-bg">
                <p class="p-2"> 
                  <table class="table">
                  <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Contact Forms </h4>
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email.</th>
                          <th>Phone</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                       <?php 
                        
                        $select_queries = "SELECT * FROM contact_us";
                        $fire_query     = mysqli_query($conn , $select_queries);
                        while($queries = mysqli_fetch_assoc($fire_query)){
                          ?>
                          <tr>
                            <td><?php echo $queries['name'] ?></td>
                            <td><?php echo $queries['email'] ?></td>
                            <td><?php echo $queries['phone'] ?></td> 
                            <td><?php echo $queries['message']?></td>
                          </tr>
                          <?php 
                        }
                       
                       ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                  </table>
                </p>
              </div>
            </div>
        
          </div>
          
    <?php 
    
    include 'partials/footer.php';
?>