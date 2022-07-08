<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Central Place</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main">
      <?php if(!empty(session()->getFlashdata('error'))) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <?php echo session()->getFlashdata('error'); ?>
        </div>
       <?php endif; ?>
      <form action="<?= base_url("/signup/register"); ?>" method="post">
      <section class="signup">
        <div class="container">
          <div class="signup-content">
            <div class="signup-form">
              <h2 class="form-title">REGISTRASI USER</h2>
              <form method="POST" class="register-form" id="register-form">
                <div class="form-group">
                  <label for="name"
                    ><i class="zmdi zmdi-account material-icons-name"></i
                  ></label>
                  <input
                    type="text"
                    name="username"
                    id="username"
                    placeholder="Your Name"
                  />
                </div>
                <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-email"></i></label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                  />
                </div>
                <div class="form-group">
                  <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                  />
                </div>
                <div class="form-group">
                  <label for="re-pass"
                    ><i class="zmdi zmdi-lock-outline"></i
                  ></label>
                  <input
                    type="password"
                    name="password_confirm"
                    id="password_confirm"
                    placeholder="Repeat your password"
                  />
                </div>
                <div class="form-group">
                  <label for="role"><i class="zmdi zmdi-email"></i></label>
                  <input
                    type="hidden"
                    name="role"
                    id="role"
                    placeholder=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="checkbox"
                    name="agree-term"
                    id="agree-term"
                    class="agree-term"
                  />
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signup"
                    id="signup"
                    class="form-submit"
                    value="Registtrasi"
                  />
                </div>
              </form>
            </div>
            <div class="signup-image">
              <figure>
                <img src="images/register.jpeg" alt="sing up image" />
              </figure>
          </div>
        </div>
      </section>
    </div>
</form>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
