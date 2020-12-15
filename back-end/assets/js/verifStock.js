$(document).ready(function()
{
	/*$.notify.addStyle('happyblue', {
	  html: "<div>☺<span data-notify-text/>☺</div>",
	  classes: {
	    base: {
	      "position": "element",
	      "className": "warn",
	    },
	  }
	});*/
	$('.tableProd tbody > tr').each(function() {
       var notif= "Le produit"+$(this).find(".nom").html()+" n'est plus en stock";
       var qte= $(this).find(".qte").html();
       if (qte==0)
       {
       	$.notify(notif,
       	{
       		position: 'bottom right',
       		className: 'warn'
		});
       }
         
    });
});