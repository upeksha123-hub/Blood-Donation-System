function submitform(){
  const form= document.getElementById('myForm');

    form.addEventListener('submit', function(event)
     {
    event.preventDefault(); 
  
    alert("Appointment successfully submitted!");
  });  
}


