<?php
$host = '127.0.0.1';     //MySQL���ݿ��������ַ
$userName = 'root';     //�û���
$password = 'root';     //����
$connID = mysql_connect($host, $userName, $password);     //���������ݿ������

mysql_select_db('test', $connID);     //ѡ�����ݿ�
mysql_query('set names gbk');     //�����ַ���
?>