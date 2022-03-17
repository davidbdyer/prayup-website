const images = [...document.getElementsByClassName('parking-image')];

images.forEach((image) => {
	image.addEventListener('click', function () {
		if (image.getAttribute('style') == null || image.getAttribute('style') == 'transform: translate(0, 0); position: relative; top: 0; left: 0; z-index:0;') {
			image.setAttribute('style', 'transform: translate(-50%, -50%); position: absolute; top: 50%; left: 50%; z-index:1;')
		} else {
			image.setAttribute('style', 'transform: translate(0, 0); position: relative; top: 0; left: 0; z-index:0;')
		}
	})
})