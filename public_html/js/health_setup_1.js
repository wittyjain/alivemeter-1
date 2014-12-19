function Not_Applicable_Record(type,tabno,yesno,aName)
{
	if (confirm("Are you sure you want tag this record as Not Applicable?"))
	{

		//alert ( hostname+"/includes/not_applicable_records.inc.php?insert_type=" + type+"&yesno="+yesno);
		
		document.getElementById(aName).innerHTML="<a class='button2' style='background-color:#767676;'>NOT APPLICABLE</a>";
		$.ajax( 
				{ 
					url: hostname+"/includes/not_applicable_records.inc.php?insert_type=" + type+"&yesno="+yesno,
					
				}
				
			)
		
		
		.done(function(data) {
				if (tabno=="1")
				{
					AddCountInTabs(tabno,"true","false");				
				}
				if (tabno=="2")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="3")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="4")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="5")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="6")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="7")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="8")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="9")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="11")
				{
					AddCountInTabs(tabno,"true","false");					
				}
				if (tabno=="15")
				{
					AddCountInTabs(15,"true","false");					
				}
			}
		);
	}
}	