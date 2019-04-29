	<div class="card-header" style="margin:left; background: #FFFFFF; max-width: 800px; border-radius: 5px; margin: 200 auto 200px; padding: 30px;">
	<h1>Sign Up</h1>
	<p>Complete the form below to create a new Internet Archive account. Each field is required</p>
	<form method="POST" class="form" role="form" autocomplete="off" action="<?php echo base_url('index.php/user/tambahuser/'); ?>">
		 <div class="label">
		 	<label for="email" style="font-weight:700"><font size="5">Your email address</font></label>
        </div>                                   
        <div class="form-group row">
            <div class="col-lg-9">
            	<input class="form-control" type="email" value="" name="email">
            </div>
        </div>
        <div class="label">
            <label for="name" style="font-weight:700"><font size="5">Choose a screen name</font></label><span class="smaller-lighter"> Letters and numbers only please, and at least 3 characters</span>
        </div>
        <div class="form-group row">
           	<div class="col-lg-9">
                <input class="form-control1" type="text" value="" class="mr-4" name="nama">
            </div>
        </div>
        <div class="label">
            <label for="password" style="font-weight: 700"><font size="5">Choose a password</font></label><span class="smaller-lighter">  Letters and numbers only, and at least 3 characters</span>
        <div class="form-group row">
            <div class="col-lg-9">
                <input class="form-control1" type="password" value="" class="mr-4" name="password">
        	</div>
    	</div>
        <div class="label">
            <label for="confpassword" style="font-weight: 700"><font size="5">Confirm password</font></label><span class="smaller-lighter">  Letters and numbers only, and at least 3 characters</span>
        </div>
        <div class="form-group row">
            <div class="col-lg-9">
                <input class="form-control1" type="password" value="" class="mr-4" name="confpassword">
            </div>
        </div>
        <div class="form-group row">
       		<div class="label">
            	<input type="checkbox" id="agreement" class="required" name="agreement" value="yes"> <label for="agreement" class="smaller">I acknowledge that my use of Open Library is subject to the Internet Archive's <a href="https://archive.org/about/terms.php">Terms of Use</a>.</label>
        	</div>
        	<div class="input">
        	</div>
   		</div>
		<div class="form-group row">
            <div class="col-lg-9"><br>
                <input type="submit" value="Sign Up">&nbsp;
                <span><a href="" style="text-decoration:underline;color: red">Cancel</a></span> 
            </div>
        </div>
    </form>
	</div>
	</div>
