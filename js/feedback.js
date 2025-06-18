function submitfeedback(){
    const form= document.getElementById('myForm');

    form.addEventListener('submit', function(event) {
    event.preventDefault(); 
  
    alert("Your Feedback submitted!");
  });
}