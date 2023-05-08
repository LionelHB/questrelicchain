//MENU FROM BURGER ***********************
// **************************************
let myMenuBurger = document.getElementById("ulscript");
let myBurger = document.getElementById("myburger");
let isMenuOpen = false;


myBurger.addEventListener("click", function () {
  if (!isMenuOpen) {
    openMenu();
  } else {
    closeMenu();
  }
});

function openMenu() {
  myMenuBurger.style.display = "flex";
  myBurger.style.rotate = "90deg";
  isMenuOpen = true;
}

function closeMenu() {
  myMenuBurger.style.display = "none";
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


//FOOTER LAST NFT ***********************
// **************************************
let scaleLastNft = document.getElementById("lastnfts");

document.addEventListener("click", function (event) {
  if (event.target !== scaleLastNft && scaleLastNft.style.scale == 6) {
    scaleLastNft.style.transform = "translateX(0px) translateY(0px)";
    scaleLastNft.style.scale = 1;
  }
});

if (window.innerWidth > "768px") {
  scaleLastNft.addEventListener("click", function () {
    if (scaleLastNft.style.scale == 6) {
      scaleLastNft.style.position = "fixed";
      scaleLastNft.style.bottom = "0";
      scaleLastNft.style.transform = "translateX(80%) translateY(-50%)";
      scaleLastNft.style.scale = 10;
      document.getElementById('overlay').style.display = 'block';

    } else {
      scaleLastNft.style.position = "static";
      scaleLastNft.style.transform = "translateX(30px) translateY(-30px)";
      scaleLastNft.style.scale = 6;
    }
  });
}



