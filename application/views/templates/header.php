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
        <?php $this->session->set_userdata('last_page', current_url()); ?>
        <h1><a href="home">Tasty Recipes</a></h1>
        <div class="McWrap">
            <div class="topnav" id="myTopnav">
                <a href="<?php echo base_url(); ?>home">Home</a>
                <a href="<?php echo base_url(); ?>meatballs">Meatballs</a>
                <a href="<?php echo base_url(); ?>pancake">Pancake</a>
                <a href="<?php echo base_url(); ?>calendar">Calendar</a>
                <?php if(!$this->session->userdata('logged_in')) : ?>
                <a href="<?php echo base_url(); ?>users/register" id="signupbutton">sign up</a>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="<?php echo base_url(); ?>users/login" method = "post">

                        <div class="containerlogin">
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required autofocus>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required autofocus>

                            <button type="submit" class="loginbutton">Login</button>
                        </div>

                        <div class="containerlogin" id="cancelbutton">
                            <input type="checkbox" checked="checked"> Remember me
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                </div>
                <?php endif; ?>
                <?php if($this->session->userdata('logged_in')) : ?>
                <a href="<?php echo base_url(); ?>users/logout" id="signupbutton">sign out</a>
                <?php endif; ?>

            </div>

            <!-- flashmessage -->
            <?php if($this->session->flashdata('user_registered')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('login_failed')): ?>
            <?php echo '<p class="alert-fail">'.$this->session->flashdata('login_failed').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedin')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('user_loggedout')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('comment_posted')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('comment_posted').'</p>'; ?>
            <?php endif; ?>

            <?php if($this->session->flashdata('comment_deleted')): ?>
            <?php echo '<p class="alert-success">'.$this->session->flashdata('comment_deleted').'</p>'; ?>
            <?php endif; ?>

