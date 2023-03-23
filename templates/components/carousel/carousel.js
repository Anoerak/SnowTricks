// If we have a carousel on the page
let carouselTest = document.getElementsByClassName('carousel__container');

if (carouselTest.length > 0) {
	// We select the elements we need
	let display = document.querySelector('[data-display]');
	let imgs = document.querySelectorAll('[data-img]');
	let leftBtn = document.querySelector('[data-btn-left]');
	let rightBtn = document.querySelector('[data-btn-right]');
	let imgSlider = document.querySelector('[data-img-container ]');

	// We create the container based on the tagName
	let new_img = imgs[0].tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
	new_img.src = imgs[0].src;

	// We style the container
	mediaStylingFunction = (media) => {
		if (media.tagName === 'IFRAME') {
			media.id = 'displayed_media';
			media.width = 750;
			media.height = 500;
			media.allow = 'accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen';
			media.autoplay = 1;
		} else {
			media.id = 'displayed_media';
		}
	};

	mediaStylingFunction(new_img);

	display.appendChild(new_img);

	let left = 0;

	// We add event listeners to the buttons
	rightBtn.addEventListener('click', function next() {
		if (left <= imgs.length - 2) {
			left++;
			imgSlider.style.transform = `translatex(calc(( ${left} * (-80px - 1.6rem)))`;
		} else {
			left = 0;
			imgSlider.style.transform = `translatex(0)`;
		}
	});

	leftBtn.addEventListener('click', function before() {
		if (left > 0) {
			left--;
			imgSlider.style.transform = `translatex(calc(( -${left} * (80px + 1.6rem)))`;
		}
		if (left == 0) {
			imgSlider.style.transform = `translatex(0)`;
		}
	});

	// We add event listeners to the images and add logic to display the selected image
	imgs.forEach((img) => {
		img.addEventListener('click', function (e) {
			let new_media = this.tagName === 'VIDEO' ? document.createElement('iframe') : document.createElement('img');
			mediaStylingFunction(new_media);
			if (new_media.src == undefined) {
				new_media.src = imgs[0].src;
			}
			new_media.id = 'displayed_media';
			new_media.src = this.getAttribute('src');
			let oldChild = document.getElementById('displayed_media');
			oldChild.remove();
			display.appendChild(new_media);
		});
	});
}
