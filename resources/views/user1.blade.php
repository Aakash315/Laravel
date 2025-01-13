<div>
    <h1>User1 Data</h1>
    {{print_r($data)}}
    <ul>
        <li>
            <span><b>Name : </b></span>
            <span>{{$data->name}}</span>
        </li>
        <li>
            <span>Username : </span>
            <span>{{$data->username}}</span>
        </li>
        <li>
            <span>email : </span>
            <span>{{$data->email}}</span>
        </li>
        <li>
            <span>Website : </span>
            <span>{{$data->website}}</span>
        </li>
        <li>
            <span>Phone : </span>
            <span>{{$data->phone}}</span>
        </li>
    </ul>
</div>
