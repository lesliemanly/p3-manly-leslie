<style type="text/css">

* {
  margin: 0;
  padding: 0;
  border: 0;
}

h1,
h2,
h3,
h4,
h5,
h6,
p {
  font-family: 'Chelsea Market', cursive;
}

header {
	background: #aa4ee0;
	padding: 8px 0;
	position: fixed;
	left: 0;
	right: 0;
}

.title {
  font-size: 18px;
  text-align: center;
}

header nav ul li {
	display: inline;
}

header nav a {
	color: white;
	text-decoration: none;
	font-weight: bold;
	font-size: 18px;
	margin: 0 20px;
}

header nav a:hover {
  color: #ffff00;
}

header nav a:active {
  color: #00ffff
}

.container {
	max-width: 900px;
	margin: 0 auto;
}

footer {
  background-image: url("../images/pawprint.png");
  background-attachment: fixed;
  background-size: cover;
  padding: 200px 0;
}

.follow {
  font-size: 20px;
  font-weight: bolder;
  font-family: 'Chelsea Market', cursive;
  color: white;
  text-align: left;
  margin-left: 10px;
}

.facebook {
  float: left;
  margin-top: -100px;
}

</style>

<header class=" title">
  <h1>Mrs. Manly's Kindergarten Class</h1>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#meet_mrs_manly">Meet Mrs. Manly</a></li>
      <li><a href="#schedule">Schedule</a></li>
      <li><a href="#camp_kinder_in_action">Camp Kinder in Action</a></li>
      <li><a href="#contact-me">Contact Me</a></li>
    </ul>
  </nav>
</header>

	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
		?>
		</ul>

		<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

<footer>
  <div class="socialmedia">
    <a  class="facebook" href="https://www.facebook.com/onalaskaisd/"><img src="images/facebook.png" alt="facebook" title="facebook" /></a>
    <p class="follow"> Follow us on facebook to get the lastest updates on school events!</p>
  </div>
</footer>
