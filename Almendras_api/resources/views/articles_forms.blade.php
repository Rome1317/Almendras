<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Management</title>

        <!-- Bootstrap CSS -->
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I"
        crossorigin="anonymous"
        />
        <!-- Link to css -->
        <link rel="stylesheet" href="{{asset('assets/css/header_footer.css')}}"/>
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
                <a href='/roles_management'>Roles</a>
                <a href='/articles_management'>Articles</a>
          </nav>

          <!-- Info -->
          <div class="info" id="info">
                <form action="{{route('create.articles')}}" method="POST" enctype="multipart/form-data">
                    <table class="table">

                        <tr>
                            <td>
                                <h4>New Article</h4>
                            </td>

                        </tr>
                        
                        <tr> 
                            <td>
                                  <label for="name">Name</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Name" name="name"
                                     value ="">
                            </td>
                        </tr>
                        <tr> 
                            <td>
                                  <label for="description">Description</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Description" name="description"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                  <label for="price">Price</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Price" name="price"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                  <label for="stock">Stock</label>
                            </td>
                            <td>
                                     <input type="text" class="form-control" placeholder="Stock" name="stock"
                                     value ="">
                            </td>
                        </tr>

                        <tr> 
                            <td>
                                <label for="image">Article image</label>
                            </td>
                            <td>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">

                            </td>
                        </tr>

                    
                    </table>

                    <div class='right'>

                        <button type="submit" class="btn" id="save">Add article</button>
                    </div>
         
                </form>
            </div>

            <!-- Info -->
            <div class="info" id="info">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table">

                        <tr>
                            <td>
                                <h4>Edit Article</h4>
                            </td>

                        </tr>

                        <tr> 
                            <td>
                                <label for="inlineFormCustomSelect" class="form-label ">Articles</label>
                            </td>
                            <td>
                                <select class="custom-select mr-sm-2 form-control bg-dark-x "  id="inlineFormCustomSelect">
                                  <option selected>Choose Article</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </td>
                        </tr>
                        
                    </table>

                    <div class='right'>

                        <button type="submit" class="btn" id="save">Edit article</button>
                    </div>

                        
                                        
                </form>
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
