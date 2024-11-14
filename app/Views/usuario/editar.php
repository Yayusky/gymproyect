<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <h2>Editar usuarios</h2>
           <?php //print_r ($usuario);?>    
            <form action="<?= base_url('usuario/actualizar/'); ?>" method="POST">
            <div class=""> 
            <input type="hidden" name="idUsuario" value="<?= $usuario[0]->idUsuario;?>">
            <label for="alias" class="form-label">Nombre de usuario</label>
            <input type="text" name="alias" class="form-control" id="alias" placeholder="nombre de usuario"  value="<?= $usuario[0]->alias?>">  
            <label for="nombre" class="form-label">nombre(s)</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $usuario[0]->nombre;?>">
            <label for="apellidoP" class="form-label">Apellido Paterno</label>
            <input type="text" name="apellidoP" class="form-control" id="apellidoP" value="<?= $usuario[0]->apellidoP;?>">
            <label for="apellidoM" class="form-label">Apellido Materno</label>
            <input type="text" name="apellidoM" class="form-control" id="apelldioM" value="<?=$usuario[0]->apellidoM;?>">
            <label for="cta" class="form-label">Contraseña</label>
            <input type="password" name="cta" class="form-control" id="cta" placeholder="Contraseña"  value="<?= $usuario[0]->cta;?>">
            <label for="tipo">Elige tipo de usuario:</label>
            <select id="tipo" name="tipo">
            <option value="0" <?= $usuario[0]->tipo == 0 ? 'selected  ' : ''; ?>>Admistrador</option>
             <option value="1" <?= $usuario[0]->tipo == 1 ? 'selected' : ''; ?>>Entrenador</option>
             <option value="2" <?= $usuario[0]->tipo == 2 ? 'selected' : ''; ?>>Socio</option>
             </select>
            <p>selecciona tu sexo:</p>
            <input type="radio" name="sexo"   id="sexoM" value="M" <?= $usuario[0]->sexo == 'M' ? 'checked' : ''; ?>>
            <label for="sexoM" >M</label>
            <input type="radio" name="sexo"  id="sexoF" value="F" <?= $usuario[0]->sexo == 'F' ? 'checked' : ''; ?>>
            <label for="sexoF">F</label>
            <input type="radio" name="sexo"  id="sexoO" value="O" <?= $usuario[0]->sexo == 'O' ? 'checked' : ''; ?>>
            <label for="sexoO">O</label>
            
            </div>
            <div>
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?= $usuario[0]->fechaNacimiento?>">
            </div>
            <div>
            <label for="telefonoM" class="form-label">Telefono Movil:</label>
            <input type="tel" id="telefonoM" name="telefonoM" placeholder="numero de telefono" value="<?=$usuario[0]->telefonoM?>">
            <label for="telefonoC" class="form-label">Telefono de casa:</label>
            <input type="tel" id="telefonoC" name="telefonoC" placeholder="numero de telefono" required value="<?=$usuario[0]->telefonoC?>">
            </div>
            <div>
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" id="correo" value="<?=$usuario[0]->correo;?>">
            <label for="curp" class="form-label">Curp: </label>
            <input type="text" name="curp" class="form-control" id="curp"   value="<?= $usuario[0]->curp; ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Actualizar">  
            </form>
         
        </div>
    </div>
</div>