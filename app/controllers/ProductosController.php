<?php

class ProductosController extends BaseController {

	public function add()
	{
		return View::make('productos.add');
	}
}