// JavaScript Document

		//Hide and Show Main Post Side
		$(window).resize(function() {
			showOrHideMainPostOnScreenSizeChange();
		});
		
		showOrHideMainPostOnScreenSizeChange();
		
		function showOrHideMainPostOnScreenSizeChange(){
			if($(window).width() <= 977){
				$("#mainPost").hide();
			}else{
				$("#mainPost").show();
			}
		}