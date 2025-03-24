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
/*DROPDOWN FAQ*/
var acc = document.getElementsByClassName("kerdes");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var valasz = this.nextElementSibling;
        if (valasz.style.maxHeight) {
            valasz.style.maxHeight = null;
        } else {
            valasz.style.maxHeight = valasz.scrollHeight + "px";
        } 
    });
}

/*SCROLL*/
function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}
