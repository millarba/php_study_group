<?php 
	function create_ad() {
		echo "<p class='ad'>This is an annoying ad! This is an annoying ad! This is an annoying ad!";
	}

	$page_title = "Welcome to my website!";
	include("includes/header.html");
	create_ad();

 ?>

 <h1>Content Header</h1>

		<p>This is the start of page specific content. The section, and the corresponding header, will change from one page to the next.</p>

		<p>Page specific content paragraph. If I had something to write it would go here but I can't think of anything that important to put here. Maybe something about my first week of work or my driving adventures during Labor Day weekend. Work fantasy league coming up, that should be fun. Speaking of fun, PHP is a real blast!</p>

<?php 
	create_ad();
	include("includes/footer.html");
?>