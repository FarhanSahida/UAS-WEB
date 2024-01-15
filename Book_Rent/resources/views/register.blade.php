<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="vh-90 bg-image" style="background-image: url('https://cdn.pixabay.com/photo/2016/01/27/04/32/books-1163695_1280.jpg');"">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-6 col-md-9 col-lg-7 col-xl-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
            <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h6 class="text-uppercase text-center mb-5">Registrasi Disini</h6>

              <form action="" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control my-3 py-2" id="username" name="username" >
                </div>

                <div class="form-outline mb-4">
                    <label for="password" class="form-label">Pasword</label>
                    <input type="password" class="form-control my-3 py-2" id="password" name="password">
                </div>

                <div class="form-outline mb-4">
                    <label for="phone" class="form-label">No HP</label>
                    <input type="text" class="form-control my-3 py-2" id="phone" name="phone">
                </div>

                <div class="form-outline mb-4">
                    <label for="address" class="form-label">Alamat</label>
                    <textarea class="form-control my-3 py-2" id="address" name="address" rows="5" required></textarea>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login"
                    class="fw-bold text-body"><u>Login here</u></a></p>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>