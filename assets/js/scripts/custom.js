/* 
/* Function for scrolling to content on #news_content 
*/
document.addEventListener('DOMContentLoaded', function () {
	const scrollArrow = document.querySelector('.scroll-down-arrow');

	scrollArrow.addEventListener('click', function () {
		const contentWrapper = document.querySelector('#news_content');
		const offsetTop = contentWrapper.offsetTop;

		// Adjust for fixed headers or margins
		const offsetCorrection = 300;

		window.scrollTo({
			top: offsetTop - offsetCorrection,
			behavior: 'smooth',
		});
	});
});

console.log('hello world from custom !');

document.addEventListener('DOMContentLoaded', function () {
	var navbar = document.getElementById('navbar');
	var scrollOffset = 50; // Adjust this value as needed

	window.addEventListener('scroll', function () {
		var scrollTop = window.scrollY;

		if (scrollTop > scrollOffset) {
			navbar.classList.add('navbar-scrolled');
		} else {
			navbar.classList.remove('navbar-scrolled');
		}
	});
});
