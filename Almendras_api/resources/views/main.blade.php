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
              <h3>Just what you needed</h3>
              <p>Jewerly & Watches Store.</p>
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
                  <h3>what makes our jewerly special?</h3>
                  <p>With your support you are promoting national trade and a 100% Mexican women's entrepreneurship.</p>
                  <p>We hope you enjoy your product as much as we enjoy bringing it to you.</p>
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

            @foreach ($articles as $articles)
                <form action="{{route('create.favorites', $articles->code)}}"  method='post'>
                    <div class="box">
                        <img src="{{asset($articles->image)}}" alt="">
                        <h3>{{ $articles->name }}</h3>
                        <h5>{{ $articles->description }}</h5>
                        <div class="price">MXN {{ $articles->price }}</div>
                        <button type="submit" class='btn'>add to cart</button>
                    </div>
                </form>

            @endforeach

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
