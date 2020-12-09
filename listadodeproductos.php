
<div class="container fondo ">
<h1 class=" justify-content-center mt-5" >FORMULARIO DE REGISTRO PRODUCTOS</h1>

<form class="fondo" action="registrarproductos.php" method="POST">

  <div class="form-group mt-5 row justify-content-center">

  <label for="codigo" class="col-sm-2 col-form-label justify-content-center mt-4">CODIGO DEL PRODUCTO</label>
    <div class="col-sm-6">
      <input type="number" class="form-control mt-4"  placeholder="codigo" name="codigo">
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="text" class="col-sm-2 col-form-label mt-4 justify-content-center">NOMBRE DEL PRODUCTO</label>
    <div class="col-sm-6">
      <input type="name" class="form-control mt-4" placeholder="nombre" name="nombre">
    </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="precio" class="col-sm-2 col-form-label justify-content-center">PRECIO DEL PRODUCTO</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" placeholder="precio" name="precio">
    </div>
  </div>

  <div class="form-group row justify-content-center">
    <label for="descripcion" class="col-sm-2 col-form-label ">DESCRIPCION DEL PRODUCTO </label>
    <div class="col-sm-6">
        <textarea class="form-control" name="descripcion" placeholder="breve descripcion" rows="3"></textarea>
      </div>
  </div>
  <div class="form-group row justify-content-center">
    <label for="foto" class="col-sm-2 col-form-label ">IMAGEN DEL PRODUCTO </label>
    <div class="col-sm-6">
    <input type="text" class="form-control" placeholder="URL imagen" name="foto">
      </div>
  </div>

     
    <div class="row justify-content-center">
      <legend class="col-form-label col-sm-2 pt-0 ">marca</legend>
      <div class="col-sm-6">
        <div class="form-check ">
          <input class="form-check-input " type="radio" name="marca"  value="airydress" checked >
          <label class="form-check-label " for="gridRadios1">
            airydress
          </label>
        </div>
        <div class="form-check justify-content-center">
          <input class="form-check-input " type="radio" name="marca"  value="dafiti">
          <label class="form-check-label " for="gridRadios2">
            dafiti
          </label>
        </div>
        <div class="form-check justify-content-center">
          <input class="form-check-input " type="radio" name="marca"  value="CAMTY">
          <label class="form-check-label " for="gridRadios2">
            CAMTY
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="marca"  value="ever-pretty">
          <label class="form-check-label" for="gridRadios2">
            ever-pretty
          </label>
          </div>

          

  <div class="form-group row justify-content-center">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary  btn-block mt-5" name="boton">registrar</button>
    </div>
  </div>

</div>
</form>

</div>



</div>
</main>
<footer>

</footer>    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>