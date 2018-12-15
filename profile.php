<?php

if(isset($_POST["sign-out"]))
{
	session_unset();
	session_destroy();
	header("location: index.php");
}


?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



	<link rel="stylesheet" href="profile-stylesnew.css">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	


	
	<script>

		var previd=""; var endp1="";
		var currid=""; var endp2="";
		var count=0;
		var dp={};

		var dict = {};
		
		var dataarr = new Array(144);
  		//dataarr.fill("unu", 1);

  		var today=new Date();
						
		var	curdate=today.getDate()+""+(today.getMonth()+1)+""+today.getFullYear();
		///alert(curdate);
		

		function nowload()
		{


				$.post("today.php",
		        {
		          date: curdate
		        
		        },
		        function(data,status){
		        	//alert("Data: " + data + "\nStatus: " + status);
		        	
		        	//alert(data);
		        	

		        	

		           if(data=="hi")
		           {
		            	dataarr.fill("unu", 0);
		            	///alert(JSON.stringify(dataarr));

		            	colorload();
		            	load();
		            }
		            else
		            {
		            	///alert(data);
		            	var d = JSON.parse(data);

		            	dataarr = d;

		            	colorload();
		
		            	load();
		            }
		        });

		        

		}
	
  		
  		
  		



  		function load(){	
  				
  				
  			
  							

  						/*	var list = dataarr.filter(function (x, i, dataarr) 
						    { 
						    return dataarr.indexOf(x) == i; 
							});*/

							dp = {};
							
							dataarr.forEach(function(x) { 


								
								var grp = $("#"+x).attr('label');
								

								dp[grp] = (dp[grp] || 0)+1; });

							///alert(JSON.stringify(dp));

						//var chartarr= new Array();
							var dps=[];
						

							for(var x in dp)
							{
								
								//var item={};
								//item['y']= dp[x];
								//item['label'] = x;
							 var clr= $("#"+x).attr('name');
							//	alert(JSON.stringify(item));
								dps.push({y: Number(dp[x]), label: x,  color: clr});

							//	chartarr.push({y: dp[x], label: x, color: clr});


						//  						
						  						//alert(chartarr.toString());
						  		}

					
//$.each(chartarr, function (i, item) {
   								 
    //alert(dps[0]);
//});
	  						


						var chart = new CanvasJS.Chart("chartContainer", {
							animationEnabled: true,

							backgroundColor: "#F4F9FC",

							data: [{
								type: "doughnut",
								startAngle: 90,
								innerRadius: 60,
								indexLabelFontSize: 17,
								//indexLabel: "{label} - #percent%",
								toolTipContent: "<b>{label}:</b> {y} (#percent%)",
								dataPoints: dps
							}]
						});

						
						chart.render();

						}

		function colorload(){

				var i;
				for(i=0; i<=143; i++)
				{
					var clr = $("#" + dataarr[i]).attr('name');
					$("#"+i).css("background-color", clr);
				}


		}			




	$(document).ready(function(){

		
   		
   	    $(".blocks").click(function(){

   	    
   	    	
   	    	if(count==0)
    		{
    			previd=$(this).attr('id');
    			count++;
    		}
        			
        	else if(count==1)
        	{
        		currid = $(this).attr('id');

        		if(previd!=currid && currid>=previd)
        		{
	   	    		$("#" +this.id).prevUntil("#" + previd).addBack().add("#"+ previd).css("opacity","0.5");
	   	    		endp1=previd; endp2=currid;

	   	    		
				}
				else{
					$("#"+currid).css("opacity","0.5");
					endp1=previd; endp2=currid;
				}

				previd="";
				currid="";
	   	    		 
				count=0;
        	}
       

    		});

   	    $(".blocks").hover(
   	    	function(){

   	    	
   	    	if(previd!="" )
   	    		{   
   	    			currid = $(this).attr('id');
   	    			if(currid>=previd)
   	    			{
   	    			$("#" +this.id).prevUntil("#" + previd).addBack().add("#"+ previd).css("opacity", "0.5");
   	    			}
   	    		}
   	    			  }

   	    , function(){
   	    	if(previd!="")
   	    	{
   	    		$("#" +this.id).nextUntil("#" + currid).add("#"+ currid).css("opacity", "1");
   	    		currid = $(this).attr('id');
   	    	}
   	                 } 
   	    );

   	    $(".activity").click(
   	    	function(){

	   	    if(endp1!=""&&endp2!=""){
	   	    	if(endp1!=endp2)
	   	    		{
	   	    		var color = $(this).attr('name');
	   	    		var acti = $(this).attr('id');

	   	    		if(!(color in dict))
	   	    			{
	   	    				dict[color] = 0;
	   	    			}

	   	    		var len = $("#" +endp2).prevUntil("#" + endp1).addBack().add("#"+ endp1).length;
	   	    		dict[color]=dict[color]+ len;
	   	    		///alert(dict[color]);


	   	    		$("#" +endp2).prevUntil("#" + endp1).addBack().add("#"+ endp1).css({"background-color": color, "opacity":"1"});
	   	    		var i =parseInt(endp1); var j =parseInt(endp2);
	   	    		dataarr.fill(acti, i, j+1);
	   	    		///alert(dataarr.toString());
	   	    		endp1=endp2="";
	   	    		load();
	   	    	}
	   	    	if(endp1==endp2)
	   	    		{
	   	    			var color = $(this).attr('name');
	   	    			var acti = $(this).attr('id');
	   	    			if(!(color in dict))
	   	    			{
	   	    				dict[color] = 0;
	   	    			}
	   	    			dict[color]=dict[color]+1;
	   	    			$('#'+endp1).css({"background-color":color,"opacity":"1"});
	   	    			var i =parseInt(endp1);
	   	    			dataarr.fill(acti, i, i+1);
	   	    			endp1=endp2="";
	   	    			load();


	   	    		} 
			}

			



   	    	});

   	   

   	  $(".upd").click(function(){

   	  	var sel=$(this).attr("id");

   	  	var j_string = JSON.stringify(dataarr);
   	  	///alert(j_string);

   	  if(dp['Unused']!=144)
   	  	{

	        $.post("update.php",
	        {

	          details: j_string ,
	          date: curdate
	        },
	        function(data,status){
	           /// alert("Data: " + data + "\nStatus: " + status);
	        });
	    }

        if(sel=="left")
        {
        	getprev();
        }
        else
        {
        	getnext();
        }
        nowload();
        
    });






   	    	

		});
	</script>
	

	<title>LifeOnGrid</title>

