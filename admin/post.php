<?php include("inc/nav.php"); ?>
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="#">Posts</a></li>
              </ul>
            </div> <!--  end of breadcrumbs -->
            
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <div class="panel panel-heading">   
                      <p>Posts <a class="pull-right" href="new-post.php">New Post</a></p></div>
                        <div class="panel panel-body">
                        <table class="table table-bordered table-hovered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Desc</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td>update</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>update</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>update</td>
                                <td>Delete</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                </div>
                </div>
             

             </div>
            </div> <!--  end of content -->
            

          </div>
        </div>
      </div>
    </div>
<?php include("inc/footer.php"); ?>
