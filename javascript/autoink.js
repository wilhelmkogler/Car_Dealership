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

/*FILTER*/
function fetchFilteredCars() {
    var sortOption = document.getElementById("sortOptions").value;
    var form = document.getElementById("filterForm");
    var formData = new FormData(form);
    var params = new URLSearchParams(formData).toString();


    var xhr = new XMLHttpRequest();
    xhr.open("GET", "cars.php?sort=" + sortOption + "&" + params, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var carList = document.getElementById("carList");
            var carCount = document.getElementById("carCount");
            if (carList) {
                carList.innerHTML = xhr.responseText;
            }
            if (carCount) {
                var carCountNumber = (xhr.responseText.match(/class='product-container'/g) || []).length;
                carCount.textContent = "Number of results: " + carCountNumber;

            }
        }
    }
    xhr.send();
}

window.onload = function() {
    fetchFilteredCars();  
    document.getElementById("sortOptions").onchange = fetchFilteredCars;

   
    ['Brand', 'Fuel', 'Body', 'Status'].forEach(function(filter) {
        var allCheckbox = document.querySelector('input[name="' + filter + '[]"][value="all"]');
        var checkboxes = document.querySelectorAll('input[name="' + filter + '[]"]:not([value="all"])');
        
    });

    
};



/*PIC CHANGE*/
document.addEventListener('DOMContentLoaded', function() {
    console.log('JavaScript Loaded');

    const productContainer = document.getElementById('carList');
    
    productContainer.addEventListener('click', function(event) {
        if (event.target.classList.contains('thumbnail')) {
            const clickedThumbnail = event.target;
            const carContainer = clickedThumbnail.closest('.product-container');
            const largeImage = carContainer.querySelector('.main-image img');

            if (largeImage) {
                largeImage.style.transition = 'opacity 0.5s ease-in-out';
                largeImage.style.opacity = 0;

                setTimeout(function() {
                    largeImage.src = clickedThumbnail.src;

                    largeImage.style.opacity = 1;
                }, 500);
            }
        }
    });
});







    
