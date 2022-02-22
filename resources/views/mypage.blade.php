<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Oitakko</title>
<style>
  table{
    margin:2% auto;
  }
  th,
  td{
    text-align: center;
  }
  .school-wrap{
    border-bottom: 1px solid black;
  }
  .school-ttl{
    font-size:20px;
    padding-bottom: 10%;
  }
  .container-fluid{
  padding: 0;
  }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/9c47aea43e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
  <div class="container-fluid">
  <x-header :user="$user"/>
    <div class="row">
      <div class="col-12">
        <table>
          @foreach($names as $name)
          <tr>
            <div class="school-wrap">
            <td class="school-ttl"><a href="/record/{{$name->name}}">{{$name->name}}</a></td>
          </div>
          <td><a class="fa-solid fa-angle-right" href="/record/{{$name->name}}" ></a></td>
          </tr>
        @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>