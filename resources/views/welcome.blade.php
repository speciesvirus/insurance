<!DOCTYPE html>
<html>
<head>
    <title>Insurance</title>
    <link rel="stylesheet" type="text/css" href="{{ asset("components/css/reset.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("components/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("components/bootstrap/dist/css/bootstrap-theme.min.css") }}">


    <script src="{{ asset("components/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("components/bootstrap/dist/js/bootstrap.min.js") }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset("components/css/default.css") }}">
    <script src="{{ asset("components/js/script.js") }}"></script>



</head>
<body>
<div class="wrapper">
    <div class="parallax">
        <input type="checkbox" id="menu-toggle" class="hidden">
        <label for="menu-toggle">
            <span class="glyphicon"></span>
        </label>
        <div class="menu">
            <h2>Dashboard</h2>
            <ul>
                <li>
                    <div class="profile-insurance">
                        profile
                    </div>
                </li>
                <li><a href="javascript:void(0)" class="active">Reports</a></li>
                <li><a href="javascript:void(0)">Documents</a>
                    <ul>
                        <li><a href="javascript:void(0)">Reports</a></li>
                        <li><a href="javascript:void(0)">Documents</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Reviews</a></li>
                <li><a href="javascript:void(0)">Messages</a></li>
            </ul>
        </div><!--/.menu-->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Consectetur adipiscing</h1>
                        <hr>
                    </div><!--/.col-md-12-->
                    <div class="col-sm-4">
                        <img src="https://images.unsplash.com/photo-1418065460487-3e41a6c84dc5?q=80&fm=jpg&s=13c892f6ad31fb47e453970580ad28e1" class="img-responsive">
                        <h4>Lorem ipsum dolor</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit id orci eget vulputate. Duis quam quam, molestie ac rhoncus vel, convallis at libero.</p>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <img src="https://picjumbo.imgix.net/IMG_6640.jpg?q=40&w=3000&sharp=40" class="img-responsive">
                        <h4>Cras suscipit id</h4>
                        <p>Consectetur adipiscing elit. Cras suscipit id orci eget vulputate. Etiam in libero sed magna fermentum condimentum. Duis at nibh vel lectus ullamcorper fermentum. Maecenas congue sem vitae magna posuere ullamcorper.</p>
                    </div><!--/.col-sm-4-->
                    <div class="col-sm-4">
                        <img src="https://images.unsplash.com/uploads/1413259835094dcdeb9d3/6e609595?q=80&fm=jpg&s=34df8de331cae7450247b04ed37d9ede" class="img-responsive">
                        <h4>Etiam in libero</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit id orci eget vulputate. Etiam in libero sed magna fermentum condimentum.</p>
                    </div><!--/.col-sm-4-->
                </div><!--/.row-->

            </div><!--/.container-->
        </div><!--/.content-->
    </div><!--/.parallax-->
</div>
</body>
</html>

