<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD PDO</title>
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/myscripts.js"></script>
	</head>
	<body>
		<main>
				<header>
					<h1>Products</h1>
					<button onclick="openModal()">Add Product</button>
				</header>
				<section id="product-list">
					<div class="product">
							<img src="https://a-static.mlcdn.com.br/280x210/desktop-dell-vostro-vst-3268-a40m-7a-geracao-intel-core-i5-8gb-1tb-windows-10-pro-com-monitor-21-5/dell/cav3268w10p1801504br-p2/e02babafd6b9861e6bdd084bf2c8225f.jpg" alt="Computador Dell 6 Cores" width="150px" height="150px"/>
							<h3>Computador Dell 6 Cores</h3>
							<span>R$ 99,78</span>
					</div>
					<div class="product">
							<img src="https://a-static.mlcdn.com.br/280x210/desktop-dell-vostro-vst-3268-a40m-7a-geracao-intel-core-i5-8gb-1tb-windows-10-pro-com-monitor-21-5/dell/cav3268w10p1801504br-p2/e02babafd6b9861e6bdd084bf2c8225f.jpg" alt="Computador Dell 6 Cores" width="150px" height="150px"/>
							<h3>Computador Dell 6 Cores</h3>
							<span>R$ 99,78</span>
					</div>
					<div class="product">
							<img src="https://a-static.mlcdn.com.br/280x210/desktop-dell-vostro-vst-3268-a40m-7a-geracao-intel-core-i5-8gb-1tb-windows-10-pro-com-monitor-21-5/dell/cav3268w10p1801504br-p2/e02babafd6b9861e6bdd084bf2c8225f.jpg" alt="Computador Dell 6 Cores" width="150px" height="150px"/>
							<h3>Computador Dell 6 Cores</h3>
							<span>R$ 99,78</span>
					</div>
					<div class="product">
							<img src="https://a-static.mlcdn.com.br/280x210/desktop-dell-vostro-vst-3268-a40m-7a-geracao-intel-core-i5-8gb-1tb-windows-10-pro-com-monitor-21-5/dell/cav3268w10p1801504br-p2/e02babafd6b9861e6bdd084bf2c8225f.jpg" alt="Computador Dell 6 Cores" width="150px" height="150px"/>
							<h3>Computador Pc Completo Intel 4gb</h3>
							<span>R$ 99,78</span>
					</div>
					<div class="product">
					</div>
					<div class="product">
					</div>
				</section>
		</main>
		<div class="modal" id="modalAddProduct" onclick="closeModal(event)">
			<main>
				<h1>Add Product</h1>
				<form>
						<label>Photo:</label><br>
						<input class="full" type="text" placeholder="URL Photo..." name="photo" /><br>

						<label>Title:</label><br>
						<input class="full" type="text" placeholder="Product Title..." name="title" /><br>
						<label>Price:</label><br>
						<input type="text" placeholder="Price R$ 99,00..." name="price" /><br>

						<input type="submit" value="Add Product" />
				</form>
			</main>
		</div>
	</body>
</html>