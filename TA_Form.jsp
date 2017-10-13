/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<script type = "text/javascript">
function validate() 
{
	var uname = document.forms["myForm"]["uname"].value;
	var pwd = document.forms["myForm"]["pwd"].value;

if(uname == "" || pwd == "") 
	{
  		alert("Username and password must be filled out.");
                return false;
        }
}
</script>

