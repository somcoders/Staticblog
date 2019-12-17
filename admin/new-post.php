<?php include("inc/nav.php"); ?>
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="#">New post</a></li>
              </ul>
            </div> <!--  end of breadcrumbs -->
            
            <div class="col-md-10">
                <div class="col-md-8">
                        <div class="panel panel-body">
                                <div class="form-group">
                                    <label for="usr">Title</label>
                                     <input type="text" class="form-control" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Desc:</label>
                                     <textarea name="desc" rows="10" class="form-control" ></textarea>
                                </div>

                          

                        </div>
                    </div>

                   <div class="col-md-4">
                        <div class="panel panel-body">
                                <div class="form-group">
                                    <label for="sel1">Select Category:</label>
                                    <select class="form-control" id="sel1">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="file"  class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Visible</label>
                                    <label class="radio-inline"><input type="radio" name="visible" checked>Yes</label>
                                    <label class="radio-inline"><input type="radio" name="visible">No</label>
                                </div>
                            </div>
                                
                                <div class="form-group">
                                    <input type="submit" value="Add Post" class="form-control btn-block btn-primary">
                                </div>
                        </div>

                 
             
               

             </div>
            </div> <!--  end of content -->
            

          </div>
        </div>
      </div>
    </div>
<?php include("inc/footer.php"); ?>
