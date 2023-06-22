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
      console.log('test');
      // Récupération du token depuis la réponse JSON
      const token = data.token;
      console.log(token);

      // Utilisez le token comme vous le souhaitez (par exemple, stockez-le dans un cookie)
      // ...
      
        function setCookie(name, value, days) {
            const expirationDate = new Date();
            expirationDate.setTime(expirationDate.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "expires=" + expirationDate.toUTCString();
            document.cookie = name + "=" + value + "; " + expires + "; path=/";
        }
        
        // Exemple d'utilisation pour stocker un token nommé "accessToken" pendant 7 jours
        setCookie("accessToken", token, 7);

      // Effectuez des actions supplémentaires en fonction de la réponse de l'API
      // ...

      window.location.href = 'http://localhost/Reshome/index.php';

    })
    .catch(error => {
      console.log(error);
    });
});