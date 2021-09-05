/*This is below for dropdown menu via class which used in css*/

var settingsmenu = document.querySelector(".settings-menu");

function settingsMenuToggle(){
	settingsmenu.classList.toggle("settings-menu-height");
}


/*This is below for dark and light mode via class which used in css*/

var darkBtn=document.getElementById("dark-btn");

darkBtn.onclick=function(){
	darkBtn.classList.toggle("dark-btn-on");
	document.body.classList.toggle("dark-theme");

	/*if(localStorage.getItem("theme")=="light"){
		localStorage.setItem("theme","dark");		
	}
	else{
		localStorage.setItem("theme","light");
	}*/
}


/*if(localStorage.getItem("theme")=="light"){
	darkBtn.classList.remove("dark-btn-on");
	document.body.classList.remove("dark-theme");
}
else if(localStorage.getItem("theme")=="dark"){
	darkBtn.classList.add("dark-btn-on");
	document.body.classList.add("dark-theme");
}
else{
	localStorage.setItem("theme","light");
}*/



/*This Above for if we set dark mode in website*/







