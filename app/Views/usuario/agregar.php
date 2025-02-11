<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <h2>Agregar usuario</h2>
            <?= validation_list_errors()?>
            <form action="<?= base_url('usuario/insertar'); ?>" method="POST">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <div > 
            <label for="alias" class="form-label">Nombre de usuario</label>
            <input type="text" name="alias" class="form-control" id="alias" placeholder="nombre de usuario"  required value="<?= set_value('alias')?>">    
            <label for="nombre" class="form-label">Nombre(s)</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre"  required value="<?= set_value('nombre')?>">
            <label for="apellidoP" class="form-label">Apellido Paterno</label>
            <input type="text" name="apellidoP" class="form-control" id="apellidoP" placeholder="apellido paterno"  required value="<?= set_value('apellidoP') ?>">
            <label for="apellidoM" class="form-label">Apellido Materno</label>
            <input type="text" name="apellidoM" class="form-control" id="apelldioM" placeholder="apellido materno" required value="<?= set_value('apellidoM') ?>">
            <label for="cta" class="form-label">Contraseña</label>
            <input type="password" name="cta" class="form-control" id="cta" placeholder="Contraseña"  required value="<?= set_value('cta')?>">
            <label for="tipo">Elige tipo de usuario:</label>
            <select id="tipo" name="tipo">
            <option value="0">Admistrador</option>
             <option value="1">Entrenador</option>
             <option value="2">Socio</option>
             </select>
            <p>selecciona tu sexo:</p>
            <input type="radio" name="sexo"   id="sexoM" value='M' required>
            <label for="sexoM" >M</label>
            <input type="radio" name="sexo"  id="sexoF" value='F' required>
            <label for="sexoF">F</label>
            <input type="radio" name="sexo"  id="sexoO" value='O' required>
            <label for="sexoF">Otro</label>
            </div>
            <div>
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" required value="<?=set_value('fechaNacimineto') ?>">
            </div>
            <div>
            <label for="telefonoM" class="form-label">Telefono Movil:</label>
            <input type="tel" id="telefonoM" name="telefonoM" placeholder="numero de telefono" required value="<?=set_value('telefonoM') ?>">
            <label for="telefonoC" class="form-label">Telefono de casa:</label>
            <input type="tel" id="telefonoC" name="telefonoC" placeholder="numero de telefono" required value="<?=set_value('telefonC') ?>">
            </div>
            <div>
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" id="correo" placeholder="correo" required value="<?= set_value('correo') ?>">
            <label for="curp" class="form-label">Curp: </label>
            <input type="text" name="curp" class="form-control" id="curp" placeholder="curp" required value="<?= set_value('curp') ?>"> 
            </div>
            <input type="submit" class="btn btn-success" value="Agregar">   
            </form>
        </div>
    </div>
</div>
