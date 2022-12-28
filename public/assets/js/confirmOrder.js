function confirmOrder(idUser){
    $.ajax({
        url: '/order',
        type: 'post',
        data: {
            idUser :idUser,
            confirmOrder:true
        },
        success: function(data, status) {
            data = JSON.parse(data);
            sweetAlert(data);
            if(data.total > 0){
               // reload page
               location.replace(location.href.split('#')[0]);
            }
        }
    })
}

// function sweet aleart 
function sweetAlert(data){
    
    Swal.fire(
        ` ${data.message}` ,
        ` total $ ${data.total} `,
        data.total > 0 ? 'success' : 'error',

    );
}

function sweetAlertWithCheck(id){
    Swal.fire({
        title: 'Are you sure?',
        text: "Do You Want To Confirm Your Order ?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            confirmOrder(id);
        }
    })
}