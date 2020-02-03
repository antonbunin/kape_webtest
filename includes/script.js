        function validateForm() {
    var name, email, msg;

  name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    msg = document.getElementById("msg").value;
    
  if (name == '' || email == '' || msg == '') {
    alert("You must fill in all fields in this form.")
      return false;
  }
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return false;
}
document.addEventListener('DOMContentLoaded', function(event) {    
    window.onscroll = function() {myFunction()};
    var rightBar = document.getElementById('right_side_column');
    var fixed = rightBar.getBoundingClientRect().top;
    console.log(fixed);
    function myFunction() {
      if (window.pageYOffset >= fixed) {
          rightBar.classList.add("fixed")
      } else {
          rightBar.classList.remove("fixed");
      }
    }
});