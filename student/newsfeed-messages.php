<?php
session_start();
include('static/header.php');
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		
		<title>Chatroom | Send and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="../css/jquery.scrollbar.css" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/ionicons.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link href="../css/emoji.css" rel="stylesheet">
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="../images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-registeradmin.php"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="index.php">Sign in</a></li>
                    <li><a href="index-register.html">sign up</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="newsfeed.php">Newsfeed</a></li>
                    <li><a href="newsfeed-people-nearby.php">Poeple Nearly</a></li>
                    <li><a href="newsfeed-friends.php">My friends</a></li>
                    <li><a href="newsfeed-messages.php">Chatroom</a></li>
                    <li><a href="newsfeed-images.php">Images</a></li>
                    <li><a href="newsfeed-videos.php">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="timeline.php">Timeline</a></li>
                  <li><a href="timeline-about.html">Timeline About</a></li>
                  <li><a href="timeline-album.php">Timeline Album</a></li>
                  <li><a href="timeline-friends.php">Timeline Friends</a></li>
                  <li><a href="edit-profile-basic.php">Edit: Basic Info</a></li>
                  <li><a href="edit-profile-work-edu.php">Edit: Work</a></li>
                  <li><a href="edit-profile-interests.php">Edit: Interests</a></li>
                  <li><a href="edit-profile-settings.php">Account Settings</a></li>
                  <li><a href="edit-profile-password.php">Change Password</a></li>
                </ul>
              </li>
             
              <li class="dropdown"><a href="contact.php">Contact</a></li>
              <li class="dropdown"><a href="php/logout.php">logout</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<?php include('static/left-side-bar.php'); ?>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/users/user-1.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End -->

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-5">

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                    <li class="active">
                      <a href="#contact-1" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Alan</h6>
                        		<p class="text-muted">Hi there, how are you</p>
                            <small class="text-muted">a min ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-2" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Julia </h6>
                            <p class="text-muted">see you soon</p>
                            <small class="text-muted">an hour ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-3" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Arun</h6>
                            <p class="text-muted">Okay fine. thank you</p>
                            <small class="text-muted">13 hour ago</small>
                            <div class="replied"><i class="icon ion-reply"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-4" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Clay</h6>
                        		<p class="text-muted">Hey, where were you ?</p>
                            <small class="text-muted">Yesterday</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-5" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Anna</h6>
                            <p class="text-muted">I gotta go</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-6" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Justin</h6>
                        		<p class="text-muted">Hey</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Alan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>Hi, how you doing???? Long time no see. Where have you been?</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Treesa</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>I have been on vacation</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Treesa</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>it was a great time for me. we had a lot of fun <i class="em em-blush"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Alan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>that's cool I wish I were you <i class="em em-expressionless"></i></p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Treesa</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><i class="em em-hand"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Alan</h5>
                              	<small class="text-muted">a min ago</small>
                              </div>
                              <p>Hi there, how are you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-2">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Julia</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Hi</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Treesa</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Hellow</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Julia</h5>
                              	<small class="text-muted">an hour ago</small>
                              </div>
                              <p>good</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Treesa</h5>
                              	<small class="text-muted">an hour ago</small>
                              </div>
                              <p>see you soon</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-3">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Treesa</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sophia Lee</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah  Cruiz</h5>
                              	<small class="text-muted">13 hours ago</small>
                              </div>
                              <p>Okay fine. thank you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-4">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>John Doe</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>John Doe</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>hey anybody there</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-5">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Anna Young</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Anna Young</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>I gotta go</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-6">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hello</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hi</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hey</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hey there</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                  </div><!--Chat Messages in Right End-->

                  <div class="send-message">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type your message">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			 <?php include('static/right-side-bar.php'); ?>
    		</div>
    	</div>
    </div>
    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="#"><img src="images/logo.png.jpg" alt="" class="footer-logo" /></a>
              <ul class="list-inline social-icons">
              	<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For individuals</h5>
              <ul class="footer-links">
                <li><a href="index-registerstudent.php">Signup</a></li>
                <li><a href="index-registeradmin.php">login</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="contact.html">contact</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>For Recruiters</h5>
              <ul class="footer-links">
                <li><a href="index-registerrecruiter.php">Recruiter signup</a></li>
                <li><a href="contact.html"></a>Contact</li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">Advertise</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h5>About</h5>
              <ul class="footer-links">
                <li><a href="contact.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="faq.html">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h5>Contact Us</h5>
              <ul class="contact">
                <li><i class="icon ion-ios-telephone-outline"></i>8854668455</li>
                <li><i class="icon ion-ios-email-outline"></i>sharewithazif@gmail.com</li>
                <li><i class="icon ion-ios-location-outline"></i>Mes College Vattappara</li>
              </ul>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>copyright @ F.SOCIETY 2022. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.sticky-kit.min.js"></script>
    <script src="../js/jquery.scrollbar.min.js"></script>
    <script src="../js/script.js"></script>

  </body>

</html>
