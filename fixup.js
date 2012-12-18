$(document).ready(function() {

/*	$.fn.qtip.styles.box = {
		width: 300,
		padding: 10,
		background: '#4c392c',
		color: '#cdb09e',
		textAlign: 'left',
		border: {
			width: 1,
			radius: 5,
			color: '#4c392c'
		},
		tip: 'top left'
	};
*/

	$(".cell").each(function() {
		
		$(this).qtip({
			content: {
				title: {
					text: $(this).children('h3')
				},
				text: $(this).next('div')
			},
			show: {
				target: $(this),
				event: 'click mouseenter',
				solo: true
			},
			hide: {
				event: 'click mouseleave',
				fixed: true,
				delay: 500
			},
			style: {
				classes: 'qtip-custom-brown',
				width: 300
			},
			position: {
				my: 'left center',
				at: 'bottom center',
				target: 'event'
			}
		});

	});
		
		
});

/*	

	$("#1").qtip({
		content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis faucibus massa. Pellentesque dictum interdum sodales. Integer semper lacinia diam ut lacinia. Etiam congue leo a nunc blandit dictum.',
		show: 'mouseover',
		hide: 'mouseout',
		style: 'box'
	});


	$("#2").qtip({
		content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis faucibus massa. Pellentesque dictum interdum sodales. Integer semper lacinia diam ut lacinia. Etiam congue leo a nunc blandit dictum.',
		show: 'mouseover',
		hide: 'mouseout',
		style: 'box'
	});

});

/*  */