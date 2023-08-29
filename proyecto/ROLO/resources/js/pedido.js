var cartItems = JSON.parse(localStorage.getItem('cartItems'));
var cartTableBody = document.getElementById('cartTableBody');

function removeFromCart(index) {
    cartItems.splice(index, 1);
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
    generateCartItemsTable();
}

function generateCartItemsTable() {
    cartTableBody.innerHTML = '';

    if (cartItems && cartItems.length > 0) {
        cartItems.forEach(function (product, index) {
            var row = document.createElement('tr');

            var productName = document.createElement('td');
            productName.textContent = product.nombre;
            row.appendChild(productName);

            var productPrice = document.createElement('td');
            productPrice.textContent = '$' + product.precio;
            row.appendChild(productPrice);

            var quantityCell = document.createElement('td');

            var decreaseButton = document.createElement('button');
            decreaseButton.textContent = '-';
            decreaseButton.classList.add('btn', 'btn-warning', 'btn-sm', 'fw-bold', 'm-1'); // Agrega las clases de Bootstrap
            decreaseButton.addEventListener('click', function () {
                decreaseQuantity(index);
            });
            quantityCell.appendChild(decreaseButton);

            var quantityText = document.createElement('span');
            quantityText.classList.add('bg-brown');
            quantityText.textContent = product.cantidad || 1; // Verificación de la propiedad cantidad
            quantityText.classList.add('fw-bold'); // Agrega la clase de Bootstrap para negrita
            quantityCell.appendChild(quantityText);


            var increaseButton = document.createElement('button');
            increaseButton.textContent = '+';
            increaseButton.classList.add('btn', 'btn-warning', 'btn-sm', 'fw-bold', 'm-1'); // Agrega las clases de Bootstrap
            increaseButton.addEventListener('click', function () {
                increaseQuantity(index);
            });
            quantityCell.appendChild(increaseButton);

            row.appendChild(quantityCell);


            var removeButtonCell = document.createElement('td');
            var removeButton = document.createElement('button');
            removeButton.classList.add('btn', 'btn-danger', 'btn-sm');
            removeButton.innerHTML = '<i class="fa-solid fa-trash" style="color: #ffffff;"></i>';
            removeButton.addEventListener('click', function () {
                pedidoDelete(index);
            });
            removeButtonCell.appendChild(removeButton);
            row.appendChild(removeButtonCell);

            cartTableBody.appendChild(row);
        });

        var totalPrice = cartItems.reduce(function (acc, product) {
            return acc + (product.precio * (product.cantidad ||
                1)); // Verificación de la propiedad cantidad
        }, 0);

        var totalRow = document.createElement('tr');

        var totalLabelCell = document.createElement('td');
        totalLabelCell.textContent = 'Total';
        totalLabelCell.setAttribute('colspan', '1');
        totalLabelCell.classList.add('fw-bold');
        totalRow.appendChild(totalLabelCell);
        var totalPriceCell = document.createElement('td');
        totalPriceCell.textContent = '$' + totalPrice.toFixed(2);
        totalRow.appendChild(totalPriceCell);
        cartTableBody.appendChild(totalRow);

        var finishPurchaseButton = document.createElement('button');
        finishPurchaseButton.textContent = 'Finalizar Compra';
        finishPurchaseButton.classList.add('btn', 'btn-warning', 'btn-lg', 'mt-3', 'fw-bold');
        finishPurchaseButton.addEventListener('click', function () {
        });

        // Crear una nueva fila para el botón y agregarlo a la tabla
        var buttonRow = document.createElement('tr');
        var buttonCell = document.createElement('td');
        buttonCell.setAttribute('colspan', '2'); // Colocar el botón en la celda que abarque dos columnas (Producto y Precio)
        buttonCell.appendChild(finishPurchaseButton);
        buttonRow.appendChild(buttonCell);
        cartTableBody.appendChild(buttonRow);

    } else {
        var emptyRow = document.createElement('tr');
        var emptyMessage = document.createElement('td');
        emptyMessage.setAttribute('colspan', '4');
        emptyMessage.textContent = 'No hay productos en el carrito';
        emptyRow.appendChild(emptyMessage);
        cartTableBody.appendChild(emptyRow);
    }
}

function decreaseQuantity(index) {
    if (cartItems[index].cantidad && cartItems[index].cantidad > 1) { // Verificación de la propiedad cantidad
        cartItems[index].cantidad--;
        generateCartItemsTable();
    }
}

function increaseQuantity(index) {
    cartItems[index].cantidad = (cartItems[index].cantidad || 1) + 1; // Verificación de la propiedad cantidad
    generateCartItemsTable();
}

generateCartItemsTable();

function pedidoDelete(index) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: '¡No podrás revertir esto!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, bórralo'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Se ha eliminado el producto!',
                showConfirmButton: false,
                timer: 1000
            }); removeFromCart(index)
        }
    });
}