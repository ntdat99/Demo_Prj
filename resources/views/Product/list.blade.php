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
<h1 class="ml-2 mt-1">List products</h1>

<div class=" mt-5 mb-3 ml-3">
    <form action="" class="form-inline">
        <div class="form-group">
            <b style="font-size: 20px;"><label class="mr-3">Category</label></b>
            <select name="categoryId" class="form-control mr-3">
                <option value="0">All category</option>
                @foreach($categories as $item)
                    <option value="{{$item->id}}" {{$categoryId == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
                @endforeach
            </select>
            <input type="submit" value="Filter" class="btn btn-outline-success">
        </div>
        <button class="btn btn-primary" style="margin-left: 950px;" type="submit">Create</button>
    </form>

</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
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
            <td {{$item->Description}}></td>
            <td><a href="/product/{{$item->id}}" id="{{$item->id}}" class="delete-obj">Delete</a></td>
            </tr>
        </tbody>
    @endforeach
        <div class="row float-right mr-lg-5">
            {{$list_obj->links()}}
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.delete-obj').click(function () {
            var id = this.id;
            var user_confirm = confirm("Bạn muốn xóa sản phẩm này?");
            if (user_confirm){
                $.ajax({
                    url: 'http://127.0.0.8000/Product/' + id,
                    method: 'DELETE',
                    data: {
                        '_token': "{{csrf_token()}}"
                    },
                    success: function () {
                        alert('Deleted');
                        alert('Success!');
                        window.location.reload();

                    },
                    error: function () {
                        alert('Error.');
                    }
                });
            }else{
                alert('!Okie');
            }
        });
    </script>
</table>

</body>
</html>