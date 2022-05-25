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
        <div class="row">
          <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <img class="navbar-brand" src="assets/img/favicon.png"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="mascotas.php">Ver mascotas</a>
                  <a class="nav-item nav-link" href="mascota.php">Añadir <span class="sr-only">(current)</span></a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>

    </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 espaciador">
                        <div class="card-deck" id="tarjetasMascotas" name="tarjetasMascotas">
                        </div>
                    </div>    
                </div>
            </div>
        </main>
    <footer>

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <form action="http://localhost/API-mascotas/back/public/editar/" method="put">
                <input style="display:none" type="input" name="idModal" id="idModal" readonly">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombreModal" name="nombreModal" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="Status">Status</label required>
                        <select id="statusModal" name="statusModal" class="form-control" required>
                        <option value="">Seleccione</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="Vendido">Vendido</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                            <label for="Categoria">Categoria</label>
                            <select id="categoriaModal" name="categoriaModal" class="form-control" required>
                            <option value="">Seleccione</option>
                            <option value="Raza pequeña">Raza pequeña</option>
                            <option value="Raza mediana">Raza mediana</option>
                            <option value="Raza grande">Raza grande</option>
                            </select>
                        </div>
                    <div class="col-md-6 mb-3">
                        <label for="Tag">Tag</label>
                        <select id="tagModal" name="tagModal" class="form-control" disabled>
                        <option value="">Seleccione</option>
                        <option value="Hembra">Hembra</option>
                        <option value="Macho">Macho</option>
                        </select>
                    </div>


                </div>
            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="location.reload()" data-dismiss="modal">Close</button>
                    <button type="button" onclick="actualizarMascota()" class="btn btn-primary">GUARDAR</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        fetch("http://localhost/API-mascotas/back/public/mascotas")
            .then(function (result) {

                if (result.ok) {
                    return result.json();
                }
            })
            .then(function(data){

                let tarjetas;

                for(var i in data){

                    let tarjeta="<div class='card'>"
                    tarjeta+="<img src='./assets/img/kaia.jpg' class='card-img-top' alt='...'>"
                    tarjeta+="<div class='card-body'>"
                    tarjeta+="<h5 class='card-title'>"+data[i].nombre.toString()+"</h5>"
                    tarjeta+="<h6 class='card-title'>CATEGORIA:</h6>"
                    tarjeta+="<p class='card-text'>"+data[i].categoria.toString()+"</p>"
                    tarjeta+="<button data-toggle='modal' data-target='#exampleModal' onclick='infoMascota("+data[i].id.toString()+")'>Editar</button>"
                    tarjeta+="<button class='btnEliminar' onclick=eliminar("+data[i].id.toString()+",location.reload())>Eliminar</button>"
                    tarjeta+="</div>"
                    tarjeta+="</div>"
                    tarjetas+=tarjeta

                }

                document.getElementById("tarjetasMascotas").innerHTML=tarjetas;
            })
            
            
        
    </script>


    <!-- Optional JavaScript -->
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./mascota.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>