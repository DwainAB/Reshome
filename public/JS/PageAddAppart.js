getInfoUser()
  .then(function(data) {
  console.log(data);
    if (data.is_admin !== 1) {
        window.location.href = 'http://localhost/Reshome/index.php';
    }
  })
  .catch(function(error) {
    console.log(error);
  });

const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault(); // Empêche le rechargement de la page

  const formData = new FormData(form);

  // Récupération du token depuis le Local Storage
  const token = localStorage.getItem("accessToken");
  console.log(token);

  // Vérification si le token est présent
  if (token) {
    fetch('http://localhost:8080/api/post/announce', {
      method: 'POST',
      headers: {
        'Authorization': `Bearer ${token}` // Ajout du token dans l'en-tête de la requête
      },
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        if (data.success) {
          console.log("Le token a été envoyé avec succès !");
          // Effectuez d'autres actions ou redirigez l'utilisateur si nécessaire
        } else {
          console.log("Erreur lors de l'envoi du token.");
          // Gérez l'erreur en conséquence
        }
      })
      .catch(error => {
        console.log(error);
      });
  } else {
    console.log("Token non trouvé");
  }
});
