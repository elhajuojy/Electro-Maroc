

function gotPage(page) {
    alert(page);
    loadDoc(page);
    // window.location.href = page;
}

function loadDoc($value) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      
    }
    xhttp.open("GET", $value, true);
    xhttp.send();
  }


// Path: public\assets\js\main.js
  $(function() {
//   $( "#product-test" ).text( "The DOM is now loaded and can be manipulated." );
    $( ".product-card" ).click(function() {
        console.log("click");
        var product_id = $('#id-product');
        console.log(product_id.val());
    }  );
  });