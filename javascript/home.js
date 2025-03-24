/*NAVBAR*/
const toggleBtn = document.querySelector('.toggle_btn')
const toggleBtnIcon = document.querySelector('.toggle_btn i')
const dropDownMenu = document.querySelector('.dropdown_menu')

toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open')
    const isOpen = dropDownMenu.classList.contains('open')

    toggleBtnIcon.classList = isOpen
        ? 'fa fa-close'
        : 'fa fa-bars'

}


/*CALCULATOR*/
var rangeInput = document.getElementById("rangeInput");
var rangeValueDisplay = document.getElementById("rangeValue");
var yearsValueDisplay = document.getElementById("yearsValue");
var teljesArInput = document.getElementById("teljesAr");
var letetInput = document.getElementById("letet");
var kamatLabInput = document.getElementById("kamatLab");
var radioButtons = document.querySelectorAll('input[name="letetMertek"]');
var haviInput = document.getElementById('torlesztoValue');

var haviP = document.getElementById('torlesztoP');

radioButtons.forEach(function (radioButton) {
    radioButton.addEventListener('change', calculateLetet);
});

rangeInput.addEventListener("input", function () {
    rangeValueDisplay.textContent = this.value;
    yearsValueDisplay.textContent = this.value / 12;
});

function calculateLetet() {
    var teljesAr = parseFloat(teljesArInput.value);
    var selectedPercentage = parseFloat(document.querySelector('input[name="letetMertek"]:checked').value) / 100;
    var letet = teljesAr * selectedPercentage;

    if (teljesArInput.value == "") {
        teljesArInput.style.borderBottom = "4px solid red";
    } else {
        teljesArInput.style.borderBottom = "1px solid black";
        letetInput.value = letet.toFixed(0);
    }
}

function calculateHaviTorleszto() {
    var teljesAr = parseFloat(teljesArInput.value);
    var letet = parseFloat(letetInput.value);
    var kamatlab = kamatLabInput.value / 100 + 1;
    var kivonas = (teljesAr - letet) * kamatlab;
    var haviTorleszto = kivonas / parseFloat(rangeValueDisplay.textContent);
    var formatHavitorleszto = haviTorleszto.toLocaleString('hu-HU', {
        minimumFractionDigits: 0,
        maximumFractionDigits: 0,
        useGrouping: true
    }).replace(/\s/g, '.');


    let lefut = true;

    if (teljesArInput.value == "") {
        teljesArInput.style.borderBottom = "4px solid red";
        lefut = false;
    } else {
        teljesArInput.style.borderBottom = "1px solid black";
    }
    if (kamatLabInput.value == "") {
        kamatLabInput.style.borderBottom = "4px solid red";
    } else {
        kamatLabInput.style.borderBottom = "1px solid black";
    }
    if (letetInput.value == "") {
        letetInput.style.borderBottom = "4px solid red";
        lefut = false;
    } else {
        letetInput.style.borderBottom = "1px solid black";
    }

    if (lefut == true) {
        document.getElementById('torlesztoP').innerHTML = formatHavitorleszto;
    } else {
        document.getElementById('torlesztoP').innerHTML = "0";
    }

}


/*SCROLL*/
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}



