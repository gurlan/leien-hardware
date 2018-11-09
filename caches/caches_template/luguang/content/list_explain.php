<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>

<?php include template("content","position"); ?>

    <div class="main w1200 fix">

        <?php include template("content","nav"); ?>

        <div class="explain mian_right rt">

            <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>

            <ul class="fix explain_ul">

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51b7d2c9e82aa55e526f74b96522a0cc&action=lists&catid=%24catid&num=9&moreinfo=1+order%3D&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                <li class="fix">

					<span><?php echo $r['title'];?></span>



					<a href="<?php echo json_decode($r[file],true)[0][fileurl]?>" target="_blank">立即下载</a>

                </li>

                <?php $n++;}unset($n); ?>

            </ul>

            <div class="link">

                <ul class="fix">

                    <?php echo $pages;?>

                </ul> 

            </div>

        </div>

    </div>

<?php include template("content","foot"); ?>