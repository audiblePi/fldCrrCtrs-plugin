<?php
add_shortcode('fcc-dashboard', 'showDashboard');
add_shortcode('fcc-calendar', 'showCalendar');
add_shortcode('fcc-edit-profile', 'showEditProfile');

function showDashboard(){
?>	
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
	            <?php echo do_shortcode('[theme-my-login default_action="profile"]'); ?>
	        </div>
	    </div>
	</div>
<?php
}
?>