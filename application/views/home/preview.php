<div class="container">
<h2>Review the data before submit</h2>  
<form  name="userdetailsp" method="post" action="home/addUser">
  	<input type="hidden" name="csrf_token_preview" value="<?php echo $csrftokenpreview; ?>">
    <input type="hidden" name="username" id="username" value="<?php echo $_POST["username"]; ?>"/>
    <input type="hidden" name="email" id="email" value="<?php echo $_POST["email"]; ?>"/>
    <input type="hidden" name="contactno" id="contactno" value="<?php echo $_POST["contactno"]; ?>"/>
    <textarea id="message" name="message" style="display:none;"><?php echo $_POST["message"]; ?></textarea>   
<div class="divTable">
	<div class="divTableBody">
		<div class="divTableRow">
			<div class="divTableCell">Name:</div>
			<div class="divTableCell"><?php echo $_POST["username"];?></div>
		</div>
		<div class="divTableRow">
			<div class="divTableCell">Email:</div>
			<div class="divTableCell"><?php echo $_POST["email"];?></div>
		</div>
		<div class="divTableRow">
			<div class="divTableCell">Contact Number:</div>
			<div class="divTableCell"><?php echo $_POST["contactno"];?></div>
		</div>
		<div class="divTableRow">
			<div class="divTableCell">Message:</div>
			<div class="divTableCell"><?php echo $_POST["message"];?></div>
		</div>
	</div>
</div>
<input type="hidden" name="form_preview" value="userdetails">
<button type="submit">Confirm</button>

</form>
</div>
