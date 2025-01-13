<div>
    <h1>Login form</h1>

    

    @if(session('message'))
    <span>{{session('message')}}</span>
    @endif

    <form action="login" method="post">
        @csrf
        <div>
            <input type="text" name="user" placeholder="Enter your name">
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div>
            <input type="text" name="city" placeholder="Enter your city">
        </div>
        <div>
            <button>Add User</button>
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

    span{
        background-color: lightgreen;
        border-radius: 2px;
        padding: 2px 10px;
        margin-bottom: 10px;
        display: inline-block;
    }
</style>
