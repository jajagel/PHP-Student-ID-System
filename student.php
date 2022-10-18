<!DOCTYPE html>
<html>
<head>
	<title>Student ID System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:#053012;">
<div class="container">
	<div class="mx-auto p-5" style="background-color: #FFFFFF; max-width: 60%;" >
			<form action = "studinfo.php" method = "get">
				<h5 class="text-center mb-3">Student Information</h5>
				First Name: <input class="form-control" size = 10px; type = "text" name = "fname"><br/>
				Last Name: <input class="form-control" type = "text" name = "lname"><br/>
				Middle Initial: <input class="form-control" type = "text" name = "mname" maxlength = "1"><br/>
				School ID: <input class="form-control" type = "text" name = "skulid" maxlength = "11"><br/>
				Course: <select class="form-control dropdown-toggle" data-toggle="dropdown" name ="course">
							<option selected="selected">BSIT</option>
							<option>BSED</option>
							<option>BSDA</option>
							<option>BSF</option>
							<option>BSCRIM</option>
							<option>BSCS</option>
						</select><br/>
				Address: <input class="form-control" type = "text" name = "address"><br/>
				Birthdate: <input class="form-control"  type = "date" name = "bday"><br/>

				<h5 class="text-center mt-4 mb-3">Contact Person or Guardian Information</h5>
				Contact Person Name: <input class="form-control" type = "text" name = "cpname"><br/>
				Contact Person Number: <input class="form-control" name="cpnum"
									    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
									    type = "number"
									    maxlength = "11"
									 /><br/>
	
				<input class ="btn btn-primary btn-block mt-2 mb-5" style="background-color: #053012; width:100%;"type ="submit" name="submit">
			</form>
	</div>
</div>
</body>
</html>
