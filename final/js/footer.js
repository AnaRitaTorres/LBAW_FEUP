$(document).ready(function() {
		var docHeight = $(window).height();
		var footerHeight = $('.footer').height();
		var footerTop = $('.footer').position().top + footerHeight;

		if (footerTop < docHeight) {
			$('.footer').css('margin-top', (docHeight - 25 - footerTop) + 'px');
		}
});