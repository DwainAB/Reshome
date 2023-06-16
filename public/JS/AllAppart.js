// Section AllAppart

// Coeur images

var heartRegular = document.getElementById('heart-regular');
var heartSolid = document.getElementById('heart-solid');

heartRegular.addEventListener('click', function() {
  heartRegular.style.display = 'none';
  heartSolid.style.display = 'block';
});

heartSolid.addEventListener('click', function() {
  heartSolid.style.display = 'none';
  heartRegular.style.display = 'block';
});


// Assistance 


var btnAssist = document.getElementById('btn-assist');
var assist = document.getElementById('assist');
var btnCloseAssist = document.getElementById('btn-close-assist');

btnAssist.addEventListener('click', function() {
  btnAssist. style.display = 'none';
  btnCloseAssist.style.display = 'block';
});

  btnCloseAssist.addEventListener('click', function() {
    assist.style.display = 'none';
    btnAssist. style.display = 'block';
});