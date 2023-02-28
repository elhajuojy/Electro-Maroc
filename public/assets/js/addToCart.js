
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
            addToCart:true
        },
        success: function(data, status) {
            console.log(data);
            alertCart(data);
        }
    })
    

}


function alertCart(messg = "Added to your cart "){
    
    Swal.fire(
        'Good job!',
        `Successfully ${messg}` ,
        'success'
    );
}

