<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="MadScientist Admin Dashboard">
    <title> Dashboard | MadScientist </title>
	<link rel="icon" href="img/profile.jpg">
	<!--style sheets starts-->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/educate-custon-icon.css">
	<link rel="stylesheet" href="css/morrisjs/morris.css">
	<link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
	<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
	<link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
	<link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
	<link rel="stylesheet" href="css/editor/select2.css">
	<link rel="stylesheet" href="css/editor/datetimepicker.css">
	<link rel="stylesheet" href="css/editor/bootstrap-editable.css">
	<link rel="stylesheet" href="css/editor/x-editor-style.css">
	<link rel="stylesheet" href="css/data-table/bootstrap-table.css">
	<link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--style sheets ends-->
	
	<!--Script starts here-->	
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	<script src="js/data-table/bootstrap-table.js"></script>
	<script src="js/data-table/tableExport.js"></script>
	<script src="js/data-table/data-table-active.js"></script>
	<script src="js/data-table/bootstrap-table-editable.js"></script>
	<script src="js/data-table/bootstrap-editable.js"></script>
	<script src="js/data-table/bootstrap-table-resizable.js"></script>
	<script src="js/data-table/colResizable-1.5.source.js"></script>
	<script src="js/data-table/bootstrap-table-export.js"></script>
	<!--Script ends here-->
   </head>
<body>
  <!--side navigation bar starts-->
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Dashboard</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="index.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="user-accounts-management.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Profiles</span>
       </a>
       <span class="tooltip">Profiles</span>
     </li>
     <li>
       <a href="post-reports.php">
         <i class='bx bxs-report'></i>
         <span class="links_name">Reports</span>
       </a>
       <span class="tooltip">Reports</span>
     </li>
     <li>
       <a href="user-accounts-management.php">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">User Data</span>
       </a>
       <span class="tooltip">User Data</span>
     </li>
     <li>
       <a href="posts-photo.php">
         <i class='bx bx-photo-album' ></i>
         <span class="links_name">Posts</span>
       </a>
       <span class="tooltip">Posts</span>
     </li>
     <li>
       <a href="queries.php">
         <i class='bx bxs-contact' ></i>
         <span class="links_name">Contact</span>
       </a>
       <span class="tooltip">Contact</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Settings</span>
       </a>
       <span class="tooltip">Settings</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="img/profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Manoj</div>
             <div class="job">Super Admin</div>
           </div>
         </div>
		 <a href="#">
         <span><i class='bx bx-log-out' id="log_out" ></i></span>
		 </a>
     </li>
    </ul>
  </div>
  <!--side navigation bar ends-->
  
  <!--all scripts starts here-->
  <script src="js/script.js"></script>
  <!--all scripts ends here-->
</body>
</html>
