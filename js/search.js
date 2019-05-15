console.log("log")
let searchBtn = document.querySelector("#searchBtn");

// $(function() {
//     $('input[name="pickUp"]').daterangepicker({
//         autoUpdateInput: false,
//         locale: {
//             cancelLabel: 'Clear'
//         }
//     });
// });

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

document.getElementById('pickUp').value = '';
document.getElementById('pickOff').value = '';

function doSearch(){
    let searchPickupLocation = document.getElementById('strLocation').value;
    let searchPickupDateTime = document.getElementById('pickUp').value;
    let searchDropoffDateTime = document.getElementById('pickOff').value;
    let searchReturnLocation =  document.getElementById('returnLocation').value;

    if(searchPickupLocation){
        localStorage.setItem('searchPickupLocation', searchPickupLocation);
        localStorage.setItem('searchPickupDateTime', searchPickupDateTime);
        localStorage.setItem('searchDropoffDateTime', searchDropoffDateTime);
        if(searchReturnLocation){
            localStorage.setItem('searchReturnLocation', searchReturnLocation);
        }
    }

    window.location.href = 'search-results.php';

}

function checkValidation(){
    let strLocation = document.getElementById('strLocation').value;
    if(strLocation!==''){
      searchBtn.removeAttribute('disabled');
    }
}

function showReturnLocationInput(){
    if(!document.getElementById('returnLocationCheck').checked){
        $('#customReturnLocation').removeClass('hidden');
    } 
    if(document.getElementById('returnLocationCheck').checked) {
        $('#customReturnLocation').addClass(' hidden')
    }
}
console.log(document.getElementById('returnLocationCheck').checked )
