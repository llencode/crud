// src/js/search.js
$(document).ready(function () {
  $('#searchInput').on('keyup', function () {
      let value = $(this).val().toLowerCase();
      $('.tableku tbody tr').filter(function () {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
      });
  });
});
