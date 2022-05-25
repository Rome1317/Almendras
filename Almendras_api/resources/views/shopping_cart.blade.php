<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shopping Cart</title>

        <!-- Bootstrap CSS -->
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
        />
        <!-- Link to css -->
        <link rel="stylesheet" href="{{asset('assets/css/header_footer.css')}}"/>
        <link rel="stylesheet" href="{{asset('assets/css/shopping_cart.css')}}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab5a1a4d66.js" crossorigin="anonymous"></script>

    </head>

    <body>
  
        @include('header')

        <div class="container mt-4">

          <div class="modal-container">
          <div class="modal modal-close">
              <p class="close"><i class="far fa-times-circle"></i></p>
              <img src="" alt="">
              <div class="modal-textos">
                 
              </div>
            </div>
          </div>

          <header class="cart-main">
            <div class="title">
              <h2>Shopping cart</h2>
            </div>
          </header>
          <div id="main" class="main">
            <h2> Articles </h2>

            @foreach ($articles as $articles)
            <form action="{{route('delete.favorites',$articles->code)}}"  method='post'>
              <div class="course">
                <div class="descript">
                  <img class="image" src="{{asset($articles->image)}}"/>
                  <div class="text">
                    <h2>{{ $articles->name }}</h2>
                    <h3>{{ $articles->description }}</h3>
                  </div>
                </div>
              
                <div class="actions">
                  <h2>{{ $articles->price }} MX$</h2>
                  <button type="submit" class='btn'>Delete</button>
                </div>

              </div>
            </form>
            @endforeach

          </div>
          <div id="payment" class="payment">
              <h2>Total:</h2>
              <h3>{{$total}} MXN</h3> 
              <!-- <button class="btn" type="button"><i class="fab fa-paypal"></i></button> -->
              <div id="smart-button-container">
                <div style="text-align: center;">
                  <div id="paypal-button-container"></div>
                </div>
              </div>
            </div>
          <form action="{{route('create.orders')}}" method="post">
            <div id="payment" class="payment">
              <button type="submit" class="btn-pagar" id="cta">Pay here</button>
            </div>
          </form>
        
        </div>

 

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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src=""></script>
              
          <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>
          <script>
            function initPayPalButton() {
              paypal.Buttons({
                style: {
                  shape: 'rect',
                  color: 'silver',
                  layout: 'horizontal',
                  label: 'buynow',
                  tagline: true
                },
              
                createOrder: function(data, actions) {
                  return actions.order.create({
                    purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
                  });
                },
              
                onApprove: function(data, actions) {
                  return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                  });
                },
              
                onError: function(err) {
                  console.log(err);
                }
              }).render('#paypal-button-container');
            
            }
            initPayPalButton();
          </script>


    </body>
</html>
