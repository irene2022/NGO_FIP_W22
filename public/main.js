//(() => {

    function validateContactForm() {

        var valid = true;
        Array.from(document.getElementsByClassName("info")).forEach(e => e.innerHTML = "");
        Array.from(document.querySelectorAll(".input-field")).forEach(e => e.style.border =  '#e0dfdf 1px solid');
        var userName = document.getElementById("userName").value;
        var userEmail = document.getElementById("userEmail").value;
        var subject = document.getElementById("subject").value;
        var content = document.getElementById("content").value;

        if (userName == "") {       // this function checks if the name field is empty and appends an error message to the html
            Array.from(document.querySelectorAll("#userName-info")).forEach(e => e.innerHTML = " Required.");
            document.getElementById("userName").style.border =  '#e66262 1px solid';
            valid = false;
        }

        if (userEmail == "") {
            Array.from(document.querySelectorAll("#userEmail-info")).forEach(e => e.innerHTML = " Required.");
            document.getElementById("userEmail").style.border =  '#e66262 1px solid';
            valid = false;
        }

        if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {     // a regular expression which validifies an email with a specific pattern
            Array.from(document.querySelectorAll("#userEmail-info")).forEach(e => e.innerHTML = "Invalid Email Address.");
            document.getElementById("userEmail").style.border =  '#e66262 1px solid';
            valid = false;
        }

        if (subject == "") {
            Array.from(document.querySelectorAll("#subject-info")).forEach(e => e.innerHTML = "Required.");
            document.getElementById("subject").style.border =  '#e66262 1px solid';
            valid = false;
        }

        if (content == "") {
            Array.from(document.querySelectorAll("#userMessage-info")).forEach(e => e.innerHTML = "Required.");
            document.getElementById("content").style.border =  '#e66262 1px solid';
            valid = false;
        }

        return valid;
    }

    
//})()