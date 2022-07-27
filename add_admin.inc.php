<?php
require('top.inc.php');
?>
         <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Add Admin</strong></div>
                        <div class="card-body card-block" >
                           <form action="insert_admin.php" method="POST">
                           <div class="form-group"><label for="Full Name" class=" form-control-label">Full Name</label><input type="text" id="full_name" name="full_name" placeholder="Enter your full name" class="form-control" required></div>
                           <div class="form-group"><label for="Email" class=" form-control-label">Email</label><input type="text" id="email" name="email" placeholder="Enter Your Email" class="form-control" required></div>
                           <div class="form-group"><label for="Password" class=" form-control-label">Password</label><input type="text" id="password" name="password" placeholder="Enter Your Password" class="form-control" required></div>
                           <!-- <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div> -->
                           <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
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