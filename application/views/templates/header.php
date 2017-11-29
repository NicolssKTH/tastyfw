<html>
    <head>
        <title>Tasty Recipe</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/reset.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/login.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/signup.css">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    </head>
    <body>
        <h1><a href="home">Tasty Recipes</a></h1>
        <div class="McWrap">
            <div class="topnav" id="myTopnav">
                <a href="home">Home</a>
                <a href="meatballs">Meatballs</a>
                <a href="pancake">Pancake</a>
                <a href="calendar">Calendar</a>
                <a href="users/register" id="signupbutton">sign up</a>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="users/login" method = "post">

                        <div class="containerlogin">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required autofocus>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required autofocus>

                            <button type="submit">Login</button>
                        </div>

                        <div class="containerlogin" id="cancelbutton">
                            <input type="checkbox" checked="checked"> Remember me
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- flashmessage -->
            <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('check_username_exists')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('check_username_exists').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedin')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
            <?php endif; ?>
