// JavaScript Document

		//Hide and Show Main side Post Side in templete named (sideBarTemplete)
		$(window).resize(function() {
			"use strict";
			showOrHideMainPostOnScreenSizeChange();
		});
		
		showOrHideMainPostOnScreenSizeChange();
		
		function showOrHideMainPostOnScreenSizeChange(){
			"use strict";
			if($(window).width() <= 977){
				$("#mainPost").hide();
			}else{
				$("#mainPost").show();
			}
		}