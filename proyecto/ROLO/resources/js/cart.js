// Obtener el elemento del contador de carrito
var cartCountElement = document.querySelector('.cart-count');
var cartCount = 0;

// Función para actualizar el contador de carrito
function updateCartCount(count) {
    cartCount = count;
    cartCountElement.textContent = cartCount;
}

// Obtener el elemento contenedor de los elementos del carrito
var cartItemsElement = document.getElementById('cartItems');
var cartItems = [];

// Función para generar los elementos del carrito
function generateCartItems() {
    cartItemsElement.innerHTML = ' ';

    if (cartItems.length === 0) {
        // Si no hay productos en el carrito, se muestra un mensaje indicando eso
        var emptyMenuItem = document.createElement('li');
        emptyMenuItem.textContent = 'No hay productos en el carrito';
        emptyMenuItem.classList.add('dropdown-item', 'disabled');
        cartItemsElement.appendChild(emptyMenuItem);
    } else {
        // Si hay productos en el carrito, se generan los elementos correspondientes
        cartItems.forEach(function (product) {
            var menuItem = document.createElement('li');
            menuItem.textContent = product.nombre + ' - $' + product.precio;

            var removeButton = document.createElement('button');
            removeButton.innerHTML = '<i class="fa-solid fa-trash" style="color: #ff0000;"></i>';
            removeButton.classList.add('btn', 'btn-sm', 'ms-1');
            removeButton.addEventListener('click', function () {
                conDelete(product);
            });

            menuItem.appendChild(removeButton);
            menuItem.classList.add('dropdown-item');
            cartItemsElement.appendChild(menuItem);
        });
    }

    // Calcular el precio total de los productos en el carrito
    var totalPrice = cartItems.reduce(function (acc, product) {
        return acc + product.precio;
    }, 0);

    // Mostrar el precio total en el carrito
    var totalMenuItem = document.createElement('li');
    totalMenuItem.textContent = 'Total: $' + totalPrice;
    totalMenuItem.classList.add('dropdown-item', 'fw-bold');
    cartItemsElement.appendChild(totalMenuItem);

    if (cartItems.length > 0) {
        // Si hay productos en el carrito, se muestra el botón "Ver mi pedido"
        var viewOrderButton = document.createElement('button');
        viewOrderButton.textContent = 'Ver mi pedido';
        viewOrderButton.style.display = 'block';
        viewOrderButton.style.margin = '0 auto';
        viewOrderButton.style.backgroundColor = 'orange';
        viewOrderButton.style.color = 'white';
        viewOrderButton.style.border = 'none';
        viewOrderButton.style.padding = '10px 20px';
        viewOrderButton.style.borderRadius = '10px';
        cartItemsElement.appendChild(viewOrderButton);

        // Agregar el evento de clic para redirigir al usuario al hacer clic en el botón
        viewOrderButton.addEventListener('click', function () {
            window.location.href = '/carrito'; // Redirigir al usuario a "/carrito.blade"
        });
    }

    // Guardar los datos del carrito en el almacenamiento local
    saveCartItems();

    // Actualizar el contador de carrito
    updateCartCount(cartItems.length);
}

// Función para guardar los datos del carrito en el almacenamiento local
function saveCartItems() {
    localStorage.setItem('cartItems', JSON.stringify(cartItems));
}

// Cargar los datos del carrito desde el almacenamiento local (si existen)
function loadCartItems() {
    var storedCartItems = localStorage.getItem('cartItems');
    if (storedCartItems) {
        cartItems = JSON.parse(storedCartItems);
    }
}

// Generar los elementos del carrito al cargar la página


var payItem = document.getElementById('payItem');

function addToCart(product) {
    // Agregar un producto al carrito
    cartItems.push(product);
    generateCartItems();
}

function removeFromCart(product) {
    // Eliminar un producto del carrito
    var index = cartItems.indexOf(product);
    if (index !== -1) {
        cartItems.splice(index, 1);
        generateCartItems();
    }
}

var addToCartButtons = document.querySelectorAll('.add-to-cart');

addToCartButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        // Obtener los detalles del producto desde el botón correspondiente y agregarlo al carrito
        var product = {
            nombre: button.parentElement.querySelector('.card-title').textContent,
            precio: parseFloat(button.parentElement.querySelector('.card-title')
                .nextElementSibling.textContent.slice(1)),
        };
        addToCart(product);
    });
});

function clearCart() {
    cartItems = []; // Vaciar el arreglo de productos en el carrito
    localStorage.removeItem('cartItems'); // Eliminar los datos del carrito del almacenamiento local
}
loadCartItems();
generateCartItems();

function conDelete(product) {
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
            }); removeFromCart(product)
        }
    });
}

