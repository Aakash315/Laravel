<div>
    <h1>Image Upload</h1>
    <a href="lists">List</a>
    <br>
    <br>
    <form action="imgView" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <button>Upload</button>
        </div>
    </form>
</div>
<style>
    input[type="file"] {
       
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

    div{
        margin: 10px;
    }
</style>
