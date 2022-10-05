<?php

namespace Drupal\ys_core;

/**
 * AppSettings class.
 *
 * A class that stores global application settings.
 */
class AppSettings {

  /**
   * The theme setting.
   *
   * @var string
   */
  public $theme = "basic";

  /**
   * Returns the current theme.
   *
   * @param string $theme
   *   The name of the new theme.
   */
  public function setTheme($theme) {
    $this->theme = $theme;
  }

  /**
   * Returns the current theme.
   *
   * @return string
   *   The current theme.
   */
  public function getTheme() {
    return $this->theme;
  }

}
