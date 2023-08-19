// $(document).ready(function() {
//     $('input[type="checkbox"]').on('change', function() {
//         applyFilters();
//     });
    
//     function applyFilters() {
//         var selectedFilters = $('input[type="checkbox"]:checked').map(function() {
//             return this.value;
//         }).get();
        
//         $('.card').hide(); // Sembunyikan semua konten card
        
//         if (selectedFilters.length === 0 || selectedFilters.includes('semua')) {
//             $('.card').show(); // Tampilkan semua konten jika "semua" terpilih
//         } else {
//             selectedFilters.forEach(function(filter) {
//                 $('.card[data-tipe="' + filter + '"]').show(); // Tampilkan konten sesuai filter yang dipilih
//             });
//         }
//     }
// });
