<?php
add_shortcode('fcc-dashboard', 'showDashboard');
add_shortcode('fcc-forum', 'showForum');
add_shortcode('fcc-calendar', 'showCalendar');
add_shortcode('fcc-edit-profile', 'showEditProfile');
add_shortcode('fcc-members', 'showMembers');
add_shortcode('fcc-account-settings', 'showAccountSettings');
add_shortcode('fcc-privacy-settings', 'showPrivacySettings');


function showDashboard(){
?>	
	<div class="alert alert-info">
    	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Welcome!</strong> This alert needs your attention, but it's not super important.
    </div>
    
    <div class="row-fluid">
    	<div class="span8">
            <h4 class="widgettitle">Recent Articles</h4>
            <div class="widgetcontent">
                <div id="tabs">
                    <ul>
                        <li><a href="#tabs-1"><span class="icon-forward"></span> Technology</a></li>
                        <li><a href="#tabs-2"><span class="icon-eye-open"></span> Entertainment</a></li>
                        <li><a href="#tabs-3"><span class="icon-leaf"></span> Fitness &amp; Health</a></li>
                    </ul>
                    <div id="tabs-1">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Submitted By</th>
                                    <th>Date Added</th>
                                    <th class="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href=""><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
                                    <td><a href="">admin</a></td>
                                    <td>Jan 02, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
                                    <td><a href="">themepixels</a></td>
                                    <td>Jan 02, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
                                    <td><a href="">johndoe</a></td>
                                    <td>Jan 01, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
                                    <td><a href="">amanda</a></td>
                                    <td>Jan 01, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
                                    <td><a href="">mandylane</a></td>
                                    <td>Dec 31, 2012</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tabs-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Submitted By</th>
                                    <th>Date Added</th>
                                    <th class="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href=""><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
                                    <td><a href="">mandylane</a></td>
                                    <td>Jan 04, 2012</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
                                    <td><a href="">admin</a></td>
                                    <td>Jan 02, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
                                    <td><a href="">themepixels</a></td>
                                    <td>Jan 02, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
                                    <td><a href="">johndoe</a></td>
                                    <td>Jan 01, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
                                    <td><a href="">amanda</a></td>
                                    <td>Jan 01, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div id="tabs-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Submitted By</th>
                                    <th>Date Added</th>
                                    <th class="center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href=""><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
                                    <td><a href="">amanda</a></td>
                                    <td>Jan 03, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
                                    <td><a href="">mandylane</a></td>
                                    <td>Dec 31, 2012</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
                                    <td><a href="">admin</a></td>
                                    <td>Jan 02, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
                                    <td><a href="">themepixels</a></td>
                                    <td>Jan 02, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                                <tr>
                                    <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
                                    <td><a href="">johndoe</a></td>
                                    <td>Jan 01, 2013</td>
                                    <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>

        <div class="span4">
        	<h4 class="widgettitle nomargin">Some Simple Instructions</h4>
            <div class="widgetcontent bordered">
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
            
            <h4 class="widgettitle nomargin">Events this month</h4>
            <div class="widgetcontent">
            	<div id="calendar-widget" class="widgetcalendar"></div>
            </div>
        </div>
    </div>
<?php
}

