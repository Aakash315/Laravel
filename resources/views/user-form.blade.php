<div>
    <h1 style="text-align: center;">User Form</h1>
    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="username" placeholder="Enter User Name :">
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placeholder="Enter Email Address">
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placeholder="Enter Your City">
        </div>
        <div class="input-wrapper">
            <button>Add New User</button>
        </div>
    </form>
</div>
<style>
    input{
        border: 2px solid gray;
        height: 35px;
        width: 250px;
        border-radius: 5px;
    }

    .input-wrapper{
        margin: 10px;
    }

    button{
        background-color: lightskyblue;
        border-radius: 8px;
    }
</style>
    