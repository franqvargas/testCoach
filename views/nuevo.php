<div class="row" style="margin-left:5%; height:100%; width:70%;">
  <div class="col-ms-12">
    <div class="row">
<div class="row" style="margin-top:0%; margin-left:15%; margin-right:15%; margin-bottom:19%; width:70%;">
        <legend>
          <h3>AGREGAR UNA PERSONA</h3>
        </legend>
      </div>
    </div>
    <form action="<?php echo base_url('index.php/welcome/agregar');  ?>" method="post">
      <div class="row" style="padding-top:5%;padding-left:1%; padding-bottom:10%;">
        <div class="col-md-2" >
          <label for="nim">Nombre:</label>
          <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="col-md-2" >
          <label for="app">A.Paterno:</label>
          <input type="text" class="form-control" id="app" name="app">
        </div>
        <div class="col-md-2" >
          <label for="apm">A.Materno:</label>
          <input type="text" class="form-control" id="apm" name="apm">
        </div>
        <div class="col-md-2" >
          <label for="rfc">RFC:</label>
          <input type="text" class="form-control" id="rfc" name="rfc">
        </div>
        <!-- AQUI NUEVOS CAMPOS -->
        <div class="col-md-2" >
          <label for="tel">Telefono:</label>
          <input type="text" class="form-control" id="tel" name="tel">
        </div>
        <div class="col-md-2" >
          <label for="email">E-mail:</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6" >
          <label for="dom">Domicilio:</label>
          <input type="text" class="form-control" id="dom" name="dom">
        </div>
      </div>
      <div class="row" style="margin-bottom:15%">
        <div class="col-md-4" style="text-align:center; margin-left:15%">
          <button class="btn btn-question" value="Guardar" title="Guardar" name="guardar" style="width:30%;" type="submit">
            <h5>Guardar</h5>
          </button>
          <!--<input type="submit" name="guardar" value="Guardar">-->
        </div>
        <div class="col-md-4" style="text-align:center;">
          <a href="#" target="_self">
            <button class="btn btn-info" value="Cancelar" title="Cancelar" name="guardar" style="width:30%;">
              <h5>Cancelar</h5>
            </button>
          </a>
        </div>
      </div>
    </form>
  </div>
</div>
