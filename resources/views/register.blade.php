<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register User</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container-fluid"><br>
        <div class="col-md-4 col-md-offset-4">
            <div class="text-center mb-3">
            <h3 class="text-primary"><i class=></i>CABANGIN</h3></div>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="{{route('actionregister')}}" method="post">
            @csrf
                <div class="form-group">
                <label><i class="fa fa-user"></i> Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-user"></i> Admin</label>
                    <input type="text" name="admin" class="form-control" placeholder="" required="">
                </div>
                <div class="form-group">
                    <label><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="">
                </div>
                <h2 class="text-center">
                <button type="submit" class="btn btn-lg btn-primary py-3 w-100 mb-4"><i class="fa fa-user"></i> SIGN UP</button></h3>
                <hr>
                <p class="text-center">Have an Account? <a href="login">SIGN IN Here!</a></p>
            </form>
        </div>
    </div>
</body>
</html>