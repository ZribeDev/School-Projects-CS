<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Skripts</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/2b4733a4e7.js" crossorigin="anonymous"></script>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Skripts</h1>
        <a href="index.php"><i class="fa-solid fa-house"></i>Home</a>
				<a href="skripts.php"><i class="fa-solid fa-code"></i>Skripts</a>
			</div>
		</nav>
		<div class="content">
			<h2>Skripts</h2>
      <pre class="code" >
      <?php 
        $path = "scripts";
        
        if ($handle = opendir($path)) {
          while (false !== ($file = readdir($handle))) {
              if ('.' === $file) continue;
              if ('..' === $file) continue;
              $text = file_get_contents("scripts/".$file);
              echo "
              
              <p>
              <div class=\"codebox\" class=\"scroll\"><code>".$text.";</code>
              </div>
              </p>
              <a href=\"https://github.com/ZribeDev/Skripts/blob/main/scripts/".$file."\">GitHub</a>
              <a href=\"scripts/".$file."\" download>Download</a>
              ";
              
          }
          closedir($handle);
        }
      ?>
		</div>
	</body>
</html>