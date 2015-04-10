function withdrawMoney()
{
	var amountRequested = $('#amountRequested').val();

	var request = $.ajax(
	{
  		method: "POST",
  		url: "withdraw_money.php",
  		data: { amountRequested : amountRequested },
  		dataType: "html"
	});
  	
  	request.done(function(html, textStatus)
  	{
    	$('#withdrawMoney').html(html);
  	});
  	
  	request.fail(function(jqXHR, textStatus, errorThrown)
  	{
  		alert( "Falha na requisição: " + textStatus + " " + errorThrown + ".");
	});
}

// Disable / Enable submit button
$('#amountRequested').keyup(function() {
    if ($('#amountRequested').val() > 0) {
    	$('#btnWithdrawMoney').removeAttr('disabled');
    } else {
        $('#btnWithdrawMoney').attr('disabled', 'disabled'); 
    }
});


$(document).ready(function() {
	$("#amountRequested").val("");
});