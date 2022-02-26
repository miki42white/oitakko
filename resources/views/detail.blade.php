<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oitakko</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c47aea43e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/header.css">
    <style>
    .container-fluid{
    padding: 0;
    }
    table{
        margin: 10% auto;
    }
    .school-ttl{
        font-size: 30px;
    }
    .fa-solid{
        font-size: 20px;
    }
    .btn{
        margin-left:70%;
    }
    </style>
    

</head>

<div class="container-fluid">
<x-header :user="$user"/>
    <div class="row">
        <div class="col-12">
            <table>
                <tr>
                    <th class="school-ttl">{{$items->name}}</th>
                </tr>
                <tr>
                    <td>住所: {{$items->address}}</td>
                </tr>
                <tr>
                    <td>電話番号:
                    {{$items->phonenumber}}
                    </td>
                </tr>
                <tr>
                    <td class="btn">
                        @if(Auth::check())
                            @if(isset($favorite))
                            <form action="/unfavorite/{{$items->name}}
                            " method="post">
                            @csrf
                            <input type="hidden" name="name" value="{{$items->name}}">
                            <input type="submit" value="お気に入り" class="btn btn-success btn-sm">
                            </form>
                            @else
                            <form action="/favorite/{{$items->name}}" method="post">
                            @csrf
                            <input type="hidden" name="name" value="{{$items->name}}">
                            <input type="submit" value="お気に入り" class="btn btn-secondary btn-sm">
                            </form>
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><a class="fa-solid fa-school" href="{{$items->url}}" target="_blank" rel="noopener noreferrer">ホームページで見る</a>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div>
</body>
</html>
