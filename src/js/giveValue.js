function loadStatus(){
	$.ajax({
                                type: 'POST',
                                url: 'ajax/uploadFlipPrize',
                                data: { phone_number :  myNumber   },
                                dataType: 'json',
                                headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                },
                                success: function(data){
                                console.log(data.msg);
                                        
                                 if( data.status == 1 ){
	                         	status = data.msg ;
	                        //    model(status);
	                   }
	                   else if( data.status == 3 ){
	                            saveStorage("times",  0 );
	                            timesAlready=0 ;
	                    }
                                        
                                },
                                error: function(xhr, type){
                                        console.log(xhr.resonseText);
                                        var errors = JSON.parse(xhr.responseText);
                                        console.log(xhr.status);
                                        
                                     //   console.log(errors.phone_number[0]);
                                }
                        });
}

function fetchVIP(){
	var fetchUrl = 'http://dialer-voip.cootekservice.com/voip/wechat_lucky_wheel';
	$.get(fetchUrl,{phone: myNumber, activity_id: 'wechat_vip_daily'}, function(result){
		    
			console.log(result);
			if( result.result_code == 2000 ){
				 _hmt.push(['_trackEvent', "flipCard", "flipCardGain"]);
				 row_id = result.result.row_id;
				var myUrl = 'http://dialer-voip.cootekservice.com/voip/wechat_lucky_wheel_bonus';
				$.get(myUrl,{phone: myNumber, activity_id: 'wechat_vip_daily'  , row_id : row_id }, function(result1){
					console.log( result1 );
				})
				
			}
			else if( result.result_code == 2001 ){
			    _hmt.push(['_trackEvent', "flipCard", "flipCardGainAlready"]);
				
			}  
			else if( result.result_code == 2002 ){
			    _hmt.push(['_trackEvent', "flipCard", "flipCardGet2002"]);
				
			}  
			else{
			    _hmt.push(['_trackEvent', "flipCard", "flipCardNotFitTime"]);
				
				
			}
			
		});
}

