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


<style type="text/css">
.ui-accordion .ui-accordion-header {
	text-indent: 30px;
	padding: 5px;
}
.box {
	width: 410px;
}
.dashboard-content {
	padding: 10px;
}
h6 {
	margin-bottom: 2px;
}
.progress {
	margin-bottom: 10px;
}
.progress .bar {
	color: #000;
}
</style>

<script src="_assets/js/modernizr-2.6.2.min.js"></script>
<script src="_assets/js/jquery-1.8.3.min.js"></script>
<script src="_assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="_assets/js/bootstrap.min.js"></script>
<script src="_assets/js/jquery.uniform.min.js"></script>
<script>
  $(function() {
    var icons = {
      header: "ui-icon-circle-arrow-e",
      activeHeader: "ui-icon-circle-arrow-s"
    };
    $( ".accordion" ).accordion({
      icons: icons
    });
	
  });
  </script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="span12">
      <header id="header-container" class="inner-wrapper">
        <div class="blue-gradient">
          <hgroup>
            <h1 class="title">PingPong SMS </h1>
            <h2 class="sub-title">&nbsp;-&nbsp;Site Administration</h2>
          </hgroup>
        </div>
        <div class="green-gradient">&nbsp;</div>
      </header>
      
      <div id="main-content" role="main"> 
        
        <!-- content file here -->
        	<section class="dark-box" id="inner-header">
              <div class="row">
                <div class="span7">
                  <div class="dashboard-content">  </div>
                </div>
                <div class="span4">
                  <div class="dashboard-content">
                    <div class="box">
                      <div class="accordion">
                        <h3>Active Visitors</h3>
                        <div>
                          <table style="font-size: 11px;" class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                <td>#</td>
                                <th>asfds</th>
                                <th>last activity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>sdfsdf</td>
                                    <td>5 hours ago</td>
                                </tr>
                            </tbody>
                          </table>
                          <a href="/admin/site/visitors" class="pull-right label label-success" style="color: #fff; padding: 3px;">View All</a>
                        </div>
                        <h3>Featured Movies</h3>
                        <div>
                          <table style="font-size: 11px;" class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                <td>#</td>
                                <th>Title</th>
                                <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>afds</td>
                                    <td>sfsad</td>
                                </tr>
                            </tbody>
                          </table>
                          <a href="/admin/movies" class="pull-right label label-success" style="color: #fff; padding: 3px;">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

        
        <!-- content file ended --> 
        
      </div>
    </div>
  </div>
</div>
</body>
</html>
