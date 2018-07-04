(function($) {
    
	var title = document.getElementById("page-title"),
		subTitle = document.getElementById("page-sub-title");

	// Simple Tween
	//Css Animation
	TweenLite.from(title, 1.5, {scale:0.975, autoAlpha:0});
// TweenLite.set(img, {x:-200});
TweenLite.from(subTitle,1,{autoAlpha: 0, delay:1});

})(jQuery);