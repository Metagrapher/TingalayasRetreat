<?php
/**
 * Theme wrapper
 *
 * @link http://trim.io/an-introduction-to-the-trim-theme-wrapper/
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */
function trim_template_path() {
  return TRim_Wrapping::$main_template;
}

function trim_sidebar_path() {
  return new TRim_Wrapping('templates/sidebar.php');
}

class TRim_Wrapping {
  // Stores the full path to the main template file
  static $main_template;

  // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
  static $base;

  public function __construct($template = 'base.php') {
    $this->slug = basename($template, '.php');
    $this->templates = array($template);

    if (self::$base) {
      $str = substr($template, 0, -4);
      array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
    }
  }

  public function __toString() {
    $this->templates = apply_filters('trim_wrap_' . $this->slug, $this->templates);
    return locate_template($this->templates);
  }

  static function wrap($main) {
    self::$main_template = $main;
    self::$base = basename(self::$main_template, '.php');

    if (self::$base === 'index') {
      self::$base = false;
    }

    return new TRim_Wrapping();
  }
}
add_filter('template_include', array('TRim_Wrapping', 'wrap'), 99);
