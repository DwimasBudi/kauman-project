<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin Kauman</title>
  <!---Custom CSS File--->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
  <div class="container-fluid col-4 mt-2" style="z-index: 9999;">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="z-index: 9999;">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError') || Cookie::has('loginLimit'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="z-index: 9999;">
      {{ session('loginError') }} 
      {{ Cookie::get('loginLimit') }} 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  </div>
  <div class="container">
    <div class="login form">
      <div class="row">
        <img src="{{ asset('img/logo.png') }}" alt="logo-kauman" style="max-width: 120px; max-height: auto; object-fit:cover; margin:0 auto;">
        <header>Admin Login</header>
      </div>
      
      
      <form action="login" method="POST">
        @csrf
        <input type="text" name="username" placeholder="username" @if (Cookie::has('loginLimit'))
        disabled
        @endif required>
        <input type="password" name="password" placeholder="password" @if (Cookie::has('loginLimit'))
        disabled
        @endif required>
        <input type="submit" class="button bg-primary" value="Login">
      </form>
    </div>
  </div>
</body>
</html>
