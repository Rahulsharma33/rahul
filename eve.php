<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-image:url("img/meet3.png");
}
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
header {
    background-color:lightgreen;
    color: red;
}
button {
        
		background-color:hotpink;
		{
</style>
</head>
<body>
 
<div class="container">

<header>
   <h1 style=color:blue;>Booked Events:</h1>
  <button><a href="register.php" >Create A New Event</a></button>

</a>
</header>
  <h1 style=color:Red>Search:</h1>
<form action="/action_page.php">
  <p1 style=color:hotpink><mark>Event Name:</mark></p1><br>
  <input type="text" name="firstname" value="">
  <br>
<p2 style=color:hotpink> <mark> With Status:</mark></p2><br>
   <select name="cars">
    <option value="ALl">All</option>
    <option value="Active">Active</option>
    <option value="Archived">Archived</option>
   
  </select>
  <br><p3 style=color:hotpink><mark>THAT OCCURS </mark><br><mark> WITHIN THE NEXT:</mark></p3>
   <select name="Days">
    <option value="seven">7days</option>
    <option value="fourtheen">14days</option>
    <option value="twentyone">21days</option>
    <option value="twentyeight">28days</option>
  </select><br>
  <input type="submit" value="Search now">
</form> 

<article>
  <div style="background-color:Green;color:white;padding:20px;">
  <h2>Today's Meeting :-</h2>
  <?php echo 'Event Name -: One India';
   
       
  ?>
  <br>
  <?php 
   echo 'Location -:LPU';
  ?>
  <form action="/action_page.php">
   <br>
  <p></p>
  </form>
</div> 
</article>

<article>
  <div style="background-color:Green;color:white;padding:20px;">
  <h2>FILTER CURRENT RESULTS:-</h2>
  <form action="/action_page.php">
   <br>
  <input type="text" name="firstname" value="">
  <input type="submit" value="Clear">
  <p></p>
  </form>
</div> 
</article>

</div>

</form> 


</body>
</html>
