function displayAnswer1() {
    if (document.getElementById('option-11').checked) {
        document.getElementById('block-11').style.border = '3px solid limegreen'
        document.getElementById('result-11').style.color = 'limegreen'
        document.getElementById('result-11').innerHTML = 'Correct!'
    }
    if (document.getElementById('option-12').checked) {
        document.getElementById('block-12').style.border = '3px solid red'
        document.getElementById('result-12').style.color = 'red'
        document.getElementById('result-12').innerHTML = 'Incorrect!'
        showCorrectAnswer1()
    }
    if (document.getElementById('option-13').checked) {
        document.getElementById('block-13').style.border = '3px solid red'
        document.getElementById('result-13').style.color = 'red'
        document.getElementById('result-13').innerHTML = 'Incorrect!'
        showCorrectAnswer1()
    }
    if (document.getElementById('option-14').checked) {
        document.getElementById('block-14').style.border = '3px solid red'
        document.getElementById('result-14').style.color = 'red'
        document.getElementById('result-14').innerHTML = 'Incorrect!'
        showCorrectAnswer1()
    }
}


function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px";
}