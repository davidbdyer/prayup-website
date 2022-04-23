const counter = function() {
	const second = 1000,
		minute = second * 60,
		hour = minute * 60,
		day = hour * 24;
	let prayerWalk = "April 24, 2022 17:30:00",
		countDown = new Date(prayerWalk).getTime(),
		x = setInterval(function() {
			let now = new Date().getTime(),
				distance = countDown - now;
			document.getElementById("days").textContent = Math.floor(distance / (day)),
				document.getElementById("hours").textContent = Math.floor((distance % (day)) / (hour)),
				document.getElementById("minutes").textContent = Math.floor((distance % (hour)) / (minute)),
				document.getElementById("seconds").textContent = Math.floor((distance % (minute)) / second);
			//do something later when date is reached
			if (distance < 0) {
				let headline = document.getElementById("headline"),
					countdown = document.getElementById("countdown"),
					content = document.getElementById("count-content");
				headline.innerText = "It's Prayer Walk Time!";
				countdown.style.display = "none";
				content.style.display = "block";
				clearInterval(x);
			}
			//seconds
		}, 0)
}
counter();