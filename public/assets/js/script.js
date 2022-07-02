(function($){"use strict";var $wrapper=$('.main-wrapper');var $pageWrapper=$('.page-wrapper');var $slimScrolls=$('.slimscroll');var Sidemenu=function(){this.$menuItem=$('#sidebar-menu a');};function init(){var $this=Sidemenu;$('#sidebar-menu a').on('click',function(e){if($(this).parent().hasClass('submenu')){e.preventDefault();}
if(!$(this).hasClass('subdrop')){$('ul',$(this).parents('ul:first')).slideUp(350);$('a',$(this).parents('ul:first')).removeClass('subdrop');$(this).next('ul').slideDown(350);$(this).addClass('subdrop');}else if($(this).hasClass('subdrop')){$(this).removeClass('subdrop');$(this).next('ul').slideUp(350);}});$('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');}
init();$('body').append('<div class="sidebar-overlay"></div>');$(document).on('click','#mobile_btn',function(){$wrapper.toggleClass('slide-nav');$('.sidebar-overlay').toggleClass('opened');$('html').addClass('menu-opened');return false;});$(".sidebar-overlay").on("click",function(){$wrapper.removeClass('slide-nav');$(".sidebar-overlay").removeClass("opened");$('html').removeClass('menu-opened');});if($('.page-wrapper').length>0){var height=$(window).height();$(".page-wrapper").css("min-height",height);}
$(window).resize(function(){if($('.page-wrapper').length>0){var height=$(window).height();$(".page-wrapper").css("min-height",height);}});if($('.select').length>0){$('.select').select2({minimumResultsForSearch:-1,width:'100%'});}
if($('.datetimepicker').length>0){$('.datetimepicker').datetimepicker({format:'DD/MM/YYYY',icons:{up:"fa fa-angle-up",down:"fa fa-angle-down",next:'fa fa-angle-right',previous:'fa fa-angle-left'}});$('.datetimepicker').on('dp.show',function(){$(this).closest('.table-responsive').removeClass('table-responsive').addClass('temp');}).on('dp.hide',function(){$(this).closest('.temp').addClass('table-responsive').removeClass('temp')});}
if($('[data-toggle="tooltip"]').length>0){$('[data-toggle="tooltip"]').tooltip();}
if($('.datatable').length>0){$('.datatable').DataTable({"bFilter":false,});}
if($('.clickable-row').length>0){$(document).on('click','.clickable-row',function(){window.location=$(this).data("href");});}
$(document).on('click','#check_all',function(){$('.checkmail').click();return false;});if($('.checkmail').length>0){$('.checkmail').each(function(){$(this).on('click',function(){if($(this).closest('tr').hasClass('checked')){$(this).closest('tr').removeClass('checked');}else{$(this).closest('tr').addClass('checked');}});});}
$(document).on('click','.mail-important',function(){$(this).find('i.fa').toggleClass('fa-star').toggleClass('fa-star-o');});if($('.summernote').length>0){$('.summernote').summernote({height:200,minHeight:null,maxHeight:null,focus:false});}
if($('.proimage-thumb li a').length>0){var full_image=$(this).attr("href");$(".proimage-thumb li a").click(function(){full_image=$(this).attr("href");$(".pro-image img").attr("src",full_image);$(".pro-image img").parent().attr("href",full_image);return false;});}
if($('#pro_popup').length>0){$('#pro_popup').lightGallery({thumbnail:true,selector:'a'});}
if($slimScrolls.length>0){$slimScrolls.slimScroll({height:'auto',width:'100%',position:'right',size:'7px',color:'#ccc',allowPageScroll:false,wheelStep:10,touchScrollStep:100});var wHeight=$(window).height()-60;$slimScrolls.height(wHeight);$('.sidebar .slimScrollDiv').height(wHeight);$(window).resize(function(){var rHeight=$(window).height()-60;$slimScrolls.height(rHeight);$('.sidebar .slimScrollDiv').height(rHeight);});}
if($('#vmap').length>0){$('#vmap').vectorMap({map:'world_en',backgroundColor:'#333333',color:'#ffffff',hoverOpacity:0.7,selectedColor:'#666666',enableZoom:true,showTooltip:true,scaleColors:['#C8EEFF','#006491'],normalizeFunction:'polynomial'});}
if($('#vmap').length>0){$('#vmapusa').vectorMap({map:'usa_en',enableZoom:true,showTooltip:true,selectedColor:null,hoverColor:null,colors:{mo:'#C9DFAF',fl:'#C9DFAF',or:'#C9DFAF'},onRegionClick:function(event,code,region){event.preventDefault();}});}
$(document).on('click','#toggle_btn',function(){if($('body').hasClass('mini-sidebar')){$('body').removeClass('mini-sidebar');$('.subdrop + ul').slideDown();}else{$('body').addClass('mini-sidebar');$('.subdrop + ul').slideUp();}
return false;});$(document).on('mouseover',function(e){e.stopPropagation();if($('body').hasClass('mini-sidebar')&&$('#toggle_btn').is(':visible')){var targ=$(e.target).closest('.sidebar').length;if(targ){$('body').addClass('expand-menu');$('.subdrop + ul').slideDown();}else{$('body').removeClass('expand-menu');$('.subdrop + ul').slideUp();}
return false;}});$(document).on('click','.skin-sett-icon',function(){$('.skin-settings').toggleClass("active");});if($('#demoSettings').length===0){$('.main-wrapper').append('<div class="skin-settings" id="demoSettings">'+
'<div class="skin-sett-icon"><i class="fa fa-cog"></i></div>'+
'<div class="skin-sett-body">'+
'<h4>Template Colors</h4>'+
'<ul class="skin-colors">'+
'<li><a class="skin-purple" data-color="default" href="#"></a></li>'+
'<li><a class="skin-red" data-color="red" href="#"></a></li>'+
'<li><a class="skin-teal" data-color="teal" href="#"></a></li>'+
'<li><a class="skin-orange" data-color="orange" href="#"></a></li>'+
'</ul>'+
'</div>'+
'</div>')}
const hasTemp=localStorage.getItem('skin-color');if(!!hasTemp){$('head').append('<link id="tempSkin" rel="stylesheet" href="assets/css/style-'+hasTemp+'.css">')
$('body').find('.skin-colors a').each(function(){const name=$(this).attr('data-color');if(name===hasTemp){$(this).addClass('active');}else{$(this).removeClass('active');}})}else{$('body').find('.skin-colors a').each(function(){const name=$(this).attr('data-color');if(name==='default'){$(this).addClass('active');}});}
$(document).on('click','.skin-colors a',function(e){e.preventDefault();$(this).parent().siblings().find('a').removeClass('active');$(this).addClass('active');var skin=$(this).attr('data-color');if(skin==='default'){localStorage.removeItem('skin-color');$('#tempSkin').remove();}else{if($('#tempSkin').length===0){$('head').append('<link id="tempSkin" rel="stylesheet" href="assets/css/style-'+skin+'.css">')}else{$('#tempSkin').attr('href','assets/css/style-'+skin+'.css');}
localStorage.setItem('skin-color',skin);}})})(jQuery);