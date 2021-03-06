function initImg(mode)
{
	if (mode == 0)
	{
		$("#slides img").each(function(index)
		{
			 $(this).css({left:index * 960});
			 $(this).css({top:0});
			 activeSlide = 0;
		});
	}
	if (mode == 1)
	{
		$("#slides img").each(function(index)
		{
			 $(this).css({left:0});
			 $(this).css({top:index * 300});
			 activeSlide = 0;
		});
	}
}

var activeBullet = 0;
function initBullets()
{
	var i = 0;

	while (i < $("#slides img").length)
	{
		if (i == 0)
			$("#bullets").append("<span class='bullet activeBullet' id='bullet" + i + "'></span>");
		else
			$("#bullets").append("<span class='bullet' id='bullet" + i + "'></span>");
		++i;
	}
}

function loadSlider()
{
	initImg(0);
	initBullets();
}
loadSlider();

var sliderMode = 0;
$("#sliderMode").change(function()
{
	var mode = $(this).find("option:selected").val();
	initImg(mode);
	sliderMode = mode;
});

function setBullet()
{
	document.getElementsByClassName("bullet activeBullet")[0].className = "bullet";
	document.getElementsByClassName("bullet")[activeSlide].className = "bullet activeBullet";
}

$(function()
{
	setInterval(slide, 5000);
});

var activeSlide = 0;
function slide(pos)
{
	if (!pos)
	{
		if (activeSlide == $("#slides img").length - 1)
			activeSlide = 0;
		else
			++activeSlide;
	}
	if (sliderMode == 0)
	{
		$("#slides img").each(function(index)
		{
			var slide = $("#slides img")[index];
			slide.style.left = ((index - activeSlide) * 960) + "px";
		});
	}
	else if (sliderMode == 1)
	{
		$("#slides img").each(function(index)
		{
			var slide = $("#slides img")[index];
			slide.style.top = ((index - activeSlide) * 960) + "px";
		});
	}
	else if (sliderMode == 2)
	{
		
	}
	if (activeSlide == $("#slides img").length)
		activeSlide = 0;
	setBullet();
}

$(function onclick()
{
	$("#leftArrow").click(function()
	{
		if (activeSlide == 0)
			activeSlide = $("#slides img").length - 1;
		else
			--activeSlide;
		slide(1);
	});

	$("#rightArrow").click(function()
	{
		if (activeSlide == $("#slides img").length - 1)
			activeSlide = 0;
		else
			++activeSlide;
		slide(1);
	});

	$(".bullet").click(function()
	{
		activeSlide = $(this).index();
 		slide(1);
	});

});