<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    <h1>se connecter</h1>
    <div class="container">
    <form method="POST" action="{{ route('logine') }}">
        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="login" class="form-control" name="login" required/>
            <label class="form-label" for="form1Example1">Login</label>
          </div>

          <div data-mdb-input-init class="form-outline mb-4">
            <input type="password" id="password" class="form-control" name="password" required/>
            <label class="form-label" for="password">Password</label>
          </div>
        

      
    
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button>
    </form>
    </div> 
</body>
</html>

