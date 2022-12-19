
// alert("Hello World!");
function toggleProfileMenu() {
    var element = document.getElementById("menu-profile");
    element.classList.toggle("hidden");
    // console.log(element);
}

var profileIcon = document.querySelector("#profile-icon");

profileIcon.addEventListener("click", toggleProfileMenu);

