<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registros</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> registros</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">principal<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formularioregistros.php">registro</a>
      </li>
    </ul>
  </div>
</nav>
    </header>
    <main>

    <div class="container text-purple">
              <div class="row justify-content-center mt-5">
                   <div class="col-4">

                   <form action="index.php" method="POST">
                   <div class="row g-3">
  <div class="col">
    <input type="text" class="form-control" placeholder="nombres" aria-label="nombres">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="apellidos" aria-label="apellidos">
  </div>
</div>
                     
    <label for="number" class="col-sm-2 col-form-label">cedula</label>
    <div class="col-sm-10">
      <input type=number class="form-control" id="number">
    </div>
  </div>
                       
                  <button type="submit" class="btn btn-primary btn-block"name=botonregistrar>registrar</button>
                </form>
              </div>
             </div>
           </div>


    </main>
    <footer>
    </footer>
</body>
</html>