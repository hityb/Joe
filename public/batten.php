<?php if (sizeof($this->categories) > 0 || $this->user->uid == $this->authorId) : ?>
  <div class="joe_detail__category">
    <?php if (sizeof($this->categories) > 0) : ?>
      <?php foreach (array_slice($this->categories, 0, 5) as $key => $item) : ?>
        <a href="<?php echo $item['permalink']; ?>" class="item item-<?php echo $key ?>" title="<?php echo $item['name']; ?>"><?php echo $item['name']; ?></a>
      <?php endforeach; ?>
    <?php endif; ?>
    <?php if ($this->user->uid == $this->authorId) : ?>
      <?php if ($this->is('post')) : ?>
        <a class="edit" target="_blank" rel="noopener noreferrer" href="<?php $this->options->adminUrl(); ?>write-post.php?cid=<?php echo $this->cid; ?>">编辑文章</a>
      <?php else : ?>
        <a class="edit" target="_blank" rel="noopener noreferrer" href="<?php $this->options->adminUrl(); ?>write-page.php?cid=<?php echo $this->cid; ?>">编辑页面</a>
      <?php endif; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>

<h1 class="joe_detail__title"><?php $this->title() ?></h1>
<div class="joe_detail__count">
  <div class="joe_detail__count-information">
    <time class="joe_detail__count-created" datetime="<?php $this->date('m/d'); ?>"><?php $this->date('Y/m/d'); ?></time>
    <div class="meta">
      <div class="item">
        <span class="text"><?php $this->commentsNum('%d'); ?> 评论</span>
        <span class="line">/</span>
        <span class="text" id="Joe_Article_Views"><?php _getViews($this); ?> 阅读</span>
      </div>
    </div>
  </div>
  
</div>