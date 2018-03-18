<?php
  $this->load->database();
  $personas=$this->magenda->getper();
?>    
<div class="row" style="margin-left:5%; height:100%; width:90%;">
  <div class="col-sm-12">  
    <div class="row">
      <div class="col-sm-12" style="margin-left:0%; height: 100% margin-right: 0%; width:100%; ">
        <table class="table">
          <thead>
            <tr>
             <th style="text-align:center;">Nombre</th>
             <th style="text-align:center;">Apellido Paterno</th>
             <th style="text-align:center;">Apellido Materno</th>
             <th style="text-align:center;">RFC</th>
             <th style="text-align:center;">Telefono</th>
             <th style="text-align:center;">Email</th>
             <th style="text-align:center;">Domicilio</th>
           </tr>
          </thead>
          <tbody> 
          <?php
          foreach ( $personas as $persona) {
          # code...
          ?>  
            <form action="<?php echo base_url('index.php/welcome/accion'); ?>" method="post">
              <input type="hidden" name="id_p" value="<?php echo $persona['id_p']; ?>">
                <tr id="id" name="id" value="<?php echo $persona['id_p']; ?>">
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['nombre']; ?>"  class="form-control" >
                  </td>
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['app']; ?>" class="form-control" >
                  </td>
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['apm']; ?>"  class="form-control" >
                  </td>
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['rfc']; ?>" class="form-control" >
                  </td>
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['tel']; ?>" class="form-control" >
                  </td>
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['email']; ?>" class="form-control" >
                  </td>
                  <td style="text-align:center;">
                    <input type="text" value="<?php echo $persona['dom']; ?>" class="form-control" >
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <input type="submit" name="Update" value="Aceptar">                  
                  </td>
                  <td>
                    
                  </td>
                  <td>
                    <input type="submit" name="Update" value="Update">
                  </td>
                </tr>
            </form>
          </tbody>
          <?php
}
          ?>
        </table>
      </div>
    </div>
</div>
</div>
<!--
                     <form action="<?php//echo base_url('index.php/welcome/accion');  ?>" method="post">                
                          <div class="row" style="margin-left: 80%; margin-bottom: 1%">
                      
                            <div class="col-sm-12" >
                              
                            <a href="#" target="_self">
                            <button style="width:  30%" class="btn btn-info" value="Guardar" title="Guardar" name="opcion" type="submit">
                              <h6>Guardar</h6></button></a>
                            -->
                            <!--<input type="submit" name="guardar" value="Guardar">
                            <a href="#" target="_self">
                              <button style="width:  30%" class="btn btn-info" value="Cancelar" title="Cancelar" name="guardar" type="submit">
                                <h6>Cancelar</h6></button></a>
                          </div>
                          </div>
                        </form> -->                
                  
