<html>
<head>
  <title>Form Login</title>
  <style>
    body{
      font-family:Calibri;
      margin:50px;
    }

    #form-login{
      margin:auto;
      width:500px;
      padding:10px;
      border:1px #ccc solid;
      font-size:18px;
      font-weight:bold;
      color:#FF6600;
    }

    .inputan{
      padding:3px;
      font-family:Calibri;
      border:1px solid #ccc;
    }

    .tombol{
      padding:5px;
      background:#FF6600;
      color:#FFF;
      font-weight:bold;
      font-family:Calibri;
      font-size:15px;
      border:#eee 1px solid;
    }

    .error{
      color:#FF6600;
      font-size:11px;
    }
  </style>
</head>
<body>
  <form action="<?php echo site_url('login/login_form');?>" method="post" name="login">
    <div id="form-login">
      Administrator Page - Plase Login First
      <br><br>
      <table border="0" cellpadding="4">
        <tr>
          <td>Username</td>
          <td>:</td>
          <td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>"> <?php echo form_error('username');?></td>
        </tr>

        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>"> <?php echo form_error('password');?></td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="login" value="Login"> </td>
        </tr>
      </table>
    </div>
  </form>
</body>
</html>
