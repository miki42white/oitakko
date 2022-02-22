<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oitakko</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9c47aea43e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <style>
      .container-fluid{
      padding: 0;
      }
      table{
        margin:10% auto;
      }
      .school-ttl{
        font-size:25px;
        padding-bottom: 10%;
      }
    </style>


</head>

<div class="container-fluid">
<x-header :user="$user"/>
    <div class="row">
        <div class="col-12">
            <table>
              <tr>
                <th>チェックリスト</th>
              </tr>
              <tr>
                <th class="school-ttl">{{$name}}</th>
              </tr>
              @if(isset($check))
                <form action="/updatecheck/{{$name}} method="post">
                @csrf
                  <input type="hidden" name="id" value="{{$check->id}}">
                  <tr>
                    <td><p>園舎<br>
                    <input type="radio" name="institution" value="良い" {{ $check->institution == "良い" ? 'checked' : ''}}>良い
                    <input type="radio" name="institution" value="普通" {{ $check->institution == "普通" ? 'checked' : ''}}>普通
                    <input type="radio" name="institution" value="悪い" {{ $check->institution == "悪い" ? 'checked' : ''}}>悪い
                    </p></td>
                  </tr>
                  <tr>
                    <td><p>園庭<br>
                    <input type="radio" name="playground" value="広い"{{ $check->playground == "広い" ? 'checked' : ''}}>広い
                    <input type="radio" name="playground" value="普通"{{ $check->playground == "普通" ? 'checked' : ''}}>普通
                    <input type="radio" name="playground" value="狭い"{{ $check->playground == "狭い" ? 'checked' : ''}}>狭い
                    </p></td>
                  </tr>
                  <tr>
                    <td><p>先生の雰囲気<br>
                    <input type="radio" name="teachers" value="良い"{{ $check->teachers == "良い" ? 'checked' : ''}}>良い
                    <input type="radio" name="teachers" value="普通"{{ $check->teachers == "普通" ? 'checked' : ''}}>普通
                    <input type="radio" name="teachers" value="悪い"{{ $check->teachers == "悪い" ? 'checked' : ''}}>悪い
                    </p></td>
                  </tr>
                  <tr>
                    <td><p>給食<br>
                    <input type="radio" name="lunch" value="自園調理"{{ $check->lunch == "自園調理" ? 'checked' : ''}}>自園調理
                    <input type="radio" name="lunch" value="外注"{{ $check->lunch == "外注" ? 'checked' : ''}}>外注
                    <input type="radio" name="lunch" value="お弁当"{{ $check->lunch == "お弁当" ? 'checked' : ''}}>お弁当
                    
                    </p></td>
                  </tr>
                  <tr>
                    <td><p>おやつ<br>
                    <input type="radio" name="snack" value="手作り"{{ $check->snack == "手作り" ? 'checked' : ''}}>手作り
                    <input type="radio" name="snack" value="市販品"{{ $check->snack == "市販品" ? 'checked' : ''}}>市販品
                    </p></td>
                  </tr>
                <td><input type="submit" value="更新"></td>
                </form>
              @else
                <form action="/makecheck/{{$name}}" method="post">
                  @csrf
                  <input type="hidden" name="id" value="{{$school->id}}">
                  <tr>
                    <td><p>園舎<br>
                    <input type="radio" name="institution" value="良い">良い
                    <input type="radio" name="institution" value="普通">普通
                    <input type="radio" name="institution" value="悪い">悪い
                    </p></td>
                  </tr>
                  <tr>
                      <td><p>園庭<br>
                      <input type="radio" name="playground" value="広い">広い
                      <input type="radio" name="playground" value="普通">普通
                      <input type="radio" name="playground" value="狭い">狭い
                      </p></td>
                    </tr>
                    <tr>
                      <td><p>先生の雰囲気<br>
                      <input type="radio" name="teachers" value="良い">良い
                      <input type="radio" name="teachers" value="普通">普通
                      <input type="radio" name="teachers" value="悪い">悪い
                      </p></td>
                    </tr>
                    <tr>
                      <td><p>給食<br>
                      <input type="radio" name="lunch" value="自園調理">自園調理
                      <input type="radio" name="lunch" value="外注">外注
                      <input type="radio" name="lunch" value="お弁当">お弁当
                      </p></td>
                    </tr>
                    <tr>
                      <td><p>おやつ<br>
                      <input type="radio" name="snack" value="手作り">手作り
                      <input type="radio" name="snack" value="市販品">市販品
                      </p></td>
                    </tr>
                      <td><input type="submit" value="記録"></td>
                    </form>
                  </table>
                @endif
        </div>
    </div>
</div>
</body>
</html>
