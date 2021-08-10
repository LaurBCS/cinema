const slide1 = document.querySelector('.slide1');
const slide2 = document.querySelector('.slide2');
const slide3 = document.querySelector('.slide3');
const firstBtn = document.querySelector('.first');
const secondBtn = document.querySelector('.second');
const thirdBtn = document.querySelector('.third');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

slide2.style.display = "none";
slide3.style.display = "none";

firstBtn.onclick = function() {
	slide2.style.display = "none";
	slide3.style.display = "none";
	secondBtn.classList.remove("special");
	thirdBtn.classList.remove("special");
	slide1.style.display = "flex";
	slide1.style.backgroundImage = "url('images/castle.jpg')";
	firstBtn.classList.add("special"); 
};

secondBtn.onclick = function() {
	slide1.style.display = "none";
	slide3.style.display = "none";
	firstBtn.classList.remove("special");
	thirdBtn.classList.remove("special");
	slide2.style.display = "flex";
	slide2.style.backgroundImage = "url('images/man.jpg')";
	secondBtn.classList.add("special"); 
};

thirdBtn.onclick = function() {
	slide1.style.display = "none";
	slide2.style.display = "none";
	firstBtn.classList.remove("special");
	secondBtn.classList.remove("special");
	slide3.style.display = "flex";
	slide3.style.backgroundImage = "url('images/landscapes.jpg')";
	thirdBtn.classList.add("special"); 
};

let slideContor = 1;

leftArrow.onclick = function() {
		if(slideContor === 0){
			slide2.style.display = "none";
			slide3.style.display = "none";
			secondBtn.classList.remove("special");
			thirdBtn.classList.remove("special");
			slide1.style.display = "flex";
			slide1.style.backgroundImage = "url('images/castle.jpg')";
			firstBtn.classList.add("special");
			slideContor = 1;
		}
		else if (slideContor === 1){
			slide1.style.display = "none";
			slide2.style.display = "none";
			firstBtn.classList.remove("special");
			secondBtn.classList.remove("special");
			slide3.style.display = "flex";
			slide3.style.backgroundImage = "url('images/landscapes.jpg')";
			thirdBtn.classList.add("special");
			slideContor = 2;
		}
		else if (slideContor === 2) {
			slide1.style.display = "none";
			slide3.style.display = "none";
			firstBtn.classList.remove("special");
			thirdBtn.classList.remove("special");
			slide2.style.display = "flex";
			slide2.style.backgroundImage = "url('images/man.jpg')";
			secondBtn.classList.add("special"); 
			slideContor = 0;
		}
};

rightArrow.onclick = function() {
	if(slideContor === 0){
		slide2.style.display = "none";
		slide3.style.display = "none";
		secondBtn.classList.remove("special");
		thirdBtn.classList.remove("special");
		slide1.style.display = "flex";
		slide1.style.backgroundImage = "url('images/castle.jpg')";
		firstBtn.classList.add("special");
		slideContor = 1;
	}
	else if (slideContor === 1){
		slide1.style.display = "none";
		slide3.style.display = "none";
		firstBtn.classList.remove("special");
		thirdBtn.classList.remove("special");
		slide2.style.display = "flex";
		slide2.style.backgroundImage = "url('images/man.jpg')";
		secondBtn.classList.add("special"); 
		slideContor = 2;
	}
	else if (slideContor === 2) {
		slide1.style.display = "none";
		slide2.style.display = "none";
		firstBtn.classList.remove("special");
		secondBtn.classList.remove("special");
		slide3.style.display = "flex";
		slide3.style.backgroundImage = "url('images/landscapes.jpg')";
		thirdBtn.classList.add("special");
		slideContor = 0;
	}
};
