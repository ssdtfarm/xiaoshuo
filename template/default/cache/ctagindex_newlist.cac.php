<?php
$ctagindex_newlist_0 = array (
  'cname' => '首页最新连载小说',
  'ename' => 'index_newlist',
  'tclass' => 'archives',
  'template' => '	<li><span class="urs4 cGray">[{catalog}]</span> <span class="urs5"><a href="{arcurl}" title="{subject}">{u$subject30}</a></span>

{c$new_inarc [tclass=archive/] [val=h/][aid=$v[abnew]/] [album=0/]}<span class="urs3 cGray">{u$gx_min}</span><a href="{arcurl}" title="{subject}">{u$subject30}</a>{if ($h[\'ccid3\'])}<font style="color:red">[VIP]</font>{/if}{/c$new_inarc}

</li>',
  'setting' => 
  array (
    'limits' => 24,
    'nsid' => '-1',
    'chsource' => '2',
    'chids' => '4',
    'orderstr' => 'a.abnew DESC',
    'closed' => '-1',
    'abover' => '-1',
  ),
  'disabled' => 0,
) ;
?>