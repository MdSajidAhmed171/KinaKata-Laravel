<!DOCTYPE html>
<html lang="en">
<head>
    <title> Kina-kata </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Latest jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

   

    
</head>
<body>

    {{View::make('header')}}
    @yield('content')

    {{View::make('footer')}}

</body>

<style>

    .navbar{
        background-color: #e9e8e6;
    }
    .nav .active > a {
        color: #222222!important;
    }
    .custom-login{
        height: 500px;
        padding-top: 100px;
        
    }
    .slider-img{
        height:400px!important;
        background-color: red;
    }
    .custom-product{
        height:600px!important;
        
    }
    .slider-text{
        height: 380px;
        width: 50%;
        margin-left: 200px!important;
        background-color: #e9e8e6;
        border: 2px solid black;
        
    }
    .trending-img{
       height:100px;
    }
    .trending-item{
        float:left;
        width: 25%;
    }
    #footer {
    background: #e9e8e6;
    padding: 30px 0;
    color: #222222;
    font-size: 14px;
    text-align: center;
    }

    #footer .credits {
    padding-top: 5px;
    font-size: 13px;
    }

    #footer .credits a {
    color: #34b7a7;
    }

    .detail-img{
        height:200px;
       
    }
    .search-box{
        width: 500px!important;
    }
</style>


</html>