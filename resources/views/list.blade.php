<center>
 <h2>List from Api</h2>
<table border="1">
 <tr>
  <th>ID</th>
  <th>NAME</th>
  <th>USERNAME</th>
  <th>EMAIL</th>
  <th>ADDRESS</th>
 </tr>
 @foreach ($data as $item)
 <?php
  $street= $item['address']['street'];
  $suite= $item['address']['suite'];
  $city= $item['address']['city'];
  $zipcode= $item['address']['zipcode'];
  $lat= $item['address']['geo']['lat'];
  $lng= $item['address']['geo']['lng'];
 ?>
 <tr>
  <td>{{ $item['id'] }}</td>
  <td>{{ $item['name'] }}</td>
  <td>{{ $item['username'] }}</td>
  <td>{{ $item['email'] }}</td>
  <td>{{ $street}}, {{ $suite}}, {{ $city}}, {{ $zipcode}}, {{ $lat}}, {{ $lng}}</td>
 </tr>
 @endforeach
</table>
</center>
