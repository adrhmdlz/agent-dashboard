// Digunakan untuk mencegah dropdown tertutup ketika memilih menu "action"
document.addEventListener('DOMContentLoaded', function () {
    const radioInputs = document.querySelectorAll('#label-action');
  
    // Mencegah dropdown tertutup saat tombol radio ditekan
    radioInputs.forEach((radioInput) => {
        radioInput.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    });
});
