//formChecker.js
    var email = document.getElementById("email")
    var pass = document.getElementById("pass")
    var q1 = document.getElementById("quantity1")
    var q2 = document.getElementById("quantity2")
    var q3 = document.getElementById("quantity3")
    var shipping = document.getElementById("shipping")

    var val_email = true;
    var val_password = true;
    var val_shipping = true;
    var val_product = true;

function validateInput()
{
    if(email.value == null || email.value == "" ||!email.value.includes("@") || !email.value.endsWith(".com"))
    {
        val_email = false;
    }

    if(pass.value == null ||pass.value == "")
    {
        val_password = false;
    }

    if(q1.value == null ||typeof(q1.value) == NaN|| q1.value<0 || q2.value == null || q2.value<0 || typeof(q2.value) == NaN|| q3.value<0 || q3.value == null || typeof(q3.value)==NaN)
    {
        val_product = false;
    }

    if(shipping.value == null||shipping.value == "")
    {
        val_shipping = false;
    }

    if (val_email && val_password && val_shipping && val_product)
    {
    	return true;
    }

    if (!val_email || !val_password)
    {
  	alert("Invalid username or password.");
	return false;
    }

    else
    {
  	alert("Must select an option.");
	return false;
    }
}