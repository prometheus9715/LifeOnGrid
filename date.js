


					//copy paste all the contents in this script tag

					

					var j = new Array( "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" );
					var month= new Array("January","Febuary","March","April","May","June","July","August","September","October","November","December");
					
					function gettoday(){
						var today=new Date();
						var dd = today.getDate();
						var mm = today.getMonth();
						var yyyy = today.getFullYear();
						var pp=mm+1;
						curdate=dd+""+pp+""+yyyy;

						///alert(curdate);
						
						if(dd==1)
						{
							dd=dd+"st";
						}
						else if(dd==2)
						{
							dd=dd+"nd";
						}
						else if(dd==3)
						{
							dd=dd+"rd";
						}
						else
						{
							dd=dd+"th";
						}
						
 						document.getElementById("todays").innerHTML=j[today.getDay() ]+" , "+dd+"  "+month[mm]+"  "+yyyy;
 						  }
 						  var p=0;
 						var n=0;
 						
 						
 						function getprev()

 						{	
 							
 							if(p<7)
 							{p++; 

 								var d=new Date();
 								d.setDate(d.getDate()-p);
 								var pdd = d.getDate();
 								var pmm = d.getMonth();
 								var pp=pmm+1;
								var pyyyy = d.getFullYear();
 								curdate=pdd+""+pp+""+pyyyy;
 								


 								



 								if(pdd==1)
						{
							pdd=pdd+"st";
						}
						else if(pdd==2)
						{
							pdd=pdd+"nd";
						}
						else if(pdd==3)
						{
							pdd=pdd+"rd";
						}
						else
						{
							pdd=pdd+"th";
						}
							
 								document.getElementById("todays").innerHTML=j[d.getDay()]+" , "+pdd+"  "+month[pmm]+"  "+pyyyy;

 								

 								

 							}
 							if (p>0)
 							{
 								document.getElementById("nextbutton").style.visibility = "visible";
 							}



 							
 						}
 						function getnext()
 						{
 							

 							if( p>0)
 							{
 								n++;p--;

 								var d=new Date();
 								d.setDate(d.getDate()-p);
 								var pdd = d.getDate();
 								var pmm = d.getMonth();
							var pyyyy = d.getFullYear();
							var pp=pmm+1;

 								curdate=pdd+""+pp+""+pyyyy;
 								alert(curdate);
 								


 								



 								if(pdd==1)
						{
							pdd=pdd+"st";
						}
						else if(pdd==2)
						{
							pdd=pdd+"nd";
						}
						else if(pdd==3)
						{
							pdd=pdd+"rd";
						}
						else
						{
							pdd=pdd+"th";
						}
							
 								document.getElementById("todays").innerHTML=j[d.getDay()]+" , "+pdd+"  "+month[pmm]+"  "+pyyyy;



 								

 							}
 							
 							if (p>0)
 							{
 								document.getElementById("nextbutton").style.visibility = "visible";
 							}
 							if (p==0)
 							{
 								document.getElementById("nextbutton").style.visibility = "hidden";
 							}
 						}

 						
 						



					