<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Notes</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    >
    <style>
      /* Reset dasar */
      html, body {
        height: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
      }

      .content-wrapper {
        flex: 1;
      }

      .footer {
        text-align: center;
        padding: 10px 0;
      }

      @media (max-width:995px){
        .image{
          display: none;
        }
        .get-started{
          justify-content: center;
        }
      }

    </style>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar bg-transparent">
      <div class="container-fluid">
        <div class="col-12 text-center">
          <a class="navbar-brand fw-bold fs-1">OnlineNotes</a>
        </div>
        <!-- Kolom kanan (Tombol Login) -->
        <div class="position-absolute top-0 end-0 p-3">
          <a href="" class="btn btn-primary">Login</a>
        </div>
      </div>
    </nav>

    <!-- Content -->
    <div class="content-wrapper">
      <div class="container mt-5">
        <div class="row">
          <!-- Image -->
          <div class="col-lg-4 image">
            <img
              src="{{ asset('image/notes.png') }}"
              alt="Notes Online"
              class="img-fluid"
            >
          </div>
          <!-- Text -->
          <div class="col-lg-8">
            <h2 class="main-text" style="font-size:80px">Take Your Notes And Write Something</h2>
            <div class="get-started" style="display:flex; justify-content: left">
              <a href="" class="btn btn-primary">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-transparent">
      <p>Created by Daffa And Ghirsan</p>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
