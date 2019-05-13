console.log('car-details')

let extraOne = document.getElementById('babySeat');
let extraTwo = document.getElementById('mobileWifi');
let extraThree = document.getElementById('handsFreeNav');
let extraPrice = '100';

let chosenCarImgContainer = document.querySelector("#chosen-car-image");
let chosenCarTitle = document.querySelector("#chosen-car-title");

chosenCarImgContainer.src = localStorage.getItem('searchResultsCarImgPath');
chosenCarTitle.innerText = localStorage.getItem('searchResultsCarName');

function addExtras(){
    if(extraOne.checked){
        localStorage.setItem('carDetailsBabySeat',extraPrice);
    }
    if(extraTwo.checked){
        localStorage.setItem('carDetailsMobileWifi',extraPrice);
    }
    if(extraThree.checked){
        localStorage.setItem('carDetailsHandsFree',extraPrice);
    }
    window.location.href = 'driver-details.php';
}


