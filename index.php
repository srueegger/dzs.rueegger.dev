<!doctype html>
<html lang="de" data-bs-theme="dark">
  <head>
    <?php require_once 'inc/head.php'; ?>
    <style>
      .hero {
        background-image: url('assets/img/dom.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 300px 0;
        overflow: hidden;
      }
      .hero h1 {
        font-size: 3rem;
        font-weight: 900;
      }
      .hero p {
        font-size: 1.5rem;
      }
      .carousel-item img {
        aspect-ratio: 9/16;
        width: 100%;
        height:700px;
        object-fit: contain;
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Dom Info für Lüc</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Startseite</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/?page=bilder">Bilder von Luc</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <?php
      $load_page = 'home';
      if (isset($_GET['page'])) {
        $load_page = $_GET['page'];
      }
      $load_page = htmlspecialchars($load_page);
      $load_page = preg_replace('/[^a-zA-Z0-9\-_]/', '', $load_page);
      include_once 'pages/' . $load_page . '.php';
      ?>
    </main>
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Startseite</a></li>
        <li class="nav-item"><a href="/?page=impressum" class="nav-link px-2 text-muted">Impressum</a></li>
        <li class="nav-item"><a href="/?page=datenschutz" class="nav-link px-2 text-muted">Datenschutz</a></li>
      </ul>
      <p class="text-center text-muted">&copy; 2024 Samuel Rüegger</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
