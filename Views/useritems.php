<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar-wrapper">
      <div class="sidebar-heading bg-dark border-bottom"><a class="text-decoration-none text-light" href="/">Black Market</a></div>
      <div class="list-group list-group-flush">
        <div class="text-light d-flex p-5 h2">
          Balance<br>
          0.000
        </div>
        <a href="/" class="list-group-item list-group-item-action bg-dark text-light border-top">Smtp</a>
        <a href="/" class="list-group-item list-group-item-action bg-dark text-light border-top">Daling Account</a>
        <a href="/getPurchases?<?php $_SESSION["user_id"]?>" class="list-group-item list-group-item-action bg-dark text-light border-top border-bottom">My Items</a>
      </div>
      <div class=" mt-4">
        <a href="/" class="list-group-item list-group-item-action text-light bg-dark">Deposit</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
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
                 
                </tr>
              </thead>
              <tbody>
                <?php 
                  $items = $_SESSION['purchase_items'];
                  // if(count($item) > 0){
                    foreach($items as $item) {
                      
                ?> 
                  <tr id='addr0' data-id="0" class="hidden">
                  <td data-name="mail">
                      <input type="text" name='mail0' placeholder='IP' class="form-control bg-dark text-light" value=<?php echo $item->getIP();?>  readonly/>
                  </td>
                  <td data-name="desc">
                      <input name="desc0" placeholder="UserName" class="form-control bg-dark text-light" value=<?php echo $item->getUsername();?> readonly></input>
                  </td>
                  <td data-name="desc">
                      <input name="desc0" placeholder="Password" class="form-control bg-dark text-light" value=<?php echo $item->getPwd();?> readonly></input>
                  </td>
                  <td data-name="sel">
                    <button name="del0" class='btn btn-primary glyphicon glyphicon-remove row-remove'><span aria-hidden="true" >check</span></button>
                  </td>
                  <td data-name="desc">
                      <input name="desc0" placeholder="price" class="form-control bg-dark text-light" value=<?php echo $item->getPrice();?>  readonly></input>
                  </td>
                  
                </tr>
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