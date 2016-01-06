/**
 * Created by Kacper on 14.12.2015.
 */

/*

function  validateForm(){
    var first_name = document.forms["registration_form"]["first_name"].value;
    var last_name = document.forms["registration_form"]["last_name"].value;
    var profile_name = document.forms["registration_form"]["profile_name"].value;
    var email = document.forms["registration_form"]["email"].value;

    var password = document.forms["registration_form"]["password"].value;
    var password2 = document.forms["registration_form"]["password_confirmation"].value;

    var string_pattern1 = new RegExp("[a-zA-Z]+");
    var string_pattern2 = new RegExp("[a-zA-Z0-9_-]+");
    var email_pattern = new RegExp("[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$");
    var pass_pattern = new RegExp("^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$");
    var error = false;
    if ( first_name == null || first_name == "" || string_pattern1.test(first_name) != true ) {
        alert("Name must be filled out");
        return false;
    }
    if ( last_name == null || last_name == "" || string_pattern1.test(last_name) != true ) {
        document.getElementsByClassName("last_name").style.display="block";
        error = true;
    }
    if ( profile_name == null || profile_name == "" ||  string_pattern2.test(profile_name) != true ) {
        document.getElementsByClassName("profile_name").style.display="block";
        error = true;
    }
    if ( email == null || email == "" || email_pattern.test(email)!= true ) {
        document.getElementsByClassName("email").style.display = "block";
        error = true;
    }
    if ( password == null || password == "" || pass_pattern.test(password)!= true ) {
        document.getElementsByClassName("password").style.display="block";
        error = true;
    }
    if ( password != password2 ) {
        document.getElementsByClassName("password").style.display="block";
        error = true;
    }

    if ( error == true ) {
        alert("Name must be filled out");
        return false;
    } else {
        return true;
    }
}
*/