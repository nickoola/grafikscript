jQuery(function($){
	jQuery.fn.viewer = function(options, callback) {
	    var container   = $(this).find("ul.viewer_list"),
	        contents    = container.find("li"),
	        btPrev      = $(this).find("a.bt_prev"),
	        btNext      = $(this).find("a.bt_next"),
	        btPlayStop  = $(this).find("a.bt_play"),
	        posLinks    = $(this).find("ul.viewer_position li"),
	        current     = 0,
	        playing     = false,
	        slideTimer,
	        options     = options || {},
	        autoPlay    = options.autoPlay || "stop", // Autre valeur "auto"
	        delay       = options.delay || 3000,
	        txtLoading  = options.txtLoading || "Chargement";
	    
	    // Initialisation
	    container.addClass("fading");
	    loadContent(0); // Utile si pas de première image
	    if(autoPlay=="auto") {
	        playStop();
	    }

	    // Display des contenus
	    function displayContent(pos) {
	        contents.attr("class", "fade_out");
	        contents.eq(pos).attr("class", "fade_in");
	        posLinks.attr("class","");
	        posLinks.eq(pos).attr("class", "active");
	        current = pos;
	        if (typeof callback == 'function') {
	            callback.call(this);
	        }
	    }
	    
	    // Chargement des images
	    function loadContent(pos) {
	        if(contents.eq(pos).has("img").length > 0) {
	            displayContent(pos);
	        }else {
	            contents.eq(pos).append('<p class="wait">'+txtLoading+'</p>');
	            var img = new Image();
	            img.src = contents.eq(pos).attr("data-srcimg");
	            img.alt = contents.eq(pos).attr("data-descimg");
	            $(img).load(function(){
	                contents.eq(pos).append(this);
	                displayContent(pos);
	                contents.eq(pos).find(".wait").fadeOut("slow",function(){
	                    $(this).remove();
	                });
	            });
	        }
	    }
	    
	    function nextContent() {
	        if(current == contents.length-1) {
	            loadContent(0);
	        }else{
	            loadContent(current+1);
	        }
	    }
	    
	    function prevContent() {
	        if(current == 0) {
	            loadContent(contents.length-1);
	        }else{
	            loadContent(current-1);
	        }
	    }
	    
	    function playStop() {
	        if(!playing) {
	            slideTimer = setInterval(nextContent, delay);
	            playing = true;
	            btPlayStop.removeClass("stop").addClass("play").text("Play");
	        }
	        else {
	            clearInterval(slideTimer);
	            playing = false;
	            btPlayStop.removeClass("play").addClass("stop").text("Stop");
	        }
	    }
	    
	    // Events du viewer
	    btNext.on("click", function(event) {
	        event.preventDefault();
	        nextContent();
	        if(playing==true) {
	            playStop();
	        }
	    });
	    
	    btPrev.on("click", function(event) {
	        event.preventDefault();
	        prevContent();
	        if(playing==true) {
	            playStop();
	        }
	    });

	    posLinks.on("click", function(event) {
	        event.preventDefault();
	        loadContent(posLinks.index(this));
	        if(playing==true) {
	            playStop();
	        }
	    });
	    
	    btPlayStop.on("click", function(event) {
	        event.preventDefault();
	        playStop();
	    });
	}
});