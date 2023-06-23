const form = document.querySelector('form');
console.log('test');

form.addEventListener('submit', (e) => {
    e.preventDefault()

  const formData = new FormData(form);

  fetch('http://localhost:8080/api/auth/register', {
    method: 'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      console.log('test');
      // Récupération du token depuis la réponse JSON
      const token = data.token;
      console.log(token);

      // Utilisez le token comme vous le souhaitez (par exemple, stockez-le dans un cookie)
      // ...
      localStorage.setItem('accessToken', token);

      for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        const value = localStorage.getItem(key);
        console.log(`Clé: ${key}, Valeur: ${value}`);
      }

      window.location.href = "http://localhost/Reshome/index.php";

    })
    .catch(error => {
      console.log(error);
    });
});