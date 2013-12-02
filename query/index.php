<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to Dealer Portal</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../css/jquery-ui-custom.css" rel="stylesheet" type="text/css" />
	<link href="../css/custom.css" rel="stylesheet" type="text/css" />
	<link href="../jqGrid/css/ui.jqgrid.css" rel="stylesheet" type="text/css" >
    
    <script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../jqGrid/js/jquery.jqGrid.min.js"type="text/javascript" ></script>
	<script src="../js/hw.js"type="text/javascript" ></script>
    <style>
     a:hover
     {
         text-decoration: none;
         color:#25383C;
     }
     .panel
     {
     }
     .pad-10
     {
        padding:10px;
        background: transparent;
     }
     .section-header
     {
        font-size:1.5em;
        font-family:  ariel;
        border-bottom:1px solid #566D7E;
     }
     .section-content
     {
        padding:10px 5px 5px 5px;
        width:60%;
        font-family:  ariel;
     }
     .hide
     {
        display:none;
     }
    </style>
</head>
<body >
    <div style="padding: 0 15px;"><!-- Offset negative margin -->
        <div class="row">
            <div class="navbar navbar-inverse">

            </div>
        </div>
        <div class="row">
            <!-- Left Content Begins -->
            <div class="col-md-2" >
                <div class="content">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="glyphicon glyphicon-cog"></i>&nbsp;&nbsp;Scripts</a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body" style="padding:10px;">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active"><a class="scriptItem" data-target="addRoutePlan" href="#">Add Route Plan</a></li>
                                        <li><a class="scriptItem" data-target="getCForm" href="#">Get CForm</a></li>
                                        <li><a class="scriptItem" data-target="getCreditInfo" href="#">Get Credit Info</a></li>
                                        <li ><a  class="scriptItem" data-target="getDealerDetail" href="#">Get Dealer Detail</a></li>
                                        <li><a  class="scriptItem" data-target="getDealerInfo" href="#">Get Dealer Info</a></li>
                                        <li><a  class="scriptItem" data-target="getDealerTargetDetail" href="#">Get Dealer Target Detail</a></li>
                                        <li><a  class="scriptItem" data-target="registerEmployee" href="#">Register Employee</a></li>
                                        <li><a  class="scriptItem" data-target="registerNewDealer" href="#">Register New Dealer</a></li>
                                        <li><a  class="scriptItem" data-target="updateSalesHistory" href="#">Update Sales History</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="panel-group" id="accordion2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                    <i class="glyphicon glyphicon-wrench"></i>&nbsp;&nbsp;Configuration</a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse out">
                                <div class="panel-body" style="padding:10px;">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a class="scriptItem" data-target="serverCredentials" href="#">Server Credentials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left Content Ends -->
            <!-- Right Content Begins -->
            <div class="col-md-10" id="container" >
                <!-- Add Route Plan Begins -->
                <div id="addRoutePlan" class="content">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Add Route Plan
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="txtARPEmployeeCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtARPEmployeeCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtARPRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtARPRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtARPArea" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtARPArea" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Route Plan ends -->
                <!-- Get CForm Begins -->
                <div id="getCForm" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Get CForm
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="txtGCHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="txtGCHost" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get CForm Ends -->
                <!-- Get Credit Info Begins -->
                <div id="getCreditInfo" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Get Credit Information
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get Credit Info Begins -->
                <!-- Get Dealer Detail Begins -->
                <div id="getDealerDetail" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Get Dealer Detail
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get Dealer Detail Ends -->                
                <!-- Get Dealer Info Begins -->
                <div id="getDealerInfo" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Get Dealer Information
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get Dealer Info Ends -->                
                <!-- Get Dealer Target Detail Begins -->
                <div id="getDealerTargetDetail" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Get Dealer Target Detail
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Get Dealer Target Detail Ends -->                
                <!-- Register Employee Begins -->
                <div id="registerEmployee" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Register Employee
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="txtREEmplyeeCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREEmplyeeCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtREEmployeeName" class="col-md-3 control-label">Employee Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREEmployeeName" placeholder="Employee Name">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="txtREState" class="col-md-3 control-label">State</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREState" placeholder="State">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtRETerritory" class="col-md-3 control-label">Territory</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtRETerritory" placeholder="Territory">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtREDivision" class="col-md-3 control-label">Division</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREDivision" placeholder="Division">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtREReporting" class="col-md-3 control-label">Reporting</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREReporting" placeholder="Reporting">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtRECode" class="col-md-3 control-label">Reporting Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtRECode" placeholder="Reporting Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtREImei" class="col-md-3 control-label">IMEI</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREImei" placeholder="IMEI">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="txtREPassword" class="col-md-3 control-label">IMEI</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="txtREPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Register Employee Ends -->                
                <!-- Register New Dealer Begins -->
                <div id="registerNewDealer" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Register New Dealer
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Register New Dealer Ends -->                
                <!-- Update Sales History Begins -->
                <div id="updateSalesHistory" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Update Sales History
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmpCode" class="col-md-3 control-label">Employee Code</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputEmpCode" placeholder="Employee Code">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Route Date</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Route Date">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRouteDate" class="col-md-3 control-label">Area</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputRouteDate" placeholder="Area">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Insert Record</button>
                                                <button type="submit" class="btn btn-default">Clear All</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Update Sales History Ends -->  
                <!-- Config Begins -->
                <div id="serverCredentials" class="content hide">
                    <div class="panel panel-default pad-10">
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-header">
                                    <i class="glyphicon glyphicon-circle-arrow-right">
                                        &nbsp;
                                    </i>Server Credentials
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"  >
                                <div class="section-content">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputHost" class="col-md-3 control-label">Host</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputHost" placeholder="Host">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUsername" class="col-md-3 control-label">Username</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                                            </div>
                                        </div>                                        
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-md-3 control-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDbname" class="col-md-3 control-label">Db Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="inputDbname" placeholder="Db Name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-md-9">
                                                <button type="submit" class="btn btn-default">Update</button>
                                                <button type="submit" class="btn btn-default">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Config Ends -->  
            </div>
            <!-- Right Content Ends -->
        </div>
    <div>
    <div id="scriptDiv">
            <!-- scripts are kept at the end of the page -->
            <script type="text/javascript">
                //make ajax request to get the data
                var url = "/data/dealerTarget.php";  
                var data ={
                            host:'100426',
                            username:'',
                            password:'',
                            dbName:'',
                            empCode:'',
                            routeDate:'',
                            area:''
                    };
                
                //$host =$_POST["host"];
                //$username =$_POST["username"];
                //$password =$_POST["password"];
                //$dbName =$_POST["dbName"];

                //$EmpCode=$_POST["empCode"];
                //$RouteDate=$_POST["routeDate"];
                //$Area=$_POST["area"];

                //makeAjaxRequest(url,data,dealerTarget_Returned,null,"POST")
                function dealerTarget_Returned(mydata){
                    alert(mydata);
                }
                $(document).ready(function(){
                    $('.scriptItem').on('click',function(){
                        $(this).closest('ul').find('li').removeClass('active');
                        $(this).closest('li').addClass('active');

                        $('.content','#container').addClass('hide');
                        var id= $(this).data("target");
                        debugger;
                        $('#'+id).removeClass('hide');
                    })

                });
            </script>
    </div>
</body>
</html>

        
