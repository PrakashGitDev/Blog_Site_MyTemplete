<?php
require('includes/database.php');
$post=new query();
$id=$_GET['id'];
$condition_arr=array('id'=>$id);
$result=$post->getData('posts','*',$condition_arr,'','',1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Blog Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"><span>Tech</span>Blog</a>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#about">About Me</a>
            <a href="#contact">contact me</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
        </div>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

    </header>

    <!-- header section ends -->
    <!-- posts section starts  -->

    <section class="container top" id="posts">

        <div class="posts-container">
                <div class="post">
                    <img src="assets/images/blog-1.jpg" alt="" class="postimage">
                    <div class="date">
                        <i class="far fa-clock"></i>
                        <span>Posted on <?=date('F jS,Y',strtotime($result['0']['date']))?></span>
                    </div>
                    <h3 class="title"><?=$result['0']['title']?></h3>
                    <p class="text"><?=$result['0']['content']?>
                    </p>

            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>Admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
                </div>
                <h2 class="releted">Releted Posts</h2>
            <div class="posts-container">
            <a href="post.php">
                <div class="post">
                    <img src="assets/images/blog-1.jpg" alt="" class="image">
                    <div class="date">
                        <i class="far fa-clock"></i>
                        <span>1st may, 2021</span>
                    </div>
                    <h3 class="title">blog title goes here</h3>
                    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum
                        numquam,
                        quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam

                    </p>
                
            </a>

            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>Admin</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

            

        </div>
        </div>
        

       



        <div class="sidebar">

            <div class="box" id="about">
                <h3 class="title">about me</h3>
                <div class="about">
                    <img src="images/user.png" alt="">
                    <h3>Prakash Mandal</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, officia.</p>
                    <div class="follow">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>

            <div class="box">
                <h3 class="title">Categories</h3>
                <div class="category">
                    <a href="#"> Information Technology <span>42</span></a>
                    <a href="#"> AI <span>75</span> </a>
                    <a href="#"> Technology <span>22</span> </a>
                    <a href="#"> Smartphones <span>17</span> </a>
                    <a href="#"> Educational <span>48</span> </a>
                    <a href="#"> Cybersecurity <span>32</span> </a>
                    <a href="#"> Science <span>39</span> </a>
                    <a href="#"> Business <span>32</span> </a>
                </div>
            </div>

            <div class="box">
                <h3 class="title">Popular Posts</h3>
                <div class="p-post">
                    <a href="#">
                        <h3>01. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>02. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>03. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                    <a href="#">
                        <h3>04. blog title goes here</h3>
                        <span><i class="far fa-clock"></i>1st may, 2021</span>
                    </a>
                </div>
            </div>

            <div class="box stick">
                <h3 class="title">popular tags</h3>
                <div class="tags">
                    <a href="#">Cyber</a>
                    <a href="#">iphones</a>
                    <a href="#">smartphones</a>
                    <a href="#">engineering</a>
                    <a href="#">design</a>
                    <a href="#">gadgets</a>
                    <a href="#">coding</a>
                    <a href="#">tech</a>
                </div>
            </div>

        </div>

    </section>

    <!-- posts section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>

        <div class="credit">Created By <span>Mr. Prakash Mandal</span> | All Rights Reserved</div>

    </section>

    <!-- footer section ends -->


    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="js/slick.js"></script>
</body>

</html>