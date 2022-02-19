<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ToDo App</title>
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">ToDo App</a> 
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
      <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="#" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
          </div>
          <div class="list-group">
            @foreach($folders as $folder)
            <a href="{{ route('tasks.index' , ['id' => $folder->id}}" class="list-group-item">
            {{ $folders->title}}
            </a>
            @endforeach
            </div>
        </nav>
      </div>
      <div class="column col-md-8">
      </div>
    </div>
  </div>
</main>
</body>
</html>
