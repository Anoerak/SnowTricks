const displayMoreButton = document.getElementById('display-more_button');

displayMoreButton.addEventListener('click', displayMoreTricks);

function displayMoreTricks() {
	getMoreTricks();
}

// window.onscroll = function (ev) {
// 	if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 370) {
// 		getMoreTricks();
// 	}
// };

let getMoreTricks = function () {
	let url = 'https://127.0.0.1:8000/load-more-tricks';
	fetch(url)
		.then(function (response) {
			return response.text();
		})
		.then(function (html) {
			let tricks = document.getElementById('tricks_list');
			let loadMoreButton = document.getElementById('load_more_card');
			// We remove the load more button from the tricks list
			tricks.removeChild(loadMoreButton);
			// We insert the new tricks before the load more button in the tricks list
			tricks.insertAdjacentHTML('beforeend', html);
			// We insert the load more button at the end of the tricks list
			tricks.insertAdjacentHTML('beforeend', loadMoreButton.outerHTML);
		})
		.catch(function (error) {
			console.log(error);
		});
};
