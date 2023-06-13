<?php
include "mailer.php";

$mode = $_REQUEST['mode'];
$name = $_REQUEST['name'];
$tel1 = $_REQUEST['tel1'];
$tel2 = $_REQUEST['tel2'];
$tel3 = $_REQUEST['tel3'];
$tel = $tel1."-".$tel2."-".$tel3;
$hp1 = $_REQUEST['hp1'];
$hp2 = $_REQUEST['hp2'];
$hp3 = $_REQUEST['hp3'];
$hp = $hp1."-".$hp2."-".$hp3;
$email = $_REQUEST['email'];
$areaname = $_REQUEST['areaname'];
$questype = $_REQUEST['questype'];
$content = $_REQUEST['content'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "[폼메일] $name($areaname, $hp)";
$body = "";

$body .= "이름 : $name<br>";
$body .= "연락처(집/회사) : $tel<br>";
$body .= "연락처(휴대폰) : $hp<br>";
$body .= "이메일 : $email<br>";
$body .= "거주(활동)지역 : $areaname<br>";
$body .= "문의종류 : $questype<br>";
$body .= "남기고 싶은말 : $content<br>";

//$admin_email = "받을 메일주소 입력";
$admin_email = "dscation@naver.com";
//$bcc = "보조 이메일 주소";

if($mode == "send") {
	//파일첨부 시작
	for($i=1;$i<=3;$i++) {
		$file[$i] = $_FILES['userfile'.$i]['name'];
		$target[$i] = "/tmp/".$file;

		if (move_uploaded_file($_FILES['userfile'.$i]['tmp_name'], $target[$i])) {
			chmod("$target[$i]", 0777);
		}
		
		$attach[$i] = attach_file($file[$i], $target[$i]);
		//업로드 파일을 삭제한다.
		@unlink($target[$i]);
	}
	//파일첨부 끝

	mailer($name, $email, $admin_email, $subject, $body, $type=1, $attach);
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">";
	echo("<script>alert('폼메일이 발송되었습니다.');</script>");
	echo("<script>location.href='form.php';</script>");
}

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>폼메일</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<table width="500">
<tr>
<td valign="top">

<table width="500" border="0" cellpadding="0" cellspacing="1" bgcolor="#444">
<form name="f1" method="post" enctype='multipart/form-data'>
<input type="hidden" name="mode" value="send">
<tr bgcolor="white"> 
<td width="120" height="22" align="center">이름 <font color='red'>*</font> </td>
<td width="380"><input name="name" type="text" size="10" maxlength="40"></td>
</tr>

<tr bgcolor="white"> 
<td width="120" height="22" align="center">연락처(집/회사)</td>
<td width="380"><input name="tel1" type="text" size="3" maxlength="3">-
<input name="tel2" type="text" size="4" maxlength="4">-
<input name="tel3" type="text" size="4" maxlength="4"></td>
</tr>

<tr bgcolor="white"> 
<td width="120" height="22" align="center">연락처(휴대폰) <font color='red'>*</font> </td>
<td width="380"><select name="hp1"><option value="010">010</option>
<option value="010">011</option>
<option value="010">016</option>
<option value="010">017</option>
<option value="010">018</option>
<option value="010">019</option></select>-
<input name="hp2" type="text" size="4" maxlength="4">-
<input name="hp3" type="text" size="4" maxlength="4"></td>
</tr>

<tr bgcolor="white"> 
<td height="22"  align="center">이메일주소 <font color='red'>*</font></td>
<td><input name="email" type="text" style="width:200px" maxlength="100"></td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" >거주(활동)지역 <font color='red'>*</font> </td>
<td><input name="areaname" type="text"  style="width:200px" maxlength="100"> 예)서울,부산,광주</td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" >문의 종류 <font color='red'>*</font> </td>
<td><input type="radio" name="questype" value="사업문의">사업문의 
<input type="radio" name="questype" value="제품(구입)문의">제품(구입)문의 
<input type="radio" name="questype" value="기타">기타 
</td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" >파일 첨부 </td>
<td><input type="file" name="userfile1" value="파일첨부1"><br>
<input type="file" name="userfile2" value="파일첨부2"><br>
<input type="file" name="userfile3" value="파일첨부3">
</td>
</tr>

<tr bgcolor="white"> 
<td height="22" align="center" >남기고 싶은말...</td>
<td><textarea name="content" cols="70" rows="12" style="width:100%;"></textarea></td>
</tr>
</table>
<p align="center">
<input type="button" value=" 전송 " onclick="form_Check();" style="cursor:hand;">&nbsp;&nbsp;&nbsp;
<input type="button" value=" 취소 " onclick="reset();" style="cursor:hand;">
</p>
</td>
</tr>
</table>

</form>
</body>
</html>

<script>
function form_Check(){
	if(f1.name.value == ''){
		alert("이름을 입력해주십시오.");
		f1.name.focus();
		return;
	}
	if(f1.hp1.value == ''){
		alert("연락처(휴대폰)을 입력해주십시오.");
		f1.hp1.focus();
		return;
	}
	if(f1.hp2.value == ''){
		alert("연락처(휴대폰)을 입력해주십시오.");
		f1.hp2.focus();
		return;
	}
	if(f1.hp3.value == ''){
		alert("연락처(휴대폰)을 입력해주십시오.");
		f1.hp3.focus();
		return;
	}
	if(f1.email.value == ''){
		alert("이메일주소를 입력해주십시오.");
		f1.email.focus();
		return;
	}
	if(f1.areaname.value == ''){
		alert("거주(활동)지역을 입력해주십시오.");
		f1.areaname.focus();
		return;
	}
	if(f1.questype[0].checked == false && f1.questype[1].checked == false && f1.questype[2].checked == false){
		alert("문의종류를 입력해주십시오.");
		f1.questype[0].focus();
		return;
	}
	if(!confirm('폼메일을 전송하겠습니까?')) return;
	f1.submit();
}

</script>