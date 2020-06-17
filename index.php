<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
 <?php
 include 'inc/functions.php'; 
 echo "<div class=\"container\">";
    echo "<div id=\"quote-box\">";
      
      echo "<p class=\"quote\">" . $specific_quote . "</p>"; 
      echo "<p class=\"source\">" . $quoted;

      if (isset($quote_citation)) {
          echo "<span class=\"citation\">" . $quote_citation . "</span>";
      }

      if (isset($quote_year)) { 
          echo "<span class=\year\"></br>" . $quote_year . "</span>";
      }
      
      echo "</p>";

    echo "</div>";
    echo "<button id=\"loadQuote\" onclick=\"window.location.reload(true)\" >Show another quote</button>";
    
  echo "</div>";

  ?>
</body>
</html>