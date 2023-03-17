// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Home')) {
	console.log('url: ');
	const displayMoreButton = document.getElementById('display-more_button');
	displayMoreButton.addEventListener('click', displayMoreTricks);

	function displayMoreTricks() {
		getMoreTricks(getLastTrickNumber());
	}

	// We get the number of tricks displayed on screen
	function getLastTrickNumber() {
		let tricksArray = document.getElementsByClassName('trick');
		let lastTrickNumber = parseInt(tricksArray.length);
		return lastTrickNumber;
	}

	// We query for more tricks
	function getMoreTricks(lastTrickIndex) {
		let url = 'https://127.0.0.1:8000/load-more-tricks/' + lastTrickIndex;
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
				// We check if there an id 'tricks_count_' + lastTrickIndex in the tricks list
				// If there is no id 'tricks_count_' + lastTrickIndex, it means that there is more tricks to display
				// So we add the load more button
				if (!document.getElementById('tricks_count_' + getLastTrickNumber())) {
					// We insert the load more button at the end of the tricks list
					tricks.insertAdjacentHTML('beforeend', loadMoreButton.outerHTML);
				}
			})
			.catch(function (error) {
				console.log(error);
			});
	}
}
