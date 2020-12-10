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
   
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   
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

		$request= \config\Services::request();		

		$file = $this->request->getFile('userfile');

		$upload_dir = base_url()."/assets/img/";
		$name = $file->getName();
		$ext = $file->getClientExtension();
		$newName = $name.$ext;
		$file->move($upload_dir, $newName);


		$modelo = new galeriaModel($db);
		$indice['galeria'] = $modelo->findAll();

		//$idPhoto= $request->getPost('posA');
		//$password= $request->getPost('posD');

		//$data = [
			//'nombre' => $
		//];			
		$modelo->update($idPhoto, $data);
		

		
		
		//$modelo->insert($data);
