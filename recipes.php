<!DOCTYPE html>
<html>
<head>
  <title>The Cutie Foodie - Home</title>
  <!-- CSS Files -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="css/site.min.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />

<!--     Fonts and icons     -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


<script src="js/bootstrap.min.js"></script>
<!-- x-editable (bootstrap version) -->
<link href="css/bootstrap-editable.css" rel="stylesheet"/>
<script src="js/jquery.editable.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="js/main.js"></script>

<script>
$.fn.inlineEdit = function (replaceWith, connectWith) {

  $(this).hover(function() {
    $(this).addClass('hover');
  }, function() {
    $(this).removeClass('hover');
  });
  
  $(this).click(function() {
    
    var elem = $(this);
    
    elem.hide();    
    elem.after(replaceWith);
    replaceWith.focus();
        
    replaceWith.blur(function() {
      
      if ($(this).val() != "") {
        connectWith.val($(this).val()).change();
        elem.text($(this).val());
      }
                
      $(this).remove();     
      elem.show();
    });
  });
};
</script>

<style>
input[type="text"] { padding: 0.2em; font-family: Arial; }

/* Inline Edit */
p.hover { background: #fffbe1; }
</style>
  
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
<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#recipeModal">New Recipe</button>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
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
<div class="jumbotron well parent" style="margin-top: px; height: 200px;">
<div class="child" style="padding-left: 25px;">
<h1 style="font-size: 48px;">Your Recipes</h1>
</div>
</div>
<div class="col-md-12">
                <ol class="breadcrumb breadcrumb-arrow">
                  <li><a href="#">Home</a></li>
                  <li class="active"><a href="#">Recipes</a></li>
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
            <td><p>Chicken Marsala</p></td>
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
            <td><p>Pizza - Meatlovers</p></td>
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
            <td><p>Biscuits and Gravy</p></td>
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
<div class="container">
<div class="col-md-12">
                <ul class="pagination pull-right">
                  <li class="active"><a href="#">PREV</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li class="active"><a href="#">NEXT</a></li>
                </ul>
              </div>
              </div>

<!-- Modal -->
<div class="modal fade" id="recipeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">New Recipe</h4>
                  </div>
                  <div class="modal-body">
                    <p>Fill out the information below to add a new recipe</p>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>Title</label>
                        <input type="text" class="form-control" placeholder="Name of your recipe">
                      </div>
                      <div class="col-xs-6">
                        <label>Meal Type</label>
                        <input type="text" class="form-control" placeholder="ex: Breakfast, Dinner">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-6">
                        <label>Cook Time</label>
                        <input type="text" class="form-control" placeholder="ex: 1hr 42min">
                      </div>
                      <div class="col-xs-6">
                        <label>Tags</label>
                        <input type="text" class="form-control" placeholder="ex: Pastry, American">
                      </div>
                    </div>
                    <div class="row">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Create</button>
                  </div>
                </div>
  </div>
</div>
      
</body>

<form>
    <input type="hidden" name="hiddenField" />
</form>


<script type="text/javascript">
var replaceWith = $('<input name="temp" type="text" />'),
    connectWith = $('input[name="hiddenField"]');

$('p').inlineEdit(replaceWith, connectWith);
</script>

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