<?php namespace App\Controllers;

use App\Models\CategoriasModel;
use App\Models\CursosModel;

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

	public function cursos($categoria = '2'){
		$cursos = new CursosModel();
		$data = [
			'cursos' => $cursos->getCursos($categoria)
		];
		helper('html');
		return view('cursos', $data);
	}

	//--------------------------------------------------------------------

}
