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
              <h1 class="article-page-title ic-48-article">Edit Product Specification</h1>
            </div>
            <div class="span7 omega" id="article-page-toolbar">
              <ul class="article-page-buttons clearfix">
                <li><a href="javascript:;" id="btnSave"><span class="ic-32-save" title="Save"></span>Save</a></li>
                <li><a href="#" id="btnCancel"><span class="ic-32-cancel" title="Cancel"></span>Cancel</a></li>
              </ul>
            </div>
          </div>
        </section>
        <section class="light-box" id="article-container">
          <article id="article-grid" role="main">
            <form class="form" id="formAdd" name="formAdd" method="post" action="">
              <input type="hidden" name="is_submit" id="is_submit" value="1">
              <div>
              <div class="row">
              <div class="span6">
                <fieldset>
                  <legend>Primary Detail</legend>
                  <div class="control-group">
                    <label for="inputProcessorType"><strong>Processor Type</strong></label>
                    <input type="text" id="inputProcessorType" name="inputProcessorType" placeholder="Processor Type" class="input-xlarge">
                  </div>
                  <div class="control-group">
                    <label for="inputProcessorSpeed"><strong>Processor Speed</strong></label>
                    <input type="text" id="inputProcessorSpeed" name="inputProcessorSpeed" placeholder="Processor Speed" class="input-xlarge">
                  </div>
                  <div class="control-group">
                    <label for="inputHardDriveSize"><strong>Hard Drive Size</strong></label>
                    <input type="text" id="inputHardDriveSize" name="inputHardDriveSize" placeholder="Hard Drive Size" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputInstalledRam"><strong>Installed Ram</strong></label>
                    <input type="text" id="inputInstalledRam" name="inputInstalledRam" placeholder="Installed Ram" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputScreenSize"><strong>Screen Size</strong></label>
                    <input type="text" id="inputScreenSize" name="inputScreenSize" placeholder="Screen Size" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputAvailableColor"><strong>Available Color</strong></label>
                    <input type="text" id="inputAvailableColor" name="inputAvailableColor" placeholder="Available Color" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="dropdownBluetooth"><strong>Bluetooth</strong></label>
                  	<select name="dropdownBluetooth">
                    	<option value="YES">YES</option>
                        <option  value="NO">NO</option>
                    </select>
                  </div>
                  <div class="control-group">
                    <label for="dropdownWifi"><strong>Wifi</strong></label>
                  	<select name="dropdownWifi">
                    	<option value="YES">YES</option>
                        <option  value="NO">NO</option>
                    </select>

                  </div>
                  <div class="control-group">
                    <label for="dropdownLan"><strong>Lan</strong></label>
                  	<select name="dropdownLan">
                    	<option value="YES">YES</option>
                        <option  value="NO">NO</option>
                    </select>
                  </div>
                  <div class="control-group">
                    <label for="dropdownModem"><strong>Modem</strong></label>
                  	<select name="dropdownModem">
                    	<option value="YES">YES</option>
                        <option  value="NO" selected>NO</option>
                    </select>
                  </div>
                  <div class="control-group">
                    <label for="dropdownCamera"><strong>Camera</strong></label>
                  	<select name="dropdownCamera">
                    	<option value="YES">YES</option>
                        <option  value="NO">NO</option>
                    </select>
                  </div>
                  
                  
                </fieldset>
              </div>
              <div class="span5">
              
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
