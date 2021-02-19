
<div class="login-container text-c animated flipInX">
    <div>
        <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
    </div>
                <p class="text-whitesmoke">Sign Up</p>
    <div class="container-content">
        <form class="margin-t" action="/register" name="register" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="register[username]" placeholder="User Name" required="">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="register[email]" placeholder="Email" required="">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="register[password]" placeholder="Password" required="">
            </div>
            <!-- <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" required="">
            </div> -->
            <input type="hidden" name="register[role]" id="editId" value="1">
            <button type="submit" class="form-button button-l margin-b">Sign Up</button>

            <a class="text-darkyellow" href="/login"><small>Sign In</small></a>
        </form>
    </div>
</div>