// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Edit') || headTitle.includes('New')) {
	// We define a variable based on the page title.
	let page = headTitle.includes('Edit') ? 'edit' : 'add';
	// We grab the button to add input fields
	let addLinkButton = document.getElementById('add-video-link-button');
	// We define two counters for the input fields and the remove button associate with it
	let addLinkCounter = 0;
	let removeLinkCounter = 0;
	// We write functions to increment those counter
	function incrementAddLinkCounter() {
		addLinkCounter++;
		return addLinkCounter;
	}
	function incrementRemoveLinkCounter() {
		removeLinkCounter++;
		return removeLinkCounter;
	}
	// We had EventListener the button to add input fields
	addLinkButton.addEventListener('click', function (e) {
		e.preventDefault();
		// We increment the link counter of 1
		let linkCounter = incrementAddLinkCounter();
		// We create the new div for the input field element and its button
		let newLink = document.createElement('div');
		newLink.className = 'video__link__added__container';
		// We create the input field
		let newInput = document.createElement('input');
		newInput.type = 'text';
		newInput.id = page + '-trick-embed-video-links-' + linkCounter;
		newInput.name = page + '_trick[embed_video_links][' + linkCounter + ']';
		newInput.value = '';
		newInput.placeholder = 'https://www.youtube.com/watch?v=xxxxxxxxxxx';
		newInput.className = 'video__link__added';
		// We create the remove button
		let removeLinkButton = document.createElement('button');
		removeLinkButton.type = 'button';
		removeLinkButton.id = 'remove-video-link-button-' + incrementRemoveLinkCounter();
		removeLinkButton.className = 'remove__video__link__button';
		removeLinkButton.innerHTML = 'X';
		// We had everything to the DOM
		newLink.appendChild(newInput);
		newLink.appendChild(removeLinkButton);
		let linkContainer = document.getElementById('add-video-links');
		linkContainer.appendChild(newLink);
		// We add event listeners to the buttons and add logic to remove the selected link
		let removeLinkButtons = document.getElementsByClassName('remove__video__link__button');
		for (let i = 0; i < removeLinkButtons.length; i++) {
			removeLinkButtons[i].addEventListener('click', function (e) {
				e.preventDefault();
				let linkToRemove = this.parentNode;
				linkToRemove.remove();
			});
		}
	});
}
