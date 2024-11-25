// Menambahkan event listener pada tombol
document.addEventListener("DOMContentLoaded", function () {
    // Mengatur klik pada tombol dengan kelas .btn
    const buttons = document.querySelectorAll(".btn");
    buttons.forEach(button => {
        button.addEventListener("click", function () {
            alert("Tombol diklik!");
        });
    });

    // Menambahkan logika toggle menu navigasi (contoh)
    const navToggle = document.querySelector(".nav-toggle");
    const navMenu = document.querySelector("nav ul");

    if (navToggle) {
        navToggle.addEventListener("click", function () {
            navMenu.classList.toggle("active");
        });
    }
});

// Hero section efek transisi
window.addEventListener("scroll", function () {
    const hero = document.querySelector(".hero");
    const scrollPosition = window.scrollY;

    if (hero) {
        if (scrollPosition > 50) {
            hero.style.opacity = "0.8";
        } else {
            hero.style.opacity = "1";
        }
    }
});

// Fungsi untuk memvalidasi input pada formulir (contoh)
function validateForm(event) {
    event.preventDefault();

    const inputField = document.querySelector(".input-field");
    const errorMessage = document.querySelector(".error-message");

    if (inputField && inputField.value.trim() === "") {
        errorMessage.textContent = "Field tidak boleh kosong!";
        errorMessage.style.color = "red";
    } else {
        errorMessage.textContent = "";
        alert("Form berhasil dikirim!");
    }
}

// Menambahkan validasi pada form dengan id #contactForm
const contactForm = document.querySelector("#contactForm");
if (contactForm) {
    contactForm.addEventListener("submit", validateForm);
}
