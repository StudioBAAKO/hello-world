<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>

		<meta name="google-site-verification" content="qytIfXE58wl8zAwtaUwK0E_2ZgoX-SlHyR_sR533ZsQ" />
		<meta name="viewport" content="width=device-width, initial-scale=0.7">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400' rel='stylesheet' type='text/css'>
		<title>Baako</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

		<link rel="shortcut icon" href="favicons/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
		<link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
		<meta name="msapplication-square70x70logo" content="favicons/smalltile.png" />
		<meta name="msapplication-square150x150logo" content="favicons/mediumtile.png" />
		<meta name="msapplication-wide310x150logo" content="favicons/widetile.png" />
		<meta name="msapplication-square310x310logo" content="favicons/largetile.png" />


		<STYLE type="text/css">
			html, body, #wrapper {
			   height:100%;
			   width: 100%;
			   margin: 0;
			   padding: 0;
			   border: 0;
			   background-color: #000;
			}

			<?
			if ($_GET['govind'] == "yes"){
			?>
			html, body, #wrapper {
				background: url('img/animated_background_a2.gif');
			}

			<?
			}
			?>

			
			
			.white{
				color: #fff;
			}

			#subtable{
				width: 400px;
				height: 400px;
				margin: 0 auto;
				font-family: 'Open Sans', sans-serif;
				font-size: 12px;
			}

			td.spacer{
				width: 122px;
				vertical-align: top;
			}

			td.content{
				vertical-align: top;
			}


			.subtitle{
				font-style: italic;
				font-size: 13px;
			}

			a.mail{
				color: #fff;
			}

			img.logo{
				width: 156px;
				height: auto;
			}

 		</STYLE>

 		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-22594146-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

	</head>
	<body>

	<?
	if ($_GET['manuel'] == "COOL"){
	?>
	<div style="position: fixed; bottom: 0px; left: 0px;"><img src="manuel-cool.gif"></div>
	<?
	}
	?>

   	<table id="wrapper">
         	<tr>
         		<td align="center">
         			<table id="subtable" cellpadding="0" cellspacing="0">
         				<tr>
         					<td class="spacer"></td>
         					<td style="height:170px;" class="content"><img class="logo" src="img/logo_baako.png" alt="BAAKO" /></td>
         				</tr>
         				<tr>
         					<td class="spacer"></td>
         					<td class="content">
         						<span class="white subtitle">Established 2003</span>
         						<br /><br /><br />
				        		<span class="white">
				        			Ultra-Nerd Software-Development Stuff<br />
				        			Web and Interaction Design<br />
				        			Visual Communication<br />
									Branding+Corporate Identity<br />
									Product Design<br />								
									Photography<br />
									Strategic Consulting
				        		</span>
         					</td>
         				</tr>
         				<tr>
         					<td class="spacer">
         						<img src="img/arrow.png" />
         					</td>
         					<td class="content">
         						<a class="mail" href="mailto:studio@baako.com">
         							Studio@baako.com
         						</a>
         					</td>
         				</tr>

         			</table>
         		</td>
         	</tr>
   	</table>
	</body>
</html>