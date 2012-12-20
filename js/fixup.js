$(document).ready(function() {

	/* Create tooltips for each box */
	$(".cell").each(function() {
		
		$(this).qtip({
			content: {
				title: {
					/* Grab tooltip title from cell's hidden h3 element */
					text: $(this).children('h3')
				},
				/* Grab tooltip body from next div element after this cell */
				text: $(this).next('div')
			},
			show: {
				/* Show only one tooltip when user hovers over cell */
				target: $(this),
				event: 'click mouseenter',
				solo: true
			},
			hide: {
				/* Hide tooltip when user leaves cell */
				event: 'click mouseleave',
				fixed: true,
				delay: 500
			},
			style: {
				classes: 'qtip-custom-brown',
				width: 300
			},
			position: {
				/* Place left center of tooltip at the bottom center of the mouse's original position */
				my: 'left center',
				at: 'bottom center',
				target: 'event'
			}
		}); // End qtip()
	}); // End function()
	
	/* Add sliding functionality to boxes */
	$(function() {
		/* Use grid_container as the structure */
		$('#grid_container').masonry({
			/* Use cell classes as the bricks */
			itemSelector: '.cell',
			/* Set column width to be 1/4 the width of grid_container */
			columnWidth: function(containerWidth) {
				return containerWidth / 4;
				}
		}); // End masonry()
	}); // End function()






});
	
	

	
	
	
	
	
	
	
		
		
