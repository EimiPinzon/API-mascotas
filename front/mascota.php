<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets\img\favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>API MASCOTAS</title>
  </head>
  <body>
    <header>
      
      <div class="container">
        <div class="row">
          <div class="col-12">
            <img class="banner" src="assets\img\imgheader.png" alt="headermascotas">
          </div>
        </div>
      </div>

    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-12 formulario">

            <form action="back\guardar.php" method="post">
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="Status">Status</label required>
                  <select id="Status" name="Status" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="disponible">Disponible</option>
                    <option value="pendiente">Pendiente</option>
                    <option value="vendido">Vendido</option>
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="Categoria">Categoria</label>
                  <select id="Categoria" name="Categoria" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Raza pequeña">Raza pequeña</option>
                    <option value="Raza mediana">Raza mediana</option>
                    <option value="Raza grande">Raza grande</option>
                  </select>
                </div>
                
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="Tag">Tag</label>
                  <select id="Tag" name="Tag" class="form-control" required>
                    <option value="">Seleccione</option>
                    <option value="Hembra">Hembra</option>
                    <option value="Macho">Macho</option>
                  </select>
                </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Seleccione una imagen</label>
                    <input type="file" class="form-control-file" id="imagen" name="imagen" required>
                  </div>

              </div>

              <button class="btn btn-primary" type="submit">GUARDAR</button>
            </form>

          </div>
        </div>
      </div>
    </main>
    <footer>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>