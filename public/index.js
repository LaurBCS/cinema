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
	el: '#slide'
});



/* Vue api */

Vue.component('vue-api' , {
	data: function() {
		return {
			info: [
				{},
				{},
				{}
			]
		};
	},
	created() {
		fetch("https://movie-quote-api.herokuapp.com/v1/shows/")
		.then(response => response.json())
		.then(data => (this.info = data))
	},
	template: 
		`<div>
			<img src = "https://picsum.photos/id/235/450/200">
			<p class="fs-6 fw-light">{{info[0].name}}</p>			  
			<img src = "https://picsum.photos/id/235/450/200">
			<p class="fs-6 fw-light">{{info[1].name}}</p>
			<img src = "https://picsum.photos/id/235/450/200">
			<p class="fs-6 fw-light">{{info[2].name}}</p>
		</div>`
});

new Vue ({
	el: '#api'
});



