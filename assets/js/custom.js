/* 
/* Function for scrolling to content on #news_content 
*/
document.addEventListener('DOMContentLoaded', function () {
	const scrollArrow = document.querySelector('.scroll-down-arrow');

	scrollArrow.addEventListener('click', function () {
		const contentWrapper = document.querySelector('#news_content');
		const offsetTop = contentWrapper.offsetTop;

		window.scrollTo({
			top: offsetTop,
			behavior: 'smooth',
		});
	});
});
