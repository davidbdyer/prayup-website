const donate = document.querySelector('#nav');
const windowHeight = window.innerHeight;
const bodyHeight = document.body.offsetHeight;
let scrollPos = 0;

window.addEventListener('scroll', () => {
	const windowY = window.scrollY;

	if ((windowY < scrollPos || windowY === 0) && windowY + windowHeight < bodyHeight) {
		donate.classList.contains('nav-active');
		donate.classList.remove('nav-active');
	} else if (windowY + windowHeight > windowHeight) {
		!donate.classList.contains('nav-active');
		donate.classList.add('nav-active');
	}
	scrollPos = windowY;
});
