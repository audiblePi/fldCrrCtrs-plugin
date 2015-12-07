jQuery(function($){
	$('#user_login1').attr('placeholder', 'Username');
	$('#user_pass1').attr('placeholder', 'Password');
	$('#calendar-widget').datepicker();

    $(document).on("click",".leftmenu li, .dropdown-menu li.script",function(e){
    	e.preventDefault();
    	$(this).siblings().removeClass('active');
    	$(this).addClass('active');

    	loadPage($(this).text(), $(this).attr('id'));
    });

    function loadPage(p, i){
    	$('.pagetitle h1, .breadcrumb #this-crumb').html(p);
    	$('.maincontent .contentinner').find('.dynamic-content-wrapper').removeClass('current');
    	$('.maincontent .contentinner').find('.'+i).addClass('current');
    	if ($('.dynamic-content-wrapper.calendar').css('display') === 'block')
    	 	loadFullCalendar();
    }

    function loadFullCalendar(){
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
			selectable: true,
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
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
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