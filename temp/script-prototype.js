// Digunakan untuk mencegah dropdown tertutup ketika memilih menu "action"
document.addEventListener('DOMContentLoaded', function () {
    const radioInputs = document.querySelectorAll('#label-action');
    const checkboxes = document.querySelectorAll('.cb-pilih-server');
  
    // Mencegah dropdown tertutup saat tombol radio ditekan
    radioInputs.forEach((radioInput) => {
        radioInput.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    });

    checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function () {
            const card = this.closest('.card');
            const cardBody = card.querySelector('.card-body');
            const checkedCard = card.querySelector('.checked-card');
            const ceklisElement = document.querySelector('.ceklis');
            const silangElement = document.querySelector('.silang');

            if (this.checked) {
                checkedCard.innerHTML = '<div class="checked-overlay"><span class="checkmark"><button class="btn btn-dark btn-batal-pilih ceklis">&#10004;</button></span></div>';
            } else {
                cardBody.style.display = 'block';
                checkedCard.innerHTML = '';
            }

            const batalPilihButton = card.querySelector('.btn-batal-pilih');
            if (batalPilihButton) {
                batalPilihButton.addEventListener('click', function () {
                    cardBody.style.display = 'block';
                    checkedCard.innerHTML = '';
                    checkbox.checked = false;
                });

                batalPilihButton.addEventListener('mouseenter', e => {
                    batalPilihButton.innerHTML = '&#10060;';
                });
                
                batalPilihButton.addEventListener('mouseleave', e => {
                    batalPilihButton.innerHTML = '&#10004;';                });
            };
        });
    });
});