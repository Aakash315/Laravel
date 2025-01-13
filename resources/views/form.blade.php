<div>
    <h1>User Form</h1>
    <a href="list">Student List</a>
    <br>
    <form action="form" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div>
            <input type="text" name="city" placeholder="Enter your city">
        </div>
        <div>
            <input type="text" name="email" placeholder="Enter your email">
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


    button {
        border: 2px solid gray;
        height: 40px;
        width: 100px;
        background-color: lightskyblue;
        border-radius: 8px;
        font-size: 15px;
    }
</style>