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
                <form action="{{route('create.roles')}}" method="POST" enctype="multipart/form-data">
                    <table class="table">

                        <tr>
                            <td>
                                <h4>New Role</h4>
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

                    
                    </table>

                    <div class='right'>

                        <button type="submit" class="btn" id="save">Add role</button>

                    </div>
         
                </form>
            </div>

            <!-- Info -->
            <div class="info" id="info">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="table">

                        <tr>
                            <td>
                                <h4>Edit Role</h4>
                            </td>

                        </tr>

                        <tr> 
                            <td>
                                <label for="inlineFormCustomSelect" class="form-label ">Roles</label>
                            </td>
                            <td>
                                <select class="custom-select mr-sm-2 form-control bg-dark-x "  id="inlineFormCustomSelect" onchange="">
                                  <option selected>Choose Role</option>
                                  @foreach ($roles as $d)
                                    <option class="text-black" value="{{ $d->id }}">{{ $d->name }}</option>
                                 @endforeach
                                </select>
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

                    
                    </table>

                    <div class='right'>

                        <button type="submit" class="btn delete-btn" id="save">Delete role</button>


                        <button type="submit" class="btn" id="save">Save changes</button>
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
