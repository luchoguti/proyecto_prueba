<form class="form-horizontal" action="index.php?c=empleados&a=guardar_registro" method="post">
    <input type="hidden" name="txt_id" value="<?php echo ($data['idempledos']!=0)?$data['idempledos']:"0"; ?>">
    <fieldset>
    <!-- Form Name -->
    <legend>Registration</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Numero de Empleados</label>  
      <div class="col-md-4">
        <input name="text_num_control" type="text" placeholder="N.Empleados" class="form-control input-md" required="" value="<?php echo $data['numero_empleados'] ?>">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Nombre:</label>  
      <div class="col-md-4">
        <input name="txt_nombre_control" type="text" placeholder="Nombre" class="form-control input-md" required="" value="<?php echo $data['nombre'] ?>">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Apellido Paterno:</label>  
      <div class="col-md-4">
        <input  name="txt_ap_parteno" type="text" placeholder="Apellido Paterno" class="form-control input-md" required="" value="<?php echo $data['ap_paterno'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="year">Apellido Materno</label>
      <div class="col-md-4">
            <input  name="txt_ap_materno" type="text" placeholder="Apellido Materno" class="form-control input-md" required="" value="<?php echo $data['ap_materno'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="year">Edad:</label>
      <div class="col-md-4">
            <input  name="txt_edad" type="text" placeholder="Edad" class="form-control input-md" required="" value="<?php echo $data['edad'] ?>">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-md-4 control-label" for="sexo">Sexo:</label>
      <div class="col-md-4">
          <label class="radio-inline" style="bottom: 16px;">
              Masculino<input  name="rd_sexo" type="radio" value="Masculino" id="optionRadio1" class="form-control input-md">
          </label>
          <label class="radio-inline" style="bottom: 16px;">
              Femenino<input  name="rd_sexo" type="radio" value="Femenino" id="optionRadio2" class="form-control input-md">
          </label>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" for="departamento">Departamento</label>
        <div class="col-md-4">
          <select name="sel_departamento" class="form-control" required="">
            <option value="0"> -- Selecciona -- </option>
            <?php foreach ($query as $row):?>
            <option value="<?php echo $row['departid']; ?>"><?php echo $row['descripcion']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
    </div>
    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
      <div class="col-md-8">
        <button id="button1id" name="button1id" class="btn btn-success">Guardar</button>
      </div>
    </div>

    </fieldset>
</form>