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

const appartArray = [];
const usersArray = []
let staticAppart = document.querySelector('.static-appart')
let listUsers = document.querySelector('.number-info-total-users-statics');

fetchAnnounces()
  .then(function(data) {
    data.forEach(e => {
      appartArray.push(e);
    });

    let listOverview = document.querySelector('.appart');
    staticAppart.innerHTML = appartArray.length

    for (let i = 1; i < 5; i++) {

        let divElement = document.createElement('div');
        divElement.classList='element-list-overview'
      
        let divIndex = document.createElement('div')
        divIndex.classList='index-element-list-overview'
        let index = document.createElement('p')
        index.innerHTML = i
        divIndex.appendChild(index)
      
        let divInfo = document.createElement('div')
        divInfo.classList='info-element-list-overview'
        let titleInfo = document.createElement('h3')
        titleInfo.classList = 'title-element-list-overview'
        titleInfo.innerText= appartArray[i].title
        let priceInfo = document.createElement('p')
        priceInfo.classList ='price-element-list-overview'
        priceInfo.innerText=`${appartArray[i].price} €`
        divInfo.appendChild(titleInfo)
        divInfo.appendChild(priceInfo)
        divElement.appendChild(divIndex)
        divElement.appendChild(divInfo)
        listOverview.appendChild(divElement)    
    }
  })
  .catch(function(error) {
    console.log(error);
  });


  getListUsers()
  .then(function(data) {
    data.forEach(e => {
      usersArray.push(e);
    });

    let listOverviewUsers = document.querySelector('.users');
    listUsers.innerHTML = usersArray.length
    let indexUser = 0

    for (let i = 0; i < usersArray.length; i++) {
      console.log(usersArray[i]);
      if (usersArray[i].is_staff === 1 || usersArray[i].is_admin ===1 ) {
        indexUser += 1

        let divElement = document.createElement('div');
        divElement.classList='element-list-overview'
      
        let divIndex = document.createElement('div')
        divIndex.classList='index-element-list-overview'
        let index = document.createElement('p')
        index.innerHTML = indexUser
        divIndex.appendChild(index)
      
        let divInfo = document.createElement('div')
        divInfo.classList='info-element-list-overview'
        let titleInfo = document.createElement('h3')
        titleInfo.classList = 'title-element-list-overview'
        titleInfo.innerText= usersArray[i].last_name

        
          let priceInfo = document.createElement('p')
          priceInfo.classList ='price-element-list-overview'
          if (usersArray[i].is_staff ===1) {
            priceInfo.innerText=`staff`  
          }else{
            priceInfo.innerText=`admin`
          }
       
        divInfo.appendChild(titleInfo)
        divInfo.appendChild(priceInfo)
        divElement.appendChild(divIndex)
        divElement.appendChild(divInfo)
        listOverviewUsers.appendChild(divElement)  
      }  
    }
  })
  .catch(function(error) {
    console.log(error);
  });
