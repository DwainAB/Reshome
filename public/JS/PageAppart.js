const appartArray = [];

fetchAnnounces()
  .then(function(data) {
    data.forEach(e => {
      appartArray.push(e);
    });

    let listAppart = document.querySelector('.list-all-appart');

    for (let i = 0; i < appartArray.length; i++) {
      let appart = document.createElement('div');
      appart.className = 'appart';

      let link = document.createElement('a');
      //Pour Aghiles mettre le localhost sur le port 81
      link.href = `http://localhost:81/Reshome/AppartSelect.php?id=${appartArray[i].announce_id}`;

      let img = document.createElement('img');
      img.src = './public/CSS/Assets/imgAppartsup.png';
      img.alt = '';

      let title = document.createElement('p');
      title.className = 'title-appart';
      title.textContent = appartArray[i].title;

      let location = document.createElement('p');
      location.className = 'location-appart';
      location.textContent = appartArray[i].neighborhood;

      let price = document.createElement('p');
      price.className = 'price-appart';
      price.innerHTML = `<span class="price-appart-color">${appartArray[i].price} €</span> / night`;

      appart.appendChild(img);
      appart.appendChild(title);
      appart.appendChild(location);
      appart.appendChild(price);

      link.appendChild(appart);

      listAppart.appendChild(link);
    }
  })
  .catch(function(error) {
    console.log(error);
  });