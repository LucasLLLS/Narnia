$("#number-cardx").keyup(function(){
	  myCardNo = document.getElementById('number-cardx').value;
	  myCardType = document.getElementById('card_flag').value;
	  console.log(myCardType);
	  if(checkCreditCard(myCardNo,myCardType)) {
	  	$('#valid_card').val(1);				  	
	  } 
	  else{
	  	$('#valid_card').val(0);
	  }
});