<!-- jQuery is required -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit-icons.min.js"></script>

<script src="comp1687/assets/js/main.js"></script> <!--possibly have to change the location -->

<script src='https://www.google.com/recaptcha/api.js?render=6LcXJn4UAAAAAGoBcOFRIJvP7I5rifMTzDwPSAib'></script>
<script>

function recaptcha_callback(){
    var register_btn = document.querySelector('#registerbtn');
    register_btn.removeAttribute('disabled');
    register_btn.style.cursor = 'pointer';
}

</script>