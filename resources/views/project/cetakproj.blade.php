<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN PROJECT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>LAPORAN PROJECT</h4>
		
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Project Title </th>
				<th>Project Leader</th>
				<th>Project Language</th>
				<th>Project Link Repository</th>
				<th>Project Started at</th>
                <th>Project Finished at</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($project as $project)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$project->title}}</td>
				<td>{{$project->leader}}</td>
				<td>{{$project->language}}</td>
				<td>{{$project->link}}</td>
				<td>{{$project->created_at}}</td>
                <td>{{$project->updated_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>