
$(function() {
    $('input[name="dob"]').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        startDate: moment().startOf('hour'),
        endDate: moment().startOf('hour').add(32, 'hour'),
        locale: {
        format: 'M/DD hh:mm A'
        }
    });
    });