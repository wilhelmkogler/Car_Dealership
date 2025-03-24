/*LOGOUT*/
function confirmLogOut() {
    Swal.fire({
        title: "Are you sure you want to log out of your account?",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logout_form').submit();
        }
    });
}


/*CLEARGARAGE*/
function confirmClearGarage() {
    Swal.fire({
        title: "Are you sure you want to remove all the cars from the garage?",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('clear_garage_form').submit();
            
        }
    });
}



/*NAVBAR*/
const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function(){
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')
    
    toggleBtnIcon.classList = isOpen
        ? 'fa fa-close'
        : 'fa fa-bars'

}

/*SCROLL*/
function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}