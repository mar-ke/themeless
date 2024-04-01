// JSHELPER v1.0

// Get All jshelper-Classes
var helpObjects = document.querySelectorAll("[class*=jsh_]");

for (let i = 0; i < helpObjects.length; i++) {
	
	// get all Classes 
	var helpObjectsClasses = Array.from(helpObjects[i].classList)
	
	// filter them
	let helpObjectsClassesFilterted = helpObjectsClasses.filter(x => x.includes("jsh_"));
	
	// go through every Class
	for ( let z = 0; z < helpObjectsClassesFilterted.length; z++ ) {
		
		// split attribute from value
		let helpCommand = helpObjectsClassesFilterted[z].split("_");
	 	
		helpObjects[i].style[helpCommand[1]] = helpCommand[2];
		
	}

}