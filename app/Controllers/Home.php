<?php namespace App\Controllers;

use App\Models\CategoriasModel;
use App\Models\CursosModel;

class Home extends BaseController
{
	protected $helpers = ['html'];

	public function index()
	{
		echo view('layout/topo');
		echo view('inicial');
		echo view('layout/footer');
	}

	public function categorias(){
		$categorias = new CategoriasModel();
		$data = [
			'categorias'=>$categorias->getCategorias()
		];

		echo view('layout/topo');
		echo view('aprender/categorias', $data);
		echo view('layout/footer');
	}

	public function cursos($categoria = '2'){
		$cursos = new CursosModel();
		$data = [
			'cursos' => $cursos->getCursos($categoria)
		];
		echo view('layout/topo');
		echo view('aprender/cursos', $data);
		echo view('layout/footer');
	}

	public function ensinar(){
		echo view('layout/topo');
		echo view('ensinar/ensinar');
		echo view('layout/footer');
	}
	//--------------------------------------------------------------------

}
