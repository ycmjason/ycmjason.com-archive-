<?php
$sections = array(
  "profile" => "Profile",
  "mahjongcalculator" => "Mahjong Calculator",
  "themockingbird" => "The Mockingbird",
  "contacts" => "Contacts"
);
?>
<html>
  <head>
    <meta name="description" content="Jason Yu is a passionate real-life problem solver and musician.">
    <meta name="keywords" content="ycmjason,jason,yu,chun,man,imperial,developer,musician">
    <meta name="author" content="YCM Jason">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Jason Yu</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.7/jquery.fullPage.min.css">

    <link rel="stylesheet" href="./css/index.css">

<?php
foreach($sections as $section => $sectionname){
?>
    <link rel="stylesheet" href="./css/<?=$section?>.css">
<?php
}
?>
    <link href="./favicon.ico" rel="icon" type="image/x-icon" />
  </head>
  <body>
    <div class="cloak">

      <!-- header -->
      <header>
        Jason Yu &copy; <?=gmdate("Y")?> 
      </header>

      <!-- nav -->
      <nav class="hidden-xs hidden-sm">
        <ul>
<?php foreach($sections as $section => $sectionname){ ?>
    <li data-menuanchor="<?=$section?>"><a href="#<?=$section?>"><?=$sectionname?></a></li>
<?php } ?>
        </ul>
      </nav>

      <!-- sections -->
      <div id="fullpage">
<?php foreach($sections as $section => $sectionname){ ?>
          <section class="section <?=$section?>">
            <?php include("sections/".$section.".html");?>
          </section>
<?php } ?>
      </div>


    </div>

    <script>
      //configuration for section templates
      var sections = Object.keys(<?=json_encode($sections)?>);
    </script>

    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.7.7/jquery.fullPage.min.js"></script>

    <script src="js/setup_fullpage.js"></script>
    <script src="js/index.js"></script>

  </body>
</html>
