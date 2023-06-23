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
  

// Récupérer tous les éléments du Local Storage
for (let i = 0; i < localStorage.length; i++) {
  const key = localStorage.key(i);
  const value = localStorage.getItem(key);
  console.log(`Clé: ${key}, Valeur: ${value}`);
}



//////////////////////////////////////:fonction global

let infoLogin = document.querySelector('.info-login')
let infoLogout = document.querySelector('.info-logout')
let infoAdmin = document.querySelector('.info-admin')
const token = localStorage.getItem("accessToken");


if(token){
  infoLogin.style.display="none";
  infoLogout.style.display="block";

  getInfoUser()
  .then(function(data) {
  console.log(data);
    if (data.is_admin === 1) {
        infoAdmin.innerHTML="Page Admin"
    }else{
      infoAdmin.innerHTML="test"
    }
  })
  .catch(function(error) {
    console.log(error);
  });

}else{
  infoLogin.style.display="block"
  infoLogout.style.display="none";
}

infoLogout.addEventListener('click', ()=>{
  console.log('test');
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
  localStorage.clear()
  location.reload()
})
