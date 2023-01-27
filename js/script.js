var cards = document.querySelectorAll('.bakery_card');

[...cards].forEach((bakery_card)=>{
    bakery_card.addEventListener( 'click', function() {
        bakery_card.classList.toggle('is-flipped');
  });
});