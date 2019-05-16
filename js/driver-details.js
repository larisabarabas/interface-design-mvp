$(function() {
    $('input[name="driverDetailsBirthDate"]').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format('YYYY'),10)
    }, function(start, end, label) {
      var years = moment().diff(start, 'years');
      //alert("You are " + years + " years old!");
    });
  });


  function prefillData(){
      if(document.getElementById('checkDriver').checked){
          document.getElementById('driverDetailsFirstName').value = localStorage.getItem('signUpFirstName');
          document.getElementById('driverDetailsLastName').value = localStorage.getItem('signUpLastName');
          document.getElementById('driverDetailsBirthDate').value = localStorage.getItem('signUpBirthDate');
      } else {
        document.getElementById('driverDetailsFirstName').value = '';
        document.getElementById('driverDetailsLastName').value ='';
        document.getElementById('driverDetailsBirthDate').value = '';

      }
  }

  function saveDriverDetails(){
      let driverDetailsFirstName = document.getElementById('driverDetailsFirstName').value;
      let driverDetailsLastName = document.getElementById('driverDetailsLastName').value;
      let driverDetailsBirthDate = document.getElementById('driverDetailsBirthDate').value;
      let driverDetailsLicenseNo = document.getElementById('driverDetailsLicenseNo').value;
      let driverDetailsExpiryMonth = document.getElementById('driverDetailsExpiryMonth').value;
      let driverDetailsExpiryYear = document.getElementById('driverDetailsExpiryYear').value;
      let driverDetailsPhone = document.getElementById('driverDetailsPhone').value;
      if(driverDetailsFirstName && driverDetailsLastName && driverDetailsBirthDate && driverDetailsLicenseNo && driverDetailsExpiryMonth && driverDetailsExpiryYear && driverDetailsPhone ){
            localStorage.setItem('driverDetailsFirstName', driverDetailsFirstName);
            localStorage.setItem('driverDetailsLastName', driverDetailsLastName);
            localStorage.setItem('driverDetailsBirthDate', driverDetailsBirthDate);
            localStorage.setItem('driverDetailsLicenseNo', driverDetailsLicenseNo);
            localStorage.setItem('driverDetailsExpiryMonth', driverDetailsExpiryMonth);
            localStorage.setItem('driverDetailsExpiryYear', driverDetailsExpiryYear);
            localStorage.setItem('driverDetailsPhone', driverDetailsPhone);
            window.location.href = 'payment.php'
      }
  }

  let loggedInUserId= localStorage.getItem('userId');
  if(loggedInUserId == null){
    document.getElementById('driverCheckbox').className += ' hidden';
  }
