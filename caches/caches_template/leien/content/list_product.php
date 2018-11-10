<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
<div class="product w1200">
    <div class="index_publicTop">
        <h3>产品分类</h3>
        <i></i>
    </div>
    <div class="productBom fix">
        <div class="publicBom_Left le">
            <em class="fix">
                <h3>产品分类</h3>
                <i></i>
            </em>
            <ul class="menue">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a4a7291a866f66781d17f65896e5e85&action=category&catid=22&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                <li class="nli <?php if($CATEGORYS[$catid][parentid]==$k) { ?>on<?php } ?>"><a class="xiao"><?php echo $r['catname'];?></a>
                    <ul class="danav">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c5796102fc450f9052b61ce2eb23536&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $l=>$v) { ?>
                        <li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <script type="text/javascript">
            jQuery(".menue").slide({
                type: "menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
                titCell: ".nli", //鼠标触发对象
                targetCell: ".danav", //titCell里面包含的要显示/消失的对象
                effect: "slideDown", //targetCell下拉效果
                delayTime: 300, //效果时间
                triggerTime: 0, //鼠标延迟触发时间（默认150）
                returnDefault: true //   鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
            });
        </script>
        <div class="productBom_Right fix">
            <ul class="productul fix">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=24fb4ae845dc7de1e5648b5319531c32&action=lists&catid=%24catid&num=9&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>">
                        <div class="productTu">
                            <img src="<?php echo $r['thumb'];?>">
                            <em>
                                <h3><?php echo $r['title'];?></h3>
                                <i></i>

                            </em>
                        </div>
                        <div class="productWz">
                            <p><?php echo $r['description'];?></p>
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
    </div>
    <!--  -->
</div>
<?php include template("content","foot"); ?>