<div>
    <h1>View Image</h1>
    <a href="imgView">Add</a>
    <br>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Path</th>
            <th>Created_at</th>
            <th>Updated_at</th>
        </tr>
        @foreach($img as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td><img src="{{url('storage/public/'.$data->path)}}" alt=""></td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
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

    img {
        width: 200px;
        height: 100px;
    }
</style>