</head>

<body>

<div class="flex-container" style="padding: 0px; margin: 0px;">
	
	<div class="sub1">

		<span class="big-font" style="float:left;font-size:30px;padding-left:1%;padding-top:2%; color:white; ">
			LifeOnGrid
			
		</span>

		<div class="menu">

			<form action="" method="post">
				<button type="submit" class="btn btn-default button small-font" id="sign-out" name="sign-out" style="color:white;">Sign-out</button>
			</form>

		</div>


		<div class="menu">
			

		</div>


	</div>

	




	<div class="sub2">	


		<div class="box2">



		<div class="box-date"style="padding-top:3%;">

		

			<span class="small-font" style="margin-top:5%;padding-top:10px;" ><button class="button upd small-font " style="float:left; border:none;" id="left" ><< previous day</button>
				<span id="todays"  >
					<script src="date.js" ></script>

				</span >
				<span ><button class="button upd small-font" id="nextbutton"style="float:none; border:none;" id="right">next day >></button></span>
			
	
		</span>


		</div>

		<div class=box-sub>
			
				<div class="box2-sub1" id="chartContainer">

					
					
				</div>

				<div class="box2-sub2">  

					<div class="fix-box" style="width:240px;">
						12:00am

						<div class="blocks" id="0">

						</div>

						<div class="blocks" id="1">

						</div>

						<div class="blocks" id="2">

						</div>

						<div class="blocks" id="3">

						</div>
						<div class="blocks" id="4">

						</div>
						<div class="blocks" id="5">

						</div>
						01:00am
						<div class="blocks" id="6">

						</div>
						<div class="blocks" id="7">

						</div>
						<div class="blocks" id="8">

						</div>
						<div class="blocks" id="9">

						</div>
						<div class="blocks" id="10">

						</div>
						<div class="blocks" id="11">

						</div>
						02:00am
						<div class="blocks" id="12">

						</div>
						<div class="blocks" id="13">

						</div>
						<div class="blocks" id="14">

						</div>
						<div class="blocks" id="15">

						</div>
						<div class="blocks" id="16">

						</div>
						<div class="blocks" id="17">

						</div>
						03:00am
						<div class="blocks" id="18">

						</div>
						<div class="blocks" id="19">

						</div>
						<div class="blocks" id="20">

						</div>
						<div class="blocks" id="21">

						</div>
						<div class="blocks" id="22">

						</div>
						<div class="blocks" id="23">

						</div>
						04:00am
						<div class="blocks" id="24">

						</div>
						<div class="blocks" id="25">

						</div>
						<div class="blocks" id="26">

						</div>
						<div class="blocks" id="27">

						</div>
						<div class="blocks" id="28">

						</div>
						<div class="blocks" id="29">

						</div>
						05:00am
						<div class="blocks" id="30">

						</div>
						<div class="blocks" id="31">

						</div>
						<div class="blocks" id="32">

						</div>
						<div class="blocks" id="33">

						</div>
						<div class="blocks" id="34">

						</div>
						<div class="blocks" id="35">

						</div>
						06:00am
						<div class="blocks" id="36">

						</div>
						<div class="blocks" id="37">

						</div>
						<div class="blocks" id="38">

						</div>
						<div class="blocks" id="39">

						</div>
						<div class="blocks" id="40">

						</div>
						<div class="blocks" id="41">

						</div>
						07:00am
						<div class="blocks" id="42">

						</div>
						<div class="blocks" id="43">

						</div>
						<div class="blocks" id="44">

						</div>
						<div class="blocks" id="45">

						</div>
						<div class="blocks" id="46">

						</div>
						<div class="blocks" id="47">

						</div>
						08:00am
						<div class="blocks" id="48">

						</div>
						<div class="blocks" id="49">

						</div>
						<div class="blocks" id="50">

						</div>
						<div class="blocks" id="51">

						</div>
						<div class="blocks" id="52">

						</div>
						<div class="blocks" id="53">

						</div>
						09:00am
						<div class="blocks" id="54">

						</div>
						<div class="blocks" id="55">

						</div>
						<div class="blocks" id="56">

						</div>
						<div class="blocks" id="57">

						</div>
						<div class="blocks" id="58">

						</div>
						<div class="blocks" id="59">

						</div>
						10:00am
						<div class="blocks" id="60">

						</div>
						<div class="blocks" id="61">

						</div>
						<div class="blocks" id="62">

						</div>
						<div class="blocks" id="63">

						</div>
						<div class="blocks" id="64">

						</div>
						<div class="blocks" id="65">

						</div>
						11:00am
						<div class="blocks" id="66">

						</div>
						<div class="blocks" id="67">

						</div>
						<div class="blocks" id="68">

						</div>
						<div class="blocks" id="69">

						</div>
						<div class="blocks" id="70">

						</div>
						<div class="blocks" id="71">

						</div>
						12:00pm
						<div class="blocks" id="72">

						</div>
						<div class="blocks" id="73">

						</div>
						<div class="blocks" id="74">

						</div>
						<div class="blocks" id="75">

						</div>
						<div class="blocks" id="76">

						</div>
						<div class="blocks" id="77">

						</div>
						01:00pm
						<div class="blocks" id="78">

						</div>
						<div class="blocks" id="79">

						</div>
						<div class="blocks" id="80">

						</div>
						<div class="blocks" id="81">

						</div>
						<div class="blocks" id="82">

						</div>
						<div class="blocks" id="83">

						</div>
						02:00pm
						<div class="blocks" id="84">

						</div>
						<div class="blocks" id="85">

						</div>
						<div class="blocks" id="86">

						</div>
						<div class="blocks" id="87">

						</div>
						<div class="blocks" id="88">

						</div>
						<div class="blocks" id="89">

						</div>
						03:00pm
						<div class="blocks" id="90">

						</div>
						<div class="blocks" id="91">

						</div>
						<div class="blocks" id="92">

						</div>
						<div class="blocks" id="93">

						</div>
						<div class="blocks" id="94">

						</div>
						<div class="blocks" id="95">

						</div>
						04:00pm
						<div class="blocks" id="96">

						</div>
						<div class="blocks" id="97">

						</div>
						<div class="blocks" id="98">

						</div>
						<div class="blocks" id="99">

						</div>
						<div class="blocks" id="100">

						</div>
						<div class="blocks" id="101">

						</div>
						05:00pm
						<div class="blocks" id="102">

						</div>
						<div class="blocks" id="103">

						</div>
						<div class="blocks" id="104">

						</div>
						<div class="blocks" id="105">

						</div>
						<div class="blocks" id="106">

						</div>
						<div class="blocks" id="107">

						</div>
						06:00pm
						<div class="blocks" id="108">

						</div>
						<div class="blocks" id="109">

						</div>
						<div class="blocks" id="110">

						</div>
						<div class="blocks" id="111">

						</div>
						<div class="blocks" id="112">

						</div>
						<div class="blocks" id="113">

						</div>
						07:00pm
						<div class="blocks" id="114">

						</div>
						<div class="blocks" id="115">

						</div>
						<div class="blocks" id="116">

						</div>
						<div class="blocks" id="117">

						</div>
						<div class="blocks" id="118">

						</div>
						<div class="blocks" id="119">

						</div>
						08:00pm
						<div class="blocks" id="120">

						</div>
						<div class="blocks" id="121">

						</div>
						<div class="blocks" id="122">

						</div>
						<div class="blocks" id="123">

						</div>
						<div class="blocks" id="124">

						</div>
						<div class="blocks" id="125">

						</div>
						09:00pm
						<div class="blocks" id="126">

						</div>
						<div class="blocks" id="127">

						</div>
						<div class="blocks" id="128">

						</div>
						<div class="blocks" id="129">

						</div>
						<div class="blocks" id="130">

						</div>
						<div class="blocks" id="131">

						</div>
						10:00pm
						<div class="blocks" id="132">

						</div>
						<div class="blocks" id="133">

						</div>
						<div class="blocks" id="134">

						</div>
						<div class="blocks" id="135">

						</div>
						<div class="blocks" id="136">

						</div>
						<div class="blocks" id="137">

						</div>
						11:00pm
						<div class="blocks" id="138">

						</div>
						<div class="blocks" id="139">

						</div>
						<div class="blocks" id="140">

						</div>
						<div class="blocks" id="141">

						</div>
						<div class="blocks" id="142">

						</div>
						<div class="blocks" id="143">

						</div>
					</div>	

				</div>
		</div>	

		</div>

		<div class="box3">

			<div class="box3sub">

				<div class="box3sub-up small-font" style="font-size: 40px; text-align:center;padding:20px;margin-top:2%; max-height:145px;">
					Select Activity

				</div>

				<div class="box3sub-down">

					<div class="box3fix-box">

						<div class="group" id="Unused" name="#E0E0EB">

							<div class="activity Unused" id="unu" name="#E0E0EB" label="Unused" style="display: none;">
								<p align="center" class="small-font">Unused</p>

							</div>

						</div>

						<div class="group" id="Sleep" name="#40E0D0">
							<div class="activity Sleep" id="slp" name="#40E0D0" label="Sleep">
								<p align="center" class="small-font" >Sleep</p>

							</div>
						</div>
						
						<div class="group" id="Work" name="#FFFF00">	

							<div class="activity Work" id="wrk" name="#FFFF00" label="Work">
								<p align="center" class="small-font">Work</p>

							</div>

						</div>	

						<div class="group" id="Learn" name="#4682B4">

								<div class="activity Learn" id="std" name="#4682B4" label="Learn">
									<p align="center" class="small-font">Study</p>

								</div>

								<div class="activity Learn" id="scl" name="#4682B4" label="Learn">
									<p align="center" class="small-font">School</p>

								</div>
							
						</div>

						<div class="group" id="Go" name="#DC143C" >

								<div class="activity Go" id="com" name="#DC143C" label="Go">
									<p align="center" class="small-font">Commute</p>

								</div>

								<div class="activity Go" id="dri" name="#DC143C" label="Go">
									<p align="center" class="small-font">Drive</p>

								</div>

								<div class="activity Go" id="sub" name="#DC143C" label="Go">
									<p align="center" class="small-font">Subway</p>

								</div>

								<div class="activity Go" id="trl" name="#DC143C" label="Go">
									<p align="center" class="small-font">Travel</p>

								</div>
							
						</div>

						<div class="group" id="Food" name="#FF8C00" >

								<div class="activity Food" id="cok" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Cook</p>

								</div>

								<div class="activity Food" id="bft" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Breakfast</p>

								</div>

								<div class="activity Food" id="lnh" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Lunch</p>

								</div>

								<div class="activity Food" id="dnr" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Dinner</p>

								</div>

								<div class="activity Food" id="brh" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Brunch</p>

								</div>

								<div class="activity Food" id="dsr" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Dessert</p>

								</div>

								<div class="activity Food" id="cof" name="#FF8C00" label="Food">
									<p align="center" class="small-font">Coffee</p>

								</div>							
							
						</div>

						<div class="group" id="Leisure" name="#7CFC00">

								<div class="activity Leisure" id="art" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Art</p>

								</div>

								<div class="activity Leisure" id="phn" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Phone</p>

								</div>

								<div class="activity Leisure" id="not" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Nothing</p>

								</div>

								<div class="activity Leisure" id="msc" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Music</p>

								</div>

								<div class="activity Leisure" id="tvn" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Television</p>

								</div>

								<div class="activity Leisure" id="red" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Read</p>

								</div>

								<div class="activity Leisure" id="mvi" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Movie</p>

								</div>

								<div class="activity Leisure" id="sur" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Surfing Internet</p>

								</div>

								<div class="activity Leisure" id="gam" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Video Games</p>

								</div>

								<div class="activity Leisure" id="prj" name="#7CFC00" label="Leisure">
									<p align="center" class="small-font">Side Project</p>

								</div>
						</div>

						<div class="group" id="Excercise" name="#6A5ACD">

								<div class="activity Excercise" id="run" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Run</p>

								</div>

								<div class="activity Excercise" id="wlk" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Walk</p>

								</div>

								<div class="activity Excercise" id="bik" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Bike</p>

								</div>

								<div class="activity Excercise" id="lft" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Lift</p>

								</div>

								<div class="activity Excercise" id="ply" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Play</p>

								</div>

								<div class="activity Excercise" id="swm" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Swim</p>

								</div>

								<div class="activity Excercise" id="med" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Meditate</p>

								</div>

								<div class="activity Excercise" id="yog" name="#6A5ACD" label="Excercise">
									<p align="center" class="small-font">Yoga</p>

								</div>
							
						</div>

						<div class="group" id="Social" name="#FF69B4">

								<div class="activity Social" id="fam" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Family</p>

								</div>

								<div class="activity Social" id="fri" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Friend</p>

								</div>

								<div class="activity Social" id="lov" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Love</p>

								</div>

								<div class="activity Social" id="bar" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Bar</p>

								</div>

								<div class="activity Social" id="par" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Party</p>

								</div>

								<div class="activity Social" id="crt" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Concert</p>

								</div>

								<div class="activity Social" id="ent" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Sport Event</p>

								</div>

								<div class="activity Social" id="cdy" name="#FF69B4" label="Social">
									<p align="center" class="small-font">Comedy</p>

								</div>
							
						</div>

						<div class="group" id="Miscellaneous" name="#DAA520">

								<div class="activity Miscellaneous" id="rdy" name="#DAA520" label="Miscellaneous">
									<p align="center" class="small-font">Getting Ready</p>

								</div>

								<div class="activity Miscellaneous" id="shp" name="#DAA520" label="Miscellaneous">
									<p align="center" class="small-font">Shop</p>

								</div>

								<div class="activity Miscellaneous" id="dct" name="#DAA520" label="Miscellaneous">
									<p align="center" class="small-font">Doctor</p>

								</div>

								<div class="activity Miscellaneous" id="hou" name="#DAA520" label="Miscellaneous">
									<p align="center" class="small-font">House Work</p>

								</div>

								<div class="activity Miscellaneous" id="hct" name="#DAA520" label="Miscellaneous">
									<p align="center" class="small-font">Haircut</p>

								</div>

								<div class="activity Miscellaneous" id="cln" name="#DAA520" label="Miscellaneous">
									<p align="center" class="small-font">Clean</p>

								</div>
							
						</div>

					</div>	
					
				</div>

			</div>

		</div>

	</div>

</div>
<script type="text/javascript" >

							
							
							 nowload(); 

							 gettoday();
					</script>


</body>
</html>



