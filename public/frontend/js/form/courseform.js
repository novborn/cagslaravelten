function select_courseform_func()
{
		var select = document.getElementById("courseidd");
        var typevalue = select.options[select.selectedIndex].value;
		
		
		if (typevalue == 'Kolkata Campus' )
		{
			document.getElementById("branchid").innerHTML="<select name='program' id='branchid' class='form-control architects-select validate[required]'><option value='' selected='selected'>Select Your Course*</option><option value='MBA+ EduCLaaS, Singapore with 18 Month International Paid Apprenticeship'>MBA+ EduCLaaS, Singapore with 18 Month International Paid Apprenticeship</option>\
<option value='MBA+ HBS Online'>MBA+ HBS Online</option>\
</select>";
		}
 
 else if (typevalue == 'Durgapur Campus')
		{
			document.getElementById("branchid").innerHTML="<select name='program' id='branchid' class='form-control validate[required]'><option value='' selected='selected'>Select Your Course*</option><option value='MBA+ EduCLaaS, Singapore with 18 Month International Paid Apprenticeship'>MBA+ EduCLaaS, Singapore with 18 Month International Paid Apprenticeship</option>\
<option value='MBA'>MBA</option>\
</select>";
		}

		else if (typevalue == 'PhD')
		{
			document.getElementById("branchid").innerHTML="<select name='program' id='branchid' class='form-control validate[required]'><option value='' selected='selected'>Select Your Course*</option><option value='PhD' >PhD</option>\
</select>";
		}


		else if (typevalue == 'Management')
		{
			document.getElementById("branchid").innerHTML="<select name='program' id='branchid' class='form-control validate[required]'><option value='' selected='selected'>Select Your Program*</option><option value='Management1' >B Arch</option>\
			<option value='Management2' >B Design - Interior</option>\
			<option value='Management3' >BLAD-Landscape</option>\
			<option value='Management4' >PhD</option>\
			<option value='Management5' >Education/Management</option>\
			<option value='Management6' >Sciences/Engineering</option>\
</select>";
		}

		else if (typevalue == 'School Of Engineering And Technology')
		{
			document.getElementById("branchid").innerHTML="<select name='program' id='branchid' class='form-control validate[required]'><option value='' selected='selected'>Select Your Program*</option><option value='BCA' >BCA</option>\
<option value='B.Tech' >B.Tech</option>\
<option value='MSc-Business Analytics' >MSc-Business Analytics</option>\
<option value='M.Tech' >M.Tech</option>\
</select>";
		}
 
 
 
	}