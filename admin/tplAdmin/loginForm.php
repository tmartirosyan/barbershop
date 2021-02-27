<form id="login-form" class="login-form" name="form1" method="post" action="index.php">
    <div class="login-box col-5 col-xs-3 cl-md-3">
        <h1>Login</h1>
        <input type="hidden" name="is_login" value="1">
        <div class="textbox">
            <input id="email" name="email" class="required col-12" type="text" placeholder="Email">
        </div>
        <div class="textbox">
            <input id="password" name="password" class="required col-12" type="password" placeholder="Password">
        </div>
        <div class="row"><input id="login-button" class="button" type="submit" name="login" value="Login"></div>
    </div>
</form>