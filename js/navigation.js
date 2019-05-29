let profileOrSigninListItem = document.querySelector("#profile-or-sign-in");
let logoutListItem = document.querySelector("#logout");

let userId = localStorage.getItem('userId');
window.onload = function (){
    if(userId){
        profileOrSigninListItem.innerHTML = 'My profile';
        profileOrSigninListItem.href = 'profile.php';
        logoutListItem.classList.remove('hidden');
        document.querySelector('#navbarLogoLink').href = 'search.php';
    } else {
        profileOrSigninListItem.innerHTML = 'Sign in';
    }
            
    
}

function logout(){
    localStorage.clear();
    window.location.href = 'index.php';
}
