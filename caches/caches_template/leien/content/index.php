<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
    <div class="index_product w1200">
        <div class="index_publicTop">
            <h3>产品分类</h3>
            <i></i>
            <p><?php echo $CATEGORYS['22']['sub_title'];?></p>
        </div>
        <div class="index_productBom fix">
            <div class="hd fix">
                <em class="fix">
                    <h3>产品分类</h3>
                    <i></i>
                </em>
                <ul class="fix">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e735926253550d981d3a349ea0db2537&action=category&catid=22&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                    <li><span><?php echo $r['catname'];?></span></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </ul>
            </div>
            <div class="bd fix">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e735926253550d981d3a349ea0db2537&action=category&catid=22&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <ul class="fix productul">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7fe2ba8e1806adfe9950a27281f1a963&action=lists&catid=%24r%5Bcatid%5D&num=9&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'9',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>">
                            <div class="productTu">
                                <img src="<?php echo $r['thumb'];?>">
                                <em>
                                    <h3><?php echo $r['title'];?></h3>
                                    <i></i>
                                    <p><?php echo $r['description'];?></p>
                                </em>
                            </div>
                            <div class="productWz">
                                <p><?php echo $r['title'];?></p>
                            </div>
                        </a>
                    </li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php $n++;}unset($n); ?>
            </div>
        </div>
        <a href="<?php echo $CATEGORYS['22']['url'];?>" class="more">
             MORE  +
        </a>
    </div>
    <script>
        jQuery(".index_productBom").slide({});
    </script>
    <div class="w1200">
        <div class="keynote">
            <div class="w1200">

                <?php echo $config['ad'];?>
            </div>
        </div>
    </div>
    <div class="index_about w1200">
        <div class="index_publicTop">
            <h3>关于我们</h3>
            <i></i>
            <p><?php echo $CATEGORYS['126']['sub_title'];?></p>
        </div>
        <div class="index_aboutBom fix">
            <div class="index_aboutBomLe">
                <img src="<?php echo $CATEGORYS['126']['image'];?>">
            </div>
            <div class="index_aboutBomRt">
                <h3>北京雷恩创业科技发展有限公司</h3>
                <i></i>
                <p><?php echo str_cut(strip_tags($CATEGORYS[126][description]),630)?></p>
                <a href="<?php echo $CATEGORYS['126']['url'];?>" class="more">
                    MORE  +
                </a>
            </div>
        </div>
    </div>
    <div class="w1200">
        <div class="index_news">
           <div class="w1200">
                <div class="index_publicTop">
                    <h3>新闻中心</h3>
                    <i></i>
                    <p><?php echo $CATEGORYS['10']['sub_title'];?></p>
                </div>
                <div class="index_newsBom fix">
                    <div class="index_newsLeft">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a08c1093fa5f75afe07bd414501569db&action=lists&catid=10&num=1&order=listorder+ASC%2Cinputtime+desc&thumb=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'10','order'=>'listorder ASC,inputtime desc','thumb'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder ASC,inputtime desc','thumb'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>">
                            <img src="<?php echo $r['thumb'];?>">
                            <p><?php echo $r['title'];?> </p>
                        </a>
                        <?php $n++;}unset($n); ?>
                    </div>
                    <div class="index_newsRight">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f6e156bafa3f9e05a82cee18a406c498&action=lists&catid=10&num=5&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'10','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li href="fix">
                                <a href="<?php echo $r['url'];?>">
                                    <p><?php echo $r['title'];?></p>
                                    <i><?php echo date("Y-m-d",$r[inputtime]);?></i>
                                </a>
                            </li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                </div>
                <a href="<?php echo $CATEGORYS['10']['url'];?>" class="more">
                    MORE  +
                </a>
           </div> 
        </div>
    </div>
<?php include template("content","foot"); ?>