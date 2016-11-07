<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/login/login.css" media="all">
		<title>
			ログオン画面
		</title>
	</head>
	<body>
		<p class="title_pink">PHP掲示板ログイン</p>
		<?php
			if(isset($_COOKIE['gz_user'])){
				print "<p>" . $_COOKIE['gz_user'] .
				"さんは前回{$_COOKIE['gz_date']}に利用しています</p>";
				$gu = $_COOKIE['gz_user'];
			}else{
				print "<p>はじめてのご来場ありがとうございます。</p>";
				$gu = "";
			}
		?>

		<hr>
		<div align="center">
			<form action="login2.php" method="POST">
				<table border="0">
					<tr>
						<th>ユーザIDDD</th>
						<td><input type="text" name="user_id" value="<?php print $gu; ?>" size="24"></td>
					</tr>
					<tr>
						<th>パスワード</th>
						<td><input type="password" name="user_pass" value="" size="24"></td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" value="ログイン">
						</td>
					</tr>
				</table>
			</form>
		</div>

	</body>
</html>
