const hamburger = document.querySelector(".ham-btn");
hamburger.addEventListener("click", toggleClass);

function toggleClass() {
	const element = document.querySelector("aside");
	element.classList.toggle("active");
	// element.style.backgroundColor="red";
	console.log("click");
}
