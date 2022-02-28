<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oitakko</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c47aea43e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/build/jquery.datetimepicker.full.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-datetimepicker@2.5.20/jquery.datetimepicker.css">
    <link rel="stylesheet" href="/css/header.css">
    <style>
        .container-fluid{
        padding: 0;
        }
        table{
            margin:10% auto;
        }
        .school-ttl{
            font-size: 25px;
        }
        .btn{
            margin-left: 80%;
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
                    <td>
                    電話番号: {{$items->phonenumber}}
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
                    <td class="date">
                    <div>
                    <form action="/reserve/{{$name}}" method="post">
                    @csrf
                    <label for="reserve">見学日<input type="text" id="datetime" name="datetime" value={{$reserve ? $reserve->datetime : ''}}></label>
                    <input type="submit" value="保存">
                    </form>
                    </div>
                    </td>
                </tr>
                <tr>
                    <td><a href="/memo/{{$name}}"><i class="fa-solid fa-pen"></i>メモ</a>
                    </td>
                </tr>
                <tr>
                    <td><a href="/check/{{$name}}">園見学チェック</a>
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
<script type="text/javascript">
  $(function () {
    $("#datetime").datetimepicker({

    });
  });
  </script>
</body>
</html>
