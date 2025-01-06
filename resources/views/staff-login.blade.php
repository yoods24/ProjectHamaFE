<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/stafflogin.css') }}">
</head>
<body>
  <a href="/"><img src="{{ asset('images/DokterHama-logo-mini.png') }}" alt="Logo" class="logo"></a>
    <div class="login-box login-form">
      <h2 class="text-center mb-4 text-white h5">STAFF LOGIN</h2>
      <form>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="username" autocomplete="off">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="password" autocomplete="off">
        </div>
        <div class="form-group form-check d-flex gap-20">
          <input type="checkbox" class="form-check-input" id="rememberMe">
          <label class="form-check-label text-white" for="rememberMe">Ingat saya</label>
          <a href="#" class="float-right forgot-txt">Forgot password</a>
        </div>
        <button type="submit" class="btn w-75 p-2 mx-auto btn-block btn-small">LOGIN</button>
      </form>
    </div>
  </body>
</html>