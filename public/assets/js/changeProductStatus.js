


function changeProductStatus(id){

    cart  = document.getElementById(id);
    activeDiv = cart.querySelector(".product-status");


    if(activeDiv.innerHTML == "active"){
        activeDiv.innerHTML = "inActive"
    }else{
        activeDiv.innerHTML = "active"
    }


    
    $.ajax({
        url: '',
        type: 'post',
        data: {
            updateStatus:true,
            id:id,
            status :activeDiv.innerHTML

        },
        success: function(data, status) {
            JSON.parse(data)
            console.log(data.status);
        }
    })

}