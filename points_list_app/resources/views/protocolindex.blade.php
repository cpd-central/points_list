<!-- protocolindex.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Protocol Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
				<th>Mongo ID</th>	
				<th>Name</th>
        <th>Types</th>
				<th>Measurements</th>	
			</tr>
    </thead>
    <tbody>
      
      @foreach($protocols as $protocol)
      <tr>
				<td>{{$protocol->_id}}</td>	
				<td>{{$protocol->Name}}</td>
				@foreach($protocol->Types as $type)
					</tr>	
					<td>{{$type['Abbreviation']}}</td>	
					<tr>	
					@foreach($type['Measurements'] as $meas)
						</tr>	
						<td>{{$meas}}</td>
						<tr>	
					@endforeach
				@endforeach
      </tr>
      @endforeach
    </tbody>
  </table>
			@foreach($protocols as $protocol)
				<p>{{$protocol->_id}}</p>
				<p>{{$protocol->Name}}</p>
				@foreach($protocol->Types as $type)
					<p>{{$type['Abbreviation']}}</p>
					@foreach($type['Measurements'] as $meas)
						<p>{{$meas}}</p>	
					@endforeach	
				@endforeach	
			@endforeach		
		</div>
  </body>
</html>

