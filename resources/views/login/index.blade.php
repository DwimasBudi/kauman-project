<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form | CoderGirl</title>
  <!---Custom CSS File--->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
  <div class="container-fluid col-4 mt-2">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError') || session()->has('loginLimit'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }} 
      {{ session('loginLimit') }} 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  </div>
  <div class="container">
    <div class="login form">
      <header>Admin Login</header>
      <form action="login" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username" @if (session()->has('loginLimit'))
        disabled
        @endif >
        <input type="password" name="password" placeholder="password" @if (session()->has('loginLimit'))
        disabled
        @endif >
        <input type="submit" class="button" value="Login">
      </form>
    </div>
  </div>
</body>
</html>
