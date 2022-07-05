<?php include 'assets/scripts/database.php'; ?>
<?php
	$sql = 'SELECT * FROM prayer_requests';
	$query = mysqli_query($conn, $sql);
	$prayerRequests = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<?php
	$title = 'Pray Up';
	$metaDescription = "Pray Up's mission is to bring people together through the power of prayer. We host interdenominational city-wide prayer walks and communal worship, bringing unity to the body of Christ. We will soon be available as an online platform to make a global impact.";
?>
<!DOCTYPE html>
<html lang="en"> <?php include 'partials/head.php'; ?>

<body>
	<header class="hero-home" id="hero-home">
		<img src="assets/images/pu-header-logo-vert.svg" alt="pray up logo" />
	</header>
	<div class="grid-three-fourths">
		<div>
			<!-- events -->
			<section>
				<h2>Events</h2>
				<h3 class="after-hr">Weekly</h3>
				<ul class="grid grid-list">
					<li>
						<a href="https://theriver.cc" target="_blank" rel="noopener noreferrer">
							<img src="assets/images/logo-river.png" alt="The River Church, Marion IN" />
						</a>
						<div>
							<p>Sun: 7:30a - 8:45a</p>
						</div>
					</li>
					<li>
						<a href="http://eastgatecc.net" target="_blank" rel="noopener noreferrer">
							<img src="assets/images/logo-eastgate.png" alt="Eastgate, Marion IN" />
						</a>
						<div>
							<p>Sun: 10:00a - 10:30a</p>
						</div>
					</li>
				</ul>
			</section>
			<!-- What is Pray Up Section -->
			<section>
				<h2>What is Pray Up?</h2>
				<p> Pray Up is a prayer movement about increasing our prayer life and witnessing the power prayer has to change a personal situation, a mental setting, or a physical environment. The campaign starts in cities, then moves to states, and will be available as an online platform to make a global impact. If you see the <em>Pray Up logo</em>, take it as a reminder; more than ever, we live in a time that prayer is needed. Local churches in Marion, Indiana, are coming together in <em>“Pray Up Teams”</em> because they see the effects of Pray Up’s vision and still believe in the power of prayer. Pray Up is currently enrolled in Elevate Ventures to raise capital for the development of the fully functional app. </p>
			</section>
			<!-- Us Section -->
			<section>
				<h2>Us</h2>
				<ul class="grid grid-list">
					<li>
						<img class="profile-pic" src="assets/images/joseph.jpg" alt="joseph madigan" />
						<div>
							<h4>Joseph Madigan</h4>
							<p>Creator of Pray Up</p>
						</div>
					</li>
					<li>
						<img class="profile-pic" src="assets/images/david.jpg" alt="david dyer" />
						<div>
							<h4>David Dyer</h4>
							<p>Director of Technology</p>
						</div>
					</li>
					<li>
						<img class="profile-pic" src="assets/images/keggy-baer.jpg" alt="keggy baer" />
						<div>
							<h4>Keggy Baer</h4>
							<p>Advisor</p>
						</div>
					</li>
				</ul>
			</section>
			<!-- include contact form --> <?php include 'partials/contact.php'; ?>
		</div>
		<section class="feed">
			<h2>Prayer Requests</h2>
			<button class="btn">Make Request</button>
			<ul>
				<?php foreach($prayerRequests as $prayerRequest): ?>
				<li>
					<?php echo '-'.$prayerRequest['request_title']; ?>
					<?php endforeach; ?>
				</li>
			</ul>
		</section>
	</div>

	<!-- include footer-->
	<?php include 'partials/footer.php'; ?>
	<!-- bottom popup nav -->
	<?php include 'partials/nav.php'; ?>

</body>

</html>