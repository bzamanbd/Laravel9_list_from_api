<center>
 <h2>List from Api</h2>
<table border="1">
 <tr>
  <th>ID</th>
  <th>NAME</th>
  <th>USERNAME</th>
  <th>EMAIL</th>
 </tr>
 @foreach ($data as $item)
 <tr>
  <td>{{ $item['id'] }}</td>
  <td>{{ $item['name'] }}</td>
  <td>{{ $item['username'] }}</td>
  <td>{{ $item['email'] }}</td>
 </tr>

 @endforeach
</table>
</center>