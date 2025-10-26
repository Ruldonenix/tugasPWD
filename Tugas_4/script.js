// Ambil tombolnya
const toTopBtn = document.getElementById("toTopBtn");

// Tampilkan tombol ketika scroll > 500px
window.onscroll = function() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        toTopBtn.style.display = "block";
    } else {
        toTopBtn.style.display = "none";
    }
};

// Ketika tombol diklik, scroll ke atas dengan halus
toTopBtn.addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});