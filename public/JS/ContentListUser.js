let contentUser = document.querySelector('.content-form')

getListUsers()
.then(function(data) {

    data.forEach(e => {

        let divUser = document.createElement('div')
        divUser.classList = "users"

        let indexUser = document.createElement('p')
        indexUser.classList.add("index-user")
        indexUser.textContent = e.user_id

        let nameUser = document.createElement('p')
        nameUser.classList.add("name-user")
        nameUser.textContent = e.last_name  ;

        let removeBtn = document.createElement('p')
        removeBtn.classList ='remove-btn'
        removeBtn.innerHTML = 'X';

        divUser.appendChild(indexUser)
        divUser.appendChild(nameUser)
        divUser.appendChild(removeBtn)

        contentUser.appendChild(divUser)

    });

})
.catch(function(error) {
  console.log(error);
});

