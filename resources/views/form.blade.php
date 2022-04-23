<x-header data="Hello Component Header"/>


<h2>Login User</h2>
<form action="users" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter your user name"><br><br>
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form>