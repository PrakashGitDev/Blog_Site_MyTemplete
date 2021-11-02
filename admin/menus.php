<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Add New Menu</h4>
                      </div>
                      <div class="modal-body">

                        <form role="form" method="post" action="../includes/addmenu.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Menu Name</label>
                           
                            <input type="text" name="menu-name" class="form-control" id="exampleInputEmail3" placeholder="Menu Name" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Menu Link</label>
                            <input type="text" name="menu-link" class="form-control" id="exampleInputEmail3" placeholder="#" required>
                          </div>
                          <button type="submit" name="addmenu" value="add" class="btn btn-primary">Add</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Menus
                <a href="#myModal" data-toggle="modal" class="btn">
                            Add New Menu
                                </a>
                
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class=""></i>#</th>
                    <th><i class="icon_calendar"></i>Parent Menu</th>
                    <th><i class="icon_link"></i>Link</th>
                    <th><i class="icon_cogs"></i>Action</th>
                  </tr>
              <?php
$menus= getmenu($db);
$count=1;
foreach ($menus as $menu) {

?>
 <tr>
                    <td><?=$count?></td>
                    <td><?=$menu['name']?></td>
                    <td><?=$menu['action']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="../includes/removemenu.php?id=<?=$menu['id']?>"><i class="icon_close_alt2"></i></a>
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
        

  <!--Submenu-->    

  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal1" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Add SubMenu Name</h4>
                      </div>
                      <div class="modal-body">

                        <form role="form" method="post" action="../includes/addmenu.php">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Submenu name</label>
                            <input type="text" name="submenu-name" class="form-control" id="exampleInputEmail3" placeholder="Submenu name" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Parentmenu name</label>
                            <select type="text" name="parent-id" class="form-control" id="exampleInputEmail3" placeholder="Submenu name" required>
                              <?php  
                              $menulist= getmenu($db);
                              foreach ($menulist as $allmenu) {
                              ?>
                              <option value=<?=$allmenu['id']?> ><?=$allmenu['name']?></option>
                              <?php
                              }
                              ?>
                              

                            </select> 
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Submenu link</label>
                            <input type="text" name="submenu-link" class="form-control" id="exampleInputEmail3" placeholder="#" required>
                          </div>
                          <button type="submit" name="addsmenu" value="sadd" class="btn btn-primary">Add</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Menus
                <a href="#myModal1" data-toggle="modal" class="btn">
                            Add SubNew Menu
                                </a>
      
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class=""></i>#</th>
                    <th><i class="icon_calendar"></i>Sub Menu</th>
                    <th><i class="icon_link"></i>Link</th>
                    <th><i class="icon_link"></i>Parent Menu</th>
                    <th><i class="icon_cogs"></i>Action</th>
                  </tr>
              <?php
$smenus= getallsubmenu($db);
$count=1;
foreach ($smenus as $smenu) {
$pmenu= getparentmenuname($db,$smenu['parent_menu_id']);
?>
 <tr>
                    <td><?=$count?></td>
                    <td><?=$smenu['name']?></td>
                    <td><?=$smenu['action']?></td>
                    <td><?=$pmenu['name']?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="../includes/removesmenu.php?id=<?=$smenu['id']?>"><i class="icon_close_alt2"></i></a>
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
          <div class="col-lg-12">
          
          <span style="color: red; padding: 20px;"><?php
                if (isset($_SESSION['mdltmenu'])) {
                  echo $_SESSION['mdltmenu'];
                  
                } unset($_SESSION['mdltmenu']);
                ?>
              </span>
          </div>
          

