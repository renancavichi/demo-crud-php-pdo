//const editProduct = require('../js/myscripts')

describe('the can', () => {
	beforeEach(() => {
		document.body.innerHTML = `
    <input id="newTodoInput" />
    <button id="addTodoBtn">Add todo</button>
    <ol id="todoList"></ol>
    `
		const body = document.querySelector('addTodoBtn')
		console.log(body)
	})

	test('has 12 ounces', () => {
		//editProduct(1, 2, 3, 4)
		expect(12).toBe(12)
	})

	test('has a sophisticated name', () => {
		expect(can.name).toBe('pamplemousse')
	})
})
