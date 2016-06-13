<?php 


 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Company Name</title>
 
    <link rel="stylesheet" href="./css/main.css">

 </head>
 <body>

 <div id="center">
 	<br> <br>
 	<div id="center" style="height:1000px;">
 	<p>
 		We are pleased that you are interested to join our team as a reseller. Now in order to go through the application procedure we would need you to fill out the application form below and send it to us
 	</p>
 	<form method="post" action="send.php">
 		<label for="Name">Name <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
 		<input type="text" name="name" id="name" required/>&nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="Street">Street <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="street" id="street" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="POBox">PO Box <span style="color:red;">*</span></label> &nbsp;&nbsp;
		<input type="text" name="pobox" id="pobox" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="City">City <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="city" id="city" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="Area">Area <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="area" id="area" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="Emirate" >Emirate <span style="color:red;">*</span></label> &nbsp;&nbsp;
		<select name="emirate" style="width: 160px;">
		<option value="Dubai">Dubai</option>
		<option value="Abu Dhabi">Abu Dhabi</option>
		<option value="Ras Al Khaimah">Ras Al Khaimah</option>
		<option value="Um Al Quain">Um Al Quain</option>
        <option value="Ajman">Ajman</option>
        <option value="Sharjah">Sharjah</option>
        </select>
		<br>
		<label for="PhoneNumber">Phone/Mobile Number <span style="color:red;">*</span></label>
		<input type="text"  name="phone" style="margin-left: -85px;"  required/> &nbsp;&nbsp;&nbsp;&nbsp; 
		<br>
		<label for="skype">Skype ID <span style="color:red;">*</span></label> 
		<input type="text" name="skype" id="skype" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="Email">Email <span style="color:red;">*</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text"  name="email"  required/> &nbsp;&nbsp;&nbsp;&nbsp; 
		<br>
		<label for="Visa">Current Visa Status <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
		<select name="visa" style="    margin-left: -83px;">
		<option value="Citizen">Citizen</option>
		<option value="Parent/Husband">Parent/Husband Visa</option>
		<option value="Student">Student Visa</option>
		<option value="Transit">Transit Visa</option>
        <option value="Visit">Visit Visa</option>
        </select>
        <br>
		<label for="Occupation">Current Occupation <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="occupation" id="occupation" style="    margin-left: -83px;" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="married" style="    margin-right: -50px;"> Marriage Status</label>  &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio" checked="checked"  id="marriage" name="marriage" >Single
		<input type="radio" id="marriage" name="marrige" >Married
		<br> 
		<label for="Nationality">Nationality <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="nationality" id="nationality" style="margin-left: -30px;" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<label for="hourspd">Number of hours per day <span style="color:red;">*</span></label> &nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="hourspd" id="hourspd" style="    margin-left: -115px;" required/> &nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		<input type="checkbox" checked="checked" name="receive" value="receive"> I would like to receive a copy of the form submitted. <br>	
		<input type="submit" name="send" value="SEND APPLICATION" style=" height: 30px; width: 150px; background-color: rgb(222, 46, 34); color: white;margin-left: 40%;">
 	</form>
 	<br>
 	</div>
 	<br>
 </div>
 
 </body>
 </html>
