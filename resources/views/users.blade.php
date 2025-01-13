<div>
    <h1><u>User List</u></h1>
    <!-- {{
        print_r($users);
    }} -->

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Email</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->city}}</td>
            <td>{{$user->email}}</td>
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
