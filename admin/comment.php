          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Posts
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class=""></i>#</th>
                    <th><i class="icon_calendar"></i>User</th>
                    <th><i class="icon_clock"></i>Commented At</th>
                    <th><i class="icon_tags"></i>Post</th>
                    <th><i class="icon_cogs"></i>Action</th>
                  </tr>
              <?php
$posts= getcomments($db);
$count=1;
foreach ($posts as $post) {
 $nm=getpostbyid($db,$post['post_id']);
?>
 <tr>
                    <td><?=$count?></td>
                    <td><?=$post['name']?></td>
                    <td><?=$post['created_at']?></td>
                    <td><?php
                   
                    foreach ($nm as $poste) {
                      echo $poste['title'];
                    }

                    ?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="../includes/removepost.php?id=<?=$post['id']?>"><i class="icon_close_alt2"></i></a>
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
          <span style="color: red; padding: 20px;"><?php
                if (isset($_SESSION['dltpost'])) {
                  echo $_SESSION['dltpost'];
                  
                } unset($_SESSION['dltpost']);
                ?>
              </span>
          </div>
          
        
