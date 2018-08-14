<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</head>
<body>
<h1>List Category</h1>
<div style="float: right; margin-bottom: 20px; margin-right: 50px">
    <a href="/admin/category/create"  style="margin-left: 10px;"><i class="far fa-plus-square"></i>Create</a>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">CategoryName</th>
        <th scope="col">CategoryImage</th>
        <th scope="col">CategoryDescription</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @foreach($list_obj as $item)
        <tbody>
        <tr>
            <th scope="row">{{$item -> id}}</th>
            <td {{$item->name}}></td>
            <td><img src="{{$item->image}}" alt="" style="width: 150px"></td>
            <td {{$item->price}}></td>
            <td><a href="/product/{{$item->id}}" id="{{$item->id}}" class="delete-obj">Delete</a></td>
        </tr>
        </tbody>
    @endforeach
</table>

</body>
</html>