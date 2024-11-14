<div class="container">
    <div class="row">
        <div class="col">
            <h1>Horarios</h1>
            <a href="<?= base_url('horarios/agregar/');?>" class="btn btn-success">Agregar</a>
        </div>
    </div>

<div class="row justify-content-center">
    <div class="col-auto table-responsive-sm" >
        <table class='table table-dark'>
            <thead>
                <th>Id horario</th>
                <th>Entrenador</th> 
                <th>Tipo de entrenamiento</th>      
                <th>Capacidad</th>
                <th></th>
            </thead>
            <tbody>
                    <?php foreach($horario AS $horarios):?>    
                    <tr>
                       
                        <td><?= $horarios->idHorario?></td>
                        <td><?= $horarios->idUsuario?></td>
                        <td><?=$horarios->tipoEn?></td>
                        <td><?=$horarios->capacidad?></td>
                        <td><a href="<?= base_url('horarios/editar/'.$horarios->idHorario);?>" class="btn btn-primary">Editar</a>
                        <a href="<?= base_url('horarios/eliminar/'.$horarios->idHorario);?>"class="btn btn-danger">Eliminar</a></td>
                     
                    </tr>
                    <?php endforeach ?>
             </tbody>
        </table>
    </div>
</div>
</div>