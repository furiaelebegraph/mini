<?php
	Breadcrumbs::register('inicio', function ($breadcrumbs) {
	     $breadcrumbs->push('inicio', route('inicio'));
	});

	Breadcrumbs::register('lolcat', function ($breadcrumbs, $id) {
		$subcategoria = App\SubCate::findOrFail($id);
	    $breadcrumbs->parent('inicio');
	    $breadcrumbs->push($subcategoria->nombre, route('subcategoria', $subcategoria));
	});

	Breadcrumbs::register('producto', function ($breadcrumbs, $producto) {
	    $breadcrumbs->parent('lolcat', $producto->subcategoria);
	    $breadcrumbs->push($producto->nombre, route('detalle', $producto));
	});
?>