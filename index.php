<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<title>Welcome to Dealer Portal</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery-ui-custom.css" rel="stylesheet" type="text/css" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="jqGrid/css/ui.jqgrid.css">
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="jqGrid/js/jquery.jqGrid.min.js"type="text/javascript" ></script>
	<script src="js/hw.js"type="text/javascript" ></script>
</head>
<body>
    <form id="form1" class="form-horizontal" runat="server">
        <div id="topNavBar" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../Dashboard.aspx">DEALER PORTAL</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul id="nav" class="nav navbar-nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                            class="glyphicon glyphicon-user"></span><span id="spnUserName">Stephen Luise</span>
                            <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="Login.htm" id="lnkLogout"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; *width: 180px;">
                        <li class="dropdown-submenu"><a href="#">My Info</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu"><a href="#">Order Related</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">New Order</a></li>
                                        <li><a href="#">Stock Report</a></li>
                                        <li><a href="#">Replacement Request</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Sales & Financial Data</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Sales History & Transport Detail</a></li>
                                        <li><a href="#">Advance Cheque</a></li>
                                        <li><a href="#">Credit Note Info</a></li>
                                        <li><a href="#">Outstanding of the Dealer</a></li>
                                        <li><a href="#">'C' Form Pending From The Dealer</a></li>
                                        <li><a href="#">Statement of Accounts</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Branding Request</a></li>
                                <li><a href="#">Dealer Issue Redressal Portal</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Business Content</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Product Catalog</a></li>
                                <li><a href="#">Update Price List</a></li>
                                <li><a href="#">My Scheme</a></li>
                                <li><a href="#">My Sub Dealer Scheme</a></li>
                                <li><a href="#">Existing Sub Dealers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a tabindex="-1" href="#">My Map</a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Tag My Location</a></li>
                                <li><a tabindex="-1" href="#">Map My Sub Dealers</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a tabindex="-1" href="#">What's New!</a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">New Product Information</a></li>
                                <li><a tabindex="-1" href="#">Delaer of the Month</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu"><a tabindex="-1" href="#">Support</a>
                            <ul class="dropdown-menu">
                                <li><a tabindex="-1" href="#">Tutorial</a></li>
                                <li><a tabindex="-1" href="#">Contact Service Center</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><b>DEALER TARGET AND ACHIEVEMENT</b></h3>
                        </div>
                        <div class="panel-body">
                            <div id="filter" class="col-lg-12" style="padding: 15px; margin-bottom: 15px">
                                <div class="col-lg-6"><span style="color: Green; font-weight: bold">Quater:</span> 3rd (Aug 2013 - Nov 2013)</div>
                                <div class="col-lg-3 col-lg-offset-3"><span style="color: Green; font-weight: bold">As of Date: </span>5th Septemper 2013 </div>
                            </div>
                            <div class="table-responsive" style="padding:10px;">
                                	<table id="list2" class="table table-bordered"></table>
									<div id="pager2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="scriptDiv">
		    <!-- scripts are kept at the end of the page -->
			<script type="text/javascript">
			
                //make ajax request to get the data
                var url = "Data/dealerTarget.php"
                makeAjaxRequest(url,{},dealerTarget_Returned,null,"POST")

                function dealerTarget_Returned(mydata){
                    jQuery("#list2").jqGrid({
                        datatype: "local",
                        //height: 250,
                        autowidth:true,
                        colNames:['Sales','Target', 'Achievement'],
                        colModel:[
                            {name:'Sales',index:'Sales', width:90, sorttype:"int"},
                            {name:'Target',index:'Target', width:100, sorttype:"float"},
                            {name:'Achievement',index:'Achievement', width:130, align:"right", sorttype:"int"}
                        ],
                        multiselect: true
                    });
                for(var i=0;i<=mydata.length;i++)   
                    jQuery("#list2").jqGrid('addRowData',i+1,mydata[i]);
                }
			</script>
        </div>
    </form>
</body>
</html>
