document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("popup-discount");
    const closePopup = document.getElementById("close-popup");

    // Tampilkan pop-up
    popup.style.display = "flex";

    // Tutup pop-up saat tombol "Tutup" diklik
    closePopup.addEventListener("click", function () {
        popup.style.display = "none";
    });
});