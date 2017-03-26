<ul>
  <?php foreach ($tree as $key => $item): ?>
    <?php $term = $item['term'];?>
    <li class="<?php if (count($item['children'])) echo 'parent_li'?>">
      <span title="Collapse this branch"><i class="icon-minus-sign"></i>
        <?php if (count($item['children'])):?>
          <?php echo $term->name?>
        <?php else: ?>
          <a href="<?php echo url('kejichuangxinzhengcetixi/'. $term->tid)?>"><?php echo $term->name?></a>
        <?php endif;?>
      </span>
      <?php
        if ( count($item['children'])>0) {
          echo theme('tree_items', array('tree' => $item['children']));
        }
      ?>
    </li>
  <?php endforeach;?>
</ul>