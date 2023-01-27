<h2>Insert Data</h2>
<form method="POST" action="add">
    @csrf 
    <input type="text" name="username" />
    <input type="text" name="message" />
    <input type="submit">
</form>    


<h2>List of Data</h2>
<table border= "1">
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Message</th>
    <th>Operation</th>
    </tr>
    @foreach ($lists as $list)
    <tr>
    <td>{{$list['id']}}</td>
    <td>{{$list['name']}}</td>
    <td>{{$list['message']}}</td>
    <td><a href = "delete/{{$list['id']}}">Delete</a><a href = "edit/{{$list['id']}}">Edit</a></td>
    </tr>    
    @endforeach
</table>