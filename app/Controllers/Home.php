<?php namespace App\Controllers;

use App\Models\clienteModel;
use App\Models\cotizacionModel;
use App\Models\galeriaModel;
use App\Models\carruselModel;
use App\Models\infoModel;

class Home extends BaseController{
	
	public function index()	{
		
		$modelo = new galeriaModel($db);
		$indice['galeria'] = $modelo->findAll();
		$modeloC = new carruselModel($db);		
		$indiceC['carrusel'] = $modeloC->findAll();

		return view('index_nav',$indice).view('index_cont',$indiceC).view('index_foot');

	}

	//--------------------------------------------------------------------

	public function cotizacion() {
		return view('index_nav').view('cot_cont').view('index_foot');
	}

	public function cotizacionEnviada() {

		$request= \config\Services::request();

		$email= $request->getPost('email');
		$nombre= $request->getPost('Nombre');
		$telefono= $request->getPost('telefono');
		$ubicacion= $request->getPost('ubicacion');
		$evento= $request->getPost('evento');
		$horario= $request->getPost('horario');
		$fechaE= $request->getPost('fechaE');
		$fechaA= date("Y-m-d");
		$detalles= $request->getPost('detalles');

		$data = [
			'email'     => $email,
			'nombre'    => $nombre,
			'telefono'  => $telefono
		];
		$data2 = [
			'ubicacion' => $ubicacion,
			'evento'    => $evento,
			'horario'   => $horario,
			'fechaE'    => $fechaE,
			'fechaA'    => $fechaA,
			'detalles'  => $detalles,
			'email'     => $email
		];

		$modelo = new clienteModel($db);		
		$modelo->insert($data);
		$modelo2 = new cotizacionModel($db);		
		$modelo2->insert($data2);

		return view('index_nav').view('cotDone_cont').view('index_foot');
	}

	public function acerca() {

		$modelo = new infoModel($db);
		$info['datos'] = $modelo->find(1);

		return view('index_nav').view('about_cont',$info).view('index_foot');
	}

	public function login() {
		return view('index_nav').view('login_cont').view('index_foot');
	}

	public function paquetes() {
		return view('index_nav').view('packs_cont').view('index_foot');
	}
}
