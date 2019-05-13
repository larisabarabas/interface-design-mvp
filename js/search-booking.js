console.log("search booking")

function showBooking(){
    if(document.querySelector("#booking-number").value != "KEA2019"){
        swal({
            icon: "warning",
            text: "Please enter a valid booking code.",
            button:{
                className:'green-btn'
            }
        });
    } else {
        window.location.href = 'view-booking.php';
    }
    
}