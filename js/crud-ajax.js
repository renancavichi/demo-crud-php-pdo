function loadProducts() {
	const url =
		'http://localhost/demo-crud-php-pdo/backend-ajax/select-all-product.php'
	fetch(url)
		.then(response => response.json())
		.then(products => {
			const productList = document.querySelector('#product-list')
			products.forEach(product => {
				let showProduct = `
        <div class="product">
            <a href="backend/delete-product.php?id=${product.id}">
              <div class="delete">
                <img src="img/icon-trash.svg" alt="Delete Product" width="15px" height="15px">
              </div>
            </a>
            <div class="edit" onclick="editProduct(
                ${product.id},
                '${product.photo}',
                '${product.title}',
                '${product.price}'
              )">
              <img src="img/icon-edit.svg" alt="Edit Product" width="15px" height="15px">
            </div>
            <img src="${product.photo}" alt="${product.title}" width="150px" height="150px"/>
            <h3>${product.title}</h3>
            <span>${product.price}</span>
          </div>
        `
				productList.innerHTML += showProduct
			})
		})
}
