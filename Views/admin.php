<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar-wrapper">
      <div class="sidebar-heading bg-dark border-bottom"><a class="text-decoration-none text-light" href="/admin">Black Market ADMIN</a></div>
      <div class="list-group list-group-flush">
        <div class="text-light d-flex p-5 h2">
          Manager
        </div>
        <button type="button" class="mx-auto mb-3 btn btn-info add-new"  data-toggle="modal" data-target="#addItemModal"><i class="fa fa-plus"></i> Add Item</button>
        <!-- <a href="/admin" class="list-group-item list-group-item-action bg-dark text-light border-top">Dashboard</a> -->
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-light" href="/">User Page <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-light" href="/logout">Logout <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid content-block mt-4">
        <div class="row clearfix">
          
          <div class="col-md-12 table-responsive">
            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
              <thead>
                <tr >
                  <th class="text-center text-light">
                    IP
                  </th>
                  <th class="text-center text-light">
                    USERNAME
                  </th>
                  <th class="text-center text-light">
                    PASSWORD
                  </th>
                  <th class="text-center text-light">
                    CHECK
                  </th>
                  <th class="text-center text-light">
                    PRICE
                  </th>
                  <th class="text-center text-light">
                    
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $items = $_SESSION['items'];
                  // if(count($item) > 0){
                    foreach($items as $item) {
                      
                ?>          
                <tr id='addr0' data-id="0" class="hidden">
                  <td data-name="mail">
                      <input type="text" name='mail0' placeholder='IP' class="form-control bg-dark text-light" value=<?php echo $item->getIP();?>    readonly/>
                  </td>
                  <td data-name="desc">
                      <input type="password" name="desc0" placeholder="UserName" class="form-control bg-dark text-light"  value=<?php echo $item->getUsername();?> readonly></input>
                  </td>
                  <td data-name="desc">
                      <input type="password" name="desc0" placeholder="Password" class="form-control bg-dark text-light"  value=<?php echo $item->getPwd();?> readonly></input>
                  </td>
                  <td data-name="sel">
                    <button name="del0" class='btn btn-primary glyphicon glyphicon-remove row-remove'><span aria-hidden="true" >check</span></button>
                  </td>
                  <td data-name="desc">
                      <input name="desc0" placeholder="price" class="form-control bg-dark text-light"  value=<?php echo $item->getPrice();?> readonly></input>
                  </td>
                  <td data-name="del">
                            <a  href="javascript:void(0);" data-toggle="modal" data-target="#update_modal<?php echo $item->getID()?>" class="edit" title="Edit" ><i class="material-icons">&#xE254;</i></a>

                            <a href="/deleteItem?id=<?php echo $item->getID();?>" onclick="return confirm('Are you sure to delete this user?');"class="delete" title="Delete"> <i class="material-icons">&#xE872;</i> </a>
                  </td>
                </tr>
                <!-- Edit Item Modal -->
                <div class="modal fade" id="update_modal<?php echo $item->getID()?>" tabindex="-1" role="dialog" aria-labelledby="update_modal_title<?php echo $item->getID()?>" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="update_modal_title<?php echo $item->getID()?>">EDIT ITEM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form method="POST" name="updateItem" action="/updateItem">
                      <div class="modal-body">
                        
                        <div class="form-group">
                        
                          <input type="text" class="form-control" id="name" name="updateItem[user_name]" placeholder="UserName" value=<?php echo $item->getUsername();?> />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="password"  name="updateItem[pwd]" placeholder="Password" value=<?php echo $item->getPwd();?> />
                        </div>
                        <div class="form-group">
                          <input type="number" class="form-control" id="price" name="updateItem[price]" placeholder="Price" value=<?php echo $item->getPrice();?> />
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="IP" name="updateItem[IP]" placeholder="IP" value=<?php echo $item->getIP();?> minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$" />
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="hidden" name="updateItem[id]" id="editId" value="<?php echo $item->getID();?>">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Item</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Edit Item Modal -->
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
<!-- Add Item Modal -->
<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD ITEM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" name="additem" action="/additem">
        
      <div class="modal-body">
        <div class="row">
              <div class="form-group col-4">
                <select class="form-control text-light" id="sel1">
                  <option>SMTP</option>
                  <option>...</option>
                  
                </select>
              </div>
              <div class="form-group col-4 ">
                <input type="number" class="form-control text-light" id="price" name="price" value="0" placeholder="Price"/>
              </div>
        </div>
        <!-- <div class="form-group">
          <input type="text" class="form-control" id="name" name="additem[user_name]" placeholder="UserName"/>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="password"  name="additem[pwd]" placeholder="Password"/>
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control" id="IP" name="additem[IP]" placeholder="IP" minlength="7" maxlength="15" size="15" pattern="^((\d{1,2}|1\d\d|2[0-4]\d|25[0-5])\.){3}(\d{1,2}|1\d\d|2[0-4]\d|25[0-5])$"/>
        </div> -->
        <table class="table table-bordered table-hover table-sortable" id="tab_logic">
              <thead>
                <tr >
                  <th class="text-center text-dark">
                    IP
                  </th>
                  <th class="text-center text-dark">
                    USERNAME
                  </th>
                  <th class="text-center text-dark">
                    PASSWORD
                  </th>
                  
                </tr>
              </thead>
              <tbody>       
                <tr class="hidden">
                  <td data-name="IP" class="p-0">
                      <input type="text" name='IP_0' placeholder='IP' class="form-control  text-dark border-0" value="10.10.10.10"    readonly/>
                  </td>
                  <td data-name="desc" class="p-0">
                      <input type="text" name="user_name_0" placeholder="UserName" class="form-control  text-dark border-0"  value="aaa@gamil.com" readonly></input>
                  </td>
                  <td data-name="desc" class="p-0">
                      <input type="text" name="pwd_0" placeholder="Password" class="form-control  text-dark border-0"  value="aaa123" readonly></input>
                  </td>
                </tr>
                <tr class="hidden">
                  <td data-name="mail" class="p-0">
                      <input type="text" name='IP_1' placeholder='IP' class="form-control  text-dark border-0" value="10.10.10.11"    readonly/>
                  </td>
                  <td data-name="desc" class="p-0">
                      <input type="text" name="user_name_1" placeholder="UserName" class="form-control  text-dark border-0"  value="aaa1@gamil.com" readonly></input>
                  </td>
                  <td data-name="desc" class="p-0">
                      <input type="text" name="pwd_1" placeholder="Password" class="form-control  text-dark border-0"  value="aaa1231" readonly></input>
                  </td>
                </tr>
                <tr id='addr0' data-id="0" class="hidden">
                  <td data-name="mail" class="p-0">
                      <input type="text" name='IP_2' placeholder='IP' class="form-control  text-dark border-0" value="10.10.10.12"   readonly/>
                  </td>
                  <td data-name="desc" class="p-0">
                      <input type="text" name="user_name_2" placeholder="UserName" class="form-control  text-dark border-0"  value="aaa2@gamil.com" readonly></input>
                  </td>
                  <td data-name="desc" class="p-0">
                      <input type="text" name="pwd_2" placeholder="Password" class="form-control  text-dark border-0"  value="aaa1232" readonly></input>
                  </td>
                </tr>
              </tbody>
          </table>  
      </div>
      <div class="modal-footer">
        <input type="hidden" name="items_len"  value="3" readonly></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ADD Item</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- End Add Item Modal -->

