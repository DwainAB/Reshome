let btnRservation = document.querySelector('.test')




btnRservation.addEventListener('submit', (e)=>{
    e.preventDefault()

    let announceId = document.querySelector('#announce_id').value
    let beginStart = document.querySelector('#begin-start').value
    let endDate = document.querySelector('#end_date').value
    let reservationRequest = document.querySelector('#reservation_request').value
    console.log(announceId, beginStart, endDate, reservationRequest);

    

    reservation(announceId, beginStart, endDate, reservationRequest)
    .then(function(data) {
    console.log(data);
  
    })
    .catch(function(error) {
      console.log(error);
    });
})