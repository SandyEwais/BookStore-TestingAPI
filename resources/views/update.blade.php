
<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
  </head>
  <body>
    <form action="{{route('update',$book->id)}}" method="POST" class="decor">
      @csrf
      @method('put')
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Edit Book:{{$book->id}}</h1>
        <input name="title" type="text" placeholder="Title" value="{{$book->title}}">
        <p class="text-danger" style="color: red">
           @error('title')
              {{$message}}
           @enderror
        </p>
        
        <textarea name="body" placeholder="Body..." rows="5">{{$book->body}}</textarea>
        <p class="text-danger" style="color: red">
          @error('body')
             {{$message}}
          @enderror
       </p>
        <button type="submit">Update</button>
      </div>
    </form>
  </body>
</html>