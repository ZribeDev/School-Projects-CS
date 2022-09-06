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
				<h1>Projects</h1>
        <a href="index.php"><i class="fa-solid fa-house"></i>Home</a>
				<a href="projects.php"><i class="fa-solid fa-code"></i>Projects</a>
			</div>
		</nav>
		<div class="content">
			<h2>Projects</h2>
      <pre class="code" >
      <?php 
        if (!function_exists('str_contains')) {
        function str_contains(string $haystack, string $needle): bool
        {
            return '' === $needle || false !== strpos($haystack, $needle);
        }
        }
        $path = "scripts";
        
        if ($handle = opendir($path)) {
          while (false !== ($file = readdir($handle))) {
              if ('.' === $file) continue;
              if ('..' === $file) continue;
              if (str_contains($file, ".config")) continue;
              $text = file_get_contents("scripts/".$file);
              $data1 = file_get_contents("scripts/".$file.".config");
              echo "<center style=\"color:white;\">".$data1."</center>";
              echo "<center>
              <p>
              <div class=\"codebox\" class=\"scroll\"><code>".$text."</code>
              </div>
              
              </p>
<a href=\"https://github.com/ZribeDev/School-Project-CS/blob/main/scripts/".$file."\">GitHub</a>
<a href=\"scripts/".$file."\" download>Download</a>
              </center>";
              
          }
          closedir($handle);
        }
      ?>
		</div>
	</body>
</html>