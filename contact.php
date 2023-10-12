<!DOCTYPE html> 
<html lang="en"> 

<head>  
	<meta charset="UTF-8"> 
	<meta name="viewport" content= 
		"width=device-width, initial-scale=1.0"> 

	<link rel="stylesheet" href="style.css"> 
	<title>FEEDBACK</title> 
</head> 

<body> 
<header> 
               <h1 id="top">S FOOD</h1>
                <h1 id="top1">SOLUTIONS</h1> 
	</header> 
	<div id="FEEDBACK"> 
		<p>FEEDBACK</p> 
		<form action="#"> 
			<div class="form-shape"> 
				<label for="query"> 
					Type of Query 
				</label> 
				<select name="myQuery" id="query"> 
					<option value="sel" selected> 
						Select 
					</option> 
					<option value="ord"> 
						Order related Issues 
					</option> 
					<option value="Site"> 
						Site related Issues 
					</option> 
					<option value="fed"> 
						Complaint related Issues 
					</option> 
					<option value="others"> 
						Others 
					</option> 
				</select> 
			</div> 
			<div class="form-shape"> 
				<label for="name">Name</label> 
				<input type="text" name="myName"
					id="name"
					placeholder="Enter your Name"> 
			</div> 
			<div class="form-shape"> 
				<label for="email">Email-Id</label> 
				<input type="email" name="myEmail"
					id="email"
					placeholder="Enter your email"> 
			</div> 
			<div class="form-shape"> 
				<label for="pho">Phone Number</label> 
				<input type="phone" name="myPhone"
					id="pho"
					placeholder="Enter your Phone no"> 
			</div> 
			<div id="radio"> 
				Are you a member of OnlneFoodShop: 
				Yes <input type="radio" name="eligible"> 
				No <input type="radio" name="eligible"> 
			</div> 
			<div class="form-shape"> 
				<label for="message"> 
					Ellaborate your query 
				</label> 
				<textarea name="mesg" id="message"
					cols="30" rows="10"> 
				</textarea> 
			</div> 
			<input type="submit" value="Submit"> 
			<input type="reset" value="Reset"> 
		</form> 
<footer><footer>Contact no: 98765 43210
Address: A25, Jai Nagar, Arumbakkam, Chennai-40
email: contact@sfoodsols.com</footer> 
	</div> 
</body> 
</html> 
