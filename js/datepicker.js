let date = document.getElementById('date')


date.addEventListener('change',(e)=>{
  let dateVal = e.target.value
  document.getElementById('dateSelected').innerText = dateVal
})

 