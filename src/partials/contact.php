<section class="border mb-2 contact_form">
	<h2>Start a Pray Up Team At Your Church</h2>

	<form id="mailinglist" action="assets/scripts/mail.php" method="POST">
		<label class="sr-only" for="name">name</label>
		<input
			type="text"
			id="name"
			name="name"
			minlength="2"
			maxlength="20"
			placeholder="name"
			required
		/>

		<label class="sr-only" for="email">email</label>
		<input
			type="email"
			id="email"
			name="email"
			minlength="2"
			maxlength="50"
			placeholder="email"
			required
		/>

		<label class="sr-only" for="message">message</label>
		<textarea
			name="message"
			id="message"
			minlength="200"
			rows="5"
			placeholder="message"
			required></textarea>

		<input type="text" id="website" name="website"/>

		<button class="btn">Submit</button>
	</form>
</section>