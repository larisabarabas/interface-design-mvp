let sLoggedInUserFirstName = localStorage.getItem('signUpFirstName');
let sLoggedInUserLastName = localStorage.getItem('signUpLastName');
let sLoggedInUserEmail  = localStorage.getItem('signUpEmail');
let sLoggedInUserFullName = sLoggedInUserFirstName + ' ' + sLoggedInUserLastName;
document.getElementById('sLoggedInUserName').innerHTML = sLoggedInUserFullName;
document.getElementById('sLoggedInUserEmail').innerHTML = sLoggedInUserEmail;