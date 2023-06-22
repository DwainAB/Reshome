// api.js
let api_url = "http://localhost:8080"

function fetchAnnounces() {
    return fetch('http://localhost:8080/api/get/announces')
      .then(function(response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Erreur lors de la requête');
        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }

function getListUsers() {
    return fetch('http://localhost:8080/api/get/users?page=1')
      .then(function(response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Erreur lors de la requête');
        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }

  function getInfoUser() {
    const token = localStorage.getItem("accessToken"); // Récupération du token depuis le localStorage
  
    return fetch('http://localhost:8080/api/get/self', {
      headers: {
        'Authorization': `Bearer ${token}` // Ajout de l'en-tête d'autorisation avec le token
      }
    })
      .then(function(response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Erreur lors de la requête');
        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }
  


function fetchAnnounceById(announceId) {
    let apiUrl = `${api_url}/api/get/announce?id=${announceId}`;
  
    return fetch(apiUrl)
      .then(function(response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Erreur lors de la requête');
        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }
  
function fetchPicturesById(announceId) {
    let apiUrl = `${api_url}/api/get/pictures?id=${announceId}`;
  
    return fetch(apiUrl)
      .then(function(response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Erreur lors de la requête');
        }
      })
      .catch(function(error) {
        console.log(error);
      });
  }



  function getCookie(name) 
  {
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
  

  // Récupérer tous les éléments du Local Storage
for (let i = 0; i < localStorage.length; i++) {
  const key = localStorage.key(i);
  const value = localStorage.getItem(key);
  console.log(`Clé: ${key}, Valeur: ${value}`);
}
