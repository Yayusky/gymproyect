<?php

namespace App\Controllers;

class Socio extends BaseController
{
   
    protected $helpers = ['form'];

    public function ver()
    { $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');
        $socioM=model('SocioM');
        $data['socios']=$socioM->findAll();
        return view('head').
               view('menu',$data1).
               view('socio/ver',$data).
               view('footer');
    }
    public function agregar()
    {
        $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');
       return view('head').
              view('menu',$data1).
              view('socio/agregar').
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
            'alias'=>'required',
            'nombre'=>'required',
            'apellidoP'=>'required',
            'apellidoM'=>'required',
            'cta'=>'required',
            'estatura'=>'required',
            'peso'=>'required',
            'fechaNacimiento'=>'required',
            'telefonoM'=>'required',
            'telefonoC'=>'required',
            'correo'=>'required',
            'padecimientos'=>'required'

        ];
        
        $data=[
        "alias"=>$_POST['alias'],       
        "nombre"=> $_POST['nombre'],
        "apellidoP"=> $_POST['apellidoP'],
        "apellidoM"=>$_POST['apellidoM'],
        "cta"=>$_POST['cta'],
        "estatura"=>$_POST['estatura'],
        "peso"=>$_POST['peso'],
        "sexo"=>$_POST['sexo'],
        "fechaNacimiento"=>$_POST['fechaNacimiento'],
        "telefonoM"=>$_POST['telefonoM'],
        "telefonoC"=>$_POST['telefonoC'],
        "correo"=>$_POST['correo'],
        "padecimientos"=>$_POST['padecimientos']

        ];

           if(!$this->validate($rules)){
             return 
             view('head').
             view('menu').
             view('socio/agregar',[
                'validation'=> $this->validator
             ]).
             view('footer');
           }else{
            $socioM=model('SocioM');
            $socioM->insert($data);
            return redirect()->to(base_url('/socio'));    
           }

    }
    public function editar($idSocio)
    {
        $session=session();
        if($session->get('logged_in')!=true || $session->get('tipo')!=0){
             return redirect()->to(base_url('/login'));
        }
        $data1 ['nombre']=$session->get('alias');
        $socioM=model('SocioM');
        $data['idSocio']=$idSocio;
        $data['socio']=$socioM->where('idSocio',$idSocio)->findAll();
      return view('head').
             view('menu',$data1).
            view('socio/editar',$data).
            view('footer'); 
    }
    public function actualizar()
    {
        $socioM=model('SocioM');
        $idSocio=$_POST['idSocio'];
        $data=[
            "alias"=>$_POST['alias'],       
            "nombre"=> $_POST['nombre'],
            "apellidoP"=> $_POST['apellidoP'],
            "apellidoM"=>$_POST['apellidoM'],
            "cta"=>$_POST['cta'],
            "estatura"=>$_POST['estatura'],
            "peso"=>$_POST['peso'],
            "sexo"=>$_POST['sexo'],
            "fechaNacimiento"=>$_POST['fechaNacimiento'],
            "telefonoM"=>$_POST['telefonoM'],
            "telefonoC"=>$_POST['telefonoC'],
            "correo"=>$_POST['correo'],
            "padecimientos"=>$_POST['padecimientos']
        ];
        $socioM->set($data)->where('idSocio',$idSocio)->update();
        return redirect ()->to(base_url('/socio')) ;
    }
    public function eliminar($idSocio)
    {
        $socioM=model('SocioM');
        $socioM->delete($idSocio);
        return redirect()->to(base_url('/socio'));

    }
}
