/* 
/* Function for scrolling to content on #news_content 
*/
document.addEventListener('DOMContentLoaded', function () {
	const scrollArrow = document.querySelector('.scroll-down-arrow');

	if (scrollArrow) {
		scrollArrow.addEventListener('click', function () {
			const contentWrapper = document.querySelector('#news_content');
			const offsetTop = contentWrapper.offsetTop;

			// Adjust for fixed headers or margins
			const offsetCorrection = 100;

			window.scrollTo({
				top: offsetTop - offsetCorrection,
				behavior: 'smooth',
			});
		});
	}
});

document.addEventListener('DOMContentLoaded', function () {
	var homeUrl = 'http://starter-dennisk.local/';
	var navbar = document.getElementById('navbar');
	var scrollOffset = 50; // Adjust this value as needed

	if (window.location.href === homeUrl) {
		window.addEventListener('scroll', function () {
			var scrollTop = window.scrollY;

			if (scrollTop > scrollOffset) {
				navbar.classList.add('navbar-scrolled');
			} else {
				navbar.classList.remove('navbar-scrolled');
			}
		});
	} else {
		navbar.classList.add('navbar-scrolled');
	}
});
