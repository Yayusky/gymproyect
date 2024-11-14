<div class="container">
    <div class="row">
        <div class="col">
            <h1>Usuarios</h1>
            <a href="<?= base_url('usuario/agregar/');?>" class="btn btn-success">Agregar</a>
        </div>
    </div>

<div class="row justify-content-center">
    <div class="col-auto table-responsive-sm" >
        <table class='table table-dark'>
            <thead>
                <th>Id usuario</th>
                <th>Nombre</th> 
                <th>Apellido</th>      
                <th></th>
            </thead>
            <tbody>
                    <?php foreach($usuario AS $usuarios):?>    
                    <tr>
                       
                        <td><?= $usuarios->idUsuario?></td>
                        <td><?= $usuarios->nombre?></td>
                        <td><?=$usuarios->apellidoP?></td>
                        <td><a href="<?= base_url('usuario/editar/'.$usuarios->idUsuario);?>" class="btn btn-primary">Editar</a>
                             <a href="<?= base_url('usuario/eliminar/'.$usuarios->idUsuario);?>"class="btn btn-danger">Eliminar</a></td>
                     
                    </tr>
                    <?php endforeach ?>
             </tbody>
        </table>
    </div>
</div>
</div>

