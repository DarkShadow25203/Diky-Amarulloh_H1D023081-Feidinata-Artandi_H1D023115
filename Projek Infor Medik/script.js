document.addEventListener("DOMContentLoaded", function () {
    // Mengatur scroll smooth untuk link kategori
    const linkKategori = document.querySelector('a[href="#Kategori"]');
    if (linkKategori) {
        linkKategori.addEventListener("click", function (e) {
            e.preventDefault(); // Mencegah perilaku default
            const target = document.getElementById("Kategori"); // Pilih elemen target
            target.scrollIntoView({ behavior: "smooth" }); // Gulir dengan animasi halus
        });
    }

    // Mengatur scroll smooth untuk tombol "Mulai Sekarang"
    const mulaiSekarangButton = document.querySelector('.cta-button');
    if (mulaiSekarangButton) {
        mulaiSekarangButton.addEventListener('click', function () {
            const target = document.getElementById('Spesialisasi'); // Pilih elemen target
            target.scrollIntoView({ behavior: 'smooth' }); // Gulir ke target dengan animasi halus
        });
    }

    // Mengatur klik pada username untuk toggle dropdown profil
    const username = document.getElementById("username");
    if (username) {
        username.addEventListener("click", function () {
            toggleProfile(); // Fungsi untuk toggle profil
        });
    }

 // Fungsi untuk toggle (menampilkan atau menyembunyikan) dropdown
function toggleProfile() {
    var dropdown = document.getElementById("profileDropdown");
    // Jika dropdown sudah tampil, sembunyikan
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    } else {
      // Tampilkan dropdown
      dropdown.style.display = "block";
    }
  }
});
