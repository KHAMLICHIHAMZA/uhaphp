<?php
class View {
  private $vars;
  public function construct(){}
  public function render($controllername,$viewname){
    if (isset($this->vars)){
      extract($this->vars);
    }
    echo '<!doctype html>';
    echo '<html lang="fr">';
    echo '<head>';
    include VIEWS.DS.'common'.DS.'head.php';
    echo '</head>';
    echo '<body>';
    include VIEWS.DS.'common'.DS.'nav.php';
    include VIEWS.DS.strtolower($controllername).'_'.strtolower($viewname).'.php';
    include VIEWS.DS.'common'.DS.'bs_js.php';
    echo '<body>';
  }
  public function setVar($key, $value = null){
    if (is_array($key)){
      $this->vars = $key;
    } else {
      $this->vars[$key] = $value;
    }
  }
}
?>