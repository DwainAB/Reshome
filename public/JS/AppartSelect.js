// Utilisez la fonction fetchAnnounceById dans votre code
let titleAppartSelect = document.querySelector('.title-appart-select')
let neighborhoodAppartSelect = document.querySelector('.neighborhood-appart-select')
let priceAppartSelect = document.querySelector('.price')
let descriptionAppartSelect = document.querySelector('.description-appart-select')
let imgAppartSelect = document.querySelector('.container-img-carousel-appart')
let arrowRight = document.querySelector('.carousel-appart-select-arrowright')
let firstImg = document.querySelector('.first-img-appart-select')
let arrowLeft = document.querySelector('.carousel-appart-select-arrowleft')

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
    let nbimg = 0;

    arrowRight.addEventListener('click', () => {
      if (nbimg === img.length - 1) {
        nbimg = 0;
      } else {
        nbimg += 1;
      }
      updateImage(img, nbimg);
    });

    arrowLeft.addEventListener('click', () => {
      if (nbimg === 0) {
        nbimg = img.length - 1;
      } else {
        nbimg -= 1;
      }
      updateImage(img, nbimg);
    });

    function updateImage(img, nbimg) {
      imgAppartSelect.innerHTML = ''; // Effacer les anciennes images
      let imgAppart = document.createElement('img');
      imgAppart.src = `./public/CSS/Assets/imgappart/${img[nbimg]}`;
      imgAppart.classList = 'img-carousel-appart-select';
      imgAppartSelect.appendChild(imgAppart);
    }

    updateImage(img, nbimg);
  })
  .catch(function(error) {
    console.log(error);
  });

