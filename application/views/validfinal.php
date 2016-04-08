<html>
    <head>
        <script>
    function ValidateContactForm()
{
    var name = document.ContactForm.Name;
    var email = document.ContactForm.Email;
    var phone = document.ContactForm.Telephone;
    var nocall = document.ContactForm.DoNotCall;
    var what = document.ContactForm.Subject;
    var comment = document.ContactForm.Comment;

    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    if (email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if ((nocall.checked == false) && (phone.value == ""))
    {
        window.alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }

    if (what.selectedIndex < 1)
    {
        alert("Please tell us how we can help you.");
        what.focus();
        return false;
    }

    if (comment.value == "")
    {
        window.alert("Please provide a detailed description or comment.");
        comment.focus();
        return false;
    }
    return true;
}

        </script>
    </head>
    <body>

        <form method="post" action="<?php echo base_url("test/register")?>" name="ContactForm" onsubmit="return ValidateContactForm1()"> >
    <p>Name: <input type="text" size="65" name="Name"></p>
    <p>E-mail Address:  <input type="text" size="65" name="Email"></p>
    <p>Telephone: <input type="text" size="65" name="Telephone"><br>
        <input type="checkbox" name="DoNotCall"> Please do not call me.</p>
    <p>What can we help you with?
        <select type="text" value="" name="Subject">
            <option>  </option>
            <option>Customer Service</option>
            <option>Question</option>
            <option>Comment</option>
            <option>Consultation</option>
            <option>Other</option>
        </select></p>
    <p>Comments:  <textarea cols="55" name="Comment">  </textarea></p>
    <p><input type="submit" value="Submit" name="submit"><input type="reset" value="Reset" name="reset"></p>
</form>

    </body>
</html>

