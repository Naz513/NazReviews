
function firstnamefocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your First Name";
}

function middlenamefocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Middle Name";
}

function lastnamefocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Last Name";
}

function suffixfocusFunction() {
    document.getElementById('helpText').innerHTML = "Please Select Your Suffix";
}

function address1focusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Address";
}

function address2focusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Apt No, Suite or Other";
}

function cityfocusFunction() {
    document.getElementById('helpText').innerHTML = "Choose your city";
}

function statefocusFunction() {
    document.getElementById('helpText').innerHTML = "Choose your state";
}

function zipfocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Zip Code";
}

function countryfocusFunction() {
    document.getElementById('helpText').innerHTML = "Select Your Country";
}

function phonefocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Phone Number";
}

function emailfocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Email Address";
}

function messagefocusFunction() {
    document.getElementById('helpText').innerHTML = "Enter Your Message";
}

function submit_form() {

    var first_name = document.getElementById('first_name').value;
    var middle_name = document.getElementById('middle_name').value;
    var last_name = document.getElementById('last_name').value;
    var suffix = document.getElementById('suffix').value;
    var address1 = document.getElementById('address1').value;
    var address2 = document.getElementById('address2').value;
    var city = document.getElementById('city').value;
    var state = document.getElementById('state').value;
    var zip = document.getElementById('zip').value;
    var country = document.getElementById('country').value;
    var phone_number = document.getElementById('phone_number').value;
    var email = document.getElementById('email').value;
    var contactPreference = document.getElementById('contactPreference').value;
    var message = document.getElementById('message').value;



    var formData = new FormData();
    formData.append('first_name', first_name);
    formData.append('middle_name', middle_name);
    formData.append('last_name', last_name);
    formData.append('suffix', suffix);
    formData.append('address1', address1);
    formData.append('address2', address2);
    formData.append('city', city);
    formData.append('state', state);
    formData.append('zip', zip);
    formData.append('country', country);
    formData.append('phone_number', phone_number);
    formData.append('email', email);
    formData.append('contactPreference', contactPreference);
    formData.append('message', message);


    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("POST","PHP/contact_form.php");

    xmlhttp.send(formData);

}
