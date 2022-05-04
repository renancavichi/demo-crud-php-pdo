<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CRUD PDO</title>
		<link rel="stylesheet" href="css/style.css" />
		<script>
			function openModal(){
				const modal = document.querySelector('#modalAddProduct')
				modal.style.display = 'flex'
			}
			function closeModal(event){
				if(event.target.id === 'modalAddProduct'){
					const modal = document.querySelector('#modalAddProduct')
				modal.style.display = 'none'
				}
			}
		</script>
	</head>
	<body>
		<main>
				<header>
					<h1>Products</h1>
					<button onclick="openModal()">Add Product</button>
				</header>
				<section id="product-list">
					<div class="product">
					</div>
					<div class="product">
					</div>
					<div class="product">
					</div>
					<div class="product">
					</div>
					<div class="product">
					</div>
					<div class="product">
					</div>
				</section>
		</main>
		<div class="modal" id="modalAddProduct" onclick="closeModal(event)">
			<main>
				<h1>Cadastrar Produto</h1>
			</main>
		</div>
	</body>
</html>