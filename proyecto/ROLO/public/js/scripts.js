
function clearCart() {
    cartItems = []; // Vaciar el arreglo de productos en el carrito
    localStorage.removeItem('cartItems'); // Eliminar los datos del carrito del almacenamiento local
}

function confirmDelete(productId) {
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
            document.getElementById('delete-form-' + productId).submit();
        }
    });
}

function agregarAlCarrito() {
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Se ha agregado al carrito',
        showConfirmButton: false,
        timer: 1000
    })
}
