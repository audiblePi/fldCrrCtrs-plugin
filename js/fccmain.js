jQuery(function($){
	$('#user_login1').attr('placeholder', 'Username');
	$('#user_pass1').attr('placeholder', 'Password');
	$('#calendar-widget').datepicker();
	$('#meeting-sites #document-table').tablesorter();
	$('#meeting-minutes #document-table').tablesorter();
	$('#meeting-agendas #document-table').tablesorter();
	$('#constitution #document-table').tablesorter();

	loadFullCalendar(getDates());

    $(document).on("click",".leftmenu li.nav, .dropdown-menu li.script",function(e){
    	e.preventDefault();
    	$(this).siblings().removeClass('active');
    	$(this).addClass('active');

    	loadPage($(this).text(), $(this).attr('id'));
    });

    $(document).on("click",".fcc-dashboard.mainwrapper .searchwidget .btn",function(e){
    	e.preventDefault();
    	var query = $('.fcc-dashboard.mainwrapper .searchwidget .search-query').val();
    	loadPage('Search Results', 'search-results');
    	searchDocuments(query);
    });

    function loadPage(p, i){
    	$('.pagetitle h1, .breadcrumb #this-crumb').html(p);
    	$('.maincontent .contentinner').find('.dynamic-content-wrapper').removeClass('current');
    	$('.maincontent .contentinner').find('.'+i).addClass('current');
    	if ($('.dynamic-content-wrapper.calendar').css('display') === 'block'){
	    	$('#calendar-container').fullCalendar( 'render' );
    	 }
    }

    function searchDocuments(q){
		post_data = {'myAction': 'documentSearch', 'query': q};

        $.ajax({
            type: 'post',
            url: '/wp-content/plugins/fcc-dashboard/ajax.php',
            data: post_data,
            dataType: "text",
            success: function (data) {
                $('.dynamic-content-wrapper.search-results .resultslist').html(data);
            }
        });
    }

    function getDates(){
    	var meetings = [];
    	$('.dynamic-content-wrapper.calendar ul.meeting').each(function(){
    		var data = {};
            data.title = $(this).find('li#title').html(); 
            data.start = new Date($(this).find('li#start').html());
            data.end = new Date($(this).find('li#end').html());
            meetings.push(data);
    	});

    	return meetings;
    }

    function loadFullCalendar(dArray){
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		var calendar = jQuery('#calendar-container').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			buttonText: {
				prev: '&laquo;',
				next: '&raquo;',
				prevYear: '&nbsp;&lt;&lt;&nbsp;',
				nextYear: '&nbsp;&gt;&gt;&nbsp;',
				today: 'today',
				month: 'month',
				week: 'week',
				day: 'day'
			},
			selectable: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: false,
			events: dArray
		});

    }

	function showTooltip(x, y, contents) {
		jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
			position: 'absolute',
			display: 'none',
			top: y + 5,
			left: x + 5
		}).appendTo("body").fadeIn(200);
	}
});