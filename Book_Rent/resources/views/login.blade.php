<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Buku | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body body class="vh-90 bg-image" style="background-image: url(https://cdn.pixabay.com/photo/2015/10/29/09/46/books-1012088_1280.jpg);"> 
    <div class="container mt-5 pt-5" >
        <div class="row">                
            <div class="col-md-5 m-auto">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="card border-0 shadow">
                    <div class="card-body"><br>
                        <h3 class="text-center">Rental Buku</h3>                            
                        <form action="" method="post">
                            @csrf
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control my-3 py-2" id="username" name="username" required>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control my-3 py-2" id="Password" name="password" required>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary form-control my-3 py-2">Login</button><br>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-2 mb-0">Don't have account? <a href="register" class="fw-bold text-body">Sign Up</a></p>
                            </div><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>