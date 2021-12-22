<?php include 'includes/header.php';?>
<?php
$post=new query();
$id=$_GET['id'];
$condition_arr=array('id'=>$id);
$result=$post->getData('posts','*',$condition_arr,'','',1);

?>


    <!-- header section ends -->
    <!-- posts section starts  -->

    <section class="container top" id="posts">

        <div class="posts-container">
                <div class="post">
                    <img src="assets/images/<?=$result['0']['img']?>" alt="" class="postimage">
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
                    <span><?php getwithclause($result['0']['cat_id'],'cat_id','categories','cat_name')?></span>
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
                
                <!--
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
    -->

            

        </div>
        </div>
        

       



        <?php include'includes/sidebar.php'; ?>

    </section>

    <!-- posts section ends -->

    <!-- footer section starts  -->

    <?php include 'includes/footer.php'?>

    <!-- footer section ends -->


    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="js/slick.js"></script>
</body>

</html>