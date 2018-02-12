 <!DOCTYPE html>
  <html>
    <head>

      <title>Virtual Classroom</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
      <!-- chosen css -->
      <link rel="stylesheet" type="text/css" href="/assets/materialize/css/prism.css">
      <link rel="stylesheet" type="text/css" href="/assets/materialize/css/chosen.css">
      
      <link type="text/css" rel="stylesheet" href="/assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <!-- minified version of css updated -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <!-- customized css -->
      <link rel="stylesheet" type="text/css" href="/assets/materialize/css/style.css">
      <!-- animation of css -->
      <link rel="stylesheet" type="text/css" href="/assets/materialize/css/animate.css">
      <!-- css of the livechat -->
      <link rel="stylesheet" href="/assets/materialize/css/main.css" />
      <!-- icons fonts and emojis links -->
      <!-- <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> -->
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700,900" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!-- LINK FOR ICON -->
      <link rel="icon" href="/images/lesterjohn new.jpg">
    </head>

    <body>

      <header>
          <div class="navbar-fixed">
              <nav>
                <div class="nav-wrapper black-text">
                  <a href="#!" class="brand-logo"><img class="image-logo" src="/images/logocc.png"></a>
                  <ul class="right hide-on-med-and-down">
                    <li><a class="btn-username btn white-text cyan" href="<?php echo base_url('Teacherprofile'); ?>">@
                      
                      <?php 
                       if ($this->session->has_userdata('session')) {
                         echo $this->session->userdata['session']['username'];
                       }else{
                         echo $this->session->userdata['flag']['username'];
                       }

                       ?>


                    </a></li>
                    <li><a href="<?php echo base_url('Login/logout_acct'); ?>"><b>SIGNOUT</b></a></li>
                  </ul>
                      <ul id="slide-out" class="side-nav">
                         
                        <li>
                          <a href="#">
                            Hi, <?php 
                                 if ($this->session->has_userdata('session')) {
                                   echo $this->session->userdata['session']['Firstname']." ".$this->session->userdata['session']['Lastname'];
                                 }else{
                                   echo $this->session->userdata['flag']['Firstname'];
                                 }

                                 ?>
                                 !
                          </a>
                       </li>
                        <li><div class="divider"></div></li>
                        <li><a class="subheader">Subheader</a></li>
                        <li><a href="<?php echo base_url('Teacherdashboard'); ?>">Home</a></li>
                        <li><a href="<?php echo base_url('Requirement'); ?>">Requirements</a></li>
                        <li><a href="<?php echo base_url('Subject'); ?>">Subjects</a></li>
                        <li><a href="<?php echo base_url('Schedule'); ?>">Announcements</a></li>
                        <li><a href="<?php echo base_url('Message'); ?>">Messages</a></li>
                        <li><a href="<?php echo base_url('Livechat'); ?>">Live Chat</a></li>
                        <li><a class="subheader"><small>©2018 @LJDEVXYZ</small></a></li>
                    </ul>
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
              </nav>
          </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          <div class="nav-col-1 col l2 hide-on-med-and-down">
               <div class="collection collection-sidebar">
                  <a href="#" class="collection-item col-item waves-effect">
                    <h6 class="h5-sidebar black-text">
                    Hi, <?php 
                         if ($this->session->has_userdata('session')) {
                           echo $this->session->userdata['session']['Firstname']." ".$this->session->userdata['session']['Lastname'];
                         }else{
                           echo $this->session->userdata['flag']['Firstname'];
                         }

                         ?>
                         !
                         <i class="material-icons side-icons" style="color: #fb8c00!important;">perm_identity</i>
                         <!-- <i class="em em-blush"></i> -->
                    </h6></a>

                      <a href="<?php echo base_url('Teacherdashboard'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">home</i>Home<span class="new badge orange">1</span></a>
                      <a href="<?php echo base_url('Requirement'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">import_contacts</i>Requirements</a>
                      <a href="<?php echo base_url('Subject'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">subject</i>Subjects</a>
                      <a href="<?php echo base_url('Schedule'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">announcement</i>Announcements</a>
                      <a href="<?php echo base_url('Message'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">inbox</i>Messages</a>
                      <a href="<?php echo base_url('Livechat'); ?>" class="collection-item col-item waves-effect"><i class="material-icons side-icons">switch_video</i>Live Chat</a>
                      <a href="https://www.linkedin.com/in/iamlstrjhn/" class="collection-item col-item subheader" target="_blank" style="border-bottom: none!important;"><small style="color:grey;">©2018 @LJDEVXYZ</small></a>
                      

              </div>

          </div> 