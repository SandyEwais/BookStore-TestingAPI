<!doctype html>
<html lang="en">
  <head>
  	<title>Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<form action="{{route('logout')}}" method="POST">
			@csrf
			<button style="background-color: #7cf800; border:1px solid rgb(102, 151, 11); color:black" type="submit">logout</button>
		</form>
	<section class="ftco-section">
		
		<div class="container">

            <form action="{{route('create')}}" method="GET">
				@csrf
				<button style="background-color: #7cf800; border:1px solid rgb(102, 151, 11); color:black" type="submit">Add New Book</button>
			</form>
			
            
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Books</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Id</th>
						      <th>Title</th>
						      <th>Body</th>
						    </tr>
						  </thead>
						  <tbody>
							@foreach ($books as $book)
							  <tr>
								<th scope="row">{{$book->id}}</th>
								<td>{{$book->title}}</td>
								<td>{{$book->body}}</td>
								<td>
									<form action="{{route('edit',$book->id)}}" method="GET">
										@csrf
										<button type="submit" class="btn btn-primary">Edit</button>
									</form>
									<form action="{{route('destroy',$book->id)}}" method="POST">
										@csrf
										@method('delete')
										<button type="submit" class="btn btn-danger">Delete</button>
									</form>
								</td>
							  </tr>
							@endforeach
						    
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<x-flash-message/>
		
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

