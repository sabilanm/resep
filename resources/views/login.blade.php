<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    {{-- <h1>Hello, world!</h1> --}}
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                  {{-- session alert --}}
                  @if(session()->has('gagal'))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              {{ session('gagal') }}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                  @endif
      
                  <h3 class="mb-5">Sign in</h3>
                  <form action="/masuk" method="POST">
                    @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Keterangan Surat Masuk" required>
                        <label for="username">Username</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Keterangan Surat Masuk" required>
                        <label for="password">Password</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                  </div>
                  <div class="justify-content-start mb-3">
                    <label>Belum punya akun? </label><a href="/register">Sign Up</a>
                  </div>
                </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>