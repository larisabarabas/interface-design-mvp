console.log('Sign in')

function getUserData(){
    let signUpFirstName =  localStorage.getItem('signUpFirstName');
    let signUpLastName = localStorage.getItem('signUpLastName');
    let signUpBirthDate = localStorage.getItem('signUpBirthDate');
    let signUpEmail = localStorage.getItem('signUpEmail');
    let signUpPassword =localStorage.getItem('signUpPassword');
    let userId = localStorage.getItem('userId');
    if(userId){
        return true
    } else {
        let signUpFirstName = 'John';
        let signUpLastName = 'Doe';
        let signUpBirthDate = '01/06/1998';
        let signUpEmail = 'johnDoe@email.com';
        let signUpPassword = '1234ABC';
        let userId = randomUniqueId();
        localStorage.setItem('signUpFirstName',signUpFirstName);
        localStorage.setItem('signUpLastName',signUpLastName);
        localStorage.setItem('signUpBirthDate',signUpBirthDate);
        localStorage.setItem('signUpEmail',signUpEmail);
        localStorage.setItem('signUpPassword',signUpPassword);
        localStorage.setItem('userId',userId);

    }

}


console.log(getUserData())


function login(){
    let email = document.getElementById('loginEmail').value;
    let password = document.getElementById('loginPassword').value;
    let signUpEmail = localStorage.getItem('signUpEmail');
    let signUpPassword =localStorage.getItem('signUpPassword');
    if(email === signUpEmail && password === signUpPassword){
        localStorage.setItem('loginEmail', email);
        localStorage.setItem('loginPassword', password);
        window.location.href = 'search.php'
    } else {
        swal({
            icon: "warning",
            text:"It seems like you're not in our system",
            button:{
                text:'Take me to sign up',
                className:'green-btn'
            }
          }).then(()=>{
            takeMeToSignUp()
          });
    }
}

function takeMeToSignUp(){
    window.location.href = 'sign-up.php'
}

function randomUniqueId() {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
      return v.toString(16);
    });
  }


function changePassword(){
    swal({
        text: "We will send you an email with the password reset link to:",
        content: {
          element: "input",
          attributes: {
            placeholder: "Type your email",
            type: "text",
          },
        },
      });

      document.querySelector(".swal-button--confirm").addEventListener("click", ()=>{
        if(document.querySelector(".swal-content__input").value == "") {
            swal({
                text: "Please enter your email address."
            });
        } else {
            swal({
                icon: "success",
                title: "An email has been sent to you for resetting your password."
            });
        }
      })
}
