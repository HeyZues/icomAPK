
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>ICOM Ingenieria y Construcción</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimal-ui" />
  <meta name="apple-mobile-web-app-status-bar-style" content="yes" />
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="dist/css/mobile-angular-ui-hover.css" />
  <link rel="stylesheet" href="dist/css/mobile-angular-ui-base.css" />
  <link rel="stylesheet" href="dist/css/mobile-angular-ui-desktop.less" />
  <link rel="stylesheet" href="demo.css" />
  <link rel="stylesheet" href="dist/css/navbar.css" />
  <script src="dist/js/angular.min.js"></script>
  <script src="dist/js/angular-route.min.js"></script>
  <script src="dist/js/mobile-angular-ui.min.js"></script>
  <!-- Required to use $touch, $swipe, $drag and $translate services -->
  <script src="dist/js/mobile-angular-ui.gestures.min.js"></script>
  <script src="Controllers/mainCtrl.js"></script>
  <script type="text/javascript" src="http://debug.build.phonegap.com/target/target-script-min.js#f9fbe82a-6eac-11e4-898d-66c79c5837e1"></script>

</head>
<style>


</style>
<!--
  <body ng-app="MobileAngularUiExamples" ng-controller="MainController" ui-prevent-touchmove-defaults>-->
    <body ng-app="IcomApp" ng-controller="IcomCtrl" ui-prevent-touchmove-defaults>

      <div ng-include="'sidebar.html'" ui-track-as-search-param="true" class="sidebar sidebar-left"></div>

      <div class="app" ui-swipe-right="Ui.turnOn('uiSidebarLeft')" ui-swipe-left="Ui.turnOff('uiSidebarLeft')">

        <!-- Navbars -->
        <div class="navbar navbar-app navbar-absolute-top">
          <div class="navbar-brand navbar-brand-center" ui-yield-to="title">
            <i><img src="img/logo.svg" style="margin-top: -5px;" width="145" height="32"></i>
          </div>
          <div class="btn-group pull-left">
            <div ui-toggle="uiSidebarLeft" class="btn sidebar-toggle">
              <i class="fa fa-bars"></i> Menu
            </div>
          </div>
          <div class="btn-group pull-right" ui-yield-to="navbarAction">
            <div ui-toggle="uiSidebarRight" class="btn sidebar-right-toggle">
              <i class="fa fa-comment"></i> Chat
            </div>
          </div>
        </div>


        <div class="navbar navbar-app navbar-absolute-bottom">
          <div class="btn-group justified">
            © 2009 Joel Friedlander
          </div>
        </div>

        <!-- App Body -->
        <div class="app-body" ng-class="{loading: loading}">
          <div ng-show="loading" class="app-content-loading">
            <i class="fa fa-spinner fa-spin loading-spinner"></i>
          </div>
          <div class="row" id="fadeshow1">
          <div class="col-xs-12">
            <div class="btn-group btn-group-justified" role="group">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Nosotros</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Servicios</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Proyectos</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Contacto</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default">Intranet</button>
              </div>              
            </div>
          </div>        
          </div>        
          <div class="app-content">
            <ng-view></ng-view>
          </div>
        </div>

      </div><!-- ~ .app -->

      <div ui-yield-to="modals"></div>
    </body>
    </html>
