<?php
  require_once("_assets/config/dbc.php");
  if (isset($_POST['is_submit']) && $_POST['is_submit'] == 1 ) 
  {
    $date = $_POST['inputDate'];
    $title  = $_POST['inputTitle'];
    $slug = $_POST['inputSlug'];
    $brand_id = $_POST['inputBrandName'];
    $code = $_POST['inputCode'];
    $condition = $_POST['inputCondition'];
    $price = $_POST['inputPrice'];
    $description = $_POST['inputDescription'];
    $product_img = 'image will come here';
    $status = 'Deactive';
    $meta_description = $_POST['inputMetaDescription'];
    $meta_keywords = $_POST['inputKeyword'];

  mysql_query("INSERT INTO itl0_product(create_date, title, slug, brand_name, code, product_condition, price, description, product_img, product_status, meta_description, meta_keywords) 
           VALUES('$date', '$title', '$slug', '$brand_name', '$code', '$condition', '$price', '$description', '$product_img', '$status', '$meta_description', '$meta_keywords') ");                                                   


  header("Location:view_product.php");

}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<?php include('_partials/links.php'); ?>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="span12">
          <?php include("_partials/header.php"); ?>
      <?php include("_partials/menu.php"); ?>

      <div id="main-content" role="main"> 
        
        <!-- add reocrd file -->
        <section class="dark-box" id="inner-header">
          <div class="row">
            <div class="span5">
              <h1 class="article-page-title ic-48-article">Add Product</h1>
            </div>
            <div class="span7 omega" id="article-page-toolbar">
              <ul class="article-page-buttons clearfix">
                <li><a href="javascript:;" id="btnSave"><span class="ic-32-save" title="Save"></span>Save</a></li>
                <li><a href="view_product.php" id="btnCancel"><span class="ic-32-cancel" title="Cancel"></span>Cancel</a></li>
              </ul>
            </div>
          </div>
        </section>
        <section class="light-box" id="article-container">
          <article id="article-grid" role="main">
            <form class="form" id="formAdd" name="formAdd" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input type="hidden" name="is_submit" id="is_submit" value="1">
              <div>
              <div class="row">
              <div class="span6">
                <fieldset>
                  <legend>Primary Detail</legend>
                  <div class="control-group">
                    <label for="inputDate"><strong>Date</strong></label>
                    <input type="text" id="inputDate" name="inputDate" placeholder="Date" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputBrandName"><strong>Brand Name</strong></label>
                    <select name="dropdownBrand" id="dropdownBrand">
                      <option value="0">:: SELECT BRAND ::</option>
                      <?php
                          require_once("_assets/config/dbc.php");
                          $getAllBrand = mysql_query("SELECT * FROM itl0_brand WHERE brand_status='Active'");
                          while ($viewAllBrand = mysql_fetch_array($getAllBrand)) {
                     ?>
                      <option value="<?php echo $viewAllBrand['brand_id']; ?>"><?php echo $viewAllBrand['title']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                  <div class="control-group">
                    <label for="inputTitle"><strong>Title</strong></label>
                    <input type="text" id="inputTitle" name="inputTitle" placeholder="Title" class="input-xlarge">
                  </div>
                  <div class="control-group">
                    <label for="inputSlug"><strong>Slug</strong></label>
                    <input type="text" id="inputSlug" name="inputSlug" placeholder="Slug" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputCode"><strong>Code</strong></label>
                    <input type="text" id="inputCode" name="inputCode" placeholder="Code" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputPrice"><strong>Price</strong></label>
                    <input type="text" id="inputPrice" name="inputPrice" placeholder="Price" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputCondition"><strong>Condition</strong></label>
                    <input type="text" id="inputCondition" name="inputCondition" placeholder="Condition" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputDescription"><strong>Description</strong></label>
                  <textarea id="inputDescription" name="inputDescription" rows="7" class="span5"></textarea>
                  </div>
                </fieldset>
              </div>
              <div class="span5">
              <fieldset>
              <legend>Extra Detail</legend>
              <div class="control-group">
                <label for="inputMetaDescription"><strong>Product Thumbnail:</strong></label>
                <input type="file" name="file" id="file">
              </div>
              
              <div class="control-group">
                <label for="inputMetaDescription"><strong>Meta Description:</strong></label>
                <textarea id="inputMetaDescription" name="inputMetaDescription" rows="7" class="span5"></textarea>
              </div>
              <div class="control-group">
                <label for="inputKeyword"><strong>Keyword:</strong></label>
                <input type="text" id="inputKeyword" name="inputKeyword" placeholder="Keyword" class="span5">
              </div>
              
            </form>
          </article>
        </section>
        
        <!-- add record file ended --> 
        
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(e) {
    $("#btnSave").click(function(e) {
      $("#formAdd").submit();
    });
  });  
</script>

</body>
</html>