function showForum(){
?>
	<div id="tabs">
        <ul>
            <li><a href="#mail">Mail</a></li>
            <li><a href="#chat">Chat</a></li>
        </ul>
        <div id="mail">
            <div class="msghead">
                <ul class="msghead_menu">
                    <li>
                        <button class="btn"><span class="iconsweets-alert2"></span> Report Spam</button>
                        <button class="btn msgtrash"><span class="iconsweets-trashcan"></span></button>
                        <div class="btn-group">
                            <button class="btn">Actions</button>
                            <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Mark as Read</a></li>
                              <li><a href="#">Mark as Unread</a></li>
                              <li><a href="#">Move to Folder</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Add Star</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="right btn-group">
                        <a class="btn prev prev_disabled"><span class="icon-chevron-left"></span></a>
                        <a class="btn next"><span class="icon-chevron-right"></span></a>
                    </li>
                    <li class="right"><span class="pageinfo">1-10 of 2,139</span></li>
                </ul>
                <span class="clearall"></span>
            </div>
            
            <br />
            
            <table class="table table-bordered mailinbox">
                <colgroup>
                    <col class="con1 width4" />
                    <col class="con0 width4" />
                    <col class="con1 width15" />
                    <col class="con0 width63" />
                    <col class="con1 width4" />
                    <col class="con1 width10" />
                </colgroup>
                <thead>
                <tr>
                    <th class="head1 aligncenter"><input type="checkbox" name="checkall" class="checkall" /></th>
                    <th class="head0">&nbsp;</th>
                    <th class="head1">Sender</th>
                    <th class="head0">Subject</th>
                    <th class="head1 attachement">&nbsp;</th>
                    <th class="head0">Date</th>
                </tr>
                </thead>
                <tbody>
                    <tr class="unread">
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>Hiccup Haddock</td>
                        <td><a href="" class="title">Ut enim ad minim veniam, quis nostrud exercitation</a></td>
                        <td class="attachment"><img src="/wp-content/plugins/fcc-dashboard/img/attachment.png" alt="" /></td>
                        <td class="date">July 1</td>
                    </tr>
                    <tr class="unread">
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>themepixels</td>
                        <td><a href="" class="title">Ullamco laboris nisi ut aliquip ex ea commodo consequat. </a></td>
                        <td class="attachment"></td>
                        <td class="date">June 30</td>
                    </tr>
                    <tr>
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>Puss in Boots</td>
                        <td><a href="" class="title">Sed ut perspiciatis unde omnis iste natus error</a></td>
                        <td class="attachment"></td>
                        <td class="date">June 28</td>
                    </tr>
                    <tr>
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>Humpty Dumpty</td>
                        <td><a href="" class="title">Sit voluptatem accusantium doloremque laudantium</a></td>
                        <td class="attachment"><img src="/wp-content/plugins/fcc-dashboard/img/attachment.png" alt="" /></td>
                        <td class="date">June 20</td>
                    </tr>
                    <tr>
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar starred"></a></td>
                        <td>themepixels</td>
                        <td><a href="" class="title">Totam rem aperiam, eaque ipsa quae ab illo inventore</a></td>
                        <td class="attachment"></td>
                        <td class="date">June 19</td>
                    </tr>
                    <tr class="unread">
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>Hiccup Haddock</td>
                        <td><a href="" class="title">Ut enim ad minim veniam, quis nostrud exercitation</a></td>
                        <td class="attachment"><img src="/wp-content/plugins/fcc-dashboard/img/attachment.png" alt="" /></td>
                        <td class="date">July 1</td>
                    </tr>
                    <tr class="unread">
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>themepixels</td>
                        <td><a href="" class="title">Ullamco laboris nisi ut aliquip ex ea commodo consequat. </a></td>
                        <td class="attachment"></td>
                        <td class="date">June 30</td>
                    </tr>
                    <tr>
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>Puss in Boots</td>
                        <td><a href="" class="title">Sed ut perspiciatis unde omnis iste natus error</a></td>
                        <td class="attachment"></td>
                        <td class="date">June 28</td>
                    </tr>
                    <tr>
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar"></a></td>
                        <td>Humpty Dumpty</td>
                        <td><a href="" class="title">Sit voluptatem accusantium doloremque laudantium</a></td>
                        <td class="attachment"><img src="/wp-content/plugins/fcc-dashboard/img/attachment.png" alt="" /></td>
                        <td class="date">June 20</td>
                    </tr>
                    <tr>
                        <td class="aligncenter"><input type="checkbox" name="" /></td>
                        <td class="star"><a class="msgstar starred"></a></td>
                        <td>themepixels</td>
                        <td><a href="" class="title">Totam rem aperiam, eaque ipsa quae ab illo inventore</a></td>
                        <td class="attachment"></td>
                        <td class="date">June 19</td>
                    </tr>
                </tbody>
            </table>             
        </div>
        <div id="chat" class="chatcontent">
            <div id="chatmessage" class="chatmessage">
                <div id="chatmessageinner">
                    <p class="reply">
                        <img src="/wp-content/plugins/fcc-dashboard/img/avatar.png" alt="" class="img-polaroid"/>
                        <span class="msgblock">
                            <strong>Katniss</strong> <span class="time">- 12:10 pm</span>
                            <span class="msg">Hello, what's up!</span>
                        </span>
                    </p>
                </div>
            </div>
        
            <div class="messagebox">
                <button class="btn btn-primary send">Send</button>
                <span class="inputbox">
                    <input type="text" id="msgbox" name="msgbox"  class="input-block-level" />
                </span>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?php 
}

