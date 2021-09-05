 var textWrapper=document.querySelector('.ml3');
	        textWrapper.innerHTML=textWrapper.textContent.replace(/\S/g,"<span class='letter'>$&</span>");
	        anime.timeline(
	       {
		    loop:true
	       })
	      .add(
	{
		targets:'.ml3 .letter',
		opacity:[0,1],
		duration:2250,
		delay:(el,i)=>150*(i+1)
	})
	.add(
	{
		targets:'.ml3',
		opacity:0,
		duration:1000,
		easing:"easeOutExpo",
		delay:10000000000
	});
	var TxtRotate=function(el,toRotate,period)
	{
		this.toRotate=toRotate;
		this.el=el;
		this.loopNum=0;
		this.period=parseInt(period,10)||2000;
		this.txt='';
		this.tick();
		this.isDeleting=false;  
	};
	TxtRotate.prototype.tick=function()
	{
		var i=this.loopNum%this.toRotate.length;
		var fullTxt=this.toRotate[i];
		if(this.isDeleting)
		{
			this.txt=fullTxt.substring(0,this.txt.length-1);
		}
		else
		{
			this.txt=fullTxt.substring(0,this.txt.length+1);
		}
		this.el.innerHTML='<span class="wrap">'+this.txt+'</span>';
		var that=this;
		var delta=300-Math.random()*100;
		if(this.isDeleting)
		{
			delta/=2;
		}
		if(!this.isDeleting&&this.txt===fullTxt)
		{
			delta=this.period;
			this.isDeleting=true;
		} 
		else if(this.isDeleting&&this.txt==='')
		{
			this.isDeleting=false;
			this.loopNum++;
			delta=500;
		}
		setTimeout(function()
		{
			that.tick();
		},delta);
	};
	window.onload=function()
	{
		setTimeout(loadAfterTime,9000)
	};
	function loadAfterTime()
	{	
		var elements=document.getElementsByClassName('txt-rotate');
		for(var i=0;i<elements.length;i++) 
		{	
			var toRotate=elements[i].getAttribute('data-rotate');
			var period=elements[i].getAttribute('data-period');
			if(toRotate)
			{		 
				new TxtRotate(elements[i],JSON.parse(toRotate),period);
			}	
		}
		var css=document.createElement("style");
		css.type="text/css";
		css.innerHTML=".txt-rotate>.wrap{border-right:0.00em solid #4A235A}";
		document.body.appendChild(css);	
	}