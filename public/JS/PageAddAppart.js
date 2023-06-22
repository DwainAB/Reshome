const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // Empêche le rechargement de la page
  
  const formData = new FormData(form);

  // Récupération du token depuis le cookie
  const token = getCookie("accessToken");

  // Vérification si le token est présent
  if (token) {
    // Ajout du token en tant qu'en-tête HTTP
    const headers = new Headers();
    headers.append('Authorization', `Bearer ${token}`);
    console.log(headers);

    fetch('http://localhost:8080/api/post/announce', {
      method: 'POST',
      body: formData,
      headers: headers // Ajoutez l'en-tête à la requête
    })
      .then(response => response.json())
      .then(data => {
        // Effectuez des actions supplémentaires en fonction de la réponse de l'API
        // ...
        
        // Redirigez l'utilisateur vers une autre page
      })
      .catch(error => {
        console.log(error);
      });
  } else {
    console.log("Token non trouvé");
  }
});

function getCookie(name) {
  const cookies = document.cookie.split(';');
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i].trim();
    if (cookie.startsWith(name + '=')) {
      return cookie.substring(name.length + 1);
    }
  }
  return null;
}

// Récupération du token depuis le cookie "accessToken"
const token = getCookie("accessToken");

if (token) {
  // Utilisez le token comme vous le souhaitez
  console.log(token);
} else {
  // Le cookie n'est pas trouvé ou le token est manquant
  console.log("Token non trouvé");
}
