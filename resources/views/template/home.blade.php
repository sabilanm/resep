<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resep</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar bg-dark navbar-dark md-5 py-3">
        <div class="container-xl">
          <a class="navbar-brand" href="#">
            RESEPKU
          </a>
          <a class="navbar-brand" href="/input">Tulis Resep</a>
          {{-- <a class="navbar-brand" href="#">Logout</a> --}}
          <form action="/logout" method="POST">
            @csrf
            <a href="#" class="navbar-brand"><button type="submit">Logout</button></a>
          </form>
        </div>
    </nav>
      
      <div class="container mt-5">
        <div class="row">
          <!-- ini isi -->
          @yield('isi')
          <!-- ini akhir isi -->
        </div>
      </div>

      <div class="mt-5 p-4 bg-dark text-white text-center">
        <footer>
            <p>Made By Sabila</p>
        </footer>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>