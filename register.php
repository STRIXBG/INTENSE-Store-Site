<!DOCTYPE html>
<?php
   session_start();
   if(isset($_SESSION["user"])){
       header('location:index.php');
   }
   require_once('static-pages/head.php');
   require "User.php";
   if(isset($_POST['submit'])){
        $user = new User();
        $response =  $user->registerLoginUser($_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirm-password']);
    }
?>
<html lang="en">
   <head>
      <?php
         require_once('static-pages/head.php');
         ?>
      <title>INTENSE Clothing | Register</title>
      <link rel="stylesheet" href="assets/css/cssprogress.css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
   </head>
   <body style="background-color: #e0e0e0;">
      <?php require_once('static-pages/head.php'); ?>
      <main id="login-main">
         <div class="wrapper" style="max-width: 900px;">
            <div class="text-center mt-5 mb-2">
               <h3>INTENSE</h3>
            </div>
            <section class="mt-5 mb-3 p-3 bg-white rounded shadow-lg">
               <div class="container-fluid">
                  <div class="mb-3">
                     <div class="row">
                        <div class="col text-center mt-2 p-2 border-selected">
                            <p>Join us</p>
                        </div>
                        <div class="col text-center mt-2 p-2 border-bottom border-start border-2">
                           <a href="login.php">Sign in</a>
                        </div>
                     </div>
                  </div>
                  <div class="wrapper p-3" style="max-width: 500px;">
                     <form action="" method="post" >
                        <div class="form-group mt-3 mb-3">
                           <label for="inputUsername" class="form-label">Username:</label>
                           <input type="text" id="inputUsername" name="username" class="form-control c-input" aria-describedby="usernameHelpBlock" placeholder="" required>
                        </div>
                         <div class="form-group mt-3 mb-3">
                           <label for="inputUsername" class="form-label">Email:</label>
                           <input type="email" id="inputEmail" name="email" class="form-control c-input" aria-describedby="emailHelpBlock" placeholder="" required>
                        </div>
                        <div class="form-group mt-3 mb-3">
                           <label for="inputPass" class="form-label">Password:</label>
                           <input type="password" id="inputPass" name="password" class="form-control c-input" aria-describedby="passwordHelpBlock" placeholder="" required>
                        </div>
                         <div class="form-group mt-3 mb-3">
                           <label for="inputPass" class="form-label">Confirm Password:</label>
                           <input type="password" id="inputConfirmPass" name="confirm-password" class="form-control c-input" aria-describedby="confirmPasswordHelpBlock" placeholder="" required>
                        </div>
                        <div class="checkbox">
                           <label class="control-label" for="remember">
                           <input type="checkbox" name="remember" id="remember" value="1">
                           Remember Me
                           </label>
                        </div>
                        <button class="c-button-1 w-100 mt-3" name="submit" type="submit">Join us</button>
                     </form>
                      <p class="error mt-3"><?php echo @$response; ?></p>
                  </div>
               </div>
            </section>
         </div>
      </main>
      <script src="assets/js/lib/typed/typed.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/search-bar.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script src="ajax/login.js"></script>
      <script>window.gtranslateSettings = {"default_language":"en","languages":["en","bg"],"wrapper_selector":".gtranslate_wrapper","float_switcher_open_direction":"bottom"}</script>
      <script src="https://cdn.gtranslate.net/widgets/v1.0.1/float.js" defer></script>
   </body>
</html>
