<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Items and sales product controller</title>

        <!-- Bootstrap core CSS -->
        <link href="./views/css/bootstrap.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
          <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Items</a></li>
                        <li><a href="index.php?page=sale">Sold Items</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container" style="margin-top: 50px;">
            <h1>Product details</h1>
            <p>press no. of item and press buy botton</p>
            <form class="form-horizontal"  role="form" target="index.php" method="get">
                <input name="id" value="<?=$resuly['id']?>" type="hidden">
        <fieldset>
          <div class="form-group">
            <label class="col-sm-2 control-label">Product name</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?=$resuly['name']?></p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?=$resuly['price']?>円</p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">No. of product</label>
            <div class="col-sm-1">
              <input type="text" value="1" class="form-control" name="quantity"/>
            </div>
          </div>
        </fieldset>

        <div class="well">
          <a href="./index.php" class="btn btn-default">Return</a>
          &nbsp;
          <button type="submit" class="btn btn-primary">buy</button>
        </div>
      </form>
        </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="./views/css/bootstrap.css"></script>
</body>
</html>
