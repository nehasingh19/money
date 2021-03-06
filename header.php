<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php get_bloginfo('name');?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri() .'/css/bootstrap.css'; ?>" rel="stylesheet">
<link href="<?php echo get_template_directory_uri().'/css/font-awesome.css'; ?>" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri().'/css/magnific-popup.css'; ?>" rel="stylesheet"/>
    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo get_template_directory_uri().'/css/creative.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

</head>

<body id="page-top">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Income tax</a>
        </div>
        <ul class="nav navbar-nav navbar-right ">
            <li class="active"><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>

        </ul>
    </div>
</nav>





<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>