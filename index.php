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
				<button onclick="openModal('#modalAddProduct')">Add Product</button>
			</header>
			<section id="product-list">	
				<?php 
				require('backend/helpers/conectaBD.php');
				try{
					$stmt = $conn->prepare("SELECT * FROM products;");
					$stmt->execute();
					$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				} catch(PDOException $e) {
					echo "Erro ao buscar produtos no Banco de Dados: " . $e->getMessage();
				}
				?>
		
				<?php foreach($result as $product){ ?>
          <div class="product">
            <a href="backend/delete-product.php?id=<?php echo $product['id']; ?>">
              <div class="delete">
                <img src="img/icon-trash.svg" alt="Delete Product" width="15px" height="15px">
              </div>
            </a>
            <div class="edit" onclick="
            editProduct(
            <?php echo $product['id']; ?>,
            '<?php echo $product['photo']; ?>',
            '<?php echo $product['title']; ?>',
            '<?php echo $product['price']; ?>'
            )"><img src="img/icon-edit.svg" alt="Edit Product" width="15px" height="15px"></div>
            <img src="<?php echo $product['photo']; ?>" alt="<?php echo $product['title']; ?>" width="150px" height="150px"/>
            <h3><?php echo $product['title']; ?></h3>
            <span><?php echo $product['price']; ?></span>
          </div>
				<?php } ?>

			</section>
		</main>
		<div class="modal" id="modalAddProduct" onclick="closeModal(event)">
			<main>
				<h1>Add Product</h1>
				<form method="POST" action="backend/insert-product.php">
					<label>Photo:</label><br>
					<input class="full" type="text" placeholder="URL Photo..." name="photo" /><br>
					<label>Title:</label><br>
					<input class="full" type="text" placeholder="Product Title..." name="title" /><br>
					<label>Price:</label><br>
					<input type="text" placeholder="R$ 99,00..." name="price" /><br>
					<input type="submit" value="Add Product" />
				</form>
			</main>
		</div>
    <div class="modal" id="modalEditProduct" onclick="closeModal(event)">
			<main>
				<h1>Edit Product</h1>
				<form method="POST" action="backend/edit-product.php">
					<input type="hidden" name="id" value="" />
          <label>Photo:</label><br>
					<input class="full" type="text" placeholder="URL Photo..." name="photo" /><br>
					<label>Title:</label><br>
					<input class="full" type="text" placeholder="Product Title..." name="title" /><br>
					<label>Price:</label><br>
					<input type="text" placeholder="R$ 99,00..." name="price" /><br>
					<input type="submit" value="Editar Product" />
				</form>
			</main>
		</div>
	</body>
</html>