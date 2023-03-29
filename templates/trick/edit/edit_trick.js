let addLinkButton = document.getElementById('add-video-link-button');

let addLinkCounter = 0;
let removeLinkCounter = 0;

function incrementAddLinkCounter() {
	addLinkCounter++;
	return addLinkCounter;
}

function incrementRemoveLinkCounter() {
	removeLinkCounter++;
	return removeLinkCounter;
}

addLinkButton.addEventListener('click', function (e) {
	e.preventDefault();

	let newLink = document.createElement('div');
	newLink.className = 'video__link__added__container';

	let newInput = document.createElement('input');
	newInput.type = 'text';
	newInput.id = 'edit-trick-embed-video-links-' + incrementAddLinkCounter();
	newInput.name = 'edit_trick[embed_video_links][' + incrementAddLinkCounter() + ']';
	newInput.value = '';
	newInput.placeholder = 'https://www.youtube.com/watch?v=xxxxxxxxxxx';
	newInput.className = 'video__link__added';

	let removeLinkButton = document.createElement('button');
	removeLinkButton.type = 'button';
	removeLinkButton.id = 'remove-video-link-button-' + incrementRemoveLinkCounter();
	removeLinkButton.className = 'remove__video__link__button';
	removeLinkButton.innerHTML = 'X';

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
