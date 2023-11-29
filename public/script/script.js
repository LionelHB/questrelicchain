  //MENU FROM BURGER ***********************
// **************************************
let myMenuBurger = document.getElementById("ulscript");
let mydesignimg = document.getElementById("designimgscript");
let myBurger = document.getElementById("myburger");
let isMenuOpen = false;


myBurger.addEventListener("click", function () {
  if (!isMenuOpen) {
    openMenu();
  } else {
    closeMenu();
  }
});

myBurger.addEventListener("click", function () {
    if (myMenuBurger.classList.contains("ul-visible") && mydesignimg.classList.contains("design-visible")) {
      myMenuBurger.classList.remove("ul-visible","design-visible");
    } else {
      myMenuBurger.classList.add("ul-visible","design-visible");
    }
  });

function openMenu() {
  // myMenuBurger.style.display = "flex";
  myBurger.style.rotate = "90deg";
  isMenuOpen = true;
}

function closeMenu() {
  // myMenuBurger.style.display = "none";
  myBurger.style.rotate = "0deg";
  isMenuOpen = false;
}

//POPUP HEADER ***********************
// **************************************

//***login*** */
let myButtonLogIn = document.getElementById("btnconnexion");
let myPopUpLogIn = document.getElementById("popuplogin");

myButtonLogIn.addEventListener("click", function () {
  if (myPopUpLogIn.style.transform === "translateY(0px)") {
    myPopUpLogIn.style.transform = "translateY(-1000px)",
      myPopUpRegister.style.transform = "translateY(-1000px)";
  } else {
    myPopUpLogIn.style.transform = "translateY(0px)";
  }
});

//***register*** */
let myButtonRegister = document.getElementById("registerbtn");
let myPopUpRegister = document.getElementById("popupregister");

myButtonRegister.addEventListener("click", function () {
  if (myPopUpRegister.style.transform === "translateY(0px)") {
    myPopUpRegister.style.transform = "translateY(-1000px)";
  } else {
    myPopUpRegister.style.transform = "translateY(0px)";
  }
});

document.addEventListener("click", function (event) {
  if (!myPopUpLogIn.contains(event.target) && !myPopUpRegister.contains(event.target) && event.target !== myButtonLogIn && event.target !== myButtonRegister) {
    myPopUpLogIn.style.transform = "translateY(-1000px)";
    myPopUpRegister.style.transform = "translateY(-1000px)";
  }
});


//***********************
// Title Animation******************

window.addEventListener('DOMContentLoaded', function () {
  var myTitle = document.getElementById('animateTitle');
  var text = myTitle.innerText;
  var content = '';

  for (var i = 0; i < text.length; i++) {
    content += '<span class="myletters" style="animation-delay: ' + (i * 0.1) + 's;">' + text.charAt(i) + '</span>';
  }

  myTitle.innerHTML = content;
});



//***********************
// logo Animation******************

const logoElement = document.getElementById("logoSite");
let isLogoMoved = false; 
function moveAndRotateLogo() {
  if (!isLogoMoved) {
    logoElement.style.top = "80px";
    logoElement.style.left = "50px";
    logoElement.style.transform = "rotateY(360deg)";
    isLogoMoved = true;
  } else {
    logoElement.style.top = "0";
    logoElement.style.left = "0";
    logoElement.style.transform = "rotateY(0deg)";
    isLogoMoved = false;
  }
  logoElement.classList.toggle("rotate-animation");
}

function startAnimation() {
  moveAndRotateLogo();
  setTimeout(moveAndRotateLogo, 3000);
}

setInterval(startAnimation, 45000);  
setTimeout(startAnimation, 45000);







