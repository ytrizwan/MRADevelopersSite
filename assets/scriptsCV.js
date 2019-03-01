// JavaScript Document
		
		//Animaiton Values set to Zero in Funciton
		function animationBarStartValues(){	
			"use strict";
			$("#teamworkAnimation").animate({
				width: '0%'
			}, "slow");

			$("#communicationAnimation").animate({
				width: '0%'
			}, "slow");

			$("#problemSolvingAnimation").animate({
				width: '0%'
			}, "slow");

			$("#initiativeAnimation").animate({
				width: '0%'
			}, "slow");

			$("#planningAnimation").animate({
				width: '0%'
			}, "slow");

			$("#managementAnimation").animate({
				width: '0%'
			}, "slow");

			$("#learningAnimation").animate({
				width: '0%'
			}, "slow");

			$("#technologyAnimation").animate({
				width: '0%'
			}, "slow");
			
		}
		
		//Animaiton Values set to desired Values in Function
		function animationBarEndValues(){
			//Animation of Skills bar
			"use strict";
			$("#teamworkAnimation").animate({
				width: '80%'
			}, "slow");

			$("#communicationAnimation").animate({
				width: '65%'
			}, "slow");

			$("#problemSolvingAnimation").animate({
				width: '75%'
			}, "slow");

			$("#initiativeAnimation").animate({
				width: '68%'
			}, "slow");

			$("#planningAnimation").animate({
				width: '75%'
			}, "slow");

			$("#managementAnimation").animate({
				width: '78%'
			}, "slow");

			$("#learningAnimation").animate({
				width: '90%'
			}, "slow");

			$("#technologyAnimation").animate({
				width: '85%'
			}, "slow");
		}
		
		// Run this funtion when First time page will open
		animationBarEndValues();
		
		
		
		//Hide and Show Skills Bar on Button Press
		var switchShowHide = true;
		
		$("#buttonClick").click(function(){
			if(switchShowHide == false){
				
				$("#skillsBar").show("slow");
				$("#buttonIconChange").removeClass("fas fa-angle-up");
				$("#buttonIconChange").addClass("fas fa-angle-down");	
				switchShowHide = true;
				//calling function to make skill values to desired values
				animationBarEndValues();
			}else{
				
				$("#skillsBar").hide("slow");
				$("#buttonIconChange").removeClass("fas fa-angle-down");
				$("#buttonIconChange").addClass("fas fa-angle-up");	
				switchShowHide = false;
				//calling function to make skill values to zero values
				animationBarStartValues();
			}
		});
		

		//Hide and Show Skills Bar on size of window change
		$(window).resize(function() {
			"use strict";
			showOrHideMainPostOnScreenSizeChange();
		});
		
		showOrHideMainPostOnScreenSizeChange();
		
		function showOrHideMainPostOnScreenSizeChange(){
			"use strict";
			if($(window).width() <= 977){
				$("#skillsBar").hide();
				$("#buttonIconChange").removeClass("fas fa-angle-down");
				$("#buttonIconChange").addClass("fas fa-angle-up");	
				switchShowHide = false;
				//calling function to make skill values to zero values
				animationBarStartValues();
			}else{
				$("#skillsBar").show();
				$("#buttonIconChange").removeClass("fas fa-angle-up");
				$("#buttonIconChange").addClass("fas fa-angle-down");	
				switchShowHide = true;
				//calling function to make skill values to desired values
				animationBarEndValues();
			}
		}