function showCalendar(){
?>
	<div id='calendar-container'></div>
<?php
}

function showEditProfile(){
?>
	<div class="content-editprofile">
	    <h4 class="widgettitle nomargin">Edit Profile</h4>
	    <div class="widgetcontent bordered">
	        <div class="row-fluid">
	            <div class="span3 profile-left">
	                <h4>Your Profile Photo</h4>
	                <div class="profilethumb">
	                    <a href="">Change Thumbnail</a>
	                    <img src="/wp-content/plugins/fcc-dashboard/img/profilethumb.png" alt="" class="img-polaroid" />
	                </div>
	            </div>

	            <?php echo do_shortcode('[theme-my-login default_action="profile"]'); ?>
<!-- 
	            <div class="span9">
	                <form action="editprofile.html" class="editprofileform" method="post">
	                    <h4>Login Information</h4>
	                    <p>
	                        <label>Username:</label>
	                        <input type="text" name="username" class="input-xlarge" value="themepixels" />
	                    </p>
	                    <p>
	                        <label>Email:</label>
	                        <input type="text" name="email" class="input-xlarge" value="you@yourdomain.com" />
	                    </p>
	                    <p>
	                        <label style="padding:0">Password</label>
	                        <a href="">Change Password?</a>
	                    </p>
	                    
	                    <br />
	                    
	                    <h4>Personal Information</h4>
	                    <p>
	                        <label>Firstname:</label>
	                        <input type="text" name="firstname" class="input-xlarge" value="Theme" />
	                    </p>
	                    <p>
	                        <label>Lastname:</label>
	                        <input type="text" name="lastname" class="input-xlarge" value="Pixels" />
	                    </p>
	                    <p>
	                        <label>Location:</label>
	                        <input type="text" name="location" class="input-xlarge" value="Cebu, Philippines" />
	                    </p>
	                    <p>
	                        <label>Your Website:</label>
	                        <input type="text" name="website" class="input-xlarge" value="http://themepixels.com/" />
	                    </p>
	                    <p>
	                        <label>About You:</label>
	                        <textarea name="about" class="span8"></textarea>
	                    </p>
	                    
	                    <br />
	                    
	                    <h4>Notifications</h4>
	                    <p>
	                        <input type="checkbox" /> Email me when someone mentions me... <br />
	                        <input type="checkbox" /> Email me when someone follows me...
	                    </p>
	                    
	                    <br />
	                    <p>
	                        <button type="submit" class="btn btn-primary">Update Profile</button> &nbsp; <a href="">Deactivate your account</a>
	                    </p>
	                </form>
	            </div>-->
	        </div>
	    </div>
	</div>
<?php
}

function showMembers(){
?>
	<div id=''>Members</div>
<?php
}

function showAccountSettings(){
?>
	<div id=''>Account Settings</div>
<?php
}

function showPrivacySettings(){
?>
	<div id=''>Privacy Settings</div>
<?php
}
?>