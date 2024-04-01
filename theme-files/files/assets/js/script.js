// FIXED HEADER SETTING
$(window).on('load', function() {
	let headerHeight = document.getElementById('menu-custom').offsetHeight;
	let styleElem = document.head.appendChild(document.createElement("style"));
	styleElem.innerHTML = "#wrapper:before {height: "+headerHeight+"px;}";
	console.log("test")
});

// SMARTPHONE MENU TRIGGER
let smart_menu = document.getElementById("smart_menu");
let smartphoneMenuTrigger = document.getElementById("smartphoneMenuTrigger");
let body = document.getElementsByTagName('body')[0];
 
smartphoneMenuTrigger.onclick = function(){    
    if (smart_menu.classList.contains("sm_hidden")){
        smart_menu.classList.remove('sm_hidden');
        smartphoneMenuTrigger.classList.add('active');
        body.style.overflow="hidden"
    } else {
        smart_menu.classList.add('sm_hidden');
        smartphoneMenuTrigger.classList.remove('active');
        body.style.overflow="scroll"
    }
};

