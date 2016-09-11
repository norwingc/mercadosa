<?php

class ProductosController extends BaseController {

	public function index()
	{
		$productos = Producto::all();
		return View::make('productos.index', compact('productos'));
	}

	public function add()
	{
		return View::make('productos.add');
	}

	public function save()
	{
		$producto           = new Producto();
		$producto->codigo    = Input::get('codigo');
		$producto->ubicacion = Input::get('ubicacion');
		$producto->contacto  = Input::get('contacto');


		if(Input::hasFile('path')) {
			Input::file('path')->move('img/producto/', Input::file("path")->getClientOriginalName());
			$producto->path = 'producto/'.Input::file("path")->getClientOriginalName();
		}

		$producto->save();

		Session::flash('message', 'Producto agregado');	
		return Redirect::back();
	}
}