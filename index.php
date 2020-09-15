<!doctype html>
<html lang="ms">
<head>
 <title>loginpage</title>
</head>
<body>
<h1>login</h1>

  <form action="simpan.php" method="post">
	<input type="hidden" name="idlogin" value=""/>
 <table>
 <tr>
	<td><label for="nama">Username:</label></td>
 <td>
	<input id="nama" type="text" name="Username" value="" required/>
 </td>
 </tr>
 <tr>
	<td><label for="password">Password:</label></td>
 <td>
	<input id="password" type="password" step="any" name="Password" value="" required/>
 </td>
 </tr>

 <tr>
	<td colspan="2" align="center">
	<button type="submit">Login</button>
 </td>
 </tr>
 </table>
 </form>
</table>
</body>
</html>