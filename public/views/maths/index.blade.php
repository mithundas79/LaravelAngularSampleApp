<!doctype html>
<html lang="en" ng-app="addApp">
    <head>
        <meta charset="UTF-8">
        <title>Laravel RESTFul API and AngularJS</title>

        <!-- CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
        <style>
            body 		{ padding-top:30px; }
            form 		{ padding-bottom:20px; }
            
        </style>

        <!-- JS -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

        <!-- ANGULAR -->
        <!-- all angular resources will be loaded from the /public folder -->
        <script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
        <script src="js/services/services.js"></script> <!-- load our service -->
        <script src="js/app.js"></script> <!-- load our application -->

    </head>
    <body class="container" ng-controller="mainController">
        <div class="col-md-8 col-md-offset-2">

            <!-- PAGE TITLE =============================================== -->
            <div class="page-header">
                <h2>Laravel and Angular Single Page Application</h2>
                <h4>Simple Addition</h4>
            </div>

            <div id="messages" class="alert alert-danger" ng-show="message">{{ message }}</div>
            <div class="alert alert-danger" ng-show="message">
                <div class="row" ng-repeat="error in errors">
                {{ error }}
                </div>
            </div>
            <div id="messages_success" class="alert alert-success" ng-show="success_message">{{ success_message }}</div>

            <form ng-submit="add()" method="post">

                <div class="form-group">
                    <input type="text" class="form-control input-sm" ng-change="add()" name="number1" ng-model="addData.number1" placeholder="Input first number">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control input-sm" ng-change="add()" name="number2" ng-model="addData.number2" placeholder="Input second number">
                </div>

                
                <div class="form-group text-right">	
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>

            <!-- LOADING ICON =============================================== -->
            <!-- show loading icon if the loading variable is set to true -->
            <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

            
            <div class="result alert alert-success" ng-show="showResult">
                {{ result }}
            </div>

        </div>
    </body>
</html>
