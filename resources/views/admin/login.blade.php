<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    

    <title>Admin | Login</title>
  </head>
  <body>
    
    <style type="text/css">
        .box{
         width:500px;
         margin:0 auto;
         border:1px solid #ccc;
         margin-top: 150px;
        }
       </style>

       <br />
       <div class="container box">
           <br>
        <h3 align="center">Trinoq | Admin Login</h3><br />
     
     
        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
         <button type="button" class="close" data-dismiss="alert">×</button>
         <strong>{{ $message }}</strong>
        </div>
        @endif
     
        @if (count($errors) > 0)
         <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
          @endforeach
          </ul>
         </div>
        @endif
     
        <form method="POST" action="{{ route('checklogin') }}">
         @csrf
         <div class="form-group">
          <label>Enter Email</label>
          <input type="email" name="email" class="form-control" value="{{old('email')}}" />
         </div>
         <div class="form-group">
          <label>Enter Password</label>
          <input type="password" name="password" class="form-control" />
         </div>
         <div class="form-group">
          <input type="submit" name="login" class="btn btn-success btn-block" value="Login" />
         </div>
        </form>
       </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>