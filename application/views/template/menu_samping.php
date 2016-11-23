<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <?php
      foreach ($menu as $value) {
        if ($value == $this->router->fetch_class()) {
          $active = 'class="active"';
        } else {
          $active = '';
        }
      ?>
        <li <?=$active?>>
          <a href="<?php echo base_url($value); ?>"><?=ucfirst($value)?></a>
        </li>
      <?php
      }
    ?>
  </ul>
</div>