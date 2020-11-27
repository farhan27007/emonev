$(document).ready(function()
{
  $('#dt-realisasi').dataTable(
  {
    responsive: true
  });

  $('.js-thead-colors a').on('click', function()
  {
    var theadColor = $(this).attr("data-bg");
    console.log(theadColor);
    $('#dt-realisasi thead').removeClassPrefix('bg-').addClass(theadColor);
  });

  $('.js-tbody-colors a').on('click', function()
  {
    var theadColor = $(this).attr("data-bg");
    console.log(theadColor);
    $('#dt-realisasi').removeClassPrefix('bg-').addClass(theadColor);
  });

});