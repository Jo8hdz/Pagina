<?php namespace App\Controllers;

use App\Models\usuarioModel;
use App\Models\galeriaModel;
use App\Models\carruselModel;
use App\Models\infoModel;

class Admin extends BaseController {

	public function administrar() {			
			
		return view('admin_nav').view('admin_cont').view('admin_foot');				
	}

	//--------------------------------------------------------------------
	
	public function administrarCheck() {

		
		$request= \config\Services::request();

		$nombreU= $request->getPost('userName');
		$password= $request->getPost('password');
		$modelo = new usuarioModel($db);
		$user['user2'] = $modelo->find($nombreU);
		
		if($user2['nombre']==$nombreU ) {
			
			return view('admin_nav').view('admin_cont').view('admin_foot');
		}else {
			return view('index_nav').view('loginError_cont').view('index_foot');
		}
				
	}

	//--------------------------------------------------------------------

	public function crearUsuario()	{

		$request= \config\Services::request();

		$nombreU= $request->getPost('UserName');
		$password= $request->getPost('password');
		$password2= $request->getPost('password-repeat');
		$admin= $request->getPost('admin');
		
		if ($password!=NULL) {

			if ($password==$password2) {
				$data = [
					'idUsuario' => $nombreU,
					'nombreU' 	=> $nombreU,
					'password'  => $password,
					'admin'    	=> $admin
				];
				$modelo = new usuarioModel($db);		
				$modelo->insert($data);
		
				return view('admin_nav').view('creado_cont').view('admin_foot');
			}else {
				return view('admin_nav').view('newUserf_cont').view('admin_foot');
			}
			
		}else {		
			return view('admin_nav').view('newUser_cont').view('admin_foot');
		}
		
	}

	//--------------------------------------------------------------------

	public function datos()	{		

		return view('admin_nav').view('info_cont').view('admin_foot');
	}

	//--------------------------------------------------------------------

	public function galeria() {
		
		/*$request= \config\Services::request();
		$imagen=$request->getPost('imagen');
		
		$imgFile = $_FILES[$imagen]['name'];
		$tmp_dir = $_FILES[$imagen]['tmp_name'];
		$imgSize = $_FILES[$imagen]['size'];

		if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		} else {
			   //Ruta donde se fuardan
			$upload_dir = base_url()."/assets/img/"; // upload directory
   
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));//get image extension
   
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
   
			// rename uploading image
			$nombreArch = $imgFile.".".$imgExt;
   
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){
			   // Check file size '5MB'
			   if($imgSize < 5000000)    {
					move_uploaded_file($tmp_dir,$upload_dir.$nombreArch);
			   } else{
					$errMSG = "Sorry, your file is too large.";
			   }
			} else {
			   	$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}
		$data = [
			'nombre' => $nombreArch
		];*/

		$modelo = new galeriaModel($db);
		$indice['galeria'] = $modelo->findAll();
		//$modelo->insert($data);

		return view('admin_nav').view('pictures_cont',$indice).view('admin_foot');
	}

	//--------------------------------------------------------------------

	public function usuarios() {

		$modelo = new usuarioModel($db);
		$indice['usuarios'] = $modelo->findAll();

		return view('admin_nav').view('users_cont',$indice).view('admin_foot');
	}

	//--------------------------------------------------------------------

	public function carrusel() {

		$modelo = new carruselModel($db);
		$indice['carrusel'] = $modelo->findAll();

		return view('admin_nav').view('pictures2_cont',$indice).view('admin_foot');
	}

	//--------------------------------------------------------------------
	
	public function done(){

		$request= \Config\Services::request();

		$idE = $request->getPost('eliminarU');
		$idU = $request->getPost('actualizarU');
		$password= $request->getPost('password');
		$password2= $request->getPost('password-repeat');
		$admin= $request->getPost('permiso');

		$modelo = new usuarioModel($db);

		if ($idE != null) {			
			$modelo->delete($idE);
			return view('admin_nav').view('done_cont').view('admin_foot');
		}
		if ($idU!= null ) {
			$data = [
				'password' => $password,
				'admin'    => $admin
			];			
			$modelo->update($idU, $data);
			return view('admin_nav').view('done_cont').view('admin_foot');
		}
		
	}

	public function actualizados(){

		$request= \Config\Services::request();

		$email = $request->getPost('emailE');
		$telefono = $request->getPost('tel');
		$whatsapp= $request->getPost('what');
		$direccion= $request->getPost('direcc');
		$editor= $request->getPost('editor');
		$fotografo= $request->getPost('foto');
		$diseniador= $request->getPost('dise');

		$modelo = new infoModel($db);

		if ($email!= null ) {
			$data = [
				'emailStudio'	=> $email,
				'telefonoStudio'=> $telefono,
				'whatsapp' 		=> $whatsapp,
				'direccion' 	=> $direccion,
				'editor' 		=> $editor,
				'fotografo' 	=> $fotografo,
				'diseniador' 	=> $diseniador
			];			
			$modelo->update(1, $data);
			return view('admin_nav').view('infoS_cont').view('admin_foot');
		}
		
	}	

}
