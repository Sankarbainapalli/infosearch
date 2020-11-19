<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>Twitter Post Page</title>
    </head>
    <body>
        
        <div class="jumbotron">
            
            <div class="row">
                <div class="col-md-5">
                    <x-alert />
                    <h1 class="text-primary">Twitter Post Form</h1>
                    <form action="{{route('admin.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Comment</label>
                            <textarea name="comment" class="form-control"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <h1 class="text-primary">Twitter Posts</h1>
                    <div class="container">
                        
                        <ol  class="list-group">
                            @foreach ($post_list as $admin)
                            <li  class="list-group-item">
                                <a href="{{route('admin.show',$admin->id)}}" class="text-default" title="View"><span>{{$loop->index+1}}.&nbsp;</span>{{$admin->title}}</a><span>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="{{route('admin.edit',$admin->id)}}"><button type="button" class="btn btn-info">
                                    Edit
                                </button></a> &nbsp;&nbsp;&nbsp;
                                <!--  <button type="button" class="btn btn-primary">
                                View
                            </button></a> -->
                            <a href="remove/{{$admin->id}}"><button type="button" class="btn btn-danger">
                                Delete
                            </button></a>
                        </span>
                    </li>
                    @endforeach
                </ol>
            </div>
           
        </div>
         <nav aria-label="Page navigation example">
                {{ $post_list->links() }}
            </nav>
    </div>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
-->
</body>
</html>