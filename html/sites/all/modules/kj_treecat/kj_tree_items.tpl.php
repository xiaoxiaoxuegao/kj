<ul>
  <?php foreach ($tree as $term): ?>
    <?php $children = taxonomy_get_tree($term->vid, $term->tid, 1);?>
    <li class="<?php if (count($children)) echo 'parent_li'?>">
      <span title="Collapse this branch"><i class="icon-minus-sign"></i>
        <?php if (count($children)):?>
          <?php echo $term->name?>
        <?php else: ?>
          <a href="<?php echo url('kejichuangxinzhengcetixi/'. $term->tid)?>"><?php echo $term->name?></a>
        <?php endif;?>
      </span>
      <?php
        if ( count($children)>0) {
          echo theme('tree_items', array('tree' => $children));
        }
      ?>
    </li>
  <?php endforeach;?>
</ul>