<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","head"); ?>
<?php include template("content","position"); ?>
<div class="newsxq w1200">
    <h3><?php echo $title;?></h3>
    <em>
        <i>作者： <?php echo $author;?></i>
        <i>来源：<?php echo $copyfrom;?></i>
        <i>日期：<?php echo $inputtime;?></i>
        <i id="hits"></i>
        <i>标签：<?php echo $tags;?></i>
    </em>
    <p><?php echo $content;?></p>
    <b>
        <a href="<?php echo $previous_page['url'];?>">上一篇：<?php echo $previous_page['title'];?></a>
        <a href="<?php echo $next_page['url'];?>">下一篇：<?php echo $next_page['title'];?></a>
    </b>
</div>
<?php include template("content","foot"); ?>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<script>
    $('#hits').prepend('人气：')
</script>