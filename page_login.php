	<div class="card-header" style="margin:left; background: #FFFFFF; max-width: 800px; border-radius: 5px; margin: 200 auto 100px; padding: 45px;">
    <h1>LOG IN</h1><p>Please enter your <a href="<?php echo base_url('') ?>">Internet Archive</a> email and password to access your Open Library account.</p>
   	<form method="POST" class="form" role="form" autocomplete="off" action="<?php echo base_url('index.php/user/signIn/'); ?>">
   		<div class="label">
            <label for="email" style="font-weight:700">Email - <a href="https://openlibrary.org/account/email/forgot-ia">Forgot your Internet Archive email?</a></label>
        </div>

        <div class="form-group row">
            <div class="col-lg-9">
            	<input class="form-control" type="text" value="" name="email">
            </div>
        </div>
        <div class="label">
            <label for="password" style="font-weight:700">Password</label>
            <div class="form-group row">
            	<div class="col-lg-9">
                    <input class="form-control1" type="password" value="" class="mr-4" name="password">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="input"><input type="checkbox" name="remember" id="remember">
                <label for="remember" class="small">Remember me</label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-9"><br>
                <input type="submit" value="Log In">
            </div>
        </div>
        <div class="form-group row">
            <div class="label"><a href="https://archive.org/account/login.forgotpw.php">Forgot your Password?</a><br><br>Not a member of Open Library?<a href="https://openlibrary.org/account/create">Sign up now</a></div>
            </div>
        </div>
    </form>
