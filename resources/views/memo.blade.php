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
        margin:10% auto;
      }
      .school-ttl{
        font-size:25px;
      }
      .btn-wrap{
      text-align: center;
    }
    </style>

</head>

<div class="container-fluid">
<x-header :user="$user"/>
    <div class="row">
        <div class="col-12">
            <table>
                <tr>
                    <th class="school-ttl">{{$school->name}}</th>
                </tr>
                <tr>
                  <th>メモ</th>
                </tr>
                <tr>
                  <form action="/memo/{{$school->id}}" method="post">
                  @csrf
                  <td><textarea name="memo" id="memo" cols="30" rows="10">{{$memo ? $memo->memo : ''}}</textarea></td>
                </tr>
                <div class="btn-wrap">
                  <td><input type="submit" value="保存"></td>
                </div>
            </form>
            </table>
        </div>
    </div>
</div>
</body>
</html>
