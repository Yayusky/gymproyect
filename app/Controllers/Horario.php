<?php

namespace App\Controllers;

class Horario extends BaseController
{   
    protected $helpers = ['form'];

    public function ver()
    {
        $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');
        $horarioM=model('HorarioM');
        $data['horario']=$horarioM->findAll();
        return view('head').
               view('menu',$data1).
               view('horario/ver',$data).
               view('footer');
    }
    public function agregar()
    {
        $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');
        $usuarioM=model('UsuarioM');
        $data['usuario']=$usuarioM->usuario();
       return view('head').
              view('menu',$data1).
              view('horario/agregar',$data).
              view('footer'); 
    }
    public function insertar()
    {
        $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');

        if (!$this->request->is('post'))
        {
            $this->ver();
        }
        $rules=[
            'horaI'=>'required',
            'horaF'=>'required',
            'tipoEn'=>'required',
            'capacidad'=>'required',
            'idUsuario'=>'required'
        ];
        
        $data=[
        "horaI"=>$_POST['horaI'],      
        "horaF"=> $_POST['horaF'],
        "tipoEn"=> $_POST['tipoEn'],
        "capacidad"=>$_POST['capacidad'],
        "idUsuario"=>$_POST['idUsuario'],
        ];

           if(!$this->validate($rules)){
             return 
             view('head').
             view('menu').
             view('horarios/agregar',[
                'validation'=> $this->validator
             ]).
             view('footer');
           }else{
            $horarioM=model('HorarioM');
            $horarioM->insert($data);
            return redirect()->to(base_url('/horarios'));    
           }

    }
    public function editar($idHorario)
    {
        $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');
        $horarioM=model('HorarioM');
        $data['idHorario']=$idHorario;
        $data['horario']=$horarioM->where('idHorario',$idHorario)->findAll();
        $usuarioM=model('UsuarioM');
        $data['usuario']=$usuarioM->usuario();
      return view('head').
             view('menu',$data1).
            view('horario/editar',$data).
            view('footer'); 
    }
    public function actualizar()
    {
        $horarioM=model('HorarioM');
        $idHorario=$_POST['idHorario'];
        $data=[
            "horaI"=>$_POST['horaI'],      
            "horaF"=> $_POST['horaF'],
            "tipoEn"=> $_POST['tipoEn'],
            "capacidad"=>$_POST['capacidad'],
            "idUsuario"=>$_POST['idUsuario'],
        ];
        $horarioM->set($data)->where('idHorario',$idHorario)->update();
        return redirect ()->to(base_url('/horarios')) ;
    }
    public function eliminar($idHorario)
    {
        $HorarioM=model('HorarioM');
        $HorarioM->delete($idHorario);
        return redirect()->to(base_url('/horarios'));

    }
}
