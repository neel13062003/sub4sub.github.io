	        var i=0;
			var images=[];
			var time=5000;
			
			images[0]='images/n1.png';
			images[1]='images/n2.jfif';
			images[2]='images/n16.jfif';
			images[3]='images/n12.png';
			images[4]='images/n17.jfif';
			images[5]='images/n3.jfif';
			
			function changeImg(){
			document.slide.src=images[i];
			
			if(i<images.length-1){
			i++;
			}else{
			i=0;
			}
			 setTimeout("changeImg()",time);
			}
			
			window.onload=changeImg;

