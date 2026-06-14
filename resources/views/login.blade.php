<!DOCTYPE html>
<html>
<head>
<title>Survival Guide Login</title>

<style>
body{
    font-family:Arial;
    background:linear-gradient(135deg,#1b5e20,#4caf50);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.login-box{
    background:white;
    padding:40px;
    border-radius:20px;
    width:350px;
    text-align:center;
    box-shadow:0 5px 20px rgba(0,0,0,.2);
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:10px;
}

button{
    width:100%;
    padding:12px;
    background:#2e7d32;
    color:white;
    border:none;
    border-radius:10px;
}
</style>

</head>
<body>

<div class="login-box">
<h1>🌲 Survival Guide</h1>

<form action="/dashboard">
<input type="email" placeholder="Email">
<input type="password" placeholder="Password">

<button type="submit">Masuk</button>
</form>

</div>

</body>
</html>