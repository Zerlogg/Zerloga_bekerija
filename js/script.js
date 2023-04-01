/*Card on click function*/
var cards = document.querySelectorAll('.bakery_card');

[...cards].forEach((bakery_card)=>{
    bakery_card.addEventListener( 'click', function() {
        bakery_card.classList.toggle('is-flipped');
  });
});

/*Login change div function*/
function pieslegties() { 
	document.getElementById("registration").style.display="none"; 
	document.getElementById("signin").style.display="block"; 
}

function registreties() { 
	document.getElementById("registration").style.display="block";
    document.getElementById("new_password").style.display="none"; 
	document.getElementById("signin").style.display="none"; 
}

function atjaunot_paroli() { 
	document.getElementById("signin").style.display="none"; 
	document.getElementById("change_password").style.display="block"; 
}

function mainit_paroli() { 
	document.getElementById("change_password").style.display="none"; 
	document.getElementById("new_password").style.display="block"; 
}

/*Sticky navigation bar*/
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

/*Moving welcome images*/
var counter = 2;
setInterval(function(){
    document.getElementById('radio' + counter).checked=true;
    counter++;
    if(counter > 7){
        counter = 1;
    }
},4000);

/*Product categories*/
function tortes() { 
	document.getElementById("kukas").style.display="none"; 
	document.getElementById("tortes").style.display="block"; 
}

function kukas() { 
  document.getElementById("tortes").style.display="none"; 
	document.getElementById("kukas").style.display="block"; 
}

function atjaunot_paroli() { 
	document.getElementById("signin").style.display="none"; 
	document.getElementById("change_password").style.display="block"; 
}

function mainit_paroli() { 
	document.getElementById("change_password").style.display="none"; 
	document.getElementById("new_password").style.display="block"; 
}

/*Product description*/
const openModalButtons = document.querySelectorAll('[data-modal-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
})

function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
}

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const chocolate_cake = document.querySelector(button.dataset.modalTarget)
    openModal(chocolate_cake)
  })
})

closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const chocolate_cake = button.closest('.chocolate_cake')
    closeModal(chocolate_cake)
  })
})

function openModal(chocolate_cake) {
  if (chocolate_cake == null) return
  chocolate_cake.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(chocolate_cake) {
  if (chocolate_cake == null) return
  chocolate_cake.classList.remove('active')
  overlay.classList.remove('active')
}