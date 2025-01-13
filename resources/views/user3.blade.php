<div>
    <h1>User Data-3</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Email</th>
        </tr>
        @foreach($query as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->city}}</td>
            <td>{{$data->email}}</td>
        </tr>
        @endforeach
    </table>
</div>
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 60%;

    }

    th, td{
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }
</style>

