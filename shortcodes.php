<?php
add_shortcode('fcc-documents', 'showDocuments');
add_shortcode('fcc-calendar', 'showCalendar');
add_shortcode('fcc-edit-profile', 'showEditProfile');

function showDocuments(){
?>	
    <div class="row-fluid">
    	<div class="span8">
            <!-- <h4 class="widgettitle">Documents</h4> -->
            <div class="widgetcontent">
                <div id="tabs">
                    <ul>
                        <?php 
                            $args = array('type'  => 'post', 'child_of' => 26, 'orderby' => 'name','order' => 'DESC', 'taxonomy'=> 'category' ); 
                            $categories = get_categories( $args );
                            foreach ($categories as $c){
                                switch ($c->slug) {
                                    case 'meeting-sites':   $icon = 'icon-map-marker';  break;
                                    case 'meeting-minutes': $icon = 'icon-pencil';      break;
                                    case 'meeting-agendas': $icon = 'icon-tasks';       break;
                                    case 'constitution':    $icon = 'icon-legal';       break;
                                    default:                $icon = 'icon-forward';
                                }
                                echo '<li><a href="#'.$c->slug.'"><span class="'.$icon.'"></span> '.$c->name.'</a></li>';
                            }
                        ?>  
                    </ul>
                    <?php 
                        foreach ($categories as $c) {
                            $args = array(
                            'category_name'    => $c->slug,
                            'orderby'          => 'date',
                            'order'            => 'DESC',
                            'post_type'        => 'document'
                        );
                        $posts_array = get_posts( $args );
                    ?>
                        <div id="<?php echo $c->slug ?>">
                            <table id="document-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Submitted By</th>
                                        <th>Date Added</th>
                                        <th class="center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($posts_array as $p) { ?>
                                    <tr>
                                        <td><?php echo $p->post_title; ?></td>
                                        <td><?php $user_info = get_userdata($p->post_author); echo $user_info->user_login; ?></td>
                                        <td><?php echo $p->post_date; ?></td>
                                        <td class="center">
                                            <?php $fields = get_fields($p->ID); if ($fields['file']) : ?>
                                                <a target="_blank" href="<?php echo $fields['file']; ?>" class="btn"><span class="icon-edit"></span> VIEW</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } ?>                            
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
	            <?php echo do_shortcode('[theme-my-login default_action="profile" show_title=0]'); ?>
	        </div>
	    </div>
	</div>
<?php
}
?>