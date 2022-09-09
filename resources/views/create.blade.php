<!DOCTYPE html>
<html>
  <head>
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
  </head>
  <body>
    <form action="{{route('store')}}" method="POST" class="decor">
      @csrf
      <div class="form-left-decoration"></div>
      <div class="form-right-decoration"></div>
      <div class="circle"></div>
      <div class="form-inner">
        <h1>Add New Book</h1>
        <input name="title" type="text" placeholder="Title" value="{{old('title')}}">
        <p class="text-danger" style="color: red">
           @error('title')
              {{$message}}
           @enderror
        </p>
        
        <textarea name="body" placeholder="Body..." rows="5">{{old('body')}}</textarea>
        <p class="text-danger" style="color: red">
          @error('body')
             {{$message}}
          @enderror
       </p>
        <button type="submit">Submit</button>
      </div>
    </form>
  </body>
</html>