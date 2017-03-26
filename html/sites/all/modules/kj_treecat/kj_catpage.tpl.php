<div class="tree well">
  <ul>
    <?php foreach($tree_list as  $term): ?>
      <li class="parent_li">
        <span title="Collapse this branch"><i class="icon-folder-open"></i><?php echo $term->name?></span>
        <?php echo theme('tree_items', array('tree' => taxonomy_get_tree($term->vid, $term->tid, 1) ))?>
      </li>
    <?php endforeach;?>
  </ul>
</div>