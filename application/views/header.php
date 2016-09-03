<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta charset="utf-8">
		<title>Infra Bird Guide</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--
  	<link href="css/extra.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
-->
	</head>
<body>

  <div class="container">

    <div class="navbar navbar-default" role="navigation">

      <div class="navbar-header navbar-left">

       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" rel="home" href="#" title="Mad�rhat�roz�">Madárhatározó</a>

      </div>

    <ul class="nav navbar-nav collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <li><a href="#">Osztályok</a></li>
      <li><a href="#">Random</a></li>
    </ul>

    <div class="col-sm-6 col-md-6 pull-left">

       <form method="get" class="navbar-form navbar-search" action='guide.php' id='sch'>
           <div class="input-group">
                <input type="text" class="form-control" placeholder="Madárfajok, családok" name="search" id="sch" width="100px" value="#"/>
                <div class="input-group-btn">
                    <button type='submit' class="btn btn-default" name="go" id="go">Keresés</button>
            <input type='hidden' name='view' value='search' />
                </div>
         </div>
         </form>

    </div>

  </div>

  <div class="container">
