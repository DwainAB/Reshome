const appartArray = [];
const formLeft = document.querySelector('.form-left-')

fetchAnnounces()
  .then(function(data) {
    data.forEach(e => {
      appartArray.push(e);
    });

   for (let index = 0; index < appartArray.length; index++) {
    let divField = document.createElement('div')
    divField.classList = 'field-form-add-appart'

    let nameField = document.createElement('p')
    
   }


  })
  .catch(function(error) {
    console.log(error);
  });

  console.log("test");

getInfoUser()
  .then(function(data) {
  console.log(data);
  })
  .catch(function(error) {
    console.log(error);
  });
