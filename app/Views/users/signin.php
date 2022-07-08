<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Central Place</title>
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure>
              <img src="images/login.jpeg" alt="sing up image" />
            </figure>
            <a href="<?= base_url() ?>/Signup" class="signup-image-link">Buat akun baru</a>
          </div>

          <div class="signin-form">
            <h2 class="form-title">LOGIN</h2>
            <!--  -->
            <?php if(!empty(session()->getFlashdata('error'))) : ?>
              <div class="alert alert-warning alert-dismissible fade show" role = "alert">
                <?php echo session()->getFlashdata('error'); ?>
              </div>
            <?php endif;?>
            <form action ='<?= base_url('signin/proses'); ?>' method="POST" class="register-form" id="login-form">
              <div class="form-group">
                <label for="username"
                  ><i class="zmdi zmdi-account material-icons-name"></i
                ></label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  placeholder="Your Name"
                  value="<?php echo session()->getFlashdata('username')?>"
                />
              </div>
              <div class="form-group">
                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Password"
                />
              </div>
              <div class="form-group form-button">
                <input
                  type="submit"
                  name="signin"
                  id="signin"
                  class="form-submit"
                  value="LOGIN"
                />
              </div>
            </form>
            <div class="social-login">
              <span class="social-label">Atau login dengan</span>
              <ul class="socials">
                <li>
                  <a href="#"
                    ><i class="display-flex-center zmdi zmdi-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="display-flex-center zmdi zmdi-twitter"></i
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><i class="display-flex-center zmdi zmdi-google"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>