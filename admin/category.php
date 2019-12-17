<?php include("inc/nav.php"); ?>
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="#">Categories</a></li>
              </ul>
            </div> <!--  end of breadcrumbs -->
            
            <div class="col-md-12">
                <div class="col-md-4">
                     <div class="panel panel-default">
                        <div class="panel panel-heading">   <p>Add Category</p></div>
                        <div class="panel panel-body">
                                <div class="form-group">
                                    <label for="usr">Category Name:</label>
                                     <input type="text" class="form-control" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Desc:</label>
                                     <textarea name="desc" class="form-control" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Visible</label>
                                    <label class="radio-inline"><input type="radio" name="visible" checked>Yes</label>
                                    <label class="radio-inline"><input type="radio" name="visible">No</label>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Add Category" class="form-control btn-block btn-primary">
                                </div>
                        </div>
                    </div>
                </div>
                  <div class="col-md-8">
                    <div class="panel panel-default">
                    <div class="panel panel-heading">   <p>Categories</p></div>
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
