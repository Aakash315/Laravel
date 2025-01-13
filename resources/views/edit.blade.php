<div>
    <h1>Edit Form</h1>
    <a href="/list">Cancel</a>
    <br>
    <br>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <div>
            <input type="hidden" name="_method" value="put">
        </div>
        <div>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Enter your name">
        </div>
        <div>
            <input type="text" name="city" value="{{$data->city}}" placeholder="Enter your city">
        </div>
        <div>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Enter your email">
        </div>
        <div>
            <button>Edit User</button>
        </div>
    </form>
</div>
<style>
    input[type="text"] {
        border: 2px solid grey;
        height: 45px;
        width: 400px;
        border-radius: 5px;
        font-size: 20px;
    }

    div {
        margin: 10px;
    }

    label {
        font-size: 25px;
    }

    button {
        border: 2px solid gray;
        height: 40px;
        width: 100px;
        background-color: lightskyblue;
        border-radius: 8px;
        font-size: 15px; 
    }
</style>
