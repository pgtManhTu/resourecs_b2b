// SIDEBAR - SIDE MENU TOGGLE
document.addEventListener("DOMContentLoaded", function () {
	const menuItems = document.querySelectorAll('.has-sub');

	menuItems.forEach(item => {
		const span = item.querySelector('span');

		if (span) {
			span.addEventListener('click', function (event) {
				// Toggle the 'show' class on the parent 'li'
				item.classList.toggle('show');

				// Toggle the max-height to slide the submenu
				const submenu = item.querySelector('.submenu');
				const computedStyle = window.getComputedStyle(submenu);
				const isCurrentlyVisible = computedStyle.maxHeight !== '0px';

				if (isCurrentlyVisible) {
					// When closing, set max-height to a specific value for immediate change
					submenu.style.maxHeight = '1px';
					setTimeout(() => {
						submenu.style.maxHeight = '0';
					}, 10); // Add a slight delay for smooth transition
				} else {
					submenu.style.maxHeight = submenu.scrollHeight + 'px';
				}
			});
		}
	});
});
