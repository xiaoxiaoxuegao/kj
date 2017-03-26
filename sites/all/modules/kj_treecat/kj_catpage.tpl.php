<div class="tree well">
  <ul>
    <?php foreach($tree_list as $name => $tree_items): ?>
      <li class="parent_li">
        <span title="Collapse this branch"><i class="icon-folder-open"></i><?php echo $name?></span>
        <?php echo theme('tree_items', array('tree' => $tree_items))?>
      </li>
    <?php endforeach;?>
  </ul>
</div>