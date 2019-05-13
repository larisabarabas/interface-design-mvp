let profileOrSigninListItem = document.querySelector("#profile-or-sign-in");
let logoutListItem = document.querySelector("#logout");

if(localStorage.getItem('userId')){
    profileOrSigninListItem.innerHTML = 'My profile';
    profileOrSigninListItem.href = 'profile.php';
    logoutListItem.classList.remove('hidden');
} else {
    profileOrSigninListItem.innerHTML = 'Sign in';
}

function logout(){
    localStorage.clear();
    window.location.href = 'index.php';
}
