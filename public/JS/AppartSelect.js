// Utilisez la fonction fetchAnnounceById dans votre code
let titleAppartSelect = document.querySelector('.title-appart-select')
let neighborhoodAppartSelect = document.querySelector('.neighborhood-appart-select')
let priceAppartSelect = document.querySelector('.price')
let descriptionAppartSelect = document.querySelector('.description-appart-select')
let imgAppartSelect = document.querySelector('.container-img-carousel-appart')

const urlParams = new URLSearchParams(window.location.search);
const announceId = urlParams.get('id');

fetchAnnounceById(announceId)
  .then(function(data) {
    console.log(data);
   titleAppartSelect.innerHTML = data.title
   neighborhoodAppartSelect.innerHTML = data.neighborhood
   priceAppartSelect.innerHTML = data.price
   descriptionAppartSelect.innerHTML = data.description
  })
  .catch(function(error) {
    console.log(error);
  });

  fetchPicturesById(announceId)
  .then(function(img) {
    img.forEach(element => {
      let imgAppart = document.createElement('img')
      imgAppart.src = `./public/CSS/Assets/imgappart/${element}`
      imgAppart.classList = 'img-carousel-appart-select'
      imgAppartSelect.appendChild(imgAppart)
    });
  })
  .catch(function(error) {
    console.log(error);
  });


