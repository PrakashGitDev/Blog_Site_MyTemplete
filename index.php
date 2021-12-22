<?php 
include_once 'includes/header.php'; 

$posts=new query();
if (isset($_GET['page'])) {
    $pg= $_GET['page'];
 }else{
    $pg=1;
}
$post_per_page = '5';
if ($pg>1) {
    $start = ($pg-1)*$post_per_page;
}else{
    $start = '0';
}


if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $cond_ar = array('title' => $keyword);
    $result=$posts->search('posts','*',$cond_ar,'id','desc',$start,$post_per_page);
    $search_total = $posts->getData('posts','*',$cond_ar,'id','desc');
    $res_count = count($search_total);
}else {
    $totalp=$posts->getData('posts','*','','id','desc');
    $res_count = count($totalp);
    $result=$posts->getData('posts','*','','id','desc',$start,$post_per_page);
    
}

?>

    <!-- banner section starts  -->
    <br><br><br>
    <section class="banner" id="banner">
        <div class="slider_wrapper">
            <div class="slider_inner">
                <div class="slide_holder">
                    <div class="slide_inner">
                        <img src="" alt="">
                        <div class="slide_content">
                            <div class="content">
                                <h3>Explore the World Of Technology</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, laboriosam?</p>
                                <a href="#" class="btn">My Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide_holder">
                    <div class="slide_inner">
                        <img src="" alt="">
                        <div class="slide_content">
                            <div class="content">
                                <h3>Explore the World Of Technology</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, laboriosam?</p>
                                <a href="#" class="btn">My Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide_holder">
                    <div class="slide_inner">
                        <img src="" alt="">
                        <div class="slide_content">
                            <div class="content">
                                <h3>Explore the World Of Technology</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, laboriosam?</p>
                                <a href="#" class="btn">My Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- banner section ends -->

    <!-- posts section starts  -->

    <section class="container" id="posts">
<?php
if (isset($_GET['cat_id'])) { 
    $categorized=new query();
    $cat_arr=array(
        'cat_id' => $_GET['cat_id']);
    if (isset($_GET['search']) && isset($_GET['cat_id'])) {
        $cat_arr=array(
            'title' => $keyword,
            'cat_id' => $_GET['cat_id']);
        $categorized_posts=$categorized->search('posts','*',$cat_arr,'','desc',$start,$post_per_page);
    }else{
        $categorized_posts=$categorized->getData('posts','*',$cat_arr,'','desc',$start,$post_per_page);
    }
    $cat_posts=$categorized->getData('posts','*',$cat_arr);
    if (isset($cat_posts['0'])){
        $cat_counts = count($cat_posts);
    }else{
        $cat_counts = 1;
    }
    
    if (isset($categorized_posts['0'])) {
        $id=1;
        ?><div class="posts-container nested"><?php
        foreach($categorized_posts as $list){
?>
        
            <div class="post">
                <a href="post.php?id=<?=$list['id']?>">
                    <img src="assets/images/<?=$list['img']?>" alt="" class="image">
                    <div class="date">
                        <i class="far fa-clock"></i>
                        <span>Posted on <?=date('F jS,Y',strtotime($list["date"]))?></span>
                    </div>
                    <h3 class="title"><?=$list['title']?></h3>
                    <p class="text"><?=$list['excerpt']?></p>
                </a>

                <div class="links">
                    <a href="#" class="user">
                        <i class="far fa-category"></i>
                        <span><?php getwithclause($list['cat_id'],'cat_id','categories','cat_name')?></span>
                    </a>
                    <a href="#" class="icon">
                        <i class="far fa-comment"></i>
                        <span>(45)</span>
                    </a>
                    
                </div>
            </div>

<?php 
        $id++;
        } 
    }else{ ?>


            <div>
                <h3>No Posts Available</h3>
            </div>
        

<?php } ?></div> <?php
}else{
?>
        <div class="posts-container nested">
<?php
if(isset($result['0'])){
    $id=1;  
    foreach($result as $list){
?>
            <div class="post">
                <a href="post.php?id=<?=$list['id']?>">
                    <img src="assets/images/<?=$list['img']?>" alt="" class="image">
                    <div class="date">
                        <i class="far fa-clock"></i>
                        <span>Posted on <?=date('F jS,Y',strtotime($list["date"]))?></span>
                    </div>
                    <h3 class="title"><?=$list['title']?></h3>
                    <p class="text"><?=$list['excerpt']?></p>
                </a>

                <div class="links">
                    <a href="#" class="user">
                        <i class="far fa-tag"></i>
                        <span><?php getwithclause($list['cat_id'],'cat_id','categories','cat_name')?></span>
                    </a>
                    <a href="#" class="icon">
                        <i class="far fa-comment"></i>
                        <span>(45)</span>
                    </a>
                    
                </div>
            </div>
<?php
    $id++;
    } 
} else {?>

            <div>
                <h3>No Posts Available</h3>
            </div>
                  
<?php } 
} ?>
        </div>

            <?php include 'includes/sidebar.php';?>
    
        <?php 
    if (isset($_GET['cat_id'])) {
        $count = $cat_counts;
    }else{
        $count = $res_count;
    }
    $total_posts = $count;
    $total_pages= ceil($total_posts/$post_per_page);
    ?>

        <nav aria-label="Page navigation example">
    <?php
    if ($pg==1) {
    $switch="disable";
    $plink = "page-link";
    }else{
    $switch = "";
    $plink = "";
    }
    if ($pg==$total_pages) {
    $nswitch = "disable";
    $nlink = "page-link";
    }else{
    $nswitch = "";
    $nlink = "";
    }
    ?>
 
        <nav class="pagination">
            <ul>
            <li class="numb <?=$switch?>">
                <a class="<?=$plink?>" href="?<?php if (isset($_GET['search'])) { echo "search=$keyword&"; } ?>page=<?=$pg-1?>" tabindex="-1" aria-disabled="true"><span><i class="fas fa-angle-left">Prev</i></span></a>
            </li>
            <?php
            for ($lpage=1; $lpage<=$total_pages ; $lpage++) {
                if ($pg==$lpage) {
                    $active= 'active';
                }else{
                    $active= '';
                }
                ?>
                <li class="numb <?=$active?>"><a href="?<?php if (isset($_GET['search'])) { echo "search=$keyword&"; } ?>page=<?=$lpage?>"><?=$lpage?></a></li>
                <?php
            }
            ?>
            <li class="numb <?=$nswitch?>">
                <a class="<?=$nlink?>" href="?<?php if (isset($_GET['search'])) { echo "search=$keyword&"; } ?>page=<?=$pg+1?>"><span>Next<i class="fas fa-angle-right"></i></span></a>
            </li>
            </ul>
        </nav>

        
    <!-- posts section ends -->

    </section>

    <?php include 'includes/footer.php';?>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="js/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</body>

</html>