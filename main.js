function validate(formName) {
    var form = document.forms[formName];

    var emailLoginInput = form.email;
    var passwordLoginInput = form.password;

    var errors = "";
    var validEmailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    if (emailLoginInput.value.match(validEmailRegex)) {
        // Email address is valid!
    } else {
        errors = errors + "Email address is invalid!\n";
        emailLoginInput.focus();
    }

    if (passwordLoginInput.value.length == 0 || passwordLoginInput.value.length < 8 || passwordLoginInput.value.length > 64) {
        errors = errors + "Password should be 8-64 characters long!\n";
        passwordLoginInput.focus();
    }

    if (formName == "signupForm") {
        var firstNameInput = form.firstName;
        var lastNameInput = form.lastName;

        var validNameRegex = /^[a-zA-Z]$/;

        if (firstNameInput.value.length == 0 || firstNameInput.value.match(validNameRegex).length == 0) {
            errors = errors + "First name cannot be empty and it must contain only letters!\n";
            firstNameInput.focus();
        }

        if (lastNameInput.value.length == 0 || lastNameInput.value.match(validNameRegex).length == 0) {
            errors = errors + "Last name cannot be empty and it must contain only letters!\n";
            lastNameInput.focus();
        }
    }

    if (errors.length == 0) {
        // No errors, return valid!
        return true;
    } else {
        // There were some errors, show errors and return invalid!
        alert(errors);
        return false;
    }
}


function donation(){

    var form = document.forms["donationform"];
    var firstNameInput = form.firstName;
    var lastNameInput = form.lastName; 
    var email = form.email;
    var ccname = form.ccname;
    var ccnumber = form.ccnumber;
    var ccexp = form.ccexpiration;
    var cvv = form.cvv;
    var errors = "";

    var validNameRegex = /^[a-zA-Z]$/;

        if (firstNameInput.value.length == 0 || firstNameInput.value.match(validNameRegex).length == 0) {
            errors = errors + "First name cannot be empty and it must contain only letters!\n";
            firstNameInput.focus();
        }

        if (lastNameInput.value.length == 0 || lastNameInput.value.match(validNameRegex).length == 0) {
            errors = errors + "Last name cannot be empty and it must contain only letters!\n";
            lastNameInput.focus();
        }
    


    var validEmailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

    if (email.value.match(validEmailRegex)) {
        // Email address is valid!
    } else {
        errors = errors + "Email address is invalid!\n";
        email.focus();
    }

    var validccnameregx = /^([\w]{3,})+\s+([\w\s]{3,})+$/i;

     if (ccname.value.match(validccnameregx)) {
        // Email address is valid!
    } else {
        errors = errors + "CC name is invalid!\n";
        ccname.focus();
    }

    var validccregex = /^4[0-9]{12}(?:[0-9]{3})?$/;

    if (ccnumber.value.length == 0 || ccnumber.value.match(validccregex).length == 0){
        errors = errors + "Credit Card Number cannot be empty and it must contain 14-16 numbers\n";
        ccnumber.focus();
    }

    var validexpdateregex = /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/;


    if (ccexp.value.length == 0 || ccexp.value.match(validexpdateregex).length == 0){
        errors = errors + "credit card exp date is not valid\n";
        ccexp.focus();
    }

    var validcvvregex = /^[0-9]{3,4}$/;

    if (cvv.value.length == 0 || cvv.value.match(validcvvregex).length == 0){
        errors = errors + "CVV is not valid\n";
        cvv.focus();
    }

         if (errors.length == 0) {
        // No errors, return valid!
        return true;
    } else {
        // There were some errors, show errors and return invalid!
        alert(errors);
        return false;
    }
}