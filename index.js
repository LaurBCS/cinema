/*const slide1 = document.querySelector('.slide1');
const slide2 = document.querySelector('.slide2');
const slide3 = document.querySelector('.slide3');
const firstBtn = document.querySelector('.first');
const secondBtn = document.querySelector('.second');
const thirdBtn = document.querySelector('.third');
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');

slide2.style.display = "none";
slide3.style.display = "none";

// Dots navigation slideshow 
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


//Arrow navigation slideshow
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
};*/

// Implement a Public Api

/*const section = document.querySelector('.most-viewed-movies');
const div = document.querySelector('.most-viewed');

let URL = 'https://movie-quote-api.herokuapp.com/v1/shows/';
let request = new XMLHttpRequest();

request.open('GET', URL);
request.responseType = 'json';
request.send();

let movies;

request.onload = function() {
  movies = request.response;
  populateSection(movies);
}

function populateSection(obj) {
  for (let i=0 ; i < 3; i++){
	const paragraph = document.createElement('p');
	const img = document.createElement('img');
	paragraph.textContent = movies[i].name;
	img.src = "https://picsum.photos/id/235/400/200";
	div.appendChild(img);
	div.appendChild(paragraph);
	paragraph.classList.add('fs-6');
	paragraph.classList.add('fw-light');
  }
}*/


/* Vue slideshow*/

Vue.component('slide-show' , {
	data: function() {
		return {
			posts: [
              {
                id: 1,
				type: "Action, Adventure, Fantasy",
                title: "The Green Knight",
                content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque non nisi porttitor pharetra. In turpis nibh, laoreet id consequat ac, ornare in tortor. Pellentesque eget arcu ut sapien pretium.",
				Image: "images/castle.jpg"
              },
              {
                id: 2,
				type: "Thriller, Horror",
                title: "Black Widow",
                content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt fringilla vehicula. Proin tincidunt tristique iaculis. Nullam vitae leo massa. Aliquam non lacus sapien. Duis elementum vulputate massa vel tristique.",
				Image: "images/man.jpg"
              },
              {
                id: 3,
				type: "Action, Adventure, Romance",
                title: "F9: The Fast Saga",
                content: "Cras lacinia gravida eros eget feugiat. Suspendisse et urna nec mi fringilla sollicitudin quis nec justo. Nullam elementum sem et dapibus aliquet. Proin quis vulputate erat. Proin eget lectus erat.",
				Image: "images/landscapes.jpg"
              }
            ],
			selectedPost: 0
		};
	},
	methods: {
		selected : function() {
			if (this.selectedPost > 2)
			{
				this.selectedPost = 0;
			}
			else if (this.selectedPost < 0)
			{
				this.selectedPost = 2;
			}
		}
	},
	template:
	   `<div v-bind:style="{ 'background-image': 'url(' + posts[selectedPost].Image + ')' }" class="top-movies justify-content-center align-items-center text-white position-relative w-100 vh-100">
			<div class="my-0 mx-auto">
				<span class="fs-6 fw-light text-uppercase">{{ posts[selectedPost].type }}</span>
				<h1 class="fs-1 my-2">{{ posts[selectedPost].title }}</h1>
				<p class="fs-5 fw-light mb-3">{{ posts[selectedPost].content }}</p>
				<a href="https://www.youtube.com/" class="fs-6 text-white text-uppercase text-decoration-none d-inline-block"><i class="fas fa-play me-2"></i>Play Trailer</a>
			</div>
			<ol class="navigation position-absolute">
				<li @click ="selectedPost = 0" v-bind:class="{special: selectedPost=== 0}" class="d-inline-block"></li>
				<li @click ="selectedPost = 1" v-bind:class="{special: selectedPost=== 1}" class="d-inline-block"></li>
				<li @click ="selectedPost = 2" v-bind:class="{special: selectedPost=== 2}" class="d-inline-block"></li>
			</ol>
			<span class="left-arrow"><i @click ="selected(selectedPost--)" class="fas fa-angle-left fs-3 text-white"></i></span>
			<span class="right-arrow"><i @click ="selected(selectedPost++)" class="fas fa-angle-right fs-3 text-white"></i></span>
		</div>`
});

new Vue ({
	el: '#slide',
});

