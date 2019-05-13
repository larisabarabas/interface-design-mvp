console.log("search results page")

let btnBookCar1 = document.getElementById("btn-book-1");
let btnBookCar2 = document.getElementById("btn-book-2");
let btnBookCar3 = document.getElementById("btn-book-3");

let btns = [btnBookCar1, btnBookCar2, btnBookCar3];

let carName = btnBookCar1.parentElement.childNodes[0].nextElementSibling.innerText;
let carImgPath = btnBookCar1.parentElement.parentElement.childNodes[0].nextElementSibling.src;

btns.forEach(function (btn) {
    btn.addEventListener("click", () => {
        let carName = btn.parentElement.childNodes[0].nextElementSibling.innerText;
        let carImgPath = btn.parentElement.parentElement.childNodes[0].nextElementSibling.src;

        localStorage.setItem('searchResultsCarName', carName);
        localStorage.setItem('searchResultsCarImgPath', carImgPath);

        window.location.href = 'car-details.php';
    });
});
