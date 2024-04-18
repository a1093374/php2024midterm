<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <style>
        body {
            background-color: #ddd;
            font-family: "標楷體", "KaiTi", serif;
        }
    </style>
</head>
<body>
    <center>
        <h1 style="font-size: 40px;">高大資管論文投稿系統</h1>
    </center>
    <center>
        <form action="check.php" method="post" style="font-size: 25px;">
            請選擇你的角色：
            <select name="role" style="font-size: 15px;">
                <option value="chair">chair</option>
                <option value="reviewer">reviewer</option>
                <option value="author">author</option>
            </select>
            <br/>
            Account：<input type="text" name="uId" style="font-size: 15px;" value="" placeholder="input your account" required><br/>
            Password：<input type="password" name="uPwd" style="font-size: 15px;" placeholder="input your password" required><br/>
            <input type="submit" style="font-size: 20px;" value="submit">
            <input type="reset" style="font-size: 20px;" value="clear">
        </form>
    </center>
</body>

</html>




