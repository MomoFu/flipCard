var positionx=[];var positiony=[];

function createTweens(){
	var myW = targets[1].offsetWidth ;
	var myH = targets[1].offsetHeight ;

	for( var i = 0  ; i <= tweens.length -1  ; i ++ ){
	  
  	var tween = new TWEEN.Tween(position)
		.to({x: 2+69*i-parseInt(i/3)*300+21*parseInt(i/3), y: -330+parseInt(i/3)*100, rotation: 359},100)
		.delay(0)
		//.easing(TWEEN.Easing.Cubic.In)
		.onUpdate(function(i){
			var j = i;
			return function(){
				targets[j].style.webkitTransform = 'translate(' + position.x + 'px, ' + position.y + 'px)';
			}
			
		}(i))
		.onComplete(function(){
			positionx.push(position.x);
			positiony.push(position.y);
			position.x = 0 ;
			position.y = 0 ;
			//console.log(position);
		});

	tweens[i] = tween ;
	}
}
function init() {

		createTweens();
		for( var i = 0 ; i <tweens.length -1  ; i++){
			tweens[i].chain(tweens[i+1]);
		}
		tweens[0].start();


}
function animate( time ) {

		requestAnimationFrame( animate );
		TWEEN.update( time );
}

function update() {
	
}

function  changePosition(){
	var all=[];
	var xx=[];
	var changeA = ["One","Two","Three","Four","Five","Six","Seven","Eight","Nine"];
	var changeB = ["One","Two","Three","Four","Five","Six","Seven","Eight","Nine"];
	var copy = shuffle(changeA);
	// console.log(copy);
	for(var i=0;i<changeB.length;i++){
		all[i] = copy.indexOf(changeB[i]);
	}
	for(var i=0;i<all.length;i++){
		 xx[i] = fuckJudge(all[i]);
	}

	var changex1 = xx[0].x-initPosition[0].x;
	var changey1 = xx[0].y-initPosition[0].y;
	var changex2 = xx[1].x-initPosition[1].x;
	var changey2 = xx[1].y-initPosition[1].y;
	var changex3 = xx[2].x-initPosition[2].x;
	var changey3 = xx[2].y-initPosition[2].y;
	var changex4 = xx[3].x-initPosition[3].x;
	var changey4 = xx[3].y-initPosition[3].y;
	var changex5 = xx[4].x-initPosition[4].x;
	var changey5 = xx[4].y-initPosition[4].y;
	var changex6 = xx[5].x-initPosition[5].x;
	var changey6 = xx[5].y-initPosition[5].y;
	var changex7 = xx[6].x-initPosition[6].x;
	var changey7 = xx[6].y-initPosition[6].y;
	var changex8 = xx[7].x-initPosition[7].x;
	var changey8 = xx[7].y-initPosition[7].y;
	var changex9 = xx[8].x-initPosition[8].x;
	var changey9 = xx[8].y-initPosition[8].y;
  
	changePositionPartAnother("target1",changex1,changey1);
	changePositionPartAnother("target2",changex2,changey2);
	changePositionPartAnother("target3",changex3,changey3);
	changePositionPartAnother("target4",changex4,changey4);
	changePositionPartAnother("target5",changex5,changey5);
	changePositionPartAnother("target6",changex6,changey6);
	changePositionPartAnother("target7",changex7,changey7);
	changePositionPartAnother("target8",changex8,changey8);
	changePositionPartAnother("target9",changex9,changey9);
}
function fuckJudge(mm){
	if(mm==0){
		return {x:initPosition[0].x+positionx[0],y:initPosition[0].y+positiony[0]}
	}else if(mm==1){
        return {x:initPosition[1].x+positionx[1],y:initPosition[1].y+positiony[1]}
	}else if(mm==2){
        return {x:initPosition[2].x+positionx[2],y:initPosition[2].y+positiony[2]}
	}else if(mm==3){
        return {x:initPosition[3].x+positionx[3],y:initPosition[3].y+positiony[3]}
	}else if(mm==4){
        return {x:initPosition[4].x+positionx[4],y:initPosition[4].y+positiony[4]}
	}else if(mm==5){
        return {x:initPosition[5].x+positionx[5],y:initPosition[5].y+positiony[5]}
	}else if(mm==6){
        return {x:initPosition[6].x+positionx[6],y:initPosition[6].y+positiony[6]}
	}else if(mm==7){
        return {x:initPosition[7].x+positionx[7],y:initPosition[7].y+positiony[7]}
	}else{
        return {x:initPosition[8].x+positionx[8],y:initPosition[8].y+positiony[8]}
	}
}
function changePositionPartAnother(ee,ff,gg){
    document.getElementById(ee).style.transform ='translate(' + ff + 'px, ' + gg + 'px)';
}

function shuffle(array) {
    var copy = [],
        n = array.length,
        i;
    // 如果还剩有元素。。
    while (n) {
        // 随机选取一个元素
        i = Math.floor(Math.random() * n--);
        // 移动到新数组中
        copy.push(array.splice(i, 1)[0]);
    }
    return copy;
}

//下面就是换位置的主要函数

function changePositionPart(aa,bb,cc){
	 document.getElementById(aa).style.transform ='translate(' + bb + 'px, ' + cc + 'px)';
    document.getElementById(aa+"Back").style.transform ='translate(' + bb + 'px, ' + cc + 'px)';
}

function getPosition(value){
	//console.log("target"+value);
	return getElementAbsolutePosition(document.getElementById("click"+value));

         
}
//获取元素的绝对位置
　
	//获取元素绝对位置的另一种方法
		//实测改对了，scroll的距离都没加上去
			function getElementAbsolutePosition(aa){
				var X= aa.getBoundingClientRect().left+pageXOffset;

			　　var Y =aa.getBoundingClientRect().top+pageYOffset;
			    return {x:X,y:Y}
			}



