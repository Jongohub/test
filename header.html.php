<!-- tutorial for the purpose of Jongo Hub's Code Reactor Program -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- you can also make a dynamic title that changes depending on the specific page -->
    <title>Document</title> 

<!-- <?php
// Using getting curent page from the adress bar's url
    // Get the current URL
    $currentURL = $_SERVER['REQUEST_URI'];

    // Extract the file name or page name from the URL
    $currentPage = basename(parse_url($currentURL, PHP_URL_PATH), ".php");

    // Define an array of pages where you want the specific CSS file to be included
    $pagesWithSpecificCSS = array("about", "contact"); // Add more pages if needed

    // Check if the current page is in the array and include the corresponding CSS file
    if (in_array($currentPage, $pagesWithSpecificCSS)) {
        echo '<link rel="stylesheet" type="text/css" href="' . $currentPage . '.vcss">';
    }
?> -->


<!-- <?php
// getting current page from file name
    // Get the current file name
    $currentFile = $_SERVER['PHP_SELF'];

    // Extract only the file name without extension and directories
    $currentPage = basename($currentFile, ".php");

    // Define an array of pages where you want the specific CSS file to be included
    $pagesWithSpecificCSS = array("about", "contact", "index"); // Add more pages if needed

    // Check if the current page is in the array and include the corresponding CSS file
    if (in_array($currentPage, $pagesWithSpecificCSS)) {
        echo '<link rel="stylesheet" type="text/css" href="' . $currentPage . '.scss">';
    }
    ?> -->


<?php
// getting current page from file name and also without using an array
    // Get the current file name
    $currentFile = $_SERVER['PHP_SELF']; // $_SERVER['REQUEST_URI'] can also be used hear

    // Extract only the file name without extension and directories
    $currentPage = basename($currentFile, ".php");

    // Define an array of pages where you want the specific CSS file to be included
    // $pagesWithSpecificCSS = array("about", "contact", "index"); 

    // Check if the current page is in the array and include the corresponding CSS file
    if ($currentPage == "index") {
        echo '<link rel="stylesheet" type="text/css" href="index.css">';
    } 
    elseif ($currentPage == "about") {
        echo '<link rel="stylesheet" type="text/css" href="about.css">';
    }

    

    ?>



</head>


<!-- Points to note -->
<!-- 
#Advantages of using $_SERVER['PHP_SELF']:

Simplicity: Using $_SERVER['PHP_SELF'] is straightforward and easy to implement. You only need to extract the current file name from the $_SERVER array, and you can quickly determine the current page.

Suitable for most PHP applications: If your PHP application uses clean URLs (e.g., "example.com/about" instead of "example.com/about.php"), $_SERVER['PHP_SELF'] can work well since the file extension is typically hidden in modern web applications.


#Advantages of using $_SERVER['REQUEST_URI']:

Flexibility: $_SERVER['REQUEST_URI'] provides more flexibility as it contains the entire URL, including any query parameters. This allows you to handle complex URLs and query strings if needed.

Handles non-PHP files: If your application includes non-PHP files (e.g., HTML files), $_SERVER['REQUEST_URI'] will still work correctly, as it doesn't rely on the specific file extension.

Compatibility: $_SERVER['REQUEST_URI'] is more future-proof and can adapt to changes in your URL structure without requiring code modifications.

Choosing the appropriate method depends on your application's specific needs and how URLs are structured. If you have a simple PHP application where clean URLs are used, $_SERVER['PHP_SELF'] might be sufficient and straightforward to use. On the other hand, if your application handles more complex URLs or includes non-PHP files, $_SERVER['REQUEST_URI'] provides more flexibility and compatibility.

Both methods have certain security implications, especially if the URLs are not sanitized properly. Always validate and sanitize user input to prevent potential security vulnerabilities like SQL injection and XSS (cross-site scripting) attacks. Using a framework or library that handles routing can also help ensure a more secure and maintainable approach for URL handling in larger projects. 
-->