function giveValue(cc){
    $(".target #clickOneBack .rewards p").text(cc[0]);
 	$(".target #clickTwoBack .rewards p").text(cc[1]);
 	$(".target #clickThreeBack .rewards p").text(cc[2]);
 	$(".target #clickFourBack .rewards p").text(cc[3]);
 	$(".target #clickFiveBack .rewards p").text(cc[4]);
 	$(".target #clickSixBack .rewards p").text(cc[5]);
 	$(".target #clickSevenBack .rewards p").text(cc[6]);
 	$(".target #clickEightBack .rewards p").text(cc[7]);
    $(".target #clickNineBack .rewards p").text(cc[8]);
}
function changeSty(judg,fsize){
   	
	 if(judg=="火车票"){
	    	$("#pingchejuan").delay(500).animate({top:'0%'},300).css("display","block");
	    	_hmt.push(['_trackEvent', "flipCard", "flipCardPinche"]);
	    	loadStatus();
	}
	
	
	else if(judg=="25元还款金"){
        		$("#huankuanjing").delay(500).animate({top:'0%'},300).css("display","block");
        		_hmt.push(['_trackEvent', "flipCard", "flipCardHuanKuan"]);
        		 loadStatus();
	}
	else if(judg=="50M流量"){
		_hmt.push(['_trackEvent', "flipCard", "flipCard50M"]);
	    	$("#wifi50").delay(500).animate({top:'0%'},300).css("display","block");
	    	 loadStatus();
	}
	else if(judg=="年检优惠券"){
	    $("#nianjian").delay(500).animate({top:'0%'},300).css("display","block");
	    _hmt.push(['_trackEvent', "flipCard", "flipCardNianJian"]);
	     loadStatus();
	    fsize.css("font-size","12px");
	}
}
function model(status){
           if(status==1){ 
                var arr1=new Array(9);
                var bb=new Array(9);
                arr1=["25元还款金","年检优惠券","50M流量","50M流量","火车票","50M流量","25元还款金","25元还款金","火车票"];
                for(var i=0;i<9;i++){
		 			var valueOne = parseInt(Math.random()*(9-i));
		 			//console.log(valueTwo);
		 			bb[i] = arr1[valueOne];
		 			arr1.splice(valueOne,1);
		 			//console.log(arr2);
		 		}
		 		console.log(bb);
		 		giveValue(bb);
		 		$(".target .clickMeFront").unbind('click');
		 		$('.target .clickMeFront').click(function(e){
		 			ff($(this));
			 		var judg = $(this).parent().find("p").text();
			 		var fsize = $(this).parent().find("p");
			 		changeSty(judg,fsize);
			 		
				});
				
		 }
			 if(status==2){
			 	var arr2=new Array(9);
			 	var aa=new Array(9);
			 	for(var j=0;j<=4;j++){arr2[j]="获得VIP";}
			 	for(var j=5;j<arr2.length;j++){arr2[j]="谢谢参与";}
			 		//console.log(arr2);
			 		for(var i=0;i<9;i++){
			 			var valueTwo = parseInt(Math.random()*(9-i));
			 			//console.log(valueTwo);
			 			aa[i] = arr2[valueTwo];
			 			arr2.splice(valueTwo,1);
			 			//console.log(arr2);
			 		}
			 	console.log(aa);
			 	giveValue(aa);
               			$(".target .clickMeFront").unbind('click');
			 	 $(".target .clickMeFront").click(function(){
                  	   			ff($(this));
		                        		$(this).parent().find("p").removeAttr("style");
		                  	   	 if($(this).parent().find("p").text()=="获得VIP")
			                          	{
				                              $("#vip").delay(500).animate({top:'0%'},300).css("display","block");
				                               loadStatus();
				                               fetchVIP();
			                              //console.log(1);
			                  	   }else{
			                          		$("#continue").delay(500).animate({top:'0%'},300).css("display","block");
			                          		 loadStatus();
			                  	   }
	                  	  
				  });   
			 	 
			 }
			 if(status==3){
			 	//var arr2=new Array(9);
			 	var arr3=new Array(9);
			 	for(var j=0;j<arr3.length;j++){arr3[j]="谢谢参与";}
			 		console.log(arr3);
			 	    giveValue(arr3);
			 	    $(".target .clickMeFront").unbind('click');
			 	   $(".target .clickMeFront").click(function(){
			 	   	ff($(this));
			 	   	 $(this).parent().find("p").removeAttr("style");
				 	   $("#continue").delay(500).animate({top:'0%'},300).css("display","block");
				 	   loadStatus();
			 	    });
			 }
}
function sameWork(){
	$(".maskContainer").css('display', 'none').animate({top:'100%'},1);
	$(".target .clickMeFront").addClass("originFront").removeClass("front").removeClass("originFront");
	$(".target .clickMeBack").addClass("originBack").removeClass("back").removeClass("originBack");
	model(status);
	// 此处明天要做修改接收来自服务器的status判断
	
	judgenoChance();
}
function judgenoChance(){
	if(loadStorage("times")<=0){
		$(".target").unbind('click');
		$(".target .clickMeFront").unbind('click');
		$("#over").animate({top:'0%'},0).css("display","block");
	    setTimeout( function(){
	    	$('#over').css('display', 'none').animate({top:'100%'},1)
	    },2000);
	    
		$(".target .clickMeFront").click(function(){
			 $("#over").animate({top:'0%'},0).css("display","block");
			 setTimeout("$('#over').css('display', 'none').animate({top:'100%'},1)",2000);
		});
	     
	}
}

// function rado(stat,apple){
//      var modelradom = [1,2,3]; 
//      modelradom.splice(stat-1,1);
     
//      	  var radomvalue = parseInt(Math.random()*(2-apple));
//      	  var result = modelradom[radomvalue];
 
//      }
//      return result;
// }