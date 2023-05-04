<?
  $type = isset($args['type']) ? $args['type'] : 'left';
  if($type === 'left') {
    $background_type = '
      left: 0px; 
      top: calc(765px - 650px);
      width: 100%;
      height: 1300px;
      display: flex;
      overflow: hidden;
      position: absolute;
      justify-content: end;
      align-items: center;
    ';
    $inner_style = '
      left: 0px;
    ';
  } else {
    $background_type = '
      left: calc(100% - 650px);
      top: -180px;
      width: 650px;
      height: 1300px;
      display: flex;
      overflow: hidden;
      position: absolute;
      justify-content: end;
      align-items: center;
    ';
    $inner_style = '
      right: 0px;
  ';
  }
?>
<div class="ripple-background-wrapper">
  <div class="ripple-background" style="<?=$background_type?>">
    <div class="ripple-background-inner" style="<?=$inner_style?>">
      <div class="circle large shade1"></div>
      <div class="circle medium shade2"></div>
      <div class="circle small shade3"></div>
    </div>
  </div>
</div>