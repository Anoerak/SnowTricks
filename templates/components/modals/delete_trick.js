// We get the html head title
const headTitle = document.head.querySelector('title').innerHTML;

if (headTitle.includes('Home')) {
	// We grab the delete_trick_buttons.
	const deleteTrickButton = document.getElementsByClassName('delete_trick_button');

	// We loop through the delete_trick_buttons and add an event listener on each one..
	for (let i = 0; i < deleteTrickButton.length; i++) {
		deleteTrickButton[i].addEventListener('click', getTrickId);
		function getTrickId() {
			// On click, we display the modal.
			modalManagement();
			// Then we get the trick.id and pass it to the delete_button
			const trickId = deleteTrickButton[i].getAttribute('id');
			document.getElementById('delete_button').setAttribute('data-trick-id', trickId);
		}
	}

	function modalManagement() {
		// we grab the modal and display it as a block.
		let modal = document.getElementById('delete_trick_modal');
		modal.style.display = 'block';

		// We grab the close button and cancel button and add event listener to allow to close the modal.
		let modalCloseButton = document.getElementById('close_modal_button');
		modalCloseButton.addEventListener('click', closeModal);
		let modalCancelButton = document.getElementById('cancel_delete_button');
		modalCancelButton.addEventListener('click', closeModal);

		document.getElementById('delete_button').addEventListener('click', deleteTrick);

		// We grab the window and add an event listener to close the modal if the user clicks outside of it.
		window.addEventListener('click', function (event) {
			if (event.target == modal) {
				modal.style.display = 'none';
			}
		});

		function closeModal() {
			modal.style.display = 'none';
		}

		function deleteTrick() {
			// We grab the trick.id from the delete_button and pass it to the url.
			let trickToDelete = document.getElementById('delete_button').getAttribute('data-trick-id');
			let trickId = parseInt(trickToDelete);
			let url = 'https://127.0.0.1:8000/trick/' + trickId + '/delete';
			// We fetch the url and use the Symfony controller to delete the trick.
			fetch(url)
				.then(function (response) {
					return response.text();
				})
				.then(function (html) {
					// We remove the trick from the tricks list.
					let trick = document.getElementById('trick_' + trickId);
					trick.parentNode.removeChild(trick);
					// We close the modal.
					modal.style.display = 'none';
					// We refresh the page.
					location.reload();
				})
				.catch(function (error) {
					console.log(error);
				});
		}
	}
}
