
$(function() {
$('input[name="pickUp"]').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
    showCustomRangeLabel:"Date pick-up",
    format: 'MMMM D, YYYY hh:mm A',
    }
});
});

$(function() {
$('input[name="pickOff"]').daterangepicker({
    singleDatePicker: true,
    timePicker: true,
    startDate: moment().startOf('hour'),
    endDate: moment().startOf('hour').add(32, 'hour'),
    locale: {
    format: 'MMMM D, YYYY hh:mm A'
    }
});
});

function doSearch(){
    window.location.href = 'search-results.php';
}

// function showReturnLocationInput(){
//     if(!$('#returnLocationCheck').checked){
//         $('#customReturnLocation').removeClass('hidden');
//     } else {
//         $('#customReturnLocation').addClass('hidden')
//     }
// }
console.log(document.getElementById('returnLocationCheck').checked )
