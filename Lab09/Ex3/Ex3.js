function validate(){

	let roomOnFire = document.getElementById("strokes").value;
	let inRainbows = document.getElementById("radiohead").value;
	let trick = document.getElementById("alexG").value;
	let shipFree = document.getElementById("free").checked;
	let ship50 = document.getElementById("50").checked;
	let ship5 = document.getElementById("5").checked;
	let mailUser = document.getElementById("email").value;
	let mailPass = document.getElementById("password").value;
	let mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0_\-\.])+\.([A-Za-z]{2,4})$/;

	let submit = true;

	if(roomOnFire == "" || roomOnFire < 0)
	{
		alert("Invalid Quantity");
		submit = false;
	}
	if(inRainbows == "" || inRainbows < 0)
	{
		alert("Invalid Quantity");
		submit = false;
	}
	if(trick == "" || trick < 0)
	{
		alert("Invalid Quantity");
		submit = false;
	}
	if(shipFree == false && ship50 == false && ship5 == false)
	{
		alert("Invalid. Must select a shipping option.");
		submit = false;
	}
	if(mailUser == "" || mailPass == "")
	{
		alert("Invalid, cannot leave Email or Password blank.");
		submit = false;
	}
	if(!mail.match(mailFormat))
	{
		alert("Invalid email format");
		submit = false;
	}
	return submit;
}
