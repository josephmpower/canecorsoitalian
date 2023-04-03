<?php
echo '
<!DOCTYPE html>
<HTML>
<!--21.02.23 Joe Power C00163908--> 
<!--Linking pages to css--><head><title>Cane Cosro</title><link href="style.css"rel="stylesheet" type="text/css"></head>
<!--Header of project webpage--><h1>Cane Corso Italian </h1> 
<!--Header of project webpage--><h2>Laois Local Links</h2>
</style>
</head>
<body>
<!--Linking pages webpage-->
<ul><h3><br>
  <a href="home.html"><button>Home</button></a></li>
  <li><a href="contactus.html"><button>Contact Us</button></a></li>
  <li><a href="aboutus.html"><button>About Us</button></a></li>

</ul>
</h3>
</body>
<br>
<br>

<p>
Cane Corso Italian\'s are relatively only new to Ireland and were only recently recognised<br>
by the IKC in 2017.Our role is to assist with further breed information. This page <br>
offeres perons the oportunity to adopt a Cano Corso Italian.<br>

</p>
<form action="/phpfile.php" target="_blank" method="get">
<label for="Adoption">Adoption Page</label>
<br>

<br>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="firstname" placeholder="Your first name..">
  
  <label for="lname">Last name:</label>
<input type="text" id="lname" name="lastname" placeholder="Your last name..">

<br>
  <label for="Adoption">Select</label>
  <select id="Adoption" name="Adoption">
    <option value="Puppy">Puppy</option>
    <option value="Adult">Adult</option>
  </select>

  <br>
  <br>
  
    
 
 <label for="Adoption">Breed Experience (Select Level)</label>
 <div class="radio-group">
                            <label id="one-label" for="one"><input id="one" type="radio" name="Experience" value="1" class="input-radio-Experience">
                            1</label>
                            <label id="two-label" for="two"><input id="two" type="radio" name="Experience" value="2" class="input-radio-Experience">
                            2</label>
                            <label id="three-label" for="three"><input id="three" type="radio" name="Experience" value="3" class="input-radio-Experience">
                            3</label>

                        </div>


<br>



   <label for="Adoption">Confirm Adoptee is an Adult</label>
   <br>
   <div class="checkbox">
  <input type="checkbox" id="Age" name="Age1" value="Under18">
  <label for= Age1"> Under 18</label><br>
  
  <input type="checkbox" id="Age" name="Age2" value="Over18">
  <label for="Age2"> Over 18</label><br>
  </div>
  <br>

<html>
<body>


  <label for="phone">Enter a phone number:</label>
  <input type="tel" id="phone" name="phone" placeholder="087-9032433" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
  <input type="submit" value="Submit">
</form>

</body>
</html>

</body>
</html>
  <br>
  <input type="submit" value="Submit">
  
  
</form> 
<!-- Fragment Identifer--><a href="#top">Go to top</a>
</body>
</html>


';
?>