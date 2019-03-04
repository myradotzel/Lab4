//formChecker.js

function validateInput()
{
    var email = document.getElementById("email").value
    var pass = document.getElementById("pass").value
    var q1 = document.getElementById("quantity1").value
    var q2 = document.getElementById("quantity2").value
    var q3 = document.getElementById("quantity3").value
    var shipping = document.getElementById("shipping").value

    var val_email = email.includes("@") && email.endsWith(".com");

    if(email == null)
    {
        val_email = false;
    }

    if(pass == null)
    {
        var val_password = false;
    }

    if(q1 == null || q2 == null || q3 == null)
    {
        var val_product = false;
    }

    if(shipping == null)
    {
        var val_shipping = false;
    }

    if (val_email && val_password && val_shipping && val_product)
    {
    	return true;
    }

    else if (!val_email || !val_password)
    {
  	alert("Invalid username or password.");
	document.location.reload(true);
	return false;
    }

    else
    {
  	alert("Must select an option.");
	document.location.reload(true);
	return false;
    }
}