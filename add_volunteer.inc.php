<?php
require('top.inc.php');
session_start();
 
   // Check if the user is logged in, if not then redirect him to login page
   if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	   header("location: login.php");
	   exit;
   }
?>
         <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add_Volunteer</strong></div>
                        <div class="card-body card-block">
                        <form action="insert_volunteer.php" method="POST">
                           <div class="form-group"><label for="full_name" class=" form-control-label">Full Name</label><input name="full_name" type="text" id="full_name" placeholder="Enter your name" class="form-control" required></div>
                           <div class="form-group"><label for="cnic" class=" form-control-label">CNIC</label><input name="cnic" type="text" id="cnic" placeholder="Enter your cnic" class="form-control" required></div>
                           <div class="form-group"><label for="gender" class=" form-control-label">Gender</label><input name="gender" type="text" id="gender" placeholder="Enter gender name" class="form-control" required></div>
                           <div class="form-group"><label for="address" class=" form-control-label">Address</label><input name="address" type="text" id="address" placeholder="Address name" class="form-control" required></div>
                           <button id="payment-button" type="submit"  name="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php
require('footer.inc.php');
?>