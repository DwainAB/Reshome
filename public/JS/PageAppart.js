const appartArray = [];

fetchAnnounces()
  .then(function(data) {
    data.forEach(e => {
      appartArray.push(e);
    });

    console.log(appartArray);

    let listAppart = document.querySelector('.list-all-appart');

    for (let i = 0; i < appartArray.length; i++) {
      let appart = document.createElement('div');
      appart.className = 'appart';

      let link = document.createElement('a');
      // Pour Aghiles, mettre le localhost sur le port 81
      link.href = `http://localhost:80/Reshome/AppartSelect.php?id=${appartArray[i].announce_id}`;

      fetchPicturesById(appartArray[i].announce_id)
        .then(function(imgAppart) {
          let img = document.createElement('img');
          img.src = `./public/CSS/Assets/imgappart/${imgAppart[1]}`;
          img.alt = '';
          appart.appendChild(img);

          let title = document.createElement('p');
          title.className = 'title-appart';
          title.textContent = appartArray[i].title;

          let location = document.createElement('p');
          location.className = 'location-appart';
          location.textContent = appartArray[i].neighborhood;

          let price = document.createElement('p');
          price.className = 'price-appart';
          price.innerHTML = `<span class="price-appart-color">${appartArray[i].price} €</span> / night`;

          appart.appendChild(title);
          appart.appendChild(location);
          appart.appendChild(price);
        })
        .catch(function(error) {
          console.log(error);
        });

      link.appendChild(appart);
      listAppart.appendChild(link);
    }
  })
  .catch(function(error) {
    console.log(error);
  });
