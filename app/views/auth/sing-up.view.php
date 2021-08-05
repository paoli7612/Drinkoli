<?php $title = 'Sing in' ?>
<?php include 'views/layouts/page_start.php' ?>

<div class="w3-panel w3-threequarter">
    <div class="w3-panel w3-green w3-card-4 w3-round-large">
        <div class="w3-panel">
            <form action="sing-up" method="post">
                <div id="error_email" class="w3-hide w3-red w3-panel w3-card-4 w3-round-large">
                    <div class="w3-panel">
                        <b>email</b> gia collegata ad un account
                    </div>    
                </div>
                <input onkeyup="esiste_email(this.value)" name="email" class="w3-input w3-round-large w3-margin-bottom" type="email" placeholder="Email" require_onced autofocus>
                <div id="error_username" class="w3-hide w3-red w3-panel w3-card-4 w3-round-large">
                    <div class="w3-panel">
                        <b>Username</b> non utilizzabile
                    </div>    
                </div>
                <input onkeyup="esiste_username(this.value)" name="username" class="w3-input w3-round-large w3-margin-bottom" type="text" placeholder="Username" require_onced>
                <input name="password" class="w3-input w3-round-large w3-margin-bottom w3-third w3-margin-right" type="password" placeholder="Password">
                <input name="password2" class="w3-input w3-round-large w3-margin-bottom w3-third" type="password" placeholder="Ripeti">
                <input type="submit" value="Sing-up" class="w3-button w3-round-large w3-margin-bottom w3-right w3-white">
            </form>
        </div>
    </div>
</div>

<script>
    var derror_username = $('div#error_username')[0];
    var derror_email = $('div#error_email')[0];
    var emailok = true;
    var unameok = true;
    var c = function() { $('form').find(':submit').prop("disabled", emailok && unameok); }
    var esiste_username = function(text) {
        $.getJSON('/query/esiste_username.php?username=' + text).done(function(e) {
            if (e == 1) {
                derror_username.classList.replace('w3-hide', 'w3-show');
                unameok = true;
            } else {
                derror_username.classList.replace('w3-show', 'w3-hide');
                unameok = false;
            }
            c();
        });
    }
    var esiste_email = function(text) {
        $.getJSON('/query/esiste_email.php?email=' + text).done(function(e) {
            if (e == 1) {
                derror_email.classList.replace('w3-hide', 'w3-show');
                var emailok = true;
            } else {
                derror_email.classList.replace('w3-show', 'w3-hide');
                var emailok = false;
            }
            c();
        });
    }




</script>

<?php include 'views/layouts/page_end.php' ?>