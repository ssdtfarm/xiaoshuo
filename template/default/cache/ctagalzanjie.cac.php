<?php
$ctagalzanjie_0 = array (
  'cname' => '�����½�',
  'ename' => 'alzanjie',
  'tclass' => 'alarchives',
  'template' => '	{if $oldvolid != $v[\'volid\']}</ul><h1><?=@$volidsarr[$v[\'volid\']]?></h1><ul>{/if}<li>{if ($v[\'ccid3\'] != 0)}<font>[VIP]</font>{/if}<a href="{arcurl}">{subject}</a><span>{u$createdate_nj}</span></li><? $oldvolid=$v[\'volid\'];?>',
  'setting' => 
  array (
    'limits' => 10000,
    'closed' => '-1',
    'abover' => '-1',
  ),
  'disabled' => 0,
) ;
?>