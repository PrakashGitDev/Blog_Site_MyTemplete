  

          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Posts
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class=""></i>#</th>
                    <th><i class="icon_calendar"></i>Post Title</th>
                    <th><i class="icon_clock"></i>Created At</th>
                    <th><i class="icon_tags"></i>Post Category</th>
                    <th><i class="icon_cogs"></i>Action</th>
                  </tr>
              <?php
$posts= getposts($db);
$count=1;
foreach ($posts as $post) {

?>
 <tr>
                    <td><?=$count?></td>
                    <td><?=$post['title']?></td>
                    <td><?=date('F jS,Y',strtotime($post["date"]))?></td>
                    <td><?=getcategory($db,$post['cat_id'])?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="../includes/removepost.php?id=<?=$post['id']?>"><i class="icon_close_alt2"></i></a>
                        <a class="btn btn-primary" href="index.php?id=<?=$post['id']?>"><i class="icon_pencil-edit"></i></a>
                      </div>
                    </td>
                  </tr>


<?php
$count++;
}
?>
                </tbody>
              </table>
            </section>
          </div>
          <div>
          <span style="color: red; padding: 20px;"><?php
                if (isset($_SESSION['dltpost'])) {
                  echo $_SESSION['dltpost'];
                  
                } unset($_SESSION['dltpost']);
                ?>
              </span>
          </div>
          
        
