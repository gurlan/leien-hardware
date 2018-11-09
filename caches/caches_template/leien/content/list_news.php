<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="news w1200">
        <div class="index_publicTop">
            <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>
            <i></i>
        </div>  
        <div class="news_bom fix">
            <ul class="newsul fix">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5503efd86dfc2981eb2f3fa8df82ee4a&action=lists&catid=%24catid&num=5&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>">
                       <div class="news_left le">
                            <img src="<?php echo $r['thumb'];?>">
                       </div>
                       <div class="news_right rt">
                            <h3><?php echo $r['title'];?></h3>
                           <p>
                               <?php echo $r['description'];?>
                           </p>
                           <i><?php echo date("Y-m-d H:i",$r[inputtime]);?></i>
                            <em>查看详情</em>
                       </div>
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <div class="link">
                <ul class="fix">
                    <?php echo $pages;?>
                </ul>
            </div>
        </div>
       <!--  -->
    </div>
<?php include template("content","foot"); ?>