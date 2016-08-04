var headstrong = {};

headstrong.equalBoxHeights = {
    groups: [],
    timer: {},
    init: function() {
        var t = this,
            a = "";
        $(".equal-height").each(function() {
            a = $(this).attr("data-heightGroup"), $.inArray(a, t.groups) < 0 && t.groups.push(a)
        }), t.resizeW(), window.addEventListener ? window.addEventListener("resize", function(a) {
            t.evenHeights()
        }) : window.attachEvent("resize", function(a) {
            t.evenHeights()
        })
    },
    evenHeights: function() {

        var t = this;
        clearTimeout(t.timer), t.timer = setTimeout(function() {
            t.resizeW()
        }, 100)
    },
    resizeW: function() {
        var t = this;
        for (x in t.groups) {
            $(".equal-height[data-heightGroup='" + t.groups[x] + "']").height("inherit");
            var a = 0;
            $(".equal-height[data-heightGroup='" + t.groups[x] + "']").each(function() {
                $(this).height() > a && (a = $(this).height())
            }), $(".equal-height[data-heightGroup='" + t.groups[x] + "']").height(a)
        }
    }
}

headstrong.svgeezy = {


		init: function(avoid, filetype) {
			this.avoid = avoid || false;
			this.filetype = filetype || 'png';
			this.svgSupport = this.supportsSvg();
			if(!this.svgSupport) {
				this.images = document.getElementsByTagName('img');
				this.imgL = this.images.length;
				this.fallbacks();
			}
		},

		fallbacks: function() {
			while(this.imgL--) {
				if(!this.hasClass(this.images[this.imgL], this.avoid) || !this.avoid) {
					var src = this.images[this.imgL].getAttribute('src');
					if(src === null) {
						continue;
					}
					if(this.getFileExt(src) == 'svg') {
						var newSrc = src.replace('.svg', '.' + this.filetype);
						this.images[this.imgL].setAttribute('src', newSrc);
					}
				}
			}
		},

		getFileExt: function(src) {
			var ext = src.split('.').pop();

    			if(ext.indexOf("?") !== -1) {
      				ext = ext.split('?')[0];
    			}

    			return ext;
		},

		hasClass: function(element, cls) {
			return(' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
		},

		supportsSvg: function() {
			return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1");
		}
}

headstrong.validate = {

	init : function() {

		var _this = this;

		$(".validateField").each(function(){


			$(this).on('blur',function(){

				_this.validateField($(this));
			})

		});

	},

	validateField : function(field) {

		var type = field.attr('data-validationType');
		var value = field.val();
		var _this = this;

		var emailTest = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

		$('p.error',field.parent()).remove();

		switch (type) {

			case 'text' :

				if (value.trim() == '')
				{
					_this.addError(field);

					field.parent().addClass('has-error').removeClass('has-success');
				} else {

					field.parent().removeClass('has-error').addClass('has-success');
				}

				break;

			case 'email' :

				if (emailTest.test(value.trim()) == false)
				{
					_this.addError(field);
					field.parent().addClass('has-error').removeClass('has-success');
				} else {

					field.parent().removeClass('has-error').addClass('has-success');
				}

				break;

			case 'phone' :

				if (value.trim() == '')
				{
					_this.addError(field);
					field.parent().addClass('has-error').removeClass('has-success');
				} else {

					field.parent().removeClass('has-error').addClass('has-success');
				}

				break;

		}

	},

	addError : function(field) {

		var _this = this;
		field.after('<p class="error">' + field.attr('data-error') + '</span>');
	}

}

var GoogleAnalytics = (function() {
  var sel = '.ga-track';

  var init = function() {
    console.info('The Headstrong Project: Google Analytics is ready.');
    bindTracking();
  };

  var bindTracking = function() {
    $(document).on('click', sel, function(e) {
      var $t = $(this);

      var action = $t.data('ga-category');
      var category = $t.data('ga-category');
      var label = $t.data('ga-category');

      sendEvent(category, action, label);
    });
  };

  var sendEvent = function(category, action, label) {
    ga('send', 'event', category, action, label);
  };

  init();

  return {
    sendEvent: sendEvent
  };
}());

// -------- document.ready

$(document).ready(function(){

	headstrong.equalBoxHeights.init();
	headstrong.svgeezy.init('nocheck','png');
	 $('.navbar .dropdown > a').click(function(){
            location.href = this.href;
        });


	$('.set-height').each(function(){

		$(this).css('min-height',$(this).height() + 'px');

	});

	$('.sm-button').on('click',function(e){
		e.preventDefault();
		e.stopPropagation();
        window.open(this.href, '_blank');
	});

});
