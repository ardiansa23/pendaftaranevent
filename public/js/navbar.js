
window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 100) { // Ubah angka ini sesuai dengan kebutuhan jarak scroll sebelum efek muncul
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});