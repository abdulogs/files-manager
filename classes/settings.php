<?php
// Set it to true when you will upload this website on cpanel
config::debug(false);

// Set database 
config::DBHost("localhost");
config::DBName("drive", "ewq2v2wz_drive");
config::DBUsername("root", "ewq2v2wz_drive");
config::DBPassword("", "@Lahore@abc*");
config::DBConnect();

// Listing limit
config::DBSetLimit(12);

// Set timezone
config::setTimeZone("Asia/Dubai");

// Set url
config::setUrl("http://localhost/files-manager/");

// set session
config::session(true);
