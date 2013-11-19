function isValidMail(formName){
	var mail = document.forms[formName].dataField.value;
   return validateEmail(document.forms[formName].dataField.value);
}

function validateEmail(email) { 
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}