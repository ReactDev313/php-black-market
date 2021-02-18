
<div class="login-container text-c animated flipInX">
    <div>
        <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
    </div>
                <p class="text-whitesmoke">Sign In</p>
    <div class="container-content" >
        <form class="margin-t" action="/login" name="login" method="post">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" id="email" name="login[email]" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" id="password" name="login[password]" required="">
            </div>
            <button type="submit" class="form-button button-l margin-b">Sign In</button>

            <p class="text-whitesmoke text-center"><small>Do not have an account?</small></p>
            <a class="text-darkyellow" href="/register"><small>Sign Up</small></a>
        </form>
    </div>
</div>
