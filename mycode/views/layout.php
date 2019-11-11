<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/backend/layout1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?area=backend&controller=home">Home</a></li>
            <li class="active"><a href="index.php?area=backend&controller=category&action=list_category">Danh mục sản phẩm</a></li>
            <li class="active"><a href="index.php?area=backend&controller=product&action=list_product">Sản phẩm</a></li>
            <li class="active"><a href="index.php?area=backend&controller=user&action=list_user">Quản lý user</a></li>
            <li class="active"><a href="index.php?area=backend&controller=logout">Đăng xuất</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class="container" style="margin-top:70px;">
   	<?php 
        //hien thi view o day
        echo $this->view;
    ?>
   </div>

</body>
</html>