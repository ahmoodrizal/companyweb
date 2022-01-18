<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DEPARTMENT</title>
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
		<h5>LAPORAN DEPARTMENT</h4>
		
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>Department ID </th>
				<th>Department Name</th>
				<th>Number of Employee</th>
				<th>Email Department</th>
				<th>Manager Name</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($depart as $depart)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$depart->dept_id}}</td>
				<td>{{$depart->dept_name}}</td>
				<td>{{$depart->number_of_emp}}</td>
				<td>{{$depart->dept_email}}</td>
				<td>{{$depart->manager_name}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>