<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Blog|Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Add custom CSS here -->
    <link href="assets/css/sidebar.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-glyphicons.css" rel="stylesheet" />
      <style>
          .form-control,
          .table,
          .panel,
          .panel-body,
          .panel-heading,
          {
            border-radius:0 !important;
          }
      </style>
  </head>

  <body>
    <!-- Sidebar -->
    <div id="wrapper">
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="#">Welcome Admin</a></li>
          <li>
            <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
          </li>
          <li>
            <a href="category.php"><i class="fa fa-list"></i> Categories</a>
          </li>
          <li>
            <a href="post.php"><i class="fa fa-pencil"></i> Posts</a>
          </li>
          <li>
            <a href="user.php"><i class="fa fa-user"></i> Users</a>
          </li>
          <li>
            <a href="setting.php"><i class="fa fa-cog"></i> Settings</a>
          </li>
          <li>
            <a href="logout.php"><i class="fa fa-arrow-right"></i> Logout</a>
          </li>
        </ul>
      </div>

      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="content-header">
          <h1>
            <a id="menu-toggle" href="#" class="btn btn-default"
              ><i class="fa fa-reorder"></i
            ></a>
            Welcome to somcodersblog Dashaboard
          </h1>
        </div>