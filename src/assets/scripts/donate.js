const donate = document.querySelector('#donate');
let scrollPos = 0;

window.addEventListener('scroll', () => {
	let windowY = window.scrollY;

	if (windowY < scrollPos) {
		donate.classList.contains('donate-active');
		donate.classList.remove('donate-active');
	} else if (windowY > scrollPos && windowY >= 25) {
		!donate.classList.contains('donate-active');
		donate.classList.add('donate-active');
	}
	scrollPos = windowY;
});
