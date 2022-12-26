
// import Swal from "sweetalert2";
function addToCart(id) {

    const quantity = document.querySelector('.quantity').value;
    // console.log(id);
    const url = 'http://localhost:8000/cart';
    //todo: send id to cart and add it the client cart and quntite 
    $.ajax({
        url: '/cart',
        type: 'post',
        data: {
            idProduit :id,
            quantity:quantity,
        },
        success: function(data, status) {
            // $("#displayDataTable").html(data);
            console.log(data);
        }
    })
    Swal.fire(
        'Good job!',
        'Added to your cart Successfully ',
        'success'
    );

}


