<?php 
include("header.php");
?>





<!-- //about section -->
<div id="about" class="section about">
	<div class="container">
		<div class=" section-heading about-heading">
			<div id="about-subtitle" class="about-subtitle section-subtitle">who we are</div>
			<div class="section-title about-title heading">About us</div>
		</div>			
			<div class="row">
				<div class="column col-lg-4 col-md-4">
					<div class="about__content"data-animate-in="up">
		            	 <a href="https://www.demos.machothemes.com/antreas/our-story/" title="Our Story">
			                     <img width="640" height="427" src="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-1-768x512.jpg" class="about__image wp-post-image" alt="" srcset="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-1-768x512.jpg 768w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-1-300x200.jpg 300w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-1-1024x683.jpg 1024w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-1-600x400.jpg 600w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-1.jpg 1600w" sizes="(max-width: 640px) 100vw, 640px" />	
					 	</a>
	         	<h3 class="about__title">
	               	<a href="https://www.demos.machothemes.com/antreas/our-story/" title="Our Story">Our Story</a>
	           </h3>
	   <p class="text-about">Donec eget maximus erat. Fusce tempor condimentum mauris, in consectetur ante tincidunt quis.</p>
	</div>
</div>
<div class="column col-lg-4 col-md-4">
  <div class="about__content"data-animate-in="up">
	<a href="https://www.demos.machothemes.com/antreas/our-mission/" title="Our Mission">
		<img width="640" height="427" src="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-2-768x512.jpg" class="about__image wp-post-image" alt="" srcset="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-2-768x512.jpg 768w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-2-300x200.jpg 300w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-2-1024x683.jpg 1024w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-2-600x400.jpg 600w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-2.jpg 1600w" sizes="(max-width: 640px) 100vw, 640px" />		</a>
		<h3 class="about__title">
		<a href="https://www.demos.machothemes.com/antreas/our-mission/" title="Our Mission">
			Our Mission	
  	</a>
		</h3>
	<p class="text-about">Donec eget maximus erat. Fusce tempor condimentum mauris, in consectetur ante tincidunt quis.</p>
	</div>
</div>
 <div class="column col-lg-4 col-md-4">
   <div class="about__content" data-animate-in="up">
		<a href="https://www.demos.machothemes.com/antreas/our-beliefs/" title="Our Beliefs">
		<img width="640" height="427" src="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-3-768x512.jpg" class="about__image wp-post-image" alt="" srcset="https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-3-768x512.jpg 768w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-3-300x200.jpg 300w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-3-1024x683.jpg 1024w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-3-600x400.jpg 600w, https://www.demos.machothemes.com/antreas/wp-content/uploads/sites/22/2018/10/about-3.jpg 1600w" sizes="(max-width: 640px) 100vw, 640px" />		
		</a>
		<h3 class="about__title">
		<a href="https://www.demos.machothemes.com/antreas/our-beliefs/" title="Our Beliefs">
			Our Beliefs	
		</a>
	</h3>
	<p class="text-about">Donec eget maximus erat. Fusce tempor condimentum mauris, in consectetur ante tincidunt quis.</p>
	</div>
  </div>
  </div>		
 </div>
</div>












<?php
include("footer.php");
?>

<script>
		$(function() {
  
  var html = $('html');
  // Detections
  if (!("ontouchstart" in window)) {
    html.addClass("noTouch");
  }
  if ("ontouchstart" in window) {
    html.addClass("isTouch");
  }
  if ("ontouchstart" in window) {
    html.addClass("isTouch");
  }
  if (document.documentMode || /Edge/.test(navigator.userAgent)) {
    if (navigator.appVersion.indexOf("Trident") === -1) {
      html.addClass("isEDGE");
    } else {
      html.addClass("isIE isIE11");
    }
  }
  if (navigator.appVersion.indexOf("MSIE") !== -1) {
    html.addClass("isIE");
  }
  if (
    navigator.userAgent.indexOf("Safari") != -1 &&
    navigator.userAgent.indexOf("Chrome") == -1
  ) {
    html.addClass("isSafari");
  }

  // On Screen

  $.fn.isOnScreen = function() {
    var elementTop = $(this).offset().top,
      elementBottom = elementTop + $(this).outerHeight(),
      viewportTop = $(window).scrollTop(),
      viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  function detection() {
    for (var i = 0; i < items.length; i++) {
      var el = $(items[i]);

      if (el.isOnScreen()) {
        el.addClass("in-view");
      } else {
        el.removeClass("in-view");
      }
    }
  }

  var items = document.querySelectorAll(
    "*[data-animate-in], *[data-detect-viewport]"
  ),
    waiting = false,
    w = $(window);

  w.on("resize scroll", function() {
    if (waiting) {
      return;
    }
    waiting = true;
    detection();

    setTimeout(function() {
      waiting = false;
    }, 100);
  });

  $(document).ready(function() {
    setTimeout(function() {
      detection();
    }, 500);

    for (var i = 0; i < items.length; i++) {
      var d = 0,
        el = $(items[i]);
      if (items[i].getAttribute("data-animate-in-delay")) {
        d = items[i].getAttribute("data-animate-in-delay") / 1000 + "s";
      } else {
        d = 0;
      }
      el.css("transition-delay", d);
    }
  });
});

		</script>