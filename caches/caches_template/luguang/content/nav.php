<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="main_nav le">
    <em>
        <h3><?php echo $CATEGORYS[$cat]['catname'];?></h3>
        <span></span>
    </em>
    <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dff9e03dea511dbf45a15693c096470a&action=category&catid=%24cat&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$cat,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
        <li <?php if($k==$catid) { ?> class="on"<?php } ?>>
            <a href="<?php echo $r['url'];?>" class="xiagao"><?php echo $r['catname'];?></a>
        </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>