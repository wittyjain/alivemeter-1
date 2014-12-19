<nav id="nav" class="nav-primary hidden-xs nav-vertical">
  <ul class="nav" data-spy="affix" data-offset-top="50">
    <li class="active"><a href="#"><i class="icon-dashboard icon-xlarge"></i><span>Dashboard</span></a></li>
   
   
     <li class="dropdown-submenu"> <a href="#"><i class="icon-food icon-xlarge"></i><span>Recipe</span></a>
      <ul class="dropdown-menu">
        <li><a href="add_recipe.php">Add Recipe</a></li>
        <li><a href="view_recipes.php">View Recipes</a></li>
      </ul>
    </li>
	
	<?php if($_SESSION['login_type']!="User"){ ?>
    <li class="dropdown-submenu"> <a href="#"><i class="icon-user icon-xlarge"></i><span>User Management</span></a>
      <ul class="dropdown-menu">
        	<?php if($_SESSION['login_type']=="Admin"){ ?>
        		<li><a href="add_user.php">Add User</a></li>
            <?php } ?>
        <li><a href="view_users.php">View Users</a></li>
      </ul>
    </li>
<?php } ?>	
  
  
  
    
    
  
    
   <li class="dropdown-submenu"> <a href="#"><i class="icon-key icon-xlarge"></i><span>Key Ingredients</span></a>
      <ul class="dropdown-menu">
        <li><a href="add_raw_data.php">Add Key Ingredient</a></li>
        <li><a href="view_raw_data.php">View Key Ingredients</a></li>
      </ul>
    </li>
	
    
  
  </ul>
</nav>
