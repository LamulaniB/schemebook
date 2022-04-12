<!DOCTYPE html>
<html>
<head>
<title> Selecting Table </title>

<link rel="stylesheet" href="index.css">
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</head>

<body>




 <form action="/action_page.php">
  <label for="fname">First Name</label>
  <input type="text" id="fname" name="firstname" placeholder="Your name..">

  <label for="lname">Last Name</label>
  <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  <label for="country">Country</label>
  <select id="country" name="country">
    <option value="australia">Australia</option>
    <option value="canada">Canada</option>
    <option value="usa">USA</option>
  </select>

  <input type="submit" value="Submit">
</form>


</body>
</html>

