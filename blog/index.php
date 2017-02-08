<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Template</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
   
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   <span class="sr-only">Toggle Navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand">HOME</a>
           </div>
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                 
<!-- This can dynamically pull data from the DB.  This example SELECTS *(ALL) FROM categories.
<?php 

$query = "SELECT * FROM categories";
$select_all_categories_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_all_categories_query)) {
$cat_title = $row['cat_title'];

echo "<li><a href='#'>{$cat_title}</a></li>";
}

?> 
-->
                 
                  <li>
                      <a href="#">ABOUT</a>
                  </li>
                  <li>
                      <a href="#">BLOG</a>
                  </li>
                  <li>
                      <a href="#">CONTACT</a>
                  </li> 
               </ul>
           </div>
       </div>
   </nav>
       <!-- PAGE CONTENT -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
<!-- This dynamically displays post being pulled from the DB 
<?php 
$query = "SELECT * FROM posts";
$select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {
$post_title = $row['post_title'];
$post_author = $row['post_author'];
$post_date = $row['post_date'];
$post_image = $row['post_image'];
$post_content = $row['post_content'];
?>               
-->
                    <h1 class="page-heading">
                        HEADING
                        <small>SECONDARY TEXT</small>
                    </h1>
                    <h2>
                        <a href="#"><?php echo $post_title ?>BLOG TITLE</a>
                    </h2>
                    <p class="lead">
                        by <a href="#"><?php echo $post_author ?>BLOG AUTHOR</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                    <hr>
                    <img width="200" class="img-responsive" src="images/<?php echo $post_image;?>" alt="">
                    <hr>
                    <p><?php echo $post_content ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                    <hr>

<?php } ?>
                </div>
                <!-- COL MD 8 -->
            </div>
            <!-- ROW -->
        </div>
        <!-- PAGE CONTENT -->
    <hr>
    <footer>
        <div class="row">
           <div class="col-lg-3">
               <p>BLOG TEMPLATE <a href="http://www.masayatamegai.com/" target="_blank">www.MasayaTamegai.com</a></p>
           </div>
           <div class="col-lg-9">
               <!-- SOCIAL MEDIA LINKS AND ICONS -->
           </div>
        </div>
    </footer>    
</body>
</html>














