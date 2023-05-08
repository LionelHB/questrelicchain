//MENU FROM BURGER ***********************
// **************************************
// let myMenuBurger = document.getElementById("sidenav");
// let myNav = document.querySelector(".mynav");
// let myBurger = document.getElementById("myburger");
// let isMenuOpen = false;

// document.addEventListener("click", function (event) {
//   if (!myNav.contains(event.target) && !myBurger.contains(event.target)) {
//     closeMenu();
//   }
// });

// myBurger.addEventListener("click", function () {
//   if (!isMenuOpen) {
//     openMenu();
//   } else {
//     closeMenu();
//   }
// });

// function openMenu() {
//   myMenuBurger.style.display = "block";
//   myNav.style.width = "120px";
//   myNav.style.height = "350px";
//   myBurger.style.backgroundPosition = "left";
//   myBurger.style.transform = "translateX(30px)";
//   isMenuOpen = true;
// }

// function closeMenu() {
//   myMenuBurger.style.display = "none";
//   myNav.style.width = "50px";
//   myNav.style.height = "50px";
//   myBurger.style.backgroundPosition = "right";
//   myBurger.style.transform = "translateX(0px)";
//   isMenuOpen = false;
// }

// //***Sticky Nav*** */
// window.addEventListener("scroll", function () {
//   let myBarNav = document.querySelector(".mynav");
//   let scrollPosition = window.scrollY;
//   let stickyPosition = 80;
//   let unstickPosition = "100%";

//   if (scrollPosition > stickyPosition) {
//     myBarNav.classList.add("stickynav");
//   } else {
//     myBarNav.classList.remove("stickynav");
//   }

//   if (scrollPosition > unstickPosition) {
//     myBarNav.classList.remove("stickynav");
//   }
// });

// //SOCIAL MEDIA ***********************
// // **************************************
// let socialmedialogo = document.querySelectorAll('.socialmedialogo');

// document.getElementById("socialmedialogo").addEventListener("click", function () {

//   for (i = 0; i < socialmedialogo.length; i++)
//     if (window.innerWidth > "768px") {
//       if (socialmedialogo[i].style.visibility === "visible") {
//         socialmedialogo[i].style.transform = "translateX(-1000px)";
//         socialmedialogo[i].style.visibility = "hidden";
//       } else {
//         socialmedialogo[i].style.visibility = "visible";
//         socialmedialogo[i].style.transform = "translateX(0px)";
//       }

//     } else {
//       socialmedialogo[i].style.transform = "translateX(1000px)";
//       if (socialmedialogo[i].style.visibility === "visible") {
//         socialmedialogo[i].style.transform = "translateX(1000px)";
//         socialmedialogo[i].style.visibility = "hidden";
//       } else {
//         socialmedialogo[i].style.visibility = "visible";
//         socialmedialogo[i].style.transform = "translateX(0px)";
//       }
//     }
// });

//SOCIAL MEDIA Sticky ***********************
// **************************************
if (window.innerWidth > "768px") {
  (function () {
    let objNav = document.querySelector("#socialmedianav");
    let memoPositionNav = objNav.getBoundingClientRect().top + window.pageYOffset;
    function sticky() {
      let posCurseur = window.pageYOffset;
      if (posCurseur >= memoPositionNav) {
        objNav.style.position = "fixed";
        objNav.style.top = 0;
        objNav.style.left = "-1.6rem";
        objNav.style.zIndex = 999;
      } else {
        objNav.style.position = "absolute";
        objNav.style.top = "auto";
        objNav.style.left = "2rem";
        objNav.style.zIndex = "auto";
      }
    }
    window.addEventListener("scroll", sticky);
  })();
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

document.addEventListener("click", function (event) {
  if (!myPopUpLogIn.contains(event.target) && !myPopUpRegister.contains(event.target) && event.target !== myButtonLogIn) {
    myPopUpLogIn.style.transform = "translateY(-1000px)",
      myPopUpRegister.style.transform = "translateY(-1000px)";
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

//OVERLAY LAST NFT***********************
// **************************************

// document.getElementById('overlay').addEventListener('click', function () {

//   scaleLastNft.style.position = "static";
//   document.getElementById('overlay').style.display = 'none';
//   scaleLastNft.style.transform = "translateX(0px) translateY(0px)";
//   scaleLastNft.style.scale = 1;
// });

