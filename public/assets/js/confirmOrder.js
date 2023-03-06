function confirmOrder(idUser,infoForm){

    console.log(idUser);
    console.log(infoForm);

    $.ajax({
        url: '/order',
        type: 'post',
        data: {
            idUser :idUser,
            Form : JSON.stringify(Object.fromEntries(infoForm)),
            confirmOrder:true,
        },
        success: function(data, status) {
            data = JSON.parse(data);
            sweetAlert(data);
            if(data.total > 0){
               // reload page
                setTimeout(() => {
                location.replace(location.href.split('#')[0]);
                }, 2000);
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


const form = document.querySelector('#order-information-form');



form.addEventListener('submit', (e) => {
    e.preventDefault();
    const myFormData = new FormData(e.target);
    console.log(myFormData);
    const user_id  = document.querySelector('#user_id_confirm').value;
    sweetAlertWithCheck(user_id,myFormData);
    
});


function sweetAlertWithCheck(id,infoForm){
    Swal.fire({
        title: 'Are you sure?',
        text: "Do You Want To Confirm Your Order ?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Confirm it!'
    }).then((result) => {
        if (result.isConfirmed) {
            confirmOrder(id,infoForm);
        }
    })
}