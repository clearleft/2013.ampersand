var config = {
	debug			:false,
	fixedElement	:{
		head		:'section:first-child',
		all			:'section:not(:first-child)',
		line 		:'.line',
		lineTop		:'.lineTop'
	}
}

var heightLines = function() {
	var lvlFirst = $(config.fixedElement.line + ' + *'), 
	lvlSecond= $(config.fixedElement.line + '+ * + *'),
	lvlFirstTop = $(config.fixedElement.lineTop),
	lvlSecondTop = $(config.fixedElement.lineTop + '+ * + *'),
	$top = lvlFirst.height() + lvlFirst.padding().top + lvlFirst.parent().padding().top,
	$height = lvlSecond.margin().top == 0 ? '100%' : lvlSecond.margin().top,
	$topHeight = lvlSecondTop.parent().padding().top == 0 ? lvlSecondTop.margin().top : lvlSecondTop.parent().padding().top;
	
	if (lvlFirst.height() == 78.21875) console.info('p');

	$('body').find(config.fixedElement.line).css({ 
		top: Math.ceil($top),
		height: Math.ceil($height)
	});

	$('body').find(config.fixedElement.lineTop).css({
		height: Math.ceil($topHeight)
	});


}

var fixedElement = function(){
	$(config.fixedElement.head).css({
		height: $(window).height()-($(window).height()/3.9),
		width: $(window).width()
	});
	heightLines();
	if (config.debug == true)	console.info($(window).height());
}

var applicationSizeFont = function() {
	
	$('section:first-child h1:nth-child(1)').fitText(1.39, { minFontSize: '56px', maxFontSize: '130px' });
	$('section:first-child h1:nth-child(2)').fitText(1.94, { minFontSize: '38px', maxFontSize: '130px' });
	$('section:first-child h2').fitText(2.2, { minFontSize: '12px', maxFontSize: '71px' });
	
}

var init = function() {
	fixedElement();
	$(".fancy_title").lettering();
}

$(document).ready(function(){
	init();
	applicationSizeFont();
});

$(window).resize(function(){
	init();
});

