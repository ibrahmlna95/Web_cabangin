<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CABANGIN</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid"><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="text-center mb-3">
            <h3 class="text-primary"><i class=></i>CABANGIN</h3></div>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{route('proseslogin')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input type="username" name="username" class="form-control" placeholder="Masukkan Username" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="">
                </div>
                <h2 class="text-center">
                <button type="submit" class="btn btn-lg btn-primary py-3 w-100 mb-4">SIGN IN</button></h3>
                <hr>
                <p class="text-center">Don't Have an Account? <a href="register">SIGN UP</a> Here!</p>
            </form>
        </div>
    </div>
</body>
</html>