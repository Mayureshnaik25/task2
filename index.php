<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

  
/* Style the header */
header {
  background-color: #A569BD ;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #D2B4DE;
  padding: 20px;
  text-align: center;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(40, 114, 148);
  padding: 10px;
  text-align: center;
  color: rgb(15, 3, 3);
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

  <h2><a href="index.html">HOME</a> </h2>
  <a href="aboutme.html">About Me</a>
  <a href="conatct.html">Contact Me</a>

<header>
  
  <h2>MAYURESH NAIK</h2>
</header>

<section>
  <nav>
    <ul>
     <img src="WhatsApp Image 2021-09-28 at 3.34.57 PM.jpeg" height=60% width=60% >
    </ul>
  </nav>
  
  <article>
    <h1>About</h1>
    <p>Here's a short breif about me:
I am a student of Goa College of Engineering.
      <br>
        
      </p>  
        
  </article>
</section>

<footer>
  <p>Goa Engineering College</p>
</footer>

</body>
</html>
