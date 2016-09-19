<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="Pragma" content="no-cache"> 
	    <meta http-equiv="Cache-Control" content="no-cache"> 
	    <meta name="_token" content="{{ csrf_token() }}">
	    <meta http-equiv="Expires" content="0"> 
	<title>翻牌有奖</title>
	<link href="{{ URL::asset('flipCardM/css/reset.css') }}" rel="stylesheet">
    	<link href="{{ URL::asset('flipCardM/css/indexM.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ URL::asset('flipCardM/js/sta.js') }}"></script>
</head>
<body>
	 <div class="mainContainer">
	       <div class="titleContainer">
		        <img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/title.jpg" alt="">
	       </div>

		   <div class="content">
				<div class="nineGeziContainer">
					<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/dipan.png" alt="">
				</div>
				
				<div class="bottomOneContainer">
				    <div id="chance">你还有<span></span>次翻牌机会</div>
				    <div id="target1" class="target">
				    	<div id="clickOne" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickOneBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
				    </div>
					<div id="target2" class="target">
					 	<div id="clickTwo" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickTwoBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>   
					<div id="target3" class="target">
						<div id="clickThree" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickThreeBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>  
					<div id="target4" class="target">
						<div id="clickFour" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickFourBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>    
					<div id="target5" class="target">
						<div id="clickFive" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickFiveBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>  
					<div id="target6" class="target">
						<div id="clickSix" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickSixBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div> 
					<div id="target7" class="target">
						<div id="clickSeven" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickSevenBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>    
					<div id="target8" class="target">
						<div id="clickEight" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickEightBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>    
					<div id="target9" class="target">
						<div id="clickNine" class="clickMeFront">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai24.png" alt="">
					    </div>
					    <div id="clickNineBack" class="clickMeBack">
					    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/pai1.png" alt="">
					    	<div class="rewards"><p>8元现金</p></div>
					    </div>
					</div>    
					    
					
				</div>
			</div>
	 </div>

      <div class="maskContainer" id="over">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/hint.png" alt="">
		    </div>
		
		</div>
		
	</div>
	

	<div class="maskContainer" id="vip">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/kaijiang.png" alt="">
		    	<div class="wordContinue you"><p class="wordContinueOne">恭喜获得</p>
 		    	<p class="wordContinueTwo"><b>VIP一天</b></p></div>
		    </div>
	
			<div id="iknow" class="buttonContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/button2.png" alt="">
			</div>	
			
			
		</div>
		
	</div>

	<div class="maskContainer" id="pingchejuan">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/kaijiang.png" alt="">
		    	<div class="wordContinue"><p class="wordContinueOne">铁友火车票</p>
		    	<p class="wordContinueTwo"><b>5元现金券</b><br/><span>仅限铁友新用户</span></p></div>
		    </div>
	
			<div id="iknow" class="buttonContainer">
				<a href="http://m.tieyou.com/info/tyParCoupon/index.html?sourceFrom=ark_android_ndoua" target="_blank"><img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/button.png" alt=""></a>
			</div>	
			
			<div id="close" class="closeContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/close.png" alt="">
			</div>
		</div>
		
	</div>

	

	<div class="maskContainer" id="continue">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/fail.png" alt="">
		    </div>
	
			<div id="iknow" class="buttonContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/button2.png" alt="">
			</div>	
			
			<div id="close" class="closeContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/close.png" alt="">
			</div>
		</div>
		
	</div>

	
	<div class="maskContainer" id="wifi50">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/kaijiang.png" alt="">
		    	<div class="wordContinue"><p class="wordContinueOne">流量银行</p>
		    	<p class="wordContinueTwo"><b>50M联通流量</b><br/><span>仅限流量银行新用户</span></p></div>
		    </div>
	
			<div id="iknow" class="buttonContainer">
				<a href="http://bank.wo.cn/public/WOPortal/index.html?ch=cbphone" target="_blank"><img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/button.png" alt=""></a>
			</div>	
			
			<div id="close" class="closeContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/close.png" alt="">
			</div>
		</div>
		
	</div>

	<div class="maskContainer" id="nianjian">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/kaijiang.png" alt="">
		    	<div class="wordContinue"><p class="wordContinueOne">100元</p>
		    	<p class="wordContinueTwo"><b>年检优惠券</b><br/><span>仅限车轮新用户</span></p></div>
		    </div>
	
			<div id="iknow" class="buttonContainer">
				<a href="https://h5.chelun.com/2016/annual/index.html" target="_blank">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/button.png" alt=""></a>
			</div>	
			
			<div id="close" class="closeContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/close.png" alt="">
			</div>
		</div>
		
	</div>

	<div class="maskContainer" id="huankuanjing">
		
		<div class="kContainer">
		    <div id="cash" class="rewardContainer">
		    	<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/kaijiang.png" alt="">
		    	<div class="wordContinue"><p class="wordContinueOne">51信用卡</p>
		    	<p class="wordContinueTwo"><b>25元还款金</b><br/><span>仅限51信用卡新用户</span></p></div>
		    </div>
	
			<div id="iknow" class="buttonContainer">
				<a href="http://h5.u51.com/u51/cashback-newer/index.html?act=100114&num=25&channel=51cbdh" target="_blank"><img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/button.png" alt=""></a>
			</div>	
			
			<div id="close" class="closeContainer">
				<img src="http://zhcn.web.cdn.cootekservice.com/s/flipCard/images/close.png" alt="">
			</div>
		</div>
		
	</div>

	<div class="hiddenContainer" style="display:none">
		<p id="myNumber">{{$me->phone_number}}</p>
	</div>
        	<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
        	<script src="{{ URL::asset('flipCardM/js/web-storage-cache.min.js') }}"></script>
        	<script src="{{ URL::asset('flipCardM/js/Tween.js') }}"></script>
	<script src="{{ URL::asset('flipCardM/js/RequestAnimationFrame.js') }}"></script>
	<script src="{{ URL::asset('flipCardM/js/giveValue.js') }}"></script>
	<script src="{{ URL::asset('flipCardM/js/fapaiCreateTweensM.js') }}"></script>
	<script src="{{ URL::asset('flipCardM/js/time.js') }}"></script>
	<script>
		//此处明天要做修改接收来自服务器的status判断
		_hmt.push(['_trackEvent', "flipCard", "flipCardOpen"]);
		var status ;
		var myNumber = $('#myNumber').text() ;

		function ff(u){
		
			u.parent().find(".clickMeFront").addClass("front");
			u.parent().find(".clickMeBack").addClass("back");	
			timesAlready--;
                    		saveStorage("times",timesAlready);
                    		$(".content .bottomOneContainer #chance>span").text(timesAlready);
		}
			
		$(".maskContainer .kContainer #close").click(function(e){
			e.stopPropagation();
			sameWork();
			setTimeout("changePosition()",500);
			setTimeout("changePosition()",900);
			setTimeout("changePosition()",1300);
		});
		$(".maskContainer .kContainer .buttonContainer").click(function(e){
			e.stopPropagation();
                   		 sameWork();
                   		 setTimeout("changePosition()",500);
			setTimeout("changePosition()",900);
			setTimeout("changePosition()",1300);
                   		 var myId = $(this).parent().parent().attr('id');
                   		 console.log(myId); 
                   		  _hmt.push(['_trackEvent', "flipCard", "flipCardClick"+myId]);
		});

		 $.ajax({
	                                type: 'POST',
	                                url: 'ajax/getFlipPrize',
	                                data: { phone_number :  myNumber   },
	                                dataType: 'json',
	                                headers: {
	                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	                                },
	                                success: function(data){
	                                	if( data.status == 1 ){
	                                		status = data.msg ;
	                                		model(status);
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
		
		$(".content .bottomOneContainer #chance>span").text(timesAlready);
               
             		
			
		</script>
		<script>
			var tween, tweenBack;
			var tweens = new Array(9);
			 var initPosition=[];
			 var  changeC =["One","Two","Three","Four","Five","Six","Seven","Eight","Nine"];
			var position = {x: 0, y: 0, rotation: 0};
			var targets = function(){
				var tmp = new Array(9);
				for(var j = 0 ; j < tmp.length ; j ++ ){
					tmp[j] = document.getElementById('target'+(j+1));
				}
				return tmp ;
			}();
			//console.log(targets);			
			init();
			animate();	
			 for(var i=0;i<changeC.length;i++){
				initPosition[i] = getPosition(changeC[i]);
			}

		</script>
        <script>
        	judgenoChance();	
        </script>
        			

</body>
</html>

 