function vpb_plugin_delete_post_by_id(id)
{$('#vasplus_programming_blog_hidden_item_id').val(id);$(".vpb_vasplus_options_dropdown_box").hide();$(".vasplus_dropdown_options_box_b").hide();$(".vasplus_dropdown_options_box_a").show();$("#vpb_pop_up_background").fadeOut("slow");$.Vasplus_Programming_Blog_Confirm({'vpb_confirmation_heading':'Confirmation','vpb_confirmation_body':'Are you sure that you really want to delete this comment?','vpb_proceed_button':'Yes','vpb_cancel_button':'Cancel'});}
function vpb_plugin_delete_reply_by_id(id)
{$('#vasplus_programming_blog_hidden_item_id').val(id);$.VPB_Confirm({'vpb_confirmation_heading':'Confirmation','vpb_confirmation_body':'Are you sure that you really want to delete this reply?','vpb_proceed_button':'Yes','vpb_cancel_button':'Cancel'});}
function vpb_plugin_users_logout(id)
{$('#vasplus_programming_blog_hidden_item_id').val(id);$.VPB_Confirm_Logout({'vpb_confirmation_heading':'Confirmation','vpb_confirmation_body':'Are you sure that you really want to logout from the system?','vpb_proceed_button':'Yes','vpb_cancel_button':'Cancel'});}
function vpb_comment_system_alert(vpb_alert_content)
{$.VPB_Information({'vpb_confirmation_heading':'Information','vpb_confirmation_body':vpb_alert_content,'vpb_proceed_button':' OK ','vpb_cancel_button':''});}
function vpb_comment_system_discard(id,vpb_alert_content)
{$('#vasplus_programming_blog_hidden_item_id').val(id);$.VPB_Discard({'vpb_confirmation_heading':'Confirmation','vpb_confirmation_body':vpb_alert_content,'vpb_proceed_button':'Discard','vpb_cancel_button':'Cancel'});}
function vpb_comfirm_removal_of_tagged_friend(fullname,username)
{$('#vasplus_programming_blog_hidden_item_id').val(username);$.VPB_Confirm_Tagged_Friend_Removal({'vpb_confirmation_heading':'Confirmation','vpb_confirmation_body':'Are you sure that you really want to remove <b>'+fullname+'</b> from your tagged friends?','vpb_proceed_button':'Yes','vpb_cancel_button':'Cancel'});}
function vpb_remove_this_link(id)
{$('#vasplus_programming_blog_hidden_item_id').val(id);$.VPB_Confirm_post_link_Removal({'vpb_confirmation_heading':'Confirmation','vpb_confirmation_body':'Do you really mean to remove this link from your post?','vpb_proceed_button':'Yes','vpb_cancel_button':'Cancel'});}
function vpb_expired_session(id)
{$('#vasplus_programming_blog_hidden_item_id').val(id);$.VPB_Confirm_Proceed_Login_Again({'vpb_confirmation_heading':'Information','vpb_confirmation_body':'Your session has expired and a new login is required to proceed.<br>Please click on the OK button to login again.<br>Thank You!','vpb_proceed_button':'OK','vpb_cancel_button':'Cancel'});}
function vpb_plugin_delete_post_by_pid(status)
{var page_url=$("#get_current_page_url").val();var comment_id=$('#vasplus_programming_blog_hidden_item_id').val();if(status=="yes")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});var dataString='comment_id='+comment_id+'&page_url='+page_url+'&page=deleteComment';$.ajax({type:"POST",url:"vpb_wall_main.php",data:dataString,cache:false,beforeSend:function()
{$("#deleting_comment_"+comment_id).html('<div class="vpb_commentWrapper" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; color:gray; width:474px;padding:12px; float:left; margin-bottom:10px;" align="center">Please wait <img style="" src="icons/loadings.gif" align="absmiddle" alt="Loading" /></div><br clear="all">');},success:function(response)
{if(response!="")
{var vpb_response_your_session_has_expired=response.indexOf('your_session_has_expired');if(vpb_response_your_session_has_expired!=-1)
{setTimeout(function(){$("#deleting_comment_"+comment_id).html('');vpb_expired_session('logout');},2000);return false;}
else
{$("#comment_"+comment_id).slideUp(2000);$(".vpb_show_more_or_the_ends").hide();$("#display_posted_comments_by_vasplus_programming_blog").hide().fadeIn('slow').html(response);}}
else
{$("#comment_"+comment_id).slideUp(2000);$(".vpb_show_more_or_the_ends").hide();}}});}
else if(status=="no")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else
{}}
function vpb_plugin_delete_reply_by_cid(status)
{var comment_id=$('#vasplus_programming_blog_hidden_item_id').val();if(status=="yes")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});var dataString='reply_id='+comment_id+'&page=deleteReply';$.ajax({type:"POST",url:"vpb_wall_main.php",data:dataString,cache:false,beforeSend:function()
{$("#deleting_reply_"+comment_id).html('<div class="vpb_commentWrapper" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; color:gray; width:408px;padding:12px; float:left;margin-bottom:12px;" align="center">Please wait <img style="" src="icons/loadings.gif" align="absmiddle" alt="Loading" /></div><br clear="all">');$("#deleting_popup_reply_"+comment_id).html('<div class="vpb_commentWrapper" style="font-family:Verdana, Geneva, sans-serif; font-size:11px; color:gray; width:388px;padding:12px; float:left; margin-bottom:12px;" align="center">Please wait <img style="" src="icons/loadings.gif" align="absmiddle" alt="Loading" /></div><br clear="all">');},success:function(response)
{var vpb_response_your_session_has_expired=response.indexOf('your_session_has_expired');if(vpb_response_your_session_has_expired!=-1)
{setTimeout(function()
{$("#deleting_reply_"+comment_id).html('');$("#deleting_popup_reply_"+comment_id).html('');vpb_expired_session('logout');},2000);return false;}
else
{$("#reply_"+comment_id).slideUp(2000);$("#popup_reply_"+comment_id).slideUp(2000);}}});}
else if(status=="no")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else
{}}
function vpb_plugin_session_expired()
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});var vpb_alert_focus=$("#vpb_alert_focus").val();if(vpb_alert_focus!=""){$(vpb_alert_focus).focus();}}
function vpb_plugin_discard_comment_box(status)
{var comment_id=$('#vasplus_programming_blog_hidden_item_id').val();if(status=="yes")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});setTimeout(function()
{$("#discard"+comment_id).hide();$("#discardpopup"+comment_id).hide();$("#posted_repy"+comment_id).val('').animate({"height":"19px"},"fast");$("#posted_popup_repy"+comment_id).val('').animate({"height":"19px"},"fast");$("#comment"+comment_id).fadeIn();$("#commentpopup"+comment_id).fadeIn();$(".vpb_reply_box").hide();$(".vpb_reply_popup_box").hide();$(".display_posted_replies_by_vasplus_programming_blog").html('');$(".display_posted_popup_replies_by_vasplus_programming_blog").html('');$("#fold_replies"+comment_id).fadeIn();$("#fold_repliespopup"+comment_id).fadeIn();},900);return false;}
else if(status=="no")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else
{}}
function vpb_confirm_tagged_removal_status(status)
{var friends_username_to_remove=$('#vasplus_programming_blog_hidden_item_id').val();if(status=="yes")
{vpb_remove_this_tagged_friend(friends_username_to_remove);$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else if(status=="no")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else
{}}
function vpb_confirm_plink_removal_status(status)
{var link_id=$('#vasplus_programming_blog_hidden_item_id').val();if(status=="yes")
{vpb_proceed_to_remove_this_link(link_id);$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else if(status=="no")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else
{}}
function vpb_confirm_login_again_status(status)
{if(status=="yes")
{$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});setTimeout(function(){window.location.replace('logout.php');},1000);}
else if(status=="no")
{$.cookie('cancelled_expired_session_login','yes');$('#vasplus_programming_blog_confirmation_alert_box').fadeOut(function(){$(this).remove();});}
else
{}}
(function($){$(window).load(function(){jQuery(document).ready(function($){$.Vasplus_Programming_Blog_Confirm=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_plugin_delete_post_by_pid(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_plugin_delete_post_by_pid(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Confirm=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_R_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_plugin_delete_reply_by_cid(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_plugin_delete_reply_by_cid(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_R_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Confirm_Logout=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_L_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_plugin_log_users_out(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_plugin_log_users_out(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_L_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Information=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_SS_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons" align="center" style="margin-left:0px;"><div class="vpb_confirm_buttons_gren" onClick="vpb_plugin_session_expired();">'+vpb_contents.vpb_proceed_button+'</div></div><center></div></div>'].join('');$(VPB_SS_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Discard=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_DISCARD_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_plugin_discard_comment_box(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_plugin_discard_comment_box(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_DISCARD_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Confirm_Tagged_Friend_Removal=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_RTF_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_confirm_tagged_removal_status(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_confirm_tagged_removal_status(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_RTF_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Confirm_post_link_Removal=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_RPL_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_confirm_plink_removal_status(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_confirm_plink_removal_status(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_RPL_LOADER).hide().fadeIn('fast').appendTo('body');}};$.VPB_Confirm_Proceed_Login_Again=function(vpb_contents){if($('#vasplus_programming_blog_confirmation_alert_box').length){return false;}else{var VPB_SEL_LOADER=['<div id="vasplus_programming_blog_confirmation_alert_box">','<div id="vasplus_programming_blog_confirmation_alert_box_contents">','<div id = "vasplus_programming_blog_confirmation_alert_box_headers">'+vpb_contents.vpb_confirmation_heading+'</div>','<p>'+vpb_contents.vpb_confirmation_body+'</p>','<center><div id="vpb_confirmation_buttons"><div id="vpb_confirm_buttons_gren" onClick="vpb_confirm_login_again_status(\'yes\');"><span class="vpb_confirm_buttons_gren">'+vpb_contents.vpb_proceed_button+'</span></div><div id="vpb_confirm_buttons_reed" onClick="vpb_confirm_login_again_status(\'no\');"><span class="vpb_confirm_buttons_reed">'+vpb_contents.vpb_cancel_button+'</span></div></div><center></div></div>'].join('');$(VPB_SEL_LOADER).hide().fadeIn('fast').appendTo('body');}};});});})(jQuery);