

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