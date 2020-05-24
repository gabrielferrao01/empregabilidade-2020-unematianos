<?php namespace App\Controllers;

class Home extends BaseController
{
	protected $helpers = ['html'];

	public function index()
	{
		return view('inicial');
	}

	public function categorias(){
		helper('html');
		return view('categorias');
	}

	//--------------------------------------------------------------------

}
