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
