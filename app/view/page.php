<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script data-main="../../public/js/main.js" src="../../bower/requirejs/require.js"></script>
    <link rel="stylesheet" href="../../public/css/css.css">
    <link rel="stylesheet" href="../../bower/bootstrap/dist/css/bootstrap.min.css"
    ">
</head>
<body>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                </button>
                <a class="navbar-brand" href="#">Database Manager</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Table Names <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?
                            foreach ($tableNames as $key => $value) {
                                $url = $_SESSION['url'] . $value;
                                echo "<li><a onclick='$(this).router().show()' name = '$url'>$value</a></li>";
                            }
                            ?>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-header">
                    <a class="navbar-brand" onclick="$('#gallery').mixItUp('filter','')" href="#">Reset</a>
                </div>
            </div>
    </nav>
    <section id="gallery">

    <table class="table table-responsive">
        <thead>
        <tr class="filter-list">
        </tr>
        </thead>
        <tbody id="grid">
        </tbody>
    </table>

</section>
<div id="result"></div>
</body>
</html>
