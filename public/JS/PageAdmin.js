const appartArray = [];
let staticAppart = document.querySelector('.static-appart')

fetchAnnounces()
  .then(function(data) {
    data.forEach(e => {
      appartArray.push(e);
    });

    let listOverview = document.querySelector('.list-overview');
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


