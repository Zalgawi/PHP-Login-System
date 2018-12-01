<?php

?>

<form method="post" onsubmit="return submitUserForm();">
    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY" data-callback="verifyCaptcha"></div>
    <div id="g-recaptcha-error"></div>
    <input type="submit" name="submit" value="Submit" />
</form>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    function submitUserForm() {
        var response = grecaptcha.getResponse();
        if(response.length == 0) {
            document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
            return false;
        }
        return true;
    }

    function verifyCaptcha() {
        document.getElementById('g-recaptcha-error').innerHTML = '';
    }
</script>