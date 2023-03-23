// We select the elements we need.
let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler');
let dropdownIsOpen = false;

// We handle dropdown menus
if (dropdowns.length) {
	dropdowns.forEach((dropdown) => {
		dropdown.addEventListener('click', (event) => {
			let target = document.querySelector(`#${event.target.dataset.dropdown}`);

			if (target) {
				if (target.classList.contains('show')) {
					target.classList.remove('show');
					dropdownIsOpen = false;
				} else {
					target.classList.add('show');
					dropdownIsOpen = true;
				}
			}
		});
	});
}

// We add an event listener to the window to close the dropdowns when the user clicks outside of them.
window.addEventListener('mouseup', (event) => {
	if (dropdownIsOpen) {
		dropdowns.forEach((dropdownButton) => {
			let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`);
			let targetIsDropdown = dropdown == event.target;

			if (dropdownButton == event.target) {
				return;
			}

			if (!targetIsDropdown && !dropdown.contains(event.target)) {
				dropdown.classList.remove('show');
			}
		});
	}
});

// We handle small screens
function handleSmallScreens() {
	document.querySelector('.navbar-toggler').addEventListener('click', () => {
		let navbarMenu = document.querySelector('.navbar-menu');

		if (!navbarMenu.classList.contains('active')) {
			navbarMenu.classList.add('active');
		} else {
			navbarMenu.classList.remove('active');
		}
	});
}

handleSmallScreens();
