<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="w1200">
    <div class="footer">
        <div class="w1200">
            <div class="footer_top fix">
                <div class="w1200">
                    <span>友情链接：</span>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3244aa3eeaa54b0456df16d44fbd5356&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                    <a href="<?php echo $v['url'];?>"><?php echo $v['name'];?></a>
                    <?php $n++;}unset($n); ?>
                </div>
            </div>
            <div class="footer_main fix">
                <div class="footer_main1">
                    <img src="<?php echo $config['thumb'];?>">
                </div>
                <div class="footer_main2">
                    <p> 地 址：<?php echo $config['addr'];?></p>
                    <p>传 真：<?php echo $config['fax'];?> 联系电话：<?php echo $config['tel'];?></p>
                    <p><?php echo $config['beian'];?> <?php echo $config['copyright'];?>@版权所有</p>
                </div>
                <div class="footer_main3">
                    <em>
                        <img src="<?php echo $config['qrcode1'];?>">
                        <p>微信订阅号</p>
                    </em>
                    <em>
                        <img src="<?php echo $config['qrcode2'];?>">
                        <p>微信服务号</p>
                    </em>
                </div>
            </div>
            <div class="footer_bom">
                <div class="w1200">
                    <p><?php echo $config['bottom'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>