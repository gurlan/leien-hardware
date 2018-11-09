<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>

<?php include template("content","position"); ?>

    <div class="main w1200 fix">

        <?php include template("content","nav"); ?>

        <div class="contact mian_right rt">

            <h3><?php echo $CATEGORYS[$catid]['catname'];?></h3>

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff3088f2b01d7f4641badb5ff777000b&action=lists&catid=26&num=1&moreinfo=1+order%3D&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>



            <ul class="fix">

                <li>

                    <img src="<?php echo IMG_PATH;?>contact_dz.png">

                    <span>公司地址</span>

                    <p><?php echo $data['1']['addr'];?></p>

                </li>

                <li>

                    <img src="<?php echo IMG_PATH;?>contact_dh.png">

                    <span>联系电话</span>

                    <p><?php echo $data['1']['tel'];?></p>

                </li>

                <li>

                    <img src="<?php echo IMG_PATH;?>contact_yx.png">

                    <span>联系邮箱</span>

                    <p><?php echo $data['1']['email'];?></p>

                </li>

            </ul>

            <em><div id="dituContent" style="width: 870px;height: 400px;"></div></em>

        </div>

    </div>

    <?php include template("content","foot"); ?>

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