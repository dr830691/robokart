<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registration form</title>
   <link rel="stylesheet" href="css\bootstrap.min.css">
  </head>
  <body>
    <div class="">
      <?php
      require_once('config.php');
       if(isset($_POST['signup']))
       { $fullname=$_POST['fullname'];
         $mobile=$_POST['mobile'];
         $state=$_POST['state'];
         $pass=$_POST['password'];
         $cpass=$_POST['confirmpassword'];
         $sql="INSERT INTO users(fullname,mobile,state,password) values(?,8888888888,?,?,12345)";
         $stmtinsert = $db->prepare($sql);
         $result=$stmtinsert->execute($fullname,$mobile,$state,$pass);
         if($result){
           echo "successfully inserted";}
        else
             {echo "there is an error!!!!";}

         }



       ?>

    </div>
    <div class="">
      <form class="" action="registration.php" method="post">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">


          <h1>ROBOCART</h1>
          <p>Please fill your correct details</p>
          <br class="mb-3">
          <label for="name"><b>Name</b></label>
          <input class="form-control"type="text" name="fullname" value="" required>

          <label for="Mobile"><b>Mobile No</b></label>
          <input class="form-control" type="number" name="mobile" value="" required>
          <label for="pass"><b>State</b></label>
          <select class="form-control" name="state">
            <option value="AndhraPradesh">Andhra Pradesh</option>
            <option value="ArunachalPradesh">Arunachal Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Bihar">Bihar</option>
            <option value="	Chhattisgarh">	Chhattisgarh</option>
          </select>
          <label for="password"><b>Password</b></label>
          <input class="form-control"type="password" name="password" value="" required>
          <label for="confirmpassword"><b>Confirm Password</b></label>
          <input class="form-control"type="password" name="confirmpassword" value="" required>
          <br class="mb-3">
          <input  class="btn btn-primary"type="submit" name="signup" value="Sign Up">
                </div>
            </div>
        </div>
      </form>

    </div>

  </body>
</html>
