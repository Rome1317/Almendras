<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almendras</title>

        <!-- Bootstrap CSS -->
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
        />
        <!-- Link to css -->
        <link rel="stylesheet" href="{{asset('assets/css/login.css')}}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab5a1a4d66.js" crossorigin="anonymous"></script>
        

    </head>

    <body class="bg-dark">

        <section>
          <div class="row g-0">
            <div class="col-lg-7 col-xl-7 d-none d-lg-block d-xl-block">
    
              <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active img-1 min-vh-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="font-weight-bold"></h5>
                      <a href="#" class="shadow text-decoration-none">Visit our home page</a>
                    </div>
                  </div>
                  <div class="carousel-item img-2 min-vh-100">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="font-weight-bold"></h5>
                      <a href="#" class="shadow text-decoration-none">Visit our home page</a>
                    </div>
                  </div>
                 <div class="carousel-item img-3 min-vh-100">
                   <div class="carousel-caption d-none d-md-block">
                     <h5 class="font-weight-bold"></h5>
                     <a href="#" class="text-decoration-none shadow">Visit our home page</a>
                   </div>
                 </div>
                 <div class="carousel-item img-4 min-vh-100">
                   <div class="carousel-caption d-none d-md-block">
                     <h5 class="font-weight-bold"></h5>
                     <a href="#" class="text-decoration-none shadow">Visit our home page</a>
                   </div>
                 </div>
                 <div class="carousel-item img-5 min-vh-100">
                   <div class="carousel-caption d-none d-md-block">
                     <h5 class="font-weight-bold"></h5>
                     <a href="#" class="text-decoration-none shadow">Visit our home page</a>
                   </div>
                 </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
              </div>
            </div>

            <div class="col-lg-5 col-xl-5 d-flex flex-column justify-content-around min-vh-100 " id="panel">


              <!-- Padding en dispositivos grandes a los lados, superior e inferior -->
              <div class="px-xl-5 pt-xl-3 px-3 pt-3 w-100 logo">
                <a href="http://127.0.0.1:5500/index.html">
                </a>       
              </div>

              <div class="px-xl-5 py-xl-2 p-4 w-100 align-self-center" id="login">

    
                <!-- Class of bootstrap text bold and margin -->
                <h1 class="text-center mb-3"> ¡Welcome Back!</h1>

                <form class="mb-3" action = "" method="post">

                  <!-- User -->
                  <div class="mb-2">

                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                    <input type="email" class="form-control bg-dark-x " placeholder="Enter Email" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <!-- Policy -->
                    <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                  </div>

                  <!-- Password-->
                  <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label font-weight-bold">Password</label>
                    <input type="password" class="form-control bg-dark-x " placeholder="Enter Password" id="exampleInputPassword1">
    
                    <!-- Link -->
                    <a href="#" id="pwHelp" class="form-text text-decoration-none">¿Forgot your password?</a>
                  </div>

                  <!-- Log in -->
                  <button type="submit" class="btn btn-primary w-100 mb-3 font-weight-bold">Log In</button>

                  <!-- Remember me -->
                  <div class=" form-check">

                    <input type="checkbox" class="form-check-input btn-outline-primary" id="exampleCheck1">
                    <label class="form-check-label font-weight-bold " for="exampleCheck1">Remember me</label>
                  </div>

                </form>
                <p class="font-weight-bold text-center text-muted">Or log in with</p>

                <!-- Buttons  -->
                <div class="d-flex justify-content-around butts">
                  <button type="submit" class="btn btn-outline-dark flex-grow-1 mr-2 font-weight-bold" > <i class="fab fa-google lead mr-2"></i> Google</button>
                  <button type="submit" class="btn btn-outline-dark flex-grow-1 ml-2 font-weight-bold" > <i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
                </div>
              </div>

              <div class="px-lg-5 py-lg-2 p-4 w-100 align-self-center d-none" id="register">

               <!-- Class of bootstrap text bold and margin -->
                <h1 class="text-center mb-3"> ¡Hello There!</h1>

                <form class="mb-1" action = "" method="post">

                  <!-- Email --> 
                  <div class="mb-1">

                    <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                    <input type="email" class="form-control bg-dark-x " placeholder="Enter Email" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <!-- Policy -->
                    <div id="emailHelp" class="form-text">We'll never share your information with anyone else.</div>
                  </div>

                  <!-- User -->
                  <div class="mb-3">

                    <label for="example" class="form-label font-weight-bold">Your Name</label>
                    <input type="text" class="form-control bg-dark-x " placeholder="Enter Your Name" id="example" aria-describedby="emailHelp">

                  </div>

                  <!-- User last name -->
                  <div class="mb-3">

                    <label for="example" class="form-label font-weight-bold">Your Lastname</label>
                    <input type="text" class="form-control bg-dark-x " placeholder="Enter Your Lastname" id="example" aria-describedby="emailHelp">
                  </div>

                  <!-- Password-->
                  <div class="mb-3">

                    <label for="Password" class="form-label font-weight-bold">Password</label>
                    <input type="password" class="form-control bg-dark-x " placeholder="Enter Password" id="Password">

                  </div>

                  <!-- Country-->
                  <div class="mb-3">

                    <label for="inlineFormCustomSelect" class="form-label font-weight-bold">Country</label>
                    <select class="custom-select mr-sm-2 form-control bg-dark-x "  id="inlineFormCustomSelect">
                      <option selected>Choose Country</option>
                        @foreach ($countries as $d)
                          <option class="text-black" value="{{ $d->ISO3 }}">{{ $d->name }}</option>
                        @endforeach
                    </select>
                  </div>

                  <!-- Log in -->
                  <button type="submit" class="btn btn-primary w-100 mb-3 font-weight-bold">Sign Up</button>

                  <!-- Remember me -->
                  <div class=" form-check">

                    <input type="checkbox" class="form-check-input btn-outline-primary" id="Check">
                    <label class="form-check-label font-weight-bold " for="Check">Remember me</label>
                  </div>

                </form>

                <p class="font-weight-bold text-center text-muted">Or log in with</p>

                <!-- Buttons  -->
                <div class="d-flex justify-content-around butts">
                  <button type="submit" class="btn btn-outline-dark flex-grow-1 mr-2 font-weight-bold" > <i class="fab fa-google lead mr-2"></i> Google</button>
                  <button type="submit" class="btn btn-outline-dark flex-grow-1 ml-2 font-weight-bold" > <i class="fab fa-facebook-f lead mr-2"></i> Facebook</button>
                </div>
              </div>


              <!-- Register -->
              <div class="text-center  px-xl-5 pt-xl-3 pb-xl-1 p-3 w-100 mt-auto" id="link-sign">
                <p class="d-inline-block mb-0 ">¿Don't have an account?</p> 
                <a class="font-weight-bold text-decoration-none" id="newuser" href="#">Create an account</a>
              </div>  

              <!-- Register -->
              <div class="text-center px-xl-5 w-100 mt-auto d-none" id="link-login">
               <p class="d-inline-block mb-0 ">¿Have an account already?</p> 
               <a class="font-weight-bold text-decoration-none " id="olduser" href="#"> Log in</a>
              </div>


            </div>

          </div>

        </section>


        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script
          src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
          integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
          integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
          crossorigin="anonymous"
        ></script>

        <!-- JavaScript -->
        <script src="{{asset('assets/js/login.js')}}"> </script>

    </body>
</html>
