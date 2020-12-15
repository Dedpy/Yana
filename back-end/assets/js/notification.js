$(document).ready(function()
{
	load_unseen_notification();
	$('.app-search :input').attr("placeholder", "Rechercher...");
});
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetchNotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('#list-notifications').html(data.notification);
   $('.noti-dot').html(data.nombre);
  }
 });
}
var myVar = setInterval(load_unseen_notification, 5000);
function updateNotification(view = '')
{
	$.ajax({
  url:"updateNotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.noti-dot').html("");
  }
 });
}
function supprimerNotification(view = '')
{
	$.ajax({
  url:"supprimerNotification.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   load_unseen_notification();
  }
 });
}
$('.right-bar-toggle').click(function()
{
	setTimeout(function(){updateNotification();}, 3000);
});
$('#supprimer-notif').click(function()
{
	supprimerNotification();
});