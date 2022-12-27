
const file = document.getElementById("file");
const uploadImagePreview = document.getElementById("uploadImagePreview");

ProductsImage = [
    // 'http://flxtable.com/wp-content/plugins/pl-platform/engine/ui/images/image-preview.png',

]

function  selectImage () {
    file.click();
}


const previewUploadedImages= ()=>{
    ProductsImage.forEach(element => {
        item  = selectedImage(element);
        uploadImagePreview.innerHTML += item;
        // console.log(item) ;
    });
}



function uploadImageToAssetsFolder(image){
    $.ajax({
        url: '/uploadImage',
        type: 'post',
        data: {
            image :image,
            // quantity:quantity,

        },
        success: function(data, status) {
            // $("#displayDataTable").html(data);
            // console.log(data);
        }
    })
}



previewUploadedImages();


$("input[type=file]").on('change',function(){
    // alert(this.value);//I mean name of the file
    // ProductsImage.push(this.value);
    // uploadImagePreview.innerHTML = "";
    // previewUploadedImages();
    // uploadImageToAssetsFolder(this.value);
});

function selectedImage (image){
    
    return `
        <div class="product-img w-32 h-52 p-auto grid items-center">
        <img src="${image}" class="w-full" alt="">
        </div>
    `
}

