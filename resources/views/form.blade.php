<x-header data="Hello Component Header"/>


<h2>Login User</h2>
<form action="users" method="POST">
    @csrf
    
        @error('user')
        <span style="color: red">{{$message}}</span><br><br>
        @enderror
    
    
    <input type="text" name="user" placeholder="Enter your user name"><br><br>
    
        @error('password')
            <span style="color: red">{{$message}}</span><br><br>
        @enderror
    
    <input type="password" name="password" placeholder="Enter your password"><br><br>
    <button type="submit">Login</button>
</form>