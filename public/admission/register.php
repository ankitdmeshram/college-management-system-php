<?php 

include "../includes/common.php";

if(isset($_POST['register']))
{
    user_register();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register - College Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../css/style.css" />
  </head>

  <body>
    <section class="gs-log">
      <div class="container shadow pr-5 pb-5 pl-5">

        <div class="row">
          <div class="col">
            <div class="text-center">
            <h4 class="text-center" style="font-weight: 700; padding-bottom: 20px; padding-top: 40px; color :orange"> <?php  display_message(); ?></h4>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 border-r">


            <h2>Register</h2>
            <h5 class="pb-4">
                   please Register your account.
            </h5>

            <div class="row">
              <div class="col">
                <form action="" method="post">
                <div class="form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="Enter Your Name"
                    required
                    />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter Your Email"
                    required
                  />
                </div>
              </div>
            
            </div>

            <div class="row">
            
              <div class="col">
                <div class="form-group">
                  <input
                    type="text"
                    name="phone"
                    class="form-control"
                    placeholder="Enter Your Phone No."
                    required
                  />
                </div>
              </div>
            </div>

            

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input
                    type="password"
                    name="password"
                    class="form-control"
                    placeholder="Setup New Password"
                    required  
                  />
                </div>
              </div>
            </div>

            
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <input
                    type="password"
                    name="c_password"
                    class="form-control"
                    placeholder="Confirm Password"
                    required  
                  />
                </div>
              </div>
            </div>

           

            <div class="row">
              <div class="col">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="flexCheckChecked"
                    required
                  />
                  <label class="form-check-label" for="flexCheckChecked">
                   I am agree to Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  </label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="form-group">
                  <button
                    type="submit"
                    class="btn btn-warning text-white"
                    style="float: right"
                    name="register"
                  >
                    Create Account
                  </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <img
              src="https://brokod.github.io/assets/77628-website-launch.gif"
              class="img-fluid"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
