<?php
require_once("_assets/config/dbc.php");
if (isset($_POST['is_submit']) && $_POST['is_submit'] == 1 ) {

  $date = $_POST['inputDate'];
  $media = $_POST['dropdownMediaType'];
  $title = $_POST['inputTitle'];
  $slug = $_POST['inputSlug'];
  $code = $_POST['inputEmbedCode'];
  $description = $_POST['inputDescription'];
  $media_img = 'image will come here';
  $status = 'deactive';
  $meta_description = $_POST['inputMetaDescription'];
  $meta_keywords = $_POST['inputMetaKeyword'];
  mysql_query("INSERT INTO itl0_media(create_date, media_type, title, slug, embed_code, description, media_img, media_status, meta_description, meta_keywords)
           VALUES('$date', '$media', '$title', '$slug', '$code', '$description', '$media_img', '$status', '$meta_description', '$meta_keywords') ");

  header("Location:view_media.php");
  
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
                     <label for="dropdownMediaType"><strong>Media Type</strong></label>
                    <select name="dropdownMediaType">
                      <option value="SlideShow">SlideShow</option>
                        <option  value="Gallery">Gallery</option>
                        <option value="Video">Video</option>
                    </select>

                  <div class="control-group">
                    <label for="inputTitle"><strong>Title</strong></label>
                    <input type="text" id="inputTitle" name="inputTitle" placeholder="Title" class="input-xlarge">
                  </div>
                  <div class="control-group">
                    <label for="inputSlug"><strong>Slug</strong></label>
                    <input type="text" id="inputSlug" name="inputSlug" placeholder="Slug" class="input-xlarge" >
                  </div>

                   <div class="control-group">
                    <label for="inputEmbedCode"><strong>Embed Code</strong></label>
                    <textarea id="inputEmbedCode" name="inputEmbedCode" rows="7" class="span5"></textarea>

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
                <label for="inputMetaDescription"><strong>Media Thumbnail:</strong></label>
                <input type="file" name="file" id="file">
              </div>
              
              <div class="control-group">
                <label for="inputMetaDescription"><strong>Meta Description:</strong></label>
                <textarea id="inputMetaDescription" name="inputMetaDescription" rows="7" class="span5"></textarea>
              </div>
              <div class="control-group">
                <label for="inputMetaKeyword"><strong>Meta Keyword:</strong></label>
                <input type="text" id="inputMetaKeyword" name="inputMetaKeyword" placeholder="Meta Keyword" class="span5">
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
