<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Lista de Contatos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0 fs-5">
        <li class="nav-item me-3">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == "/" ?  "active" : ""; ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == "/listar" ? "active" : ""; ?>" href="/listar">Listar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $_SERVER['REQUEST_URI'] == "/cadastrar" ? "active" : ""; ?>" href="/cadastrar">Cadastrar</a>
        </li>
      </ul>
      <form class="d-flex" action="/buscar">
        <input class="form-control me-2" type="search" placeholder="Busca" aria-label="Search" name="search">
        <button class="btn btn-outline-info" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>