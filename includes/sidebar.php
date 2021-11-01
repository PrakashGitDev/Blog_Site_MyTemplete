<div class="sidebar">
    
            <div class="box">
                <h3 class="title">Categories</h3>
<?php
$categories=new query();
$category=$categories->getData('categories');
foreach ($category as $cat) {
?>

            
                <div class="category">
                    <a href="index.php?cat_id=<?=$cat['cat_id']?>"><?=$cat['cat_name']?> <span><?php 
                        #posts no. according to category
                    countelements($cat['cat_id'],'cat_id','posts');
                    
                    ?>
                    </span></a>
                </div>

<?php } ?>
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

            <div class="box">
                <h3 class="title">Most Searched</h3>
                <div class="tags">
                    <a href="index.php?search=cyber">Cyber</a>
                    <a href="index.php?search=asf">asf</a>
                    <a href="index.php?search=samrtphones">smartphones</a>
                    <a href="index.php?search=engineering">engineering</a>
                    <a href="index.php?search=design">design</a>
                    <a href="index.php?search=gadgets">gadgets</a>
                    <a href="index.php?search=coding">coding</a>
                    <a href="index.php?search=tech">tech</a>
                </div>
            </div>

        </div>