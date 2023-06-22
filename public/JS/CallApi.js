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



