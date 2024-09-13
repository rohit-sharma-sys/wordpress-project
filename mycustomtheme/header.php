<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/208dcfe07a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/new.css">
    <title>Document</title>
</head>
<?php $logoimage = get_header_image(); ?>
<body>
    <div class="container-fluid section_header">
        <div class="container">
            <div class="row header_row">
                <div class="col-md-3 mt">
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img class="header_logo" src="<?php  echo $logoimage;?>">
                </a>
                </div>
                <div class="col-lg-6 px-5 mt-4">
                     <?php wp_nav_menu(
                                 // array('theme_location'=>'primary-menu','menu_class'=>'navbar')

                        ); ?>
                </div>
                <div class=" col-3 contact-button section">
                    <button class="bft_top_button">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
        <hr class="hrr">
        