// Získání modálního okna
var modal = document.getElementById("imageModal");

// Získání obrázku a vložení do modálního okna
var images = document.getElementsByClassName("clickable-image");
var modalImg = document.getElementById("modalImage");

for (var i = 0; i < images.length; i++) {
    images[i].onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
    }
}

// Získání elementu pro zavření
var span = document.getElementsByClassName("close")[0];

// Když uživatel klikne na <span> (x), zavře modální okno
span.onclick = function() {
    modal.style.display = "none";
}

// Zavření modálního okna při kliknutí mimo obrázek
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
