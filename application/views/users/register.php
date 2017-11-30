<div class="signupcontainer">
    <h2>Signup Form</h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('users/register'); ?>
        <div class="signupform">
            <h3>Username</h3>
            <input type="text" placeholder="Enter Username" name="username">

            <h3>Password</h3>
            <input type="password" placeholder="Enter Password" name="psw">

            <h3>Repeat Password</h3>
            <input type="password" placeholder="Repeat Password" name="psw2">
            <div class="clearfix">
                <button type="button" class="cancelbtn2">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>
