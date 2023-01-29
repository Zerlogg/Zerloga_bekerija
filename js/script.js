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