function confirmOrder(e,idUser){

    //todo: before the confirmation of the order we need to give him a form of commande information so he can fill it and send it to the server
    e.preventDefault();
    fillTheOrderInformationForm();

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
                setTimeout(() => {
                location.replace(location.href.split('#')[0]);
                }, 2000);
            }
        }
    })
}


function fillTheOrderInformationForm(){
    form = document.querySelector('.order-information-form');
    console.log(form);
    const FormData = new FormData(form);

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
            // confirmOrder(id);
        }
    })
    location.reload();
});


function sweetAlertWithCheck(e){
    // Swal.fire({
    //     title: 'Are you sure?',
    //     text: "Do You Want To Confirm Your Order ?",
    //     icon: 'question',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Yes, Confirm it!'
    // }).then((result) => {
    //     if (result.isConfirmed) {
    //         confirmOrder(id);
    //     }
    // })
}