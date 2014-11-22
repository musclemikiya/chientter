<!DOCTYPE html>
<html lang="ja" ng-app>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//musclehustle.net/laravel/dist/css/bootstrap.css" rel="stylesheet">
<link href="//musclehustle.net/laravel/dist/css/form.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/laravel/dist/js/bootstrap.js"></script>
<script src="http://code.angularjs.org/1.2.7/angular.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
            <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="./" class="navbar-brand">Chientter</a>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
              <ul class="nav navbar-nav">
                <li>
                  <a href="./getting-started">About</a>
                </li>
              </ul>
            </nav>
        </header>
        <form class="form-signin" role="form">
            <h2 class="form-signin-heading">Please fill in</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Twitter Account</label>
                <input type="text" class="form-control" placeholder="@twitterアカウント" required autofocus>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Select Line</label>
                <input type="text" class="form-control" ng-model="line">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Select Line</label>
                {literal}
                {{line}}
                {/literal}
                <select class="form-control">
                    <option value="山手線">山手線</option>
                </select>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
    </div>
</body>
</html>