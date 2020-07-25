<html>
<head>
<title> Create </title>
<style>
    body{
        background-color : whitesmoke;
    }
    input{
        width : 20%;
        height: 5%;
        border :1px;
        border-radius:1px;
    }
</style>
</head>
<body>
    <h1> Edit </h1>
    <form   action ='../create/' method="POST" enctype="multipart/form-data" class="contact-form">
        <label> ID </label><h2>
        <input type='text' name ='id'  /> </br>
        <label> Title </label><h2>
        <input type='text' name ='title' /> </br>
        <div><label> Description </label><h2></div>
        <textarea name="description" rows="5" cols="30"></textarea></br>
        <label> Image</label><h2>
        <input type='file' name ='image' /> </br>
        <label> Status </label><h2>
        <select name ='status'>  <option value='1'> Enable </option>
                <option value='2'> Disable </option>
        </select> <h2>
        <input type='submit' name='submit' value='SUBMIT'/>
    </form>
    <td><br><a href="http://localhost:8080/PHP_MVC/admin/ad/" >Back</a></td>
    
    </body>
</html>