<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">

    <script type="text/javascript" src="/statics/hard/js/jquery1.42.min.js"></script>
    <script type="text/javascript" src="/statics/hard/js/jquery.SuperSlide.2.1.1.js"></script>
    <link rel="stylesheet" href="/statics/hard/css/style.css">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>

    <?php $tmp=explode(',',$CATEGORYS[$catid][arrparentid]);$num=count($tmp);?>
    <?php if($num==1) { ?>

    <?php $cat=$catid;?>

    <?php } else { ?>

    <?php $cat=$tmp[1];?>

    <?php } ?>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c7d458a1e72062ec730d2aa044a863e7&action=lists&catid=26&num=1&moreinfo=1+order%3D&return=config\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$config = $content_tag->lists(array('catid'=>'26','moreinfo'=>'1 order=','limit'=>'1',));}?>
    <?php $config = $config[1]?>

<body>
<div class="common"  id="anchor">
    <div class="head" class="fix">
        <div class="w1200">
            <p><?php echo $config['top_welcome'];?></p>
            <span><?php echo $config['top_tel'];?></span>
        </div>
    </div>
    <div class="nav fix">
        <div class="w1200 fix">
            <div class="logo">
                <img src="<?php echo $config['top_logo'];?>">
            </div>
            <ul class="navul fix">
                <li class="nLi <?php if($catid==0) { ?> on <?php } ?>">
                    <h3><a href="/">网站首页</a></h3>
                </li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>

                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li class="nLi <?php if($cat==$v[catid]) { ?> on <?php } ?>">
                    <h3><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></h3>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0c1ce63d1779fe818e0c6dd626ba8d02&action=category&catid=%24v%5B%27catid%27%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$v['catid'],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php if($data){  ?>
                    <div class="sub">
                        <ul class="fix">
                            <?php $n=1;if(is_array($data)) foreach($data AS $l) { ?>
                            <li><a href="<?php echo $l['url'];?>"><?php echo $l['catname'];?></a></li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                    </div>
                    <?php } ?>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

            </ul>
            <script id="jsID" type="text/javascript">
                jQuery(".navul").slide({
                    type:"menu",// 效果类型，针对菜单/导航而引入的参数（默认slide）
                    titCell:".nLi", //鼠标触发对象
                    targetCell:".sub", //titCell里面包含的要显示/消失的对象
                    effect:"slideDown", //targetCell下拉效果
                    delayTime:300 , //效果时间
                    triggerTime:0, //鼠标延迟触发时间（默认150）
                    returnDefault:true //   鼠标移走后返回默认状态，例如默认频道是“预告片”，鼠标移走后会返回“预告片”（默认false）
                });
            </script>
        </div>
    </div>
    <div class="banner w1200">
        <div class="banner-img fix">
            <div class="hd">
                <?php $banner = getads(11)?>
                <ul>
                    <?php $n=1;if(is_array($banner[d])) foreach($banner[d] AS $r) { ?>
                    <li></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
            <div class="bd">
                <ul>
                    <?php $n=1;if(is_array($banner[d])) foreach($banner[d] AS $r) { ?>
                    <li><a href="<?php echo $r['linkurl'];?>"><img src="<?php echo $r['imageurl'];?>" /></a></li>
                    <?php $n++;}unset($n); ?>

                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".banner-img").slide({mainCell:".bd ul",autoPlay:true});
        </script>
    </div>
</div>