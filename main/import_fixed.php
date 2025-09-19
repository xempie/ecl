<?php
echo "Starting improved MySQL to SQLite data import...\n";

$db = new PDO('sqlite:database/database.sqlite');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// First, let's clear existing data (except migrations)
echo "Clearing existing data...\n";
$tables = ['categories', 'member_project', 'member_publication', 'members', 'publications', 'projects', 'news_events', 'contacts', 'users'];

foreach ($tables as $table) {
    try {
        $db->exec("DELETE FROM {$table}");
        echo "Cleared: {$table}\n";
    } catch (Exception $e) {
        echo "Warning: Could not clear {$table} - " . $e->getMessage() . "\n";
    }
}

// Import specific data manually with proper handling
echo "\nImporting data...\n";

// Categories
echo "Importing categories...\n";
$db->exec("INSERT INTO categories VALUES (1,'Virtual Reality','virtual-reality',NULL,'#3b82f6',1,0,'2025-09-04 13:07:47','2025-09-04 19:22:42')");
$db->exec("INSERT INTO categories VALUES (2,'Augmented Reality','augmented-reality',NULL,'#3b82f6',1,0,'2025-09-04 18:56:43','2025-09-04 18:56:43')");

// Members with proper defaults
echo "Importing members...\n";
$db->exec("INSERT INTO members (id,name,slug,title,email,bio,image,lab_location,member_category,position_order,status,social_linkedin,social_email,research_interests,qualifications,achievements,is_featured,created_at,updated_at,social_google_scholar,member_type,organization,university,location,current_position) VALUES
(1,'Ashkan Hayati','ashkan-hayati','PhD Student','ashkan.hayati@unisa.edu.au','Ashkan Hayati is an AI strategy consultant, researcher, and full-stack developer with over 20 years of experience in IT, software engineering, and academic research.','assets/images/team/1757906812.png','adelaide','PhD Student',2,'active','https://www.linkedin.com/in/afhayati/','ashkan.hayati@unisa.edu.au','- Immersive collaboration and VR/AR','- PhD, Computer Science','Completed a PhD in Computer Science at UniSA',0,'2025-09-04 01:48:11','2025-09-14 18:43:02','https://scholar.google.com/citations?user=_jPnCcoAAAAJ','faculty',NULL,NULL,NULL,NULL)");

$db->exec("INSERT INTO members (id,name,slug,title,email,bio,image,lab_location,member_category,position_order,status,is_featured,created_at,updated_at,member_type) VALUES
(2,'Mark Billinghurst','mark-billinghurst','Director','mark.billinghurst@unisa.edu.au','Prof. Mark Billinghurst has a wealth of knowledge and expertise in human-computer interface technology.','assets/images/team/1757027179.png','director','Lab Member',1,'active',1,'2025-09-04 02:03:54','2025-09-04 13:36:19','faculty')");

// Member relationships
echo "Importing member relationships...\n";
$db->exec("INSERT INTO member_project VALUES (1,2,1,1,NULL,'2025-09-14 19:21:06','2025-09-14 21:42:35')");
$db->exec("INSERT INTO member_publication VALUES (1,2,1,1,'2025-09-14 18:59:53','2025-09-14 18:59:53')");
$db->exec("INSERT INTO member_publication VALUES (2,2,2,1,'2025-09-14 19:02:47','2025-09-15 01:15:17')");

echo "\nData import completed successfully!\n";
echo "Imported: categories, members, and relationships\n";
?>