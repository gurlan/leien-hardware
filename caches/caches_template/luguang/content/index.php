<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>

    </div>
    <div class="notice">
        <div class="w1200">
            <div class="bd">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1ffe6d184cf512d376ef9df1d222913&action=position&posid=18&order=listorder+ASC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'6',));}?>
                <ul>
                    <?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>
                    <li><a href="<?php echo $val['url'];?>"><?php echo $val['title'];?></a></li>
                    <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </div>
       </div>
    </div>    <script type="text/javascript">    	jQuery(".notice").slide({mainCell:".bd ul",autoPlay:true,effect:"topMarquee",interTime:50,trigger:"click"});    </script>
    <div class="w1200">
        <div class="index_fresh">
            <div class="w1200">
                <div class="index_freshTop">
                    <h3>新品推荐</h3>
                    <em class="fix">
                        <i class="le"></i><span>RECOMMENDATION</span><i class="rt"></i>
                    </em>
                </div>
                <div class="index_freshBom w1200">
                    <div class="bd">
                        <ul class="fix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=91de5a50a8f0d11d77358ef38b7a34c4&action=position&posid=19&order=listorder+ASC&num=100&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'100',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>
                                <a href="<?php echo $r['url'];?>">
                                    <i><img src="<?php echo $r['thumb'];?>" width="320px"height="225px"></i>
                                    <em>
                                        <img src="<?php echo IMG_PATH;?>index_newest1.png">
                                        <span>查看详情</span>
                                    </em>
                                    <b><img src="<?php echo IMG_PATH;?>index_newest.png"></b>
                                    <p><?php echo $r['title'];?></p>
                                </a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    <a href="<?php echo $CATEGORYS['22']['url'];?>" class="more">查看更多  +</a>
                </div>
                <script type="text/javascript">
                jQuery(".index_freshBom").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:4,interTime:50});
                </script>
            </div>
        </div>
    </div>
    <div class="index_product w1200">
        <div class="index_productTop">
            <h3>产品分类</h3>
            <em class="fix">
                <i class="le"></i><span>PRODUCT  CATEGORY</span><i class="rt"></i>
            </em>
        </div>
        <div class="index_productBom fix le">
            <div class="hd fix">
                <ul class="fix">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a4a7291a866f66781d17f65896e5e85&action=category&catid=22&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                    <li><span><?php echo $r['catname'];?></span></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="bd fix">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4a9cb0ae51ca5a3f5adda992a966f471&action=category&catid=22&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'22','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>

                <ul class="fix">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d7f64cd1fded9cc8653c18a491a92e0f&action=lists&moreinfo=1&catid=%24r%5Bcatid%5D&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('moreinfo'=>'1','catid'=>$r[catid],'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('moreinfo'=>'1','catid'=>$r[catid],'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <?php $i=1?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                   <li <?php if($i%3==1) { ?>class="one"<?php } ?>>
                       <a href="<?php echo $v['url'];?>">
                            <img src="<?php echo $v['thumb'];?>">
                            <h3><?php echo $v['title'];?></h3>
                            <p><?php echo str_cut(strip_tags($v[introuce]),160)?></p>
                       </a>
                   </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <a href="" class="more">查看更多  +</a>
        </div>
        <script>
            jQuery(".index_productBom").slide({});
        </script>
    </div>
    <div class="w1200">
        <div class="keynote">
            <div class="w1200">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff3088f2b01d7f4641badb5ff777000b&action=lists&catid=26&num=1&moreinfo=1+order%3D&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <?php echo $data['1']['ad'];?>
            </div>
        </div>
    </div>
    <div class="w1200">
        <div class="index_news">
            <div class="w1200">
                <div class="index_newsTop">
                    <h3>新闻中心</h3>
                    <em class="fix">
                        <i class="le"></i><span>NEWS CENTER</span><i class="rt"></i>
                    </em>
                </div>
                <div class="index_newsBom">
                    <div class="hd">
                        <ul>
                            <li><span>全部新闻</span></li>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45150b371905ff48e6be3b2e91c86aeb&action=category&catid=10&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $k=>$r) { ?>
                            <li><span><?php echo $r['catname'];?></span></li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    <div class="bd">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8eb82e943cd53bb194e9812dc4add5b4&action=lists&catid=10&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'10','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'10','order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $i=1?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li <?php if($i%2==1) { ?>class="one"<?php } ?>>
                                <a href="<?php echo $v['url'];?>">
                                    <b><img src="<?php echo $v['thumb'];?>"></b>
                                    <em>
                                        <span>
                                          <?php echo $v['title'];?>
                                            <strong></strong>
                                        </span>
                                        <p>
                                            <?php echo $v['description'];?>
                                        </p>
                                        <i><?php echo date("Y-m-d  H:i",$v[inputtime]);?></i>
                                    </em>
                                </a>
                            </li>
                            <?php $i++?>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>


                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=45150b371905ff48e6be3b2e91c86aeb&action=category&catid=10&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4469cb684cf841062e6aee3d22c9bfae&action=lists&catid=%24r%5Bcatid%5D&num=8&order=listorder+ASC%2Cinputtime+desc&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$r[catid],'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$r[catid],'order'=>'listorder ASC,inputtime desc','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $i=1?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <li  <?php if($i%2==1) { ?>class="one"<?php } ?>>
                                <a href="<?php echo $v['url'];?>">
                                    <b><img src="<?php echo $v['thumb'];?>"></b>
                                    <em>
                                        <span>
                                         <?php echo $v['title'];?>
                                            <strong></strong>
                                        </span>
                                        <p>
                                            <?php echo $v['description'];?>
                                        </p>
                                        <i><?php echo date("Y-m-d  H:i",$v[inputtime]);?></i>
                                    </em>
                                </a>
                            </li>
                            <?php $i++?>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                    </div>
                    <a href="<?php echo $CATEGORYS['10']['url'];?>" class="more">查看更多  +</a>
                </div>
                <script>
                    jQuery(".index_newsBom").slide({});
                </script>
            </div>
        </div>
    </div>
    <div class="w1200">
        <div class="index_contact">
            <div class="w1200">
                <div class="index_contactTop">
                    <h3>联系我们</h3>
                    <em class="fix">
                        <i class="le"></i><span>CONTACT US</span><i class="rt"></i>
                    </em>
                </div>
                <div class="index_contactBom fix">
                    <div class="index_contactBom_left" id="dituContent">

                    </div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff3088f2b01d7f4641badb5ff777000b&action=lists&catid=26&num=1&moreinfo=1+order%3D&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                    <div class="index_contentBom_right">
                        <ul>
                            <li class="li1">
                                <em class="fix">
                                    <span>地址：</span>
                                    <p><?php echo $data['1']['addr'];?></p>
                                </em>
                            </li>
                            <li class="li2">
                                <em class="fix">
                                    <span>电话：</span>
                                    <p><?php echo $data['1']['tel'];?></p>
                                </em>
                            </li>
                            <li class="li3">
                                <em class="fix">
                                    <span>邮箱：</span>
                                    <p><?php echo $data['1']['email'];?></p>
                                </em>
                            </li>
                            <li class="li4">
                                <em class="fix">
                                    <span>传真：</span>
                                    <p><?php echo $data['1']['fax'];?></p>
                                </em>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $jw = explode(',',$data[1]['jw']);  $lat =$jw[0];$lng=$jw[1];?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=56srZYI3vAB9XzW2B0u544hHhsdWdE7X"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){
        map = new BMap.Map("dituContent");
        map.centerAndZoom(new BMap.Point(<?php echo $lng;?>,<?php echo $lat;?>),18);
    }
    function setMapEvent(){
        map.enableScrollWheelZoom();
        map.enableKeyboard();
        map.enableDragging();
        map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
        target.addEventListener("click",function(){
            target.openInfoWindow(window);
        });
    }
    function addMapOverlay(){
        var markers = [

            {content:"鹿光衡器",title:"鹿光衡器",imageOffset: {width:-46,height:-21},position:{lat:<?php echo $lat;?>,lng:<?php echo $lng;?>}}
        ];
        for(var index = 0; index < markers.length; index++ ){
            var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
            var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
                    imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
                })});
            var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
            var opts = {
                width: 200,
                title: markers[index].title,
                enableMessage: false
            };
            var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
            marker.setLabel(label);
            addClickHandler(marker,infoWindow);
            map.addOverlay(marker);
        };
    }
    //向地图添加控件
    function addMapControl(){
        var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
        map.addControl(scaleControl);
        var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(navControl);
        var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
        map.addControl(overviewControl);
    }
    var map;
    initMap();
</script>
<?php include template("content","foot"); ?>