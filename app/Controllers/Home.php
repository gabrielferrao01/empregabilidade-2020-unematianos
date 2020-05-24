<?php namespace App\Controllers;

use App\Models\CategoriasModel;

class Home extends BaseController
{
	protected $helpers = ['html'];

	public function index()
	{
		return view('inicial');
	}

	public function categorias(){
		$categorias = new CategoriasModel();
		$data = [
			'categorias'=>$categorias->getCategorias()
		];
		helper('html');
		return view('categorias',$data);
	}

	//--------------------------------------------------------------------

}
