<?php
add_shortcode('fcc-documents', 'showDocuments');
add_shortcode('fcc-calendar', 'showCalendar');
add_shortcode('fcc-edit-profile', 'showEditProfile');
add_shortcode('fcc-search-results', 'showSearchResults');

function showDocuments(){
?>	
    <div class="row-fluid">
    	<div class="span8">
            <div class="widgetcontent">
                <div id="tabs">
                    <ul>
                        <?php 
                            //test site
                            $args = array('type'  => 'post', 'child_of' => 26, 'orderby' => 'name','order' => 'DESC', 'taxonomy'=> 'category' ); 
                            //production site
                            //$args = array('type'  => 'post', 'child_of' => 21, 'orderby' => 'name','order' => 'DESC', 'taxonomy'=> 'category' ); 
                            $categories = get_categories( $args );
                            foreach ($categories as $c){
                                switch ($c->slug) {
                                    case 'meeting-sites':   $icon = 'icon-map-marker';  break;
                                    case 'meeting-minutes': $icon = 'icon-file';      break;
                                    case 'meeting-agendas': $icon = 'icon-tasks';       break;
                                    case 'constitution':    $icon = 'icon-align-justify';       break;
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
                                        <td><?php echo date("F j, Y", strtotime($p->post_date)); ?></td>
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
    $args = array('type'  => 'post', 'orderby' => 'name','order' => 'DESC', 'post_type' => 'meeting', ); 
    $the_query = new WP_Query( $args );
    if( $the_query->have_posts() ):
        while( $the_query->have_posts() ) : 
            $the_query->the_post(); ?>
            <ul class="meeting">
                <li id="title"><?php the_title(); ?></li>
                <li id="start"><?php the_field('start_date'); ?></li>
                <li id="end"><?php the_field('end_date'); ?></li>
            </ul>
        <?php endwhile; 
    endif; 
    wp_reset_query();
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
	            <?php 
                    #echo do_shortcode('[wpmem_form user_edit /]'); 
                    echo do_shortcode('[theme-my-login default_action="profile" show_title=0]'); 
                ?>
	        </div>
	    </div>
	</div>
<?php
}

function showSearchResults(){
?>
<div class="row-fluid">
    <div class="span9">
        <ul class="resultslist"></ul>
    </div>
</div>
<?php
}
?>