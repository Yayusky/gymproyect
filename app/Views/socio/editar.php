<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <h2>Editar usuarios</h2>
           <?php //print_r ($usuario);?>    
            <form action="<?= base_url('socio/actualizar/'); ?>" method="POST">
            <div class=""> 
            <input type="hidden" name="idSocio" value="<?= $socio[0]->idSocio;?>">
            <label for="alias" class="form-label">Nombre de usuario</label>
            <input type="text" name="alias" class="form-control" id="alias" placeholder="nombre de usuario"  value="<?= $socio[0]->alias?>">  
            <label for="nombre" class="form-label">nombre(s)</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $socio[0]->nombre;?>">
            <label for="apellidoP" class="form-label">Apellido Paterno</label>
            <input type="text" name="apellidoP" class="form-control" id="apellidoP" value="<?= $socio[0]->apellidoP;?>">
            <label for="apellidoM" class="form-label">Apellido Materno</label>
            <input type="text" name="apellidoM" class="form-control" id="apelldioM" value="<?=$socio[0]->apellidoM;?>">
            <label for="apellidoM" class="form-label">Apellido Materno</label>
            <input type="text" name="apellidoM" class="form-control" id="apelldioM" value="<?=$socio[0]->apellidoM;?>">
            <label for="estatura" class="form-label">Estatura: </label>
            <input type="text" name="estatura" class="form-control" id="estatura" value="<?=$socio[0]->estatura;?>">
            <label for="peso" class="form-label">Peso: </label>
            <input type="text" name="peso" class="form-control" id="peso" value="<?=$socio[0]->peso;?>">
            <label for="cta" class="form-label">Contraseña</label>
            <input type="password" name="cta" class="form-control" id="cta" placeholder="Contraseña"  value="<?= $socio[0]->cta;?>">
            <p>selecciona tu sexo:</p>
            <input type="radio" name="sexo"   id="sexoM" value="M" <?= $socio[0]->sexo == 'M' ? 'checked' : ''; ?>>
            <label for="sexoM" >M</label>
            <input type="radio" name="sexo"  id="sexoF" value="F" <?= $socio[0]->sexo == 'F' ? 'checked' : ''; ?>>
            <label for="sexoF">F</label>
            <input type="radio" name="sexo"  id="sexoO" value="O" <?= $socio[0]->sexo == 'O' ? 'checked' : ''; ?>>
            <label for="sexoO">O</label>
            
            </div>
            <div>
            <label for="fechaNacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?= $socio[0]->fechaNacimiento?>">
            </div>
            <div>
            <label for="telefonoM" class="form-label">Telefono Movil:</label>
            <input type="tel" id="telefonoM" name="telefonoM" placeholder="numero de telefono" value="<?=$socio[0]->telefonoM?>">
            <label for="telefonoC" class="form-label">Telefono de casa:</label>
            <input type="tel" id="telefonoC" name="telefonoC" placeholder="numero de telefono" required value="<?=$socio[0]->telefonoC?>">
            </div>
            <div>
            <label for="correo" class="form-label">Correo Electronico</label>
            <input type="text" name="correo" class="form-control" id="correo" value="<?=$socio[0]->correo;?>">
            <label for="padecimientos" class="form-label">Padecimientos: </label>
            <input type="text" name="padecimientos" class="form-control" id="padecimientos"   value="<?= $socio[0]->padecimientos; ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Actualizar">   
            </form>
         
        </div>
    </div>
</div>