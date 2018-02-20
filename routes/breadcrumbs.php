<?php
	Breadcrumbs::register('inicio', function ($breadcrumbs) {
	     $breadcrumbs->push('inicio', route('inicio'));
	});

	Breadcrumbs::register('catalogo', function ($breadcrumbs, $subcategoria) {
	    $breadcrumbs->parent('inicio');
	    $breadcrumbs->push($subcategoria->nombre, route('subcategoria', $subcategoria->id));
	});

	Breadcrumbs::register('potato', function ($breadcrumbs, $producto) {
	    $breadcrumbs->parent('catalogo', $producto->subcategoria);
	    $breadcrumbs->push($producto->nombre, route('detalle', $producto));
	});
?>