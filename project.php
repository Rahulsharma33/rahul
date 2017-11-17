<!DOCTYPE html>

<html lang="en">

 <body>



    <h1>Create an account</h1>

    <form class="form" action="userform.php" method="post" >
      

     firsr name  <input type="text" placeholder="First Name" name="firstname" /> <!-- required for vaildation --><br/>
      last name <input type="text" placeholder="Last Name" name="lastname"  /> <!-- required for vaildation --><br/>

       user name<input type="text" placeholder="User Name" name="username"  /> <!-- required for vaildation --><br/>

                  <label class="control-label" for="age"> Age: </label>
                                        <select id="age" class="form-control" >
                                                <option value="10-17" > 10-17   </option>
                                                <option value="18-25" > 18-25 </option>
                                                <option value="25+" > 25+ </option>
                                        </select><br/>
                     <label class="control-label" for="gender"> Gender: </label>

                    <input type="radio" name="gender" value="Male" /> Male
                    <input type="radio" name="gender" value="Female" /> Female <br/>

    email   <input type="email" placeholder="Email" name="email" /><br/>
     password <input type="password" placeholder="Password" name="password" autocomplete="new-password"  /><br/>
      vonfirm password<input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password"  /><br/>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>


</body>

</html>﻿