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
  document.getElementById("tortes").style.display="block"; 
  document.getElementById("smalkmaizites").style.display="none"; 
	document.getElementById("piragi").style.display="none"; 
	document.getElementById("klingeri").style.display="none";
  document.getElementById("kukas").style.display="none";
  document.getElementById("ruletes").style.display="none"; 
  document.getElementById("platsmaizes").style.display="none";
}

function smalkmaizites() { 
  document.getElementById("tortes").style.display="none"; 
  document.getElementById("smalkmaizites").style.display="block"; 
	document.getElementById("piragi").style.display="none"; 
	document.getElementById("klingeri").style.display="none";
  document.getElementById("kukas").style.display="none";
  document.getElementById("ruletes").style.display="none"; 
  document.getElementById("platsmaizes").style.display="none";
}

function piragi() { 
  document.getElementById("tortes").style.display="none"; 
  document.getElementById("smalkmaizites").style.display="none"; 
	document.getElementById("piragi").style.display="block"; 
	document.getElementById("klingeri").style.display="none";
  document.getElementById("kukas").style.display="none";
  document.getElementById("ruletes").style.display="none"; 
  document.getElementById("platsmaizes").style.display="none";
}

function klingeri() { 
  document.getElementById("tortes").style.display="none"; 
  document.getElementById("smalkmaizites").style.display="none"; 
	document.getElementById("piragi").style.display="none"; 
	document.getElementById("klingeri").style.display="block";
  document.getElementById("kukas").style.display="none";
  document.getElementById("ruletes").style.display="none"; 
  document.getElementById("platsmaizes").style.display="none";
}

function kukas() { 
  document.getElementById("tortes").style.display="none"; 
  document.getElementById("smalkmaizites").style.display="none"; 
	document.getElementById("piragi").style.display="none"; 
	document.getElementById("klingeri").style.display="none";
  document.getElementById("kukas").style.display="block";
  document.getElementById("ruletes").style.display="none"; 
  document.getElementById("platsmaizes").style.display="none";
}

function ruletes() { 
  document.getElementById("tortes").style.display="none"; 
  document.getElementById("smalkmaizites").style.display="none"; 
	document.getElementById("piragi").style.display="none"; 
	document.getElementById("klingeri").style.display="none";
  document.getElementById("kukas").style.display="none";
  document.getElementById("ruletes").style.display="block"; 
  document.getElementById("platsmaizes").style.display="none"; 
}

function platsmaizes() { 
  document.getElementById("tortes").style.display="none"; 
  document.getElementById("smalkmaizites").style.display="none"; 
	document.getElementById("piragi").style.display="none"; 
	document.getElementById("klingeri").style.display="none";
  document.getElementById("kukas").style.display="none";
  document.getElementById("ruletes").style.display="none"; 
  document.getElementById("platsmaizes").style.display="block";
}

/*Product statistics*/

function tortes_statistika() { 
  document.getElementById("tortes_statistika").style.display="block"; 
  document.getElementById("smalkmaizites_statistika").style.display="none"; 
	document.getElementById("piragi_statistika").style.display="none"; 
	document.getElementById("klingeri_statistika").style.display="none";
  document.getElementById("kukas_statistika").style.display="none";
  document.getElementById("ruletes_statistika").style.display="none"; 
  document.getElementById("platsmaizes_statistika").style.display="none";
}

function smalkmaizites_statistika() { 
  document.getElementById("tortes_statistika").style.display="none"; 
  document.getElementById("smalkmaizites_statistika").style.display="block"; 
	document.getElementById("piragi_statistika").style.display="none"; 
	document.getElementById("klingeri_statistika").style.display="none";
  document.getElementById("kukas_statistika").style.display="none";
  document.getElementById("ruletes_statistika").style.display="none"; 
  document.getElementById("platsmaizes_statistika").style.display="none";
}

function piragi_statistika() { 
  document.getElementById("tortes_statistika").style.display="none"; 
  document.getElementById("smalkmaizites_statistika").style.display="none"; 
	document.getElementById("piragi_statistika").style.display="block"; 
	document.getElementById("klingeri_statistika").style.display="none";
  document.getElementById("kukas_statistika").style.display="none";
  document.getElementById("ruletes_statistika").style.display="none"; 
  document.getElementById("platsmaizes_statistika").style.display="none";
}

function klingeri_statistika() { 
  document.getElementById("tortes_statistika").style.display="none"; 
  document.getElementById("smalkmaizites_statistika").style.display="none"; 
	document.getElementById("piragi_statistika").style.display="none"; 
	document.getElementById("klingeri_statistika").style.display="block";
  document.getElementById("kukas_statistika").style.display="none";
  document.getElementById("ruletes_statistika").style.display="none"; 
  document.getElementById("platsmaizes_statistika").style.display="none";
}

function kukas_statistika() { 
  document.getElementById("tortes_statistika").style.display="none"; 
  document.getElementById("smalkmaizites_statistika").style.display="none"; 
	document.getElementById("piragi_statistika").style.display="none"; 
	document.getElementById("klingeri_statistika").style.display="none";
  document.getElementById("kukas_statistika").style.display="block";
  document.getElementById("ruletes_statistika").style.display="none"; 
  document.getElementById("platsmaizes_statistika").style.display="none";
}

function ruletes_statistika() { 
  document.getElementById("tortes_statistika").style.display="none"; 
  document.getElementById("smalkmaizites_statistika").style.display="none"; 
	document.getElementById("piragi_statistika").style.display="none"; 
	document.getElementById("klingeri_statistika").style.display="none";
  document.getElementById("kukas_statistika").style.display="none";
  document.getElementById("ruletes_statistika").style.display="block"; 
  document.getElementById("platsmaizes_statistika").style.display="none"; 
}

function platsmaizes_statistika() { 
  document.getElementById("tortes_statistika").style.display="none"; 
  document.getElementById("smalkmaizites_statistika").style.display="none"; 
	document.getElementById("piragi_statistika").style.display="none"; 
	document.getElementById("klingeri_statistika").style.display="none";
  document.getElementById("kukas_statistika").style.display="none";
  document.getElementById("ruletes_statistika").style.display="none"; 
  document.getElementById("platsmaizes_statistika").style.display="block";
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

/*Web popups*/
menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

document.querySelector('#close-edit').onclick = () =>{
   document.querySelector('.edit-form-container').style.display = 'none';
   window.location.href = 'admin.php';
};