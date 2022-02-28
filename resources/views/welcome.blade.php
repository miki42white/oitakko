<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oitakko</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/header.css">
    <style>
        #map {
        height: 650px;
        width: 100%;
        }
        .container-fluid{
        padding: 0;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
    <x-header :user="$user"/>
        <div class="row">
            <div class="col-12" id="map"></div>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script>
            var data=@json($items);
        </script>
        <script src="/js/result.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAvlhGTjdxrVQzZq7gH0LopZ-2LFLOpuPE&libraries=places&callback=initMap" async defer>
        </script>
        </div>
    </div>
</body>
</html>
