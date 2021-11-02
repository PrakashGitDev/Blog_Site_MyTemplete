<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Add New Category</h4>
                      </div>
                      <div class="modal-body">

                        <form role="form" method="post" action="../includes/addct.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Category Name</label>
                            <input type="text" name="category-name" class="form-control" id="exampleInputEmail3" placeholder="Category Name">
                          </div>
                          <button type="submit" name="addct" value="add" class="btn btn-primary">Add</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Categories
                <a href="#myModal" data-toggle="modal" class="btn">
                            Add New Category
                                </a>
                
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class=""></i>#</th>
                    <th><i class="icon_calendar"></i> Category</th>
                    <th><i class="icon_document"></i>Total Posts</th>
                    <th><i class="icon_cogs"></i>Total Action</th>
                  </tr>
              <?php
$cat= getallcategory($db);
$count=1;
foreach ($cat as $ct) {

?>
 <tr>
                    <td><?=$count?></td>
                    <td><?=$ct['cat_name']?></td>
                    <td><?php getpostbycat($db,$ct['cat_id']);?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="../includes/removect.php?id=<?=$ct['cat_id']?>"><i class="icon_close_alt2"></i></a>
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

        </div>
        <div>
        <span style="color: red; padding: 20px;"><?php
                if (isset($_SESSION["dltcat"])) {
                  echo $_SESSION["dltcat"];
                  
                } unset($_SESSION["dltcat"]);
                ?>
              </span>
        </div>
