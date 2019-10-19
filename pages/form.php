<?php
	if (!defined("base")) {
 		header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
 		exit;
 	}
echo`<!DOCTYPE HTML>
<html>
	<head>
		<title>ButtHurt Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" link="assets/default.css">
	</head>
	<body>
		<div class="main" id="main">
			<div class="header" id="header"><h1>IRC Butthurt Assessment</h1></div>
				<div class="subheader" id="subheader"><h4><i>[A service provided by the SpotChat Administration]</i></h4></div>
					<div class="content" id="content">
						<form name="form1" class="form" value="form" action="index.php?view=form" method="post">
							Your IRC Nickname: <input type="text" value="Mintbotd" name="nickname" maxlength="20">
							<br /><div class="warning">(If your nick is longer than 20 characters, consider suicide instead)</div><br />
							<table class="table" id="table" border="1">
								<tr><td colspan="3">
									What Emotions where running through your brain upon butthurt?
								</td></tr>
								<tr><td class="td">
									<input type="radio" name="emotions" value="rage">Nerd Rage
								</td><td class="td">
									<input type="radio" name="emotions" value="wah">Wah Wah Wah
								</td><td class="td">
									<input type="radio" name="emotions" value="elitism">Amplified IRC elitism
								</td></tr>
								<tr><td class="td">
									<input type="radio" name="emotions" value="pms">Its THAT time of the month
								</td><td  class="td" colspan="2">
									<input type="radio" name="emotions" value="other"> Other(s) (Specify) <textarea name="emotionso"></textarea>
								</td></tr>
							</table>
							<br /><br />
							What Initially caused you to start acting like such a faggot?<br />
							<div class="list" id="list">
								<input type="checkbox" name="cause[1]" value="banned-retard"> I was banned by someone equally as retarded as I am<br />
								<input type="checkbox" name="cause[2]" value="disgruntled-op">A disgruntled operator SANICK\'d me to a dumb name<br />
								<input type="checkbox" name="cause[3]" value="botnet">I clicked on a link and am now part of a botnet<br />
								<input type="checkbox" name="cause[4]" value="chan-status">Someone removed my channel status and now I feel less important<br />
								<input type="checkbox" name="cause[5]" value="outsmarted">I was outsmarted, but still assume my correct punctioation wins arguments<br />
								<input type="checkbox" name="cause[6]" value="alienated">Things weren\'t going exactly at my pace, so I feel alienated and alone<br />
								<input type="checkbox" name="cause[7]" value="pastebin">My dox were posted on pastebin!<br />
								<input type="checkbox" name="cause[8]" value="pm500">The person I PM\'d 500 times doesn\'t want to talk to me and I don\'t know why<br />
								<input type="checkbox" name="cause[9]" value="ddos">Someone DDoS\'d something of mine<br />
								<input type="checkbox" name="cause[10]" value="funny-failed">Everyone in the channel went quiet after I tried to be funny and failed<br />
								<input type="checkbox" name="cause[11]" value="disagreeing">I simply cannot handle people disagreeing with me<br />
								<input type="checkbox" name="cause[12]" value="grudge">Someone hurt my feelings six months ago and I have held a grudge ever since<br />
								<input type="checkbox" name="cause[13]" value="homosexual">I think I may be a raging Homosexual<br />
								<input type="checkbox" name="cause[14]" value="devnull">O: devnull was mean to me<br />
								<input type="checkbox" name="cause[15]" value="lost-game">I just lost The Game<br />
								<input type="checkbox" name="cause[16]" value="all">ALL OF THE ABOVE<br />
								<input type="checkbox" name="cause[17]" value="other"> Other (describe in detail) <textarea name="causeo" style="width: 300px;"></textarea><br />
							</div>
							<br /><br />
							<table class="table" id="table" border="1">
								<tr><td>
									Explain what should happen in order to quell the Butthurt?
								</td></tr><tr><td class="td">
									I think <textarea name="quell0"></textarea> because I <textarea name="quell1"></textarea> and because <textarea name="quell2"></textarea>, also cocks.
								</td></tr>
							</table>
							<br /><br />
							<input type="submit" name="submit" value="Submit">
						</form>
						<br /><br />
					</div>
				<div class="fwrap" id="fwrap">
			<div class="footer" id="footer">[ <a href="?v=form">New Butthurt</a> | <a href="?v=public">View Butthurts</a> | <a href="?v=private">Admins Only</a> ]</div>
		</div>
		</div>
	</body>
</html>`;
?>