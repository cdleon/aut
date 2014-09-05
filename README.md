#AUT
---
Contents

1. [Intro](#intro)
2. [Installation](#install)
3. [DB Config](#db)
4. [Usage](#use)
5. [Example](#ex)

--

###<a name="intro">1. Intro</a>

NOTE: To use only for Venezuela Hoy.

PHP tool to add news articles to your database. Works only with Venezuelan newspapers.

--
###<a name="install">2. Installation</a>

Include  or require aut/aut.php in your workspace.

--
###<a name="db">3.DB Config</a>

Database files where excluded frmo repository. Connect to article table using mysql.

--
###<a name="use">4.Usage</a>

1. Add **Aut::head()** the head section of your html.
Use **Aut::head(false)** if you want to ignore the built in css styles and use your own.
2. Add **Aut::form("return url")** to the body section of your html, wherever you want the form to show up. 
3. Include the *required* **"return url"** where you want the page to redirect back after the process is finished.
4. Add **Aut::footer()** at the bottom of the body section of your html.
5. Fill the form, click submit and start using.

--
###<a name="ex">5. Example</a>

````PHP
<?php 
require_once('aut.php');
?>
<html>
<head>
	<?php  Aut::head(); ?>
</head>
<body>
	<div id="wrapper">
		<?php Aut::form('example_return_url.php'); ?>
	</div>
	<?php Aut::footer(); ?>
</body>
</html>
````
--
Contents

1. [Intro](#intro)
2. [Installation](#install)
3. [DB Config](#db)
4. [Usage](#use)
5. [Example](#ex)

---