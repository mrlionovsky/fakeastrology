<?php
$access = $_COOKIE["astro"];

if ($access == 1) {
   $access = "�� ��� �������� ������������ �� ������ :( ������ ����������� ����� ������� ������.";
   } else {
   $access = "<input type='submit' value='���������'>" ;
}   

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
   <meta http-equiv="content-type" content="text/html; charset=windows-1251">
   <title>�������� �� lionovsky.us - �������</title>
</head>
<body text="#000000" bgcolor="#EAEAEA" background="img/back.jpg">
<center><img src="img/logo.gif"></center>
<table width="800" align="center" border="1" bgcolor="#F7F7F7"><tr>
<!-- �� -->
<td width="80%">
<img src="earth.gif" align="right">  

<!-- ������, ��� ���� �������� ������ ����� ��������. ����� ���� ��������, ��� �� ��� ������������� ������? ��, ������ � �����. ������. ������ �� ������� ����� ����� � ��������, ��� ���� ������ ����� ������������ -->

<p><b>����� ����������.</b> �� ������ �� ���������, ��� ����� ��������� �������� <u>��������������� ������� �� ������</u>. �� �� ������ ���, � � ����������� <u>���������� ��������������� ��������������� � ������� ��������</u>.</p>
<p>��� �� ���� ������������ ���������� <u>��������������� ���������������</u>?<br>
���������� �������� �� ������� ����� � ���������� �����, ����������� ��� �������������� ��� � ����� �����������, � ��� �������������� ���������� � ��������� �����. <br><br>
����� ����, ��� � ����� ���� �� ������� ��� ����������� ������, ��� ����� ���������� ��������� 3 ������ � ������ �������� ��� �������� ��� ������� �����. ����� �� ��������� ������, ��� ������ �������� � 
����� ����������� ��� ������ ������������ RFC-6214, � ������� ��� ����������� ���������� - ��� ���� ������� ������������ ��������, ����������� ����, ���������� � ����� ���� (��� ������������� ��������). ��� ��, ��� Arduino-������ 
������������ ���� ��� ��������� ����������� ��������� ���� � ������.<p>

<p><b>�������� ��������!</b> ��-�� ������� �������� ��������� ������������� �������� ������ ���� ��� � �����. ����������� �������� ���� ����������.</p>

<p> <hr> <center><b>��� ��������� ��������, ��������� ����� ����.</b><br><br></center>

<!-- ��. ���� �����������. ��� ������� ������ name, family, zodiac_me, weather, analog (1). �� ��������� - �����, �� �����. -->

<table width="80%" align="center" border="1">
<form action="step_two.php" method="post">

<tr><td width="50%"><b>���� ���</b>:</td> <td><input type="text" name="name" width="100%"></td><tr>
<tr><td width="50%"><b>���� �������</b>:</td> <td><input type="text" name="family" size="20" width="100%"></td></tr>

<tr><td width="50%"><b>��� ���</b>:</td> <td>
<select name="sex">
  <option value="1">�������</option>
  <option value="2">�������</option>
  <option value="3">������</option>
  <option value="4">�����</option>

 </select>

<tr><td width="50%"><b>��� ���� ������� </b>:</td> <td>
<select name="zodiac_me">
  <option value="1">����</option>
  <option value="2">�����</option>
  <option value="3">��������</option>
  <option value="4">���</option>
  <option value="5">���</option>
  <option value="6">����</option>
  <option value="7">����</option>
  <option value="8">��������</option>
  <option value="9">���������</option>
  <option value="10">�������</option>
  <option value="11">�������</option>
  <option value="12">�������</option>
  <option value="13">����</option>

 </select>
</td></tr>

<tr><td width="50%"><b>���� ������� ������ �� ����� ���������</b>:<br><small>���������� ����������</small></td> <td>
<select name="zodiac_you">
  <option value="1">����</option>
  <option value="2">�����</option>
  <option value="3">��������</option>
  <option value="4">���</option>
  <option value="5">���</option>
  <option value="6">����</option>
  <option value="7">����</option>
  <option value="8">��������</option>
  <option value="9">���������</option>
  <option value="10">�������</option>
  <option value="11">�������</option>
  <option value="12">�������</option>
  <option value="13">����</option>

 </select>
</td></tr> 

<tr><td width="50%"><b>����� ������ ��������</b>:</td> <td>
<select name="location">
  <option value="1">������</option>
  <option value="2">����</option>
  <option value="3">�������� �������</option>
  <option value="4">����� �������</option>
  <option value="5">���������</option>
  <option value="6">������</option>

 </select>

<tr><td width="50%"><b>�� ����� �� ���� �</b>:<br><small>���������� ����������</small></td> <td>
<select name="device">
  <option value="1">���������</option>
  <option value="2">�������</option>
  <option value="3">�������</option>
  <option value="4">�������</option>
  <option value="5">������ ����������, ����. �����-����</option>

 </select>
</td></tr> 

<tr><td width="50%"><b>������ �� ����� �����</b>:<br><small>������ �� ������������� ���������� ����</small></td> <td>
<select name="weather">
  <option value="1">������</option>
  <option value="2">�������</option>
  <option value="3">��������</option>
  <option value="4">�����, ������</option>
  <option value="5">�����</option>
  <option value="6">����</option>

 </select>
 <!-- � ��� �����, ���� ���� �������� ������ ����� ��� ������ �� ������ -->
 <input type="hidden" name="analog" value="1">

</td></tr>

</table><br> 
<center><?php echo $access ; ?></center>

</form> <br><br>
</p>

<!-- ����! � ��� ��������� �� ������ �����. -->


</td>

<!-- /�� -->

</tr></table>    

<br><br>
<center>(c) <a href="http://lionovsky.us">Lionovsky</a>, 2019</center>
 
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47424376 = new Ya.Metrika2({
                    id:47424376,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424376" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>
