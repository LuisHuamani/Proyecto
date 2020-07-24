<html>
<head>
    <title>Productos</title>
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>	
	<div class="wrap">
		<h1>Escoge un producto</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="procesadores">Procesadores</a>
				<a href="#" class="category_item" category="graficas">Graficas</a>
				<a href="#" class="category_item" category="placas">Placas</a>
				<a href="#" class="category_item" category="ram">RAM</a>
				<a href="#" class="category_item" category="almacenamiento">Almacenamiento</a>
				<a href="#" class="category_item" category="productividad">Pgm. de Productividad</a>
				<a href="#" class="category_item" category="edicion">Pgm. de Edicion</a>
				<a href="#" class="category_item" category="recargas">Tarjetas de recarga</a>
				<a href="#" class="category_item" category="licencias">Licencias</a>
			</div>
			<section class="products-list">
				<div class="product-item" category="procesadores">
					<img src="./img/productos/AMD Ryzen 3950x.png" alt="" >
					<a href="#">AMD Ryzen 9 3950x</a>
				</div>
				<div class="product-item" category="graficas">
					<img src="./img/productos/Aorus RTX 2080ti.png" alt="" >
					<a href="#">Aorus RTX 2080ti</a>
				</div>
				<div class="product-item" category="placas">
					<img src="./img/productos/Aorus z490 xtreme waterforce.png" alt="" >
					<a href="#">Aorus z490 xtreme waterforce </a>
				</div>
				<div class="product-item" category="ram">
					<img src="./img/productos/Corsair dominator platiniun.png" alt="" >
					<a href="#">Corsair Dominator Platinum RGB DDR4 32 GB (4x16) </a>
				</div>
				<div class="product-item" category="almacenamiento">
					<img src="./img/productos/Corsair MP600.png" alt="" >
					<a href="#">M.2 Corsair MP600 </a>
				</div>
				<div class="product-item" category="productividad">
					<img src="./img/productos/Adobe After Effects.png" alt="" >
					<a href="#">Adobe After Effects</a>
				</div>
				<div class="product-item" category="edicion">
					<img src="./img/productos/Adobe Photoshop.png" alt="" >
					<a href="#">Adobe Photoshop</a>
				</div>
				<div class="product-item" category="recargas">
					<img src="./img/productos/Steam $15.png" alt="" >
					<a href="#">Steam $15</a>
				</div>
				<div class="product-item" category="licencias">
					<img src="./img/productos/Licencia de Windows 10 pro.png" alt="" >
					<a href="#">Licencia Windows 10 pro</a>
				</div>
			</section>
		</div>
	</div>

</body>
</html>