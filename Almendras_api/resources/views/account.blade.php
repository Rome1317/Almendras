<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Account</title>

        <!-- Bootstrap CSS -->
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
        />
        <!-- Link to css -->
        <link rel="stylesheet" href="{{asset('assets/css/header_footer.css')}}"/>

        <!-- Link to css -->
        <link rel="stylesheet" href="{{asset('assets/css/account.css')}}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <script src="https://kit.fontawesome.com/ab5a1a4d66.js" crossorigin="anonymous"></script>

    </head>

    <body>
  
        @include('header')

        <div class="container mt-4">

          <!-- Navigation -->
          <nav class="menu">
                  <button onclick="location.href=''; ?>'">Log out</button>
          </nav>

            <!-- Profile Description -->
            <section class="about">
                <div class="description">
                    <div class="text-container">
                        <p>Hola, Rome</p> 
                    </div>
                </div>
            </section>
                           
            <!-- Info -->
            <div class="info" id="info">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table">

                        <tr>
                            <td>
                                <h4>Personal Information</h4>
                            </td>

                        </tr>
                        
                        <tr> 
                            <td>
                                  <label for="validatsionCustom01">Name</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Name" name="name"
                                     value ="">
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                  <label for="validatsionCustom01">Lastname</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Lastname" name="lastname"
                                     value ="">
                            </td>
                        </tr>

                        
                        <tr>
                            <td>
                                <h4>Shipping Address</h4>
                            </td>

                        </tr>
                        
                        <tr> 
                            <td>
                                  <label for="validatsionCustom01">Calle</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Calle" name="calle"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                  <label for="validatsionCustom01">CP</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="CP" name="cp"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                  <label for="validatsionCustom01">State</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="State" name="state"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                  <label for="validatsionCustom01">Phone</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Phone" name="phone"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                <label for="inlineFormCustomSelect" class="form-label ">Country</label>
                            </td>
                            <td>
                                <select class="custom-select mr-sm-2 form-control bg-dark-x "  id="inlineFormCustomSelect">
                                  <option selected>Choose Country</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </td>
                        </tr>

                    
                    </table>
                    
                    <div class="right">
                        <button type="submit" class="btn" id="save">Save changes</button>
                    </div>  
                                   
                </form>
            </div>
                                   
            <div class="text">
                <p>Pedidos</p>
            </div>
                                   
            <ul id="autoWidth" class="cs-hidden">
                                   
                <li class="item-a">
                    <div class="box-1">
                        <p class="number">1</p>
                        <p class="heading">#1235667</p>
                        <p class="details">1 collar, 2 rings</p>
                    </div>
                </li>
                
            </ul>
    
                  
          </div>

        
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


    </body>
</html>
