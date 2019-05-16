
function randomUniqueId() {
  return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {
    var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
    return v.toString(16);
  });
}

      
let signUpBtn = document.getElementById('signupBtn');


function checkValidation(){
  let signUpFirstName = document.getElementById('signUpFirstName').value;
  let signUpLastName = document.getElementById('signUpLastName').value;
  let signUpBirthDate = document.getElementById('signUpBirthDate').value;
  let signUpEmail = document.getElementById('signUpEmail').value;
  let signUpPassword = document.getElementById('signUpPassword').value;
  if(signUpFirstName!=='' && signUpLastName!=='' && signUpBirthDate!=='' && signUpEmail!=='' && signUpPassword!==''){
    signUpBtn.removeAttribute('disabled');
  }
}

function signUp() {
  let signUpFirstName = document.getElementById('signUpFirstName').value;
  let signUpLastName = document.getElementById('signUpLastName').value;
  let signUpBirthDate = document.getElementById('signUpBirthDate').value;
  let signUpEmail = document.getElementById('signUpEmail').value;
  let signUpPassword = document.getElementById('signUpPassword').value;
  let userId = randomUniqueId();

    if(signUpFirstName && signUpLastName && signUpBirthDate && signUpEmail && signUpPassword){
        signUpBtn.classList.remove('disabled-btn');
        localStorage.setItem('signUpFirstName',signUpFirstName);
        localStorage.setItem('signUpLastName',signUpLastName);
        localStorage.setItem('signUpBirthDate',signUpBirthDate);
        localStorage.setItem('signUpEmail',signUpEmail);
        localStorage.setItem('signUpPassword',signUpPassword);
        localStorage.setItem('userId',userId);
        swal({
          icon: "success",
          text: 'You have been successfully resgistered',
          button:{
            className:'green-btn'
          },
        }).then(()=>{
          window.location.href = 'search.php'
        })
    }
}

$(function() {
    $('input[name="signUpBirthDate"]').daterangepicker({
      autoUpdateInput: true,
      locale: {
          cancelLabel: 'Clear'
      },
      singleDatePicker: true,
      showDropdowns: true,
      minYear: 1901,
      maxYear: parseInt(moment().format('YYYY'),10)
    }, function(start, end, label) {
      var years = moment().diff(start, 'years');
      //alert("You are " + years + " years old!");
    });
  });
