<div class="container">
  <h2>User Details</h2>
  <h3 style="background-color: beige"><?php if(isset($_SESSION["user_add"])){echo $_SESSION["user_add"]; unset($_SESSION["user_add"]);}?></h3>
  <form  name="userdetails" method="post" >
  	
  	<input type="hidden" name="csrf_token" value="<?php echo $csrftoken; ?>">
    <label for="username">First Name</label>
    <input type="text" name="username" id="username" placeholder="John"/>


    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="john@doe.com"/>

    <label for="contactno">Contact No</label>
    <input type="text" name="contactno" id="contactno" placeholder="9999999999"/>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Message......."></textarea>

    <input type="hidden" name="form_add" value="userdetails">
    <button type="submit">Submit</button>

  </form>
</div>