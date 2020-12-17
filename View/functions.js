
const startButton = document.getElementById('start');
startButton.addEventListener('click', function(){
    startButton.classList.remove('visible');
    decrement();
  setTimeout(affichage, temp - 1000);
})

let decompte = function(i){
  document.getElementById('compteur').innerHTML = i + 's';
}

let affichage = function(){
    document.getElementById("compteur").innerHTML = 'Fin compte à rebours';
    alert("GameOver");
    document.location.reload();
}
var temp = 0;
var decrement = function(){
    for (let i = 120; i > -1; i--) {
        setTimeout((function(s){
            return function(){
              decompte(s);
            }
        })(i), temp);
        temp +=1000;
    }
}

const cards = document.querySelectorAll('.memory-card');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
let matchedCards= [];

function flipCard() {
  if (lockBoard) return;
  if (this === firstCard) return;

  this.classList.add('flip');

  if (!hasFlippedCard) {
    hasFlippedCard = true;
    firstCard = this;

    return;
  }

  secondCard = this;
  checkForMatch();
}
function reponse(reponsePHP) {
  console.log(reponsePHP); 

    if (reponsePHP.resultat) {
        $('#resultat').html(reponsePHP.resultat);	
    }

}

function checkForMatch() {
  let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
  if (isMatch == true){
      matchedCards.push('salma');
      if (matchedCards.length == 6){
       let chrono = document.getElementById('compteur').textContent;
       chrono = parseInt(chrono);

       $.get('index.php', { chrono : chrono, op : 'new' }, reponse, 'json');

        alert('vous avez gagné');
        document.location.reload();
      }
  }
    console.log(isMatch);
  isMatch ? disableCards() : unflipCards();

}

function disableCards() {
  firstCard.removeEventListener('click', flipCard);
  secondCard.removeEventListener('click', flipCard);

  resetBoard();
}

function unflipCards() {
  lockBoard = true;

  setTimeout(() => {
    firstCard.classList.remove('flip');
    secondCard.classList.remove('flip');

    resetBoard();
  }, 1500);
}

function resetBoard() {
  [hasFlippedCard, lockBoard] = [false, false];
  [firstCard, secondCard] = [null, null];
}

(function shuffle() {
  cards.forEach(card => {
    let randomPos = Math.floor(Math.random() * 12);
    card.style.order = randomPos;
  });
})();

cards.forEach(card => card.addEventListener('click', flipCard));


