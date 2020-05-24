<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		helper('html');
		return view('inicial');
	}

	public function categorias(){
		helper('html');
		return view('categorias');
	}

	//--------------------------------------------------------------------

}
