<script type="text/javascript">var CMS_ABS='<?=$cms_abs?>',IXDIR = '<?=$tplurl?>css/', charset = 'gbk',allowfloatwin = '1',floatwidth='800',floatheight='550'</script>
<script type="text/javascript" src="<?=$cms_abs?>include/js/langs.js"></script>
<script type="text/javascript" src="<?=$cms_abs?>include/js/common.js"></script>
<script type="text/javascript" src="<?=$cms_abs?>include/js/floatwin.js"></script>
<div id="append_parent"></div>
<?php $v=_ctag_parse(array("ename" => "login_userinfo","tclass" => "userinfos","disabled" => "0","usource" => "0",));if(!empty($v)){_aenter($v);?>
	<link href="<?=$tplurl?>css/login.css" rel="stylesheet" type="text/css" />
<div id="topLogin">

&nbsp;&nbsp;欢迎您，<span class="urs"><?=$v['mname']?></span>&nbsp;&nbsp;

<a href="<?=$cms_abs?>adminm.php?action=favorites" target="_blank">我的书架</a>&nbsp;&nbsp;
<a href="<?=$cms_abs?>adminm.php" target="_blank">个人中心</a>&nbsp;&nbsp;



<span class="cRead"><a href="<?=$cms_abs?>adminm.php?action=utrans" target="_blank">申请作家</span>&nbsp;&nbsp;

<a href="<?=$cms_abs?>adminm.php?action=payonline" target="_blank">
    <SPAN class="bt_style" style="COLOR: rgb(204,51,0)">我要充值</SPAN>
</a> &nbsp;&nbsp;


<a href="<?=$cms_abs?>login.php?action=logout">退出登录</a>


</div><?php _aquit();} unset($v);?>
