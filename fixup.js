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
	

	$(function() {
		$('#grid_container').masonry({
			itemSelector: '.cell',
			columnWidth: function(containerWidth) {
				return containerWidth / 4;
				}
			});
		});
});
	
	
/*	
	$(window).load(function() {
	
		slide_grid_pro_update();
		
	});
	
	$(window).resize(function() {
	
		slide_grid_pro_update();
		
	});
	
	function slide_grid_pro_update() {
	
		var slide_grid_pro_margin_x = 10;
	
		var slide_grid_pro_margin_y = 10;
	
		var slide_grid_pro_element_width = 150;
	
		var slide_grid_pro_window_width = $(".container").width();
		
		$("#grid_container").width(slide_grid_pro_window_width);
		
		(slide_grid_pro_element_width * Math.floor(slide_grid_pro_window_width / slide_grid_pro_element_width)) + (slide_grid_pro_margin_x * Math.floor(slide_grid_pro_window_width / slide_grid_pro_element_width)));
		
		$("#grid_container").SlideGridPro({

			setColumns: Math.floor(slide_grid_pro_window_width / slide_grid_pro_element_width),	

			setMarginX: slide_grid_pro_margin_x,

			setMarginY: slide_grid_pro_margin_y,

			setElement: 'div',

			setTransition: true
			
		});
		
		$("#grid_container").find(".cell").each(function() {

			$(this).animate({
				'opacity':'1',
				}, 1000);

		});
		
	}
	
*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
