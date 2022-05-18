function editProduct(id, photo, title, price){
  const inputId = document.querySelector('#modalEditProduct input[name=id]')
  const inputPhoto = document.querySelector('#modalEditProduct input[name=photo]')
  const inputTitle = document.querySelector('#modalEditProduct input[name=title]')
  const inputprice = document.querySelector('#modalEditProduct input[name=price]')
  inputId.value = id
  inputPhoto.value = photo
  inputTitle.value = title
  inputprice.value = price
  openModal('#modalEditProduct')
}


function openModal(idModal) {
	const modal = document.querySelector(idModal)
	modal.style.display = 'flex'
}

function closeModal(event) {
	if (event.target.className === 'modal') {
		const modal = document.querySelector('.modal[style="display: flex;"]')
    modal.style.display = 'none'
	}
}
