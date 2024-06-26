document.querySelector('.confirm-button').classList.add("disabled");

function showPopup() {
  document.querySelector('.confirm-button').classList.remove("disabled");
  document.querySelector('.select-item-yes').classList.add('selected');
  document.querySelector('.select-item-no').classList.remove('selected');

  
  if(document.getElementById('popup'))
    document.getElementById('popup').style.display = 'block';
}

function closePopup() {
  document.querySelector('.confirm-button').classList.remove("disabled");
  document.querySelector('.select-item-no').classList.add('selected');
  document.querySelector('.select-item-yes').classList.remove('selected');

  
  if(document.getElementById('popup')) {
    var divs = document.querySelectorAll('.select-item');
    divs.forEach(function(div) {
      div.classList.remove('selected');
    });
    document.getElementById('popup').style.display = 'none';
  }

  var select = document.getElementById("snackSelect");
  var selectedOptions = select.options;

  // Itera su tutte le opzioni selezionate tranne l'ultima
  for (var i = 0; i < selectedOptions.length; i++) {
    if(i != 1) {
      selectedOptions[i].selected = false; // Deseleziona l'opzione
    }
  }
}

document.addEventListener('DOMContentLoaded', function () {
  // Controlla se la div "SI" è selezionata
  if(document.getElementById('select-item-yes selected')) {
    document.querySelector('.confirm-button').classList.remove("disabled");
    document.getElementById('popup').style.display = 'block';
  }
  if(document.getElementById('select-item-no selected')) {
    document.querySelector('.confirm-button').classList.remove("disabled");
  }
});