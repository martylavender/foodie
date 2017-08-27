<!DOCTYPE html>
<html>
<head>
  <title>The Cutie Foodie - Home</title>
  <!-- CSS Files -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link href="css/site.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />

<!--     Fonts and icons     -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
</head>
<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Cutie Foodie</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        
      </ul>


      <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
              <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-log-in"></i></a>
      <ul id="login-dd" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
  
                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget password?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="row" style="text-align: center;">
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                    </div>
                 </form>
              </div>
              <hr style="color: white;">
              <div class="bottom text-center">
                <p>Need an account? <a href="#">Sign up here.</a></p>
              </div>
           </div>
        </li>
      </ul>
        </li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i></span></a>
          <ul class="dropdown-menu" role="menu">
                  <li class="dropdown-header">Administration</li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profile</a></li>
                  <li role="presentation" class="divider"></li>
                  <li class="dropdown-header">Recipe Management</li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Recipes</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ingredients</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Tags</a></li>
                  <li role="presentation" class="divider"></li>
                  <li class="dropdown-header">Account Actions</li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
                </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
<div class="jumbotron well parent" style="margin-top: 100px; height: 200px;">
<div class="child" style="padding-left: 25px;">
<h1 style="font-size: 48px;">Welcome back, <strong>Jessica</strong></h1>
</div>
</div>
<div class="col-md-12">
                <ol class="breadcrumb breadcrumb-arrow">
                  <li><a href="#">Home</a></li>
                  <li class="active"><span>Recipes</span></li>
                </ol>
              </div>
              </div>
<div class="container">
<div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Profit!</strong> Your recipe has been added. If you need to make changes to your new recipe, just click on the <strong>'Edit'</strong> button on the right hand side of your recipe's listing.
            </div>
<table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>Title</th>
            <th>Meal Type</th>
            <th>Cook Time</th>
            <th>Tags</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-center">1</td>
            <td>Chicken Marsala</td>
            <td><span class="label label-danger">Dinner</span>&nbsp;</td>
            <td><span class="label label-info">1hr 42min</span>&nbsp;</td>
            <td><span class="label label-default">Poultry</span>&nbsp;<span class="label label-default">Italian</span>&nbsp;</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" title="View Recipe" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-user"></i>
                </button>
                <button type="button" rel="tooltip" title="Edit Recipe" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </button>
                <button type="button" rel="tooltip" title="Remove Recipe" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                </button>
            </td>
        </tr>
                <tr rowspan="6">
            <td class="text-center"></td>
            <td>Italian-American dish made from chicken cutlets, mushrooms, and Marsala wine.</td>

        </tr>
        <tr>
            <td class="text-center">2</td>
            <td>Pizza - Meatlovers</td>
            <td><span class="label label-warning">Lunch</span>&nbsp;<span class="label label-danger">Dinner</span>&nbsp;</td>
            <td><span class="label label-info">15min</span>&nbsp;</td>
            <td><span class="label label-default">Italian</span>&nbsp;<span class="label label-default">Baking</span>&nbsp;</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" title="View Recipe" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-user"></i>
                </button>
                <button type="button" rel="tooltip" title="Edit Recipe" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </button>
                <button type="button" rel="tooltip" title="Remove Recipe" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                </button>
            </td>
        </tr>
                </tr>
                <tr rowspan="6">
            <td class="text-center"></td></td>
            <td>Yeasted flatbread typically topped with tomato sauce and cheese and baked in an oven.</td>
        </tr>
        <tr>
            <td class="text-center">3</td>
            <td>Biscuits and Gravy</td>
            <td><span class="label label-success">Breakfast</span>&nbsp;<span class="label label-danger">Dinner</span>&nbsp;</td>
            <td><span class="label label-info">15min</span>&nbsp;</td>
            <td><span class="label label-default">American</span>&nbsp;<span class="label label-default">Baking</span>&nbsp;</td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" title="View Recipe" class="btn btn-info btn-simple btn-xs">
                    <i class="fa fa-user"></i>
                </button>
                <button type="button" rel="tooltip" title="Edit Recipe" class="btn btn-success btn-simple btn-xs">
                    <i class="fa fa-edit"></i>
                </button>
                <button type="button" rel="tooltip" title="Remove Recipe" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>
                </button>
            </td>
        </tr>
                </tr>
                <tr rowspan="6">
            <td class="text-center"></td></td>
            <td>Soft biscuits covered in either gravy, made with drippings of cooked sausage</td>
        </tr>
    </tbody>
</table>
</div>

      
</body>

<script>
$('[data-toggle="tooltip"]').tooltip();
</script>

<!--   Core JS Files   -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="js/material-kit.js" type="text/javascript"></script>

</html>