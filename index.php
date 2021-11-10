<?php include( "dbconnect.php" ); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include( "inc_header.php" );
include( "inc_nav.php" ); ?>
<section id="content">
    
    <?php
    echo "<h2>Welcome to The Advice Shop </h2>";
    echo "<p><strong>You need advice. We provide it</strong>.</p>";
    Echo "<p>These days, it's impossible to <em>really</em> succeed on your own with the complexity
    and fast pace of the modern world. Let us help you go beyond your current limits and experience the next level of success!</p>";
    ECHO "<p>We specialise in providing advice. We've got <strong>great</strong> opinions, tips, suggestions and all kinds of advice for any
    situation. </p>";
    echo "<p><a href='subscribe.php'>Subscribe now to our professional advice service.</a></p>";
    echo "<h3>Services</h3>";
    ?>
    <?php
    echo "<p><img src='images/womanHeadset.jpg' alt='' width='310' height='200'
    class='rightImage'/>For all advice related to:</p>";
    ?>
    <?php
    $services = array("Learning", "Relationships", "Technology", "Coffee", "and so much more...");
    foreach ($services as $service) {
        echo "<ul>";
        echo "<li>$service</li>";
        echo "</ul>";
    }
    ?>

</section>
<?php include("inc_footer.php"); ?>
</body>
</html>
