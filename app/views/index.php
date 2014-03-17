<!DOCTYPE html>
<html ng-app="questack">

  <head>
    <title>New Page</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="style/style.css" type="text/css" />
    <link rel="stylesheet" href="http://i.icomoon.io/public/15d6f399cd/UntitledProject1/style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,700,600' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <div class="container">
      <div class="side-board">
        <div class="side-board-header">
          <span>Moo</span>
            
          </div>
        <div class="sideboard-content"></div>
      </div>
      <div class="modules-container">
        <div id="topbar" class="control-bar">
          <button ng-click="showMenu()" href="#" class="icon-menu toggleSideBar"></button>
          <div class="center-box">
            <input type="text" placeholder="find a module" class="que-input" />
          </div>
        </div>
        <div class="filter-bar">
          <ul>
            <li><a href="#">All</a></li>
            <li><a href="#">Education</a></li>
            <li><a href="#">Health Care</a></li>
            <li><a href="#">Retail</a></li>
            <li><a href="#">Food and Nutrition</a></li>
            <li><a href="#">Recreation</a></li>
          </ul>
        </div>
        <div class="content-view" ui-view="">
          <que-loader></que-loader>
        </div>
      </div>
    </div>
    <script data-require="jquery@2.0.3" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="angular.js@1.2.13" data-semver="1.2.13" src="http://code.angularjs.org/1.2.13/angular.js"></script>
    <script data-require="ui-router@0.2.8" data-semver="0.2.8" src="http://angular-ui.github.io/ui-router/release/angular-ui-router.js"></script>
    <script src="scripts/app.js"></script>
  </body>

</html>
