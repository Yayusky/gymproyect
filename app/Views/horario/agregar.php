<div class="row justify-content-center">
        <div class="col-auto">
            <h2>Agregar Horarios</h2>
            <?= validation_list_errors()?>
            <form action="<?= base_url('horarios/insertar'); ?>" method="POST">
                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <div > 
            <label for="horaI" class="form-label">Hora Inicio</label>
            <input type="time" name="horaI" class="form-control" id="horaI"  required value="<?= set_value('horaI')?>">
            <label for="horaF" class="form-label">Hora Finalizacion</label>
            <input type="time" name="horaF" class="form-control" id="horaF"   required value="<?= set_value('horaF')?>">    
            <label for="tipoEn" class="form-label">Tipo De entrenamiento : </label>
            <input type="text" name="tipoEn" class="form-control" id="tipoEn" placeholder="Tipo de entrenamiento"  required value="<?= set_value('tipoEn')?>">
            <label for="capacidad" class="form-label">Cantidad de participantes : </label>
            <input type="text" name="capacidad" class="form-control" id="capacidad" placeholder="Escribe el numero de total de participantes"  required value="<?= set_value('capacidad')?>">
            <label for="idUsuario">Elige el nombre del Entredador</label>
            <select id="idUsuario" name="idUsuario">
            <?php foreach ($usuario as $key):?>
            <option value="<?= $key-> idUsuario ?>"><?= $key-> nombre ?></option>
            <?php endforeach?>
             </select>
            </div>
            <input type="submit" class="btn btn-success" value="Agregar">   
            </form>
        </div>
    </div>
</div>
