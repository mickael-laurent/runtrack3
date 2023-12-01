var compteur = 0;

function addone() {
  compteur++;
  var compteurElement = document.getElementById('compteur');
  compteurElement.textContent = compteur;
}

var button = document.getElementById('button');
button.addEventListener('click', addone);