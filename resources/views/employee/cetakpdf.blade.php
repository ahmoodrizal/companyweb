<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN EMPLOYEES</title>
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
		<h5>LAPORAN EMPLOYEES</h4>
		
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
                <th>ID </th>
				<th>Full Name</th>
				<th>Department</th>
				<th>Email</th>
				<th>Address</th>
				<th>Gender</th>
                <th>Salary</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($employees as $employee)
			<tr>
				<td>{{ $i++ }}</td>
                <td>{{$employee->emp_id}}</td>
				<td>{{$employee->emp_fullname}}</td>
				<td>{{$employee->emp_department}}</td>
				<td>{{$employee->emp_email}}</td>
				<td>{{$employee->emp_address}}</td>
                <td>{{$employee->gender}}</td>
				<td>{{$employee->salary}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>