if("undefined"==typeof jQuery)throw new Error("ZUI requires jQuery");+function(t){"use strict";function e(){var t=document.createElement("bootstrap"),e={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",transition:"transitionend"};for(var o in e)if(void 0!==t.style[o])return{end:e[o]}}t.fn.emulateTransitionEnd=function(e){var o=!1,i=this;t(this).one(t.support.transition.end,function(){o=!0});var n=function(){o||t(i).trigger(t.support.transition.end)};return setTimeout(n,e),this},t(function(){t.support.transition=e()})}(jQuery),+function(t){"use strict";var e='[data-dismiss="alert"]',o=function(o){t(o).on("click",e,this.close)};o.prototype.close=function(e){function o(){s.trigger("closed.bs.alert").remove()}var i=t(this),n=i.attr("data-target");n||(n=i.attr("href"),n=n&&n.replace(/.*(?=#[^\s]*$)/,""));var s=t(n);e&&e.preventDefault(),s.length||(s=i.hasClass("alert")?i:i.parent()),s.trigger(e=t.Event("close.bs.alert")),e.isDefaultPrevented()||(s.removeClass("in"),t.support.transition&&s.hasClass("fade")?s.one(t.support.transition.end,o).emulateTransitionEnd(150):o())};var i=t.fn.alert;t.fn.alert=function(e){return this.each(function(){var i=t(this),n=i.data("bs.alert");n||i.data("bs.alert",n=new o(this)),"string"==typeof e&&n[e].call(i)})},t.fn.alert.Constructor=o,t.fn.alert.noConflict=function(){return t.fn.alert=i,this},t(document).on("click.bs.alert.data-api",e,o.prototype.close)}(window.jQuery),+function(t){"use strict";var e=function(o,i){this.$element=t(o),this.options=t.extend({},e.DEFAULTS,i)};e.DEFAULTS={loadingText:"loading..."},e.prototype.setState=function(t){var e="disabled",o=this.$element,i=o.is("input")?"val":"html",n=o.data();t+="Text",n.resetText||o.data("resetText",o[i]()),o[i](n[t]||this.options[t]),setTimeout(function(){"loadingText"==t?o.addClass(e).attr(e,e):o.removeClass(e).removeAttr(e)},0)},e.prototype.toggle=function(){var t=this.$element.closest('[data-toggle="buttons"]');if(t.length){var e=this.$element.find("input").prop("checked",!this.$element.hasClass("active")).trigger("change");"radio"===e.prop("type")&&t.find(".active").removeClass("active")}this.$element.toggleClass("active")};var o=t.fn.button;t.fn.button=function(o){return this.each(function(){var i=t(this),n=i.data("bs.button"),s="object"==typeof o&&o;n||i.data("bs.button",n=new e(this,s)),"toggle"==o?n.toggle():o&&n.setState(o)})},t.fn.button.Constructor=e,t.fn.button.noConflict=function(){return t.fn.button=o,this},t(document).on("click.bs.button.data-api","[data-toggle^=button]",function(e){var o=t(e.target);o.hasClass("btn")||(o=o.closest(".btn")),o.button("toggle"),e.preventDefault()})}(window.jQuery),+function(t){"use strict";var e=function(e,o){this.$element=t(e),this.$indicators=this.$element.find(".carousel-indicators"),this.options=o,this.paused=this.sliding=this.interval=this.$active=this.$items=null,"hover"==this.options.pause&&this.$element.on("mouseenter",t.proxy(this.pause,this)).on("mouseleave",t.proxy(this.cycle,this))};e.DEFAULTS={interval:5e3,pause:"hover",wrap:!0},e.prototype.cycle=function(e){return e||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(t.proxy(this.next,this),this.options.interval)),this},e.prototype.getActiveIndex=function(){return this.$active=this.$element.find(".item.active"),this.$items=this.$active.parent().children(),this.$items.index(this.$active)},e.prototype.to=function(e){var o=this,i=this.getActiveIndex();return e>this.$items.length-1||0>e?void 0:this.sliding?this.$element.one("slid",function(){o.to(e)}):i==e?this.pause().cycle():this.slide(e>i?"next":"prev",t(this.$items[e]))},e.prototype.pause=function(e){return e||(this.paused=!0),this.$element.find(".next, .prev").length&&t.support.transition.end&&(this.$element.trigger(t.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},e.prototype.next=function(){return this.sliding?void 0:this.slide("next")},e.prototype.prev=function(){return this.sliding?void 0:this.slide("prev")},e.prototype.slide=function(e,o){var i=this.$element.find(".item.active"),n=o||i[e](),s=this.interval,a="next"==e?"left":"right",r="next"==e?"first":"last",l=this;if(!n.length){if(!this.options.wrap)return;n=this.$element.find(".item")[r]()}this.sliding=!0,s&&this.pause();var c=t.Event("slide.bs.carousel",{relatedTarget:n[0],direction:a});if(!n.hasClass("active")){if(this.$indicators.length&&(this.$indicators.find(".active").removeClass("active"),this.$element.one("slid",function(){var e=t(l.$indicators.children()[l.getActiveIndex()]);e&&e.addClass("active")})),t.support.transition&&this.$element.hasClass("slide")){if(this.$element.trigger(c),c.isDefaultPrevented())return;n.addClass(e),n[0].offsetWidth,i.addClass(a),n.addClass(a),i.one(t.support.transition.end,function(){n.removeClass([e,a].join(" ")).addClass("active"),i.removeClass(["active",a].join(" ")),l.sliding=!1,setTimeout(function(){l.$element.trigger("slid")},0)}).emulateTransitionEnd(600)}else{if(this.$element.trigger(c),c.isDefaultPrevented())return;i.removeClass("active"),n.addClass("active"),this.sliding=!1,this.$element.trigger("slid")}return s&&this.cycle(),this}};var o=t.fn.carousel;t.fn.carousel=function(o){return this.each(function(){var i=t(this),n=i.data("bs.carousel"),s=t.extend({},e.DEFAULTS,i.data(),"object"==typeof o&&o),a="string"==typeof o?o:s.slide;n||i.data("bs.carousel",n=new e(this,s)),"number"==typeof o?n.to(o):a?n[a]():s.interval&&n.pause().cycle()})},t.fn.carousel.Constructor=e,t.fn.carousel.noConflict=function(){return t.fn.carousel=o,this},t(document).on("click.bs.carousel.data-api","[data-slide], [data-slide-to]",function(e){var o,i=t(this),n=t(i.attr("data-target")||(o=i.attr("href"))&&o.replace(/.*(?=#[^\s]+$)/,"")),s=t.extend({},n.data(),i.data()),a=i.attr("data-slide-to");a&&(s.interval=!1),n.carousel(s),(a=i.attr("data-slide-to"))&&n.data("bs.carousel").to(a),e.preventDefault()}),t(window).on("load",function(){t('[data-ride="carousel"]').each(function(){var e=t(this);e.carousel(e.data())})})}(window.jQuery),+function(t){"use strict";var e=function(o,i){this.$element=t(o),this.options=t.extend({},e.DEFAULTS,i),this.transitioning=null,this.options.parent&&(this.$parent=t(this.options.parent)),this.options.toggle&&this.toggle()};e.DEFAULTS={toggle:!0},e.prototype.dimension=function(){var t=this.$element.hasClass("width");return t?"width":"height"},e.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var e=t.Event("show.bs.collapse");if(this.$element.trigger(e),!e.isDefaultPrevented()){var o=this.$parent&&this.$parent.find("> .panel > .in");if(o&&o.length){var i=o.data("bs.collapse");if(i&&i.transitioning)return;o.collapse("hide"),i||o.data("bs.collapse",null)}var n=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[n](0),this.transitioning=1;var s=function(){this.$element.removeClass("collapsing").addClass("in")[n]("auto"),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!t.support.transition)return s.call(this);var a=t.camelCase(["scroll",n].join("-"));this.$element.one(t.support.transition.end,t.proxy(s,this)).emulateTransitionEnd(350)[n](this.$element[0][a])}}},e.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var e=t.Event("hide.bs.collapse");if(this.$element.trigger(e),!e.isDefaultPrevented()){var o=this.dimension();this.$element[o](this.$element[o]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse").removeClass("in"),this.transitioning=1;var i=function(){this.transitioning=0,this.$element.trigger("hidden.bs.collapse").removeClass("collapsing").addClass("collapse")};return t.support.transition?(this.$element[o](0).one(t.support.transition.end,t.proxy(i,this)).emulateTransitionEnd(350),void 0):i.call(this)}}},e.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()};var o=t.fn.collapse;t.fn.collapse=function(o){return this.each(function(){var i=t(this),n=i.data("bs.collapse"),s=t.extend({},e.DEFAULTS,i.data(),"object"==typeof o&&o);n||i.data("bs.collapse",n=new e(this,s)),"string"==typeof o&&n[o]()})},t.fn.collapse.Constructor=e,t.fn.collapse.noConflict=function(){return t.fn.collapse=o,this},t(document).on("click.bs.collapse.data-api","[data-toggle=collapse]",function(e){var o,i=t(this),n=i.attr("data-target")||e.preventDefault()||(o=i.attr("href"))&&o.replace(/.*(?=#[^\s]+$)/,""),s=t(n),a=s.data("bs.collapse"),r=a?"toggle":i.data(),l=i.attr("data-parent"),c=l&&t(l);a&&a.transitioning||(c&&c.find('[data-toggle=collapse][data-parent="'+l+'"]').not(i).addClass("collapsed"),i[s.hasClass("in")?"addClass":"removeClass"]("collapsed")),s.collapse(r)})}(window.jQuery),+function(t){"use strict";function e(){t(i).remove(),t(n).each(function(e){var i=o(t(this));i.hasClass("open")&&(i.trigger(e=t.Event("hide.bs.dropdown")),e.isDefaultPrevented()||i.removeClass("open").trigger("hidden.bs.dropdown"))})}function o(e){var o=e.attr("data-target");o||(o=e.attr("href"),o=o&&/#/.test(o)&&o.replace(/.*(?=#[^\s]*$)/,""));var i=o&&t(o);return i&&i.length?i:e.parent()}var i=".dropdown-backdrop",n="[data-toggle=dropdown]",s=function(e){t(e).on("click.bs.dropdown",this.toggle)};s.prototype.toggle=function(i){var n=t(this);if(!n.is(".disabled, :disabled")){var s=o(n),a=s.hasClass("open");if(e(),!a){if("ontouchstart"in document.documentElement&&!s.closest(".navbar-nav").length&&t('<div class="dropdown-backdrop"/>').insertAfter(t(this)).on("click",e),s.trigger(i=t.Event("show.bs.dropdown")),i.isDefaultPrevented())return;s.toggleClass("open").trigger("shown.bs.dropdown"),n.focus()}return!1}},s.prototype.keydown=function(e){if(/(38|40|27)/.test(e.keyCode)){var i=t(this);if(e.preventDefault(),e.stopPropagation(),!i.is(".disabled, :disabled")){var s=o(i),a=s.hasClass("open");if(!a||a&&27==e.keyCode)return 27==e.which&&s.find(n).focus(),i.click();var r=t("[role=menu] li:not(.divider):visible a",s);if(r.length){var l=r.index(r.filter(":focus"));38==e.keyCode&&l>0&&l--,40==e.keyCode&&l<r.length-1&&l++,~l||(l=0),r.eq(l).focus()}}}};var a=t.fn.dropdown;t.fn.dropdown=function(e){return this.each(function(){var o=t(this),i=o.data("dropdown");i||o.data("dropdown",i=new s(this)),"string"==typeof e&&i[e].call(o)})},t.fn.dropdown.Constructor=s,t.fn.dropdown.noConflict=function(){return t.fn.dropdown=a,this},t(document).on("click.bs.dropdown.data-api",e).on("click.bs.dropdown.data-api",".dropdown form",function(t){t.stopPropagation()}).on("click.bs.dropdown.data-api",n,s.prototype.toggle).on("keydown.bs.dropdown.data-api",n+", [role=menu]",s.prototype.keydown)}(window.jQuery),+function(t){"use strict";var e=function(e,o){this.options=o,this.$element=t(e),this.$backdrop=this.isShown=null,this.options.remote&&this.$element.load(this.options.remote)};e.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},e.prototype.toggle=function(t){return this[this.isShown?"hide":"show"](t)},e.prototype.show=function(e){var o=this,i=t.Event("show.bs.modal",{relatedTarget:e});this.$element.trigger(i),this.isShown||i.isDefaultPrevented()||(this.isShown=!0,this.escape(),this.$element.on("click.dismiss.modal",'[data-dismiss="modal"]',t.proxy(this.hide,this)),this.backdrop(function(){var i=t.support.transition&&o.$element.hasClass("fade");o.$element.parent().length||o.$element.appendTo(document.body),o.$element.show(),i&&o.$element[0].offsetWidth,o.$element.addClass("in").attr("aria-hidden",!1),o.enforceFocus();var n=t.Event("shown.bs.modal",{relatedTarget:e});i?o.$element.find(".modal-dialog").one(t.support.transition.end,function(){o.$element.focus().trigger(n)}).emulateTransitionEnd(300):o.$element.focus().trigger(n)}))},e.prototype.hide=function(e){e&&e.preventDefault(),e=t.Event("hide.bs.modal"),this.$element.trigger(e),this.isShown&&!e.isDefaultPrevented()&&(this.isShown=!1,this.escape(),t(document).off("focusin.bs.modal"),this.$element.removeClass("in").attr("aria-hidden",!0).off("click.dismiss.modal"),t.support.transition&&this.$element.hasClass("fade")?this.$element.one(t.support.transition.end,t.proxy(this.hideModal,this)).emulateTransitionEnd(300):this.hideModal())},e.prototype.enforceFocus=function(){t(document).off("focusin.bs.modal").on("focusin.bs.modal",t.proxy(function(t){this.$element[0]===t.target||this.$element.has(t.target).length||this.$element.focus()},this))},e.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keyup.dismiss.bs.modal",t.proxy(function(t){27==t.which&&this.hide()},this)):this.isShown||this.$element.off("keyup.dismiss.bs.modal")},e.prototype.hideModal=function(){var t=this;this.$element.hide(),this.backdrop(function(){t.removeBackdrop(),t.$element.trigger("hidden.bs.modal")})},e.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},e.prototype.backdrop=function(e){var o=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var i=t.support.transition&&o;if(this.$backdrop=t('<div class="modal-backdrop '+o+'" />').appendTo(document.body),this.$element.on("click.dismiss.modal",t.proxy(function(t){t.target===t.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus.call(this.$element[0]):this.hide.call(this))},this)),i&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!e)return;i?this.$backdrop.one(t.support.transition.end,e).emulateTransitionEnd(150):e()}else!this.isShown&&this.$backdrop?(this.$backdrop.removeClass("in"),t.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one(t.support.transition.end,e).emulateTransitionEnd(150):e()):e&&e()};var o=t.fn.modal;t.fn.modal=function(o,i){return this.each(function(){var n=t(this),s=n.data("bs.modal"),a=t.extend({},e.DEFAULTS,n.data(),"object"==typeof o&&o);s||n.data("bs.modal",s=new e(this,a)),"string"==typeof o?s[o](i):a.show&&s.show(i)})},t.fn.modal.Constructor=e,t.fn.modal.noConflict=function(){return t.fn.modal=o,this},t(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(e){var o=t(this),i=o.attr("href"),n=t(o.attr("data-target")||i&&i.replace(/.*(?=#[^\s]+$)/,"")),s=n.data("modal")?"toggle":t.extend({remote:!/#/.test(i)&&i},n.data(),o.data());e.preventDefault(),n.modal(s,this).one("hide",function(){o.is(":visible")&&o.focus()})}),t(document).on("show.bs.modal",".modal",function(){t(document.body).addClass("modal-open")}).on("hidden.bs.modal",".modal",function(){t(document.body).removeClass("modal-open")})}(window.jQuery),+function(t){"use strict";var e=function(t,e){this.type=this.options=this.enabled=this.timeout=this.hoverState=this.$element=null,this.init("tooltip",t,e)};e.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1},e.prototype.init=function(e,o,i){this.enabled=!0,this.type=e,this.$element=t(o),this.options=this.getOptions(i);for(var n=this.options.trigger.split(" "),s=n.length;s--;){var a=n[s];if("click"==a)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=a){var r="hover"==a?"mouseenter":"focus",l="hover"==a?"mouseleave":"blur";this.$element.on(r+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(l+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},e.prototype.getDefaults=function(){return e.DEFAULTS},e.prototype.getOptions=function(e){return e=t.extend({},this.getDefaults(),this.$element.data(),e),e.delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},e.prototype.getDelegateOptions=function(){var e={},o=this.getDefaults();return this._options&&t.each(this._options,function(t,i){o[t]!=i&&(e[t]=i)}),e},e.prototype.enter=function(e){var o=e instanceof this.constructor?e:t(e.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type);return clearTimeout(o.timeout),o.hoverState="in",o.options.delay&&o.options.delay.show?(o.timeout=setTimeout(function(){"in"==o.hoverState&&o.show()},o.options.delay.show),void 0):o.show()},e.prototype.leave=function(e){var o=e instanceof this.constructor?e:t(e.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type);return clearTimeout(o.timeout),o.hoverState="out",o.options.delay&&o.options.delay.hide?(o.timeout=setTimeout(function(){"out"==o.hoverState&&o.hide()},o.options.delay.hide),void 0):o.hide()},e.prototype.show=function(){var e=t.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){if(this.$element.trigger(e),e.isDefaultPrevented())return;var o=this.tip();this.setContent(),this.options.animation&&o.addClass("fade");var i="function"==typeof this.options.placement?this.options.placement.call(this,o[0],this.$element[0]):this.options.placement,n=/\s?auto?\s?/i,s=n.test(i);s&&(i=i.replace(n,"")||"top"),o.detach().css({top:0,left:0,display:"block"}).addClass(i),this.options.container?o.appendTo(this.options.container):o.insertAfter(this.$element);var a=this.getPosition(),r=o[0].offsetWidth,l=o[0].offsetHeight;if(s){var c=this.$element.parent(),d=i,h=document.documentElement.scrollTop||document.body.scrollTop,p="body"==this.options.container?window.innerWidth:c.outerWidth(),u="body"==this.options.container?window.innerHeight:c.outerHeight(),f="body"==this.options.container?0:c.offset().left;i="bottom"==i&&a.top+a.height+l-h>u?"top":"top"==i&&a.top-h-l<0?"bottom":"right"==i&&a.right+r>p?"left":"left"==i&&a.left-r<f?"right":i,o.removeClass(d).addClass(i)}var m=this.getCalculatedOffset(i,a,r,l);this.applyPlacement(m,i),this.$element.trigger("shown.bs."+this.type)}},e.prototype.applyPlacement=function(t,e){var o,i=this.tip(),n=i[0].offsetWidth,s=i[0].offsetHeight,a=parseInt(i.css("margin-top"),10),r=parseInt(i.css("margin-left"),10);isNaN(a)&&(a=0),isNaN(r)&&(r=0),t.top=t.top+a,t.left=t.left+r,i.offset(t).addClass("in");var l=i[0].offsetWidth,c=i[0].offsetHeight;if("top"==e&&c!=s&&(o=!0,t.top=t.top+s-c),/bottom|top/.test(e)){var d=0;t.left<0&&(d=-2*t.left,t.left=0,i.offset(t),l=i[0].offsetWidth,c=i[0].offsetHeight),this.replaceArrow(d-n+l,l,"left")}else this.replaceArrow(c-s,c,"top");o&&i.offset(t)},e.prototype.replaceArrow=function(t,e,o){this.arrow().css(o,t?50*(1-t/e)+"%":"")},e.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("fade in top bottom left right")},e.prototype.hide=function(){function e(){"in"!=o.hoverState&&i.detach()}var o=this,i=this.tip(),n=t.Event("hide.bs."+this.type);return this.$element.trigger(n),n.isDefaultPrevented()?void 0:(i.removeClass("in"),t.support.transition&&this.$tip.hasClass("fade")?i.one(t.support.transition.end,e).emulateTransitionEnd(150):e(),this.$element.trigger("hidden.bs."+this.type),this)},e.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},e.prototype.hasContent=function(){return this.getTitle()},e.prototype.getPosition=function(){var e=this.$element[0];return t.extend({},"function"==typeof e.getBoundingClientRect?e.getBoundingClientRect():{width:e.offsetWidth,height:e.offsetHeight},this.$element.offset())},e.prototype.getCalculatedOffset=function(t,e,o,i){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-o/2}:"top"==t?{top:e.top-i,left:e.left+e.width/2-o/2}:"left"==t?{top:e.top+e.height/2-i/2,left:e.left-o}:{top:e.top+e.height/2-i/2,left:e.left+e.width}},e.prototype.getTitle=function(){var t,e=this.$element,o=this.options;return t=e.attr("data-original-title")||("function"==typeof o.title?o.title.call(e[0]):o.title)},e.prototype.tip=function(){return this.$tip=this.$tip||t(this.options.template)},e.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},e.prototype.validate=function(){this.$element[0].parentNode||(this.hide(),this.$element=null,this.options=null)},e.prototype.enable=function(){this.enabled=!0},e.prototype.disable=function(){this.enabled=!1},e.prototype.toggleEnabled=function(){this.enabled=!this.enabled},e.prototype.toggle=function(e){var o=e?t(e.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type):this;o.tip().hasClass("in")?o.leave(o):o.enter(o)},e.prototype.destroy=function(){this.hide().$element.off("."+this.type).removeData("bs."+this.type)};var o=t.fn.tooltip;t.fn.tooltip=function(o){return this.each(function(){var i=t(this),n=i.data("bs.tooltip"),s="object"==typeof o&&o;n||i.data("bs.tooltip",n=new e(this,s)),"string"==typeof o&&n[o]()})},t.fn.tooltip.Constructor=e,t.fn.tooltip.noConflict=function(){return t.fn.tooltip=o,this}}(window.jQuery),+function(t){"use strict";var e=function(t,e){this.init("popover",t,e)};if(!t.fn.tooltip)throw new Error("Popover requires tooltip.js");e.DEFAULTS=t.extend({},t.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),e.prototype=t.extend({},t.fn.tooltip.Constructor.prototype),e.prototype.constructor=e,e.prototype.getDefaults=function(){return e.DEFAULTS},e.prototype.setContent=function(){var t=this.tip(),e=this.getTarget();if(e)return e.find(".arrow").length<1&&t.addClass("no-arrow"),t.html(e.html()),void 0;var o=this.getTitle(),i=this.getContent();t.find(".popover-title")[this.options.html?"html":"text"](o),t.find(".popover-content")[this.options.html?"html":"text"](i),t.removeClass("fade top bottom left right in"),t.find(".popover-title").html()||t.find(".popover-title").hide()},e.prototype.hasContent=function(){return this.getTarget()||this.getTitle()||this.getContent()},e.prototype.getContent=function(){var t=this.$element,e=this.options;return t.attr("data-content")||("function"==typeof e.content?e.content.call(t[0]):e.content)},e.prototype.getTarget=function(){var e=this.$element,o=this.options,i=e.attr("data-target")||("function"==typeof o.target?o.target.call(e[0]):o.target);return i?"$next"==i?e.next(".popover"):t(i):!1},e.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")},e.prototype.tip=function(){return this.$tip||(this.$tip=t(this.options.template)),this.$tip};var o=t.fn.popover;t.fn.popover=function(o){return this.each(function(){var i=t(this),n=i.data("bs.popover"),s="object"==typeof o&&o;n||i.data("bs.popover",n=new e(this,s)),"string"==typeof o&&n[o]()})},t.fn.popover.Constructor=e,t.fn.popover.noConflict=function(){return t.fn.popover=o,this}}(window.jQuery),function(t){jQuery.fn.lightbox=function(){var e=0;t("[data-toggle='lightbox']").each(function(){t(this).attr("data-id",e++)}),t(this).click(function(){if(!t.fn.modal)throw new Error("modal requires for lightbox");var e=t(this),o=e.attr("data-image")||e.attr("src")||e.attr("href")||e.find("img").attr("src");if(!o)return!1;0==t("#lightboxModal").size()&&(t('<div id="lightboxModal" class="modal fade modal-lightbox"><div class="modal-dialog"><button class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button><button class="controller prev"><i class="icon icon-chevron-left"></i></button><button class="controller next"><i class="icon icon-chevron-right"></i></button><img id="lightboxImg" src="#" alt="" data-dismiss="modal" /><div class="caption"></div></div></div>').appendTo("body"),t("#lightboxModal .controller").click(function(){var e=parseInt(t("#lightboxModal").attr("data-id"))+(t(this).hasClass("prev")?-1:1),o=t('[data-toggle="lightbox"][data-id="'+e+'"]');if(o){var i=o.attr("data-image")||o.attr("src")||o.attr("href")||o.find("img").attr("src");i&&(t("#lightboxImg").attr("src",i),t("#lightboxModal").attr("data-id",e),t("#lightboxModal .controller").hide(),t('[data-toggle="lightbox"][data-id="'+(e-1)+'"]').length>0&&t("#lightboxModal .prev").show(),t('[data-toggle="lightbox"][data-id="'+(e+1)+'"]').length>0&&t("#lightboxModal .next").show(),t("#lightboxModal .modal-dialog").width(o.attr("data-width")||"auto").height(o.attr("data-height")||"auto").css("margin-top",Math.max(0,(t(window).height()-o.attr("data-height"))/2)))}}));var i=parseInt(e.attr("data-id")),n=t("#lightboxImg"),s=t("#lightboxModal");return s.find(".controller").hide(),s.attr("data-id",i),t('[data-toggle="lightbox"][data-id="'+(i-1)+'"]').length>0&&s.find(".prev").show(),t('[data-toggle="lightbox"][data-id="'+(i+1)+'"]').length>0&&s.find(".next").show(),s.find(".modal-dialog").width(e.attr("data-width")||"auto").height(e.attr("data-height")||"auto").css("margin-top",Math.max(0,(t(window).height()-e.attr("data-height"))/2)),n.attr("src",o),s.modal(),!1})}}(jQuery),window.bootbox=window.bootbox||function t(e,o){"use strict";function i(t){var e=v[m.locale];return e?e[t]:v.en[t]}function n(t,o,i){t.preventDefault();var n=e.isFunction(i)&&i(t)===!1;n||o.modal("hide")}function s(t){var e,o=0;for(e in t)o++;return o}function a(t,o){var i=0;e.each(t,function(t,e){o(t,e,i++)})}function r(t){var o,i;if("object"!=typeof t)throw new Error("Please supply an object of options");if(!t.message)throw new Error("Please specify a message");return t=e.extend({},m,t),t.buttons||(t.buttons={}),t.backdrop=t.backdrop?"static":!1,o=t.buttons,i=s(o),a(o,function(t,n,s){if(e.isFunction(n)&&(n=o[t]={callback:n}),"object"!==e.type(n))throw new Error("button with key "+t+" must be an object");n.label||(n.label=t),n.className||(n.className=2>=i&&s===i-1?"btn-primary":"btn-default")}),t}function l(t,e){var o=t.length,i={};if(1>o||o>2)throw new Error("Invalid argument length");return 2===o||"string"==typeof t[0]?(i[e[0]]=t[0],i[e[1]]=t[1]):i=t[0],i}function c(t,o,i){return e.extend(!0,{},t,l(o,i))}function d(t,e,o,i){var n={className:"bootbox-"+t,buttons:h.apply(null,e)};return p(c(n,i,o),e)}function h(){for(var t={},e=0,o=arguments.length;o>e;e++){var n=arguments[e],s=n.toLowerCase(),a=n.toUpperCase();t[s]={label:i(a)}}return t}function p(t,e){var i={};return a(e,function(t,e){i[e]=!0}),a(t.buttons,function(t){if(i[t]===o)throw new Error("button key "+t+" is not allowed (options are "+e.join("\n")+")")}),t}var u={dialog:"<div class='bootbox modal' tabindex='-1' role='dialog'><div class='modal-dialog'><div class='modal-content'><div class='modal-body'><div class='bootbox-body'></div></div></div></div></div>",header:"<div class='modal-header'><h4 class='modal-title'></h4></div>",footer:"<div class='modal-footer'></div>",closeButton:"<button type='button' class='bootbox-close-button close'>&times;</button>",form:"<form class='bootbox-form'></form>",inputs:{text:"<input class='bootbox-input bootbox-input-text form-control' autocomplete=off type=text />",email:"<input class='bootbox-input bootbox-input-email form-control' autocomplete='off' type='email' />",select:"<select class='bootbox-input bootbox-input-select form-control'></select>",checkbox:"<div class='checkbox'><label><input class='bootbox-input bootbox-input-checkbox' type='checkbox' /></label></div>"}},f=e("body"),m={locale:"en",backdrop:!0,animate:!0,className:null,closeButton:!0,show:!0},g={};g.alert=function(){var t;if(t=d("alert",["ok"],["message","callback"],arguments),t.callback&&!e.isFunction(t.callback))throw new Error("alert requires callback property to be a function when provided");return t.buttons.ok.callback=t.onEscape=function(){return e.isFunction(t.callback)?t.callback():!0},g.dialog(t)},g.confirm=function(){var t;if(t=d("confirm",["cancel","confirm"],["message","callback"],arguments),t.buttons.cancel.callback=t.onEscape=function(){return t.callback(!1)},t.buttons.confirm.callback=function(){return t.callback(!0)},!e.isFunction(t.callback))throw new Error("confirm requires a callback");return g.dialog(t)},g.prompt=function(){var t,i,n,s,r,l,d;if(s=e(u.form),i={className:"bootbox-prompt",buttons:h("cancel","confirm"),value:"",inputType:"text"},t=p(c(i,arguments,["title","callback"]),["cancel","confirm"]),l=t.show===o?!0:t.show,t.message=s,t.buttons.cancel.callback=t.onEscape=function(){return t.callback(null)},t.buttons.confirm.callback=function(){var o;switch(t.inputType){case"text":case"email":case"select":o=r.val();break;case"checkbox":var i=r.find("input:checked");o=[],a(i,function(t,i){o.push(e(i).val())})}return t.callback(o)},t.show=!1,!t.title)throw new Error("prompt requires a title");if(!e.isFunction(t.callback))throw new Error("prompt requires a callback");if(!u.inputs[t.inputType])throw new Error("invalid prompt type");switch(r=e(u.inputs[t.inputType]),t.inputType){case"text":case"email":r.val(t.value);break;case"select":var f={};if(d=t.inputOptions||[],!d.length)throw new Error("prompt with select requires options");a(d,function(t,i){var n=r;if(i.value===o||i.text===o)throw new Error("given options in wrong format");i.group&&(f[i.group]||(f[i.group]=e("<optgroup/>").attr("label",i.group)),n=f[i.group]),n.append("<option value='"+i.value+"'>"+i.text+"</option>")}),a(f,function(t,e){r.append(e)}),r.val(t.value);break;case"checkbox":var m=e.isArray(t.value)?t.value:[t.value];if(d=t.inputOptions||[],!d.length)throw new Error("prompt with checkbox requires options");if(!d[0].value||!d[0].text)throw new Error("given options in wrong format");r=e("<div/>"),a(d,function(o,i){var n=e(u.inputs[t.inputType]);n.find("input").attr("value",i.value),n.find("label").append(i.text),a(m,function(t,e){e===i.value&&n.find("input").prop("checked",!0)}),r.append(n)})}return t.placeholder&&r.attr("placeholder",t.placeholder),s.append(r),s.on("submit",function(t){t.preventDefault(),n.find(".btn-primary").click()}),n=g.dialog(t),n.off("shown.bs.modal"),n.on("shown.bs.modal",function(){r.focus()}),l===!0&&n.modal("show"),n},g.dialog=function(t){t=r(t);var o=e(u.dialog),i=o.find(".modal-body"),s=t.buttons,l="",c={onEscape:t.onEscape};if(a(s,function(t,e){l+="<button data-bb-handler='"+t+"' type='button' class='btn "+e.className+"'>"+e.label+"</button>",c[t]=e.callback}),i.find(".bootbox-body").html(t.message),t.animate===!0&&o.addClass("fade"),t.className&&o.addClass(t.className),t.title&&i.before(u.header),t.closeButton){var d=e(u.closeButton);t.title?o.find(".modal-header").prepend(d):d.css("margin-top","-10px").prependTo(i)}return t.title&&o.find(".modal-title").html(t.title),l.length&&(i.after(u.footer),o.find(".modal-footer").html(l)),o.on("hidden.bs.modal",function(t){t.target===this&&o.remove()}),o.on("shown.bs.modal",function(){o.find(".btn-primary:first").focus()}),o.on("escape.close.bb",function(t){c.onEscape&&n(t,o,c.onEscape)}),o.on("click",".modal-footer button",function(t){var i=e(this).data("bb-handler");n(t,o,c[i])}),o.on("click",".bootbox-close-button",function(t){n(t,o,c.onEscape)}),o.on("keyup",function(t){27===t.which&&o.trigger("escape.close.bb")}),f.append(o),o.modal({backdrop:t.backdrop,keyboard:!1,show:!1}),t.show&&o.modal("show"),o},g.setDefaults=function(){var t={};2===arguments.length?t[arguments[0]]=arguments[1]:t=arguments[0],e.extend(m,t)},g.hideAll=function(){e(".bootbox").modal("hide")};var v={br:{OK:"OK",CANCEL:"Cancelar",CONFIRM:"Sim"},da:{OK:"OK",CANCEL:"Annuller",CONFIRM:"Accepter"},de:{OK:"OK",CANCEL:"Abbrechen",CONFIRM:"Akzeptieren"},en:{OK:"OK",CANCEL:"Cancel",CONFIRM:"OK"},es:{OK:"OK",CANCEL:"Cancelar",CONFIRM:"Aceptar"},fi:{OK:"OK",CANCEL:"Peruuta",CONFIRM:"OK"},fr:{OK:"OK",CANCEL:"Annuler",CONFIRM:"D'accord"},it:{OK:"OK",CANCEL:"Annulla",CONFIRM:"Conferma"},nl:{OK:"OK",CANCEL:"Annuleren",CONFIRM:"Accepteren"},no:{OK:"OK",CANCEL:"Avbryt",CONFIRM:"OK"},pl:{OK:"OK",CANCEL:"Anuluj",CONFIRM:"Potwierdź"},ru:{OK:"OK",CANCEL:"Отмена",CONFIRM:"Применить"},zh_CN:{OK:"OK",CANCEL:"取消",CONFIRM:"确认"},zh_TW:{OK:"OK",CANCEL:"取消",CONFIRM:"確認"}};return g.init=function(o){window.bootbox=t(o||e)},g}(window.jQuery),String.prototype.format=function(t){var e=this;if(arguments.length>0){var o;if(1==arguments.length&&"object"==typeof t)for(var i in t)void 0!=t[i]&&(o=new RegExp("({"+i+"})","g"),e=e.replace(o,t[i]));
else for(var n=0;n<arguments.length;n++)void 0!=arguments[n]&&(o=new RegExp("({["+n+"]})","g"),e=e.replace(o,arguments[n]))}return e},+function(t,e){"use strict";function o(){this.show=function(e,o,s,a,r){t(".messager").hide(),i++,o=o||"default",a=a||2e3,r=r||"body",s=s||"top";var l=t(n.format({message:e,type:o,placement:s,id:i})).appendTo(r);return l.find(".close-messager").click(function(){t(this).closest(".messager").fadeOut()}),("top"==s||"bottom"==s)&&l.css("left",(t(r).width()-l.width()-50)/2),l.fadeIn(),setTimeout(function(){t("#messager"+i).fadeOut(function(){t(this).remove()})},a),l},this.primary=function(t,e,o,i){return this.show(t,"primary",e,o,i)},this.success=function(t,e,o,i){return this.show('<i class="icon-ok-sign icon"></i> '+t,"success",e,o,i)},this.info=function(t,e,o,i){return this.show('<i class="icon-info-sign icon"></i> '+t,"info",e,o,i)},this.warning=function(t,e,o,i){return this.show('<i class="icon-warning-sign icon"></i>'+t,"warning",e,o,i)},this.danger=function(t,e,o,i){return this.show('<i class="icon-exclamation-sign icon"></i>'+t,"danger",e,o,i)},this.important=function(t,e,o,i){return this.show(t,"important",e,o,i)},this.special=function(t,e,o,i){return this.show(t,"special",e,o,i)}}var i=0,n='<div class="messager messager-{type} {placement}" id="messager{id}" style="display:none"><div class="messager-content">{message}</div><button class="close-messager">&times;</button></div>',s=new o;e.messager=s}(jQuery,window,document,Math);
