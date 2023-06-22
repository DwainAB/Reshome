function deleteAllCookies() {
  const cookies = document.cookie.split(";");

  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i];
    const eqPos = cookie.indexOf("=");
    const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
  }
}

deleteAllCookies()

const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
    e.preventDefault()

  const formData = new FormData(form);

  fetch('http://localhost:8080/api/auth/login', {
    method: 'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      // Récupération du token depuis la réponse JSON
      const token = data.token;

    // Stocker le token dans le Local Storage
      localStorage.setItem('accessToken', token);

      // Utilisez le token comme vous le souhaitez (par exemple, stockez-le dans un cookie)
      // ...
   

    })
    .catch(error => {
      console.log(error);
    });
});