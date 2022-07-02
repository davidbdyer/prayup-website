<?php $currentPage =	basename($_SERVER['PHP_SELF'], ".php"); ?>

<nav class="border-top nav" id="nav">
	<?php if ($currentPage != 'partner') { ?>
		<a tabindex="0" class="btn" href="partner.php">Donate</a>
	<?php } ?>

	<?php if ($currentPage != 'index') { ?>
		<a tabindex="0" class="btn" href="./">Home</a>
	<?php } ?>

	<a tabindex="0" class="btn" href="https://prayuplife.com/store">Store</a>
</nav>