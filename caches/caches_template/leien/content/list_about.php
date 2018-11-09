<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
    <div class="about w1200">
        <div class="index_publicTop">
            <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>
            <i></i>
        </div>
        <div class="aboutBom fix">
            <p><?php echo $CATEGORYS[$catid]['description'];?></p>
            <div class="about_div">
                <div class="w1200">
                    <div class="bd">
                        <div class="tempWrap" style="overflow:hidden; position:relative; width:1280px">
                            <ul class="picList" style="width: 3520px; position: relative; overflow: hidden; padding: 0px; margin: 0px; left: -673px;">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7b2af6583ca714fbfbb7074e52aed329&action=lists&catid=%24catid&num=50&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 50;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <li class="clone" style="float: left; width: 260px;">
                                    <div class="pic"><img src="<?php echo $r['thumb'];?>"></div>
                                </li>
                                <?php $n++;}unset($n); ?>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript">
        jQuery(".about_div").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
        </script>
                </div>
            </div>
        </div>
       <!--  -->
    </div>
<?php include template("content","foot"); ?>