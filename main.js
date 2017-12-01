function scrollToElement(element)
{
	$(document).scrollTo( element, 500, {offset: -50} );
	$("#main div").removeClass("current");
	element.addClass("current");
}

var scrollTimer = null;
function handleScroll()
{
	var windowPos = $(window).scrollTop();
	var contentsPos = new Array(5);
	var topElementId;
	var beforeId;
	var topElementPos = 10000;
	var distance = 0;
	
	// Check, which content is on the top of window
	for(i=0; i<contentsPos.length; i++)
	{
		var j = i + 1;
		// Make list with coordinates of contents
		contentsPos[i] = Math.ceil($("#content" + j).offset().top) - windowPos;
		//console.log("Content" + j + ": " + contentsPos[i]);
		// Calculate distance among actual content and top of the window (below header)
		distance = Math.abs(100-contentsPos[i]);
		// Set the element which is closest top of the window
		if( distance < topElementPos )
		{
			topElementPos = distance;
			beforeId = topElementId;
			topElementId = "link" + j;
		}
	}

	// Focus link which is on the top of window
	if( beforeId != topElementId)
		menuFocus(topElementId);


	// Show background for navbar, when windowPos > x
	if(windowPos >= 400)
	{
		$("header").addClass("header-scroll");
		$("#logo").css("display","inline");
	}
	else
	{
		$("header").removeClass("header-scroll");
		$("#logo").css("display","none");
	}

	//console.log("Window position: " + windowPos);
	//console.log($("header").attr("class"));
}

function menuFocus(classOfLink)
{
	$("nav ol li.link-current").removeClass("link-current");
	$("#nav-mini ol li.link-mini-current").removeClass("link-mini-current");
		
	$("nav ol li." + classOfLink).addClass("link-current");
	$("#nav-mini ol li." + classOfLink).addClass("link-mini-current");
}

var logoAnimationTimer = null;
function logoAnimation()
{
	$("#text").removeClass("text-animation");
	$("#big-logo").removeClass("big-logo-animation");
}

var interval;

$(document).ready( function() 
{
	// scrolling and menu element focus
	$("ol li").click( function() 
	{
		var link = $(this).attr("class").match(/\d+/g);
		scrollToElement( $("#content" + link) );
		menuFocus("link" + link);
	});

	$("#logo a").click( function()
	{
		var link = $(this).attr("class").match(/\d+/);
		scrollToElement( $("#content" + link) );
		menuFocus("link" + link);
	});

	$(document).scroll( function()
	{
		if(scrollTimer)
		{
			clearTimeout(scrollTimer);
		}
		scrollTimer = setTimeout(handleScroll, 25);
	});

	// nav-mini sliding
	$("#nav-mini-symbol").click( function()
	{
		$("#nav-mini").slideToggle("medium");
	});

	$("#nav-mini ol li a").click( function() 
	{
		$("#nav-mini").slideUp("medium");
	});

	// scrolling when angle-down clikced
	$(".icon-down-open-big").click( function() 
	{
		scrollToElement( $("#content2") );
	});

	$("#big-logo #logo-ball").mouseenter( function()
	{
		$("#text").addClass("text-animation");
		$("#big-logo").addClass("big-logo-animation");
		console.log($("#big-logo").attr("class"));
	});

	// logo animation
	$("#text").mouseenter( function()
	{
		clearTimeout(logoAnimationTimer);
	});

	$("#text").mouseleave( function()
	{

		if(logoAnimationTimer)
			clearTimeout(logoAnimationTimer);

		logoAnimationTimer = setTimeout(logoAnimation,5000);
	});

})