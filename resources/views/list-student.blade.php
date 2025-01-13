<div>
    <h1>Student List</h1>
    <a href="form">Form Page</a>
    <br>
    <br>
    <form action="search" method="get">
        <input type="search" name="search" value="{{@$search}}" placeholder="Search here">
        <button>Search</button>
    </form>
    <form action="delete-multi" method="post">
        @csrf 
        <button>Delete</button>
        <table>
            <tr>
                <th>Selection</th>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
            @foreach($student as $data)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$data->id}}"></td>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->city}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->created_at}}</td>
                <td><a href="{{'delete/'.$data->id}}">Delete</a></td>
                <td><a href="{{'edit/'.$data->id}}">Edit</a></td>
            </tr>
            @endforeach
        </table>
    </form>
    <br>
    <br>
    {{$student->links()}}
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
    

    input[type='search'] {
        border: 2px solid grey;
        height: 45px;
        width: 400px;
        border-radius: 5px;
        font-size: 20px;
    }


    button {
        border: 2px solid gray;
        height: 40px;
        width: 100px;
        background-color: lightskyblue;
        border-radius: 8px;
        font-size: 15px;
    }
    
    .w-5.h-5 {
        width: 25px;
    }
</style>
