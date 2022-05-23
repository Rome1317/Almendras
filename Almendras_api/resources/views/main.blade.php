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
        <link rel="stylesheet" href="{{asset('assets/css/header_footer.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab5a1a4d66.js" crossorigin="anonymous"></script>

    </head>

    <body>
  
        @include('header')

        <hr class='m-0'>

          <!-- home section starts  -->

          <section class="home" id="home">

          <div class="content">
              <h3>fresh coffee in the morning</h3>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
              <a href="#" class="btn">get yours now</a>
          </div>

          </section>

          <hr>

          <!-- home section ends -->

          
          <!-- about section starts  -->

          <section class="about" id="about">

          <h1 class="heading"> <span>about</span> us </h1>

          <div class="row">

              <div class="image">
                  <img src="{{asset('assets/images/5.png')}}" alt="">
              </div>

              <div class="content">
                  <h3>what makes our coffee special?</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
                  <a href="#" class="btn">learn more</a>
              </div>

          </div>

          </section>

          <!-- about section ends -->

          <hr>

          <!-- menu section starts  -->

          <section class="menu" id="menu">

            <h1 class="heading"> our <span>jewerly</span> </h1>

            <div class="box-container">

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99 </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99 </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="box">
                    <img src="{{asset('assets/images/3.png')}}" alt="">
                    <h3>tasty and healty</h3>
                    <div class="price">$15.99 </div>
                    <a href="#" class="btn">add to cart</a>
                </div>


            </div>

          </section>



        @include('footer')


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


    </body>
</html>
