function validate()
{
		var x=document.myForm.message.value;
		if (x==null || x=="")
  		{
  			alert("Please enter message");
  			document.myForm.message.focus();
  			return false;
  		}
  		else
  			alert("Messages Sent");
 }