const donate = document.querySelector('#nav');
let scrollPos = 0;

window.addEventListener('scroll', () => {
	let windowY = window.scrollY;

	if (windowY < scrollPos - 80) {
		donate.classList.contains('nav-active');
		donate.classList.remove('nav-active');
	} else if (windowY > scrollPos && windowY >= 25) {
		!donate.classList.contains('nav-active');
		donate.classList.add('nav-active');
	}
	scrollPos = windowY;
});