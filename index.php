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
				
		$title = "Remote C Programmer in DotIncorp";
		$description = "Developed a module in C that can translate 
			Russian Language into Russian Braille for the Dot Watch. 
			Showed autonomous and independent on-time working style. 
			Researched Braille Standards from trusted Russian sources 
			for the project by establishing contacts with the President 
			of Russian Braille Standard Unification Committee.";
		$startDate = "January 2018";
		$endDate = "April 2018";
		$referenceList = array("Ryan Choi (Research Engineer) / ryan@dotincorp.com /", 
			"Ah-rum Choi (PR & Marketing Manager) / ahrum@dotincorp.com /");
		
		$experience2 = new Experience($title, $description, $startDate, $endDate, $referenceList);
		$experience2->printItem();
		
		$title = "Junior Android Developer at LIVEO WAY";
		$description = "Was involved into development of live-streaming 
			app for Android. Worked closely with the head of development. 
			Got familiar with Scrum workflow and Atlassian products used 
			with it: JIRA, Confluence, BitBucket, and SourceTree. Used 
			technologies: RxJava, Realm DB, Retrofit, ButterKnife, Dagger, 
			okHTTP, GSON, Glide, Lombok.";
		$startDate = "July 2017";
		$endDate = "November 2017";
		$referenceList = array("Kidae Hong (Co-founder & CEO) / kidae@liveo.me / +82-10-6251-8183", 
			"Seoyoung Park (Co-founder & COO) / claire@liveo.me / +82-10-4542-1419",
			"Jinchul Jung (Dev Team Manager) / mario@liveo.me / + 82-10-3302-6700");
		
		$experience3 = new Experience($title, $description, $startDate, $endDate, $referenceList);
		$experience3->printItem();
		
		$title = "Remote Web Developer at Menooing.com";
		$description = "Developed database module for a startup website 
			for food delivery business. Showed high competence in PHP and MySQL. 
			Implemented part of e-Commerce Web Software. Created database for 
			keeping record of orders and further processing of those orders. 
			Created auto-emailing system upon creation of order in Core PHP. 
			Programmed user interface for administrators of the website and 
			the database. Implemented simple Content Management System in PHP 
			and JavaScript. Worked remotely. Researched the development of 
			technology that allowed PHP script invocation triggered on the 
			Gmail incoming messages.";
		$startDate = "June 2015";
		$endDate = "August 2016";
		$referenceList = array("Ricky Kim (tel: 214-531-0553, email: 
			Ricky.kim@menooing.com ), CTO of Menooing.com");
		
		$experience5 = new Experience($title, $description, $startDate, $endDate, $referenceList);
		$experience5->printItem();
		
		$title = "Project Assistant in Handong Global University";
		$description = "Project Assistant for Professor Keum Young Sung, Ph. D, 
			in the Department of Computer Science and Electrical Engineering. 
			Developed mobile software based on Android platform. Mobile application 
			had the ability to communicate with MySQL database located on a 
			remote server. Researched communication between Arduino 
			microcomputer and Android application. ";
		$startDate = "March 2016";
		$endDate = "June 2016";
		$referenceList = array("Prof. Keum Young Sung, Ph. D 
			(tel: 054-260-1371, email: kysung@handong.edu )");
		
		$experience6 = new Experience($title, $description, $startDate, $endDate, $referenceList);
		$experience6->printItem();
		
		$title = "Guidy Android App";
		$description = "Developed an application for Android: 
			city guide social network application. Completely self-driven 
			self-initiated project. Have a partner who helps out on the 
			design part. Complete development: from UI and special 
			features to server side databases and database handling via PHP. 
			Participant of Pohang TechnoPark Contest: city wide contest 
			on projects to enhance wellbeing of Pohang City";
		$startDate = "March 2017";
		$endDate = "June 2017";
		$referenceList = array("PlayStore (beta testing): 
			https://play.google.com/store/apps/details?id=com.noblesolutions.guidy");
		
		$experience4 = new Experience($title, $description, $startDate, $endDate, $referenceList);
		$experience4->printItem();
		
		$title = "ResumeBuilder";
		$description = "Resume One-Page Website builder with CMS in PHP. Created project to demostrate profound knowledge of PHP in OOP concepts.";
		$startDate = "April 2018";
		$endDate = "";
		$referenceList = array("https://github.com/EvgeniiKlepilin", "https://evgeniiklepilin.github.io/resumebuilder/");
		
		$experience1 = new Experience($title, $description, $startDate, $endDate, $referenceList);
		$experience1->printItem();
    ?>
  </body>
</html>
