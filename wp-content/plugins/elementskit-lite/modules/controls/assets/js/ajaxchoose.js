jQuery(window).on("elementor:init",function(){"use strict";var e=elementor.modules.controls.BaseData.extend({onReady:function(){var e=this.ui.select,t=e.attr("data-ajax-url"),a=window.wpApiSettings.nonce;e.select2({ajax:{url:t,dataType:"json",headers:{"X-WP-Nonce":a},data:function(e){return{s:e.term}}},cache:!0});var n=void 0!==this.getControlValue()?this.getControlValue():"";n.isArray&&(n=this.getControlValue().join()),jQuery.ajax({url:t,dataType:"json",headers:{"X-WP-Nonce":a},data:{ids:String(n)}}).then(function(t){null!==t&&t.results.length>0&&(jQuery.each(t.results,function(t,a){var n=new Option(a.text,a.id,!0,!0);e.append(n).trigger("change")}),e.trigger({type:"select2:select",params:{data:t}}))})},onBeforeDestroy:function(){this.ui.select.data("select2")&&this.ui.select.select2("destroy"),this.el.remove()}});elementor.addControlView("ajaxselect2",e)});