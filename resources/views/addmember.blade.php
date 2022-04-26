<h1>Add Member</h1>

<form action="add" method="post">
    @csrf
    <input type="text" name="name" placeholder="Enter Your name"><br><br>
    <input type="text" name="email" placeholder="Enter Your email"><br><br>
    <input type="text" name="adress" placeholder="Enter Your adress"><br><br>
    <button type="submit">Add member</button>
</form>