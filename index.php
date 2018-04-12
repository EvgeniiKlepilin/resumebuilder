<html>
  <head>
  </head>
  <body>
    <?php
		require "item_classes.php";
		
		$name = "Evgenii Klepilin";
		$email = "email@gmail.com";
		$phone = "+1234567890";
		$address = "Greenland, Icy Pike City, Frozen Street, Igloo 13";
		$links = array("https://github.com/EvgeniiKlepilin", "https://evgeniiklepilin.github.io/resumebuilder/");
		
		$header = new Header($name, $address, $phone, $email, $links);
		$header->printHeader();
    ?>
  </body>
</html>
