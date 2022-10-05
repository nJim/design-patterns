<?php
/**
 * AppSettings class.
 *
 * A singletonn for storing global app settings.
 */
class AppSettings {
  /**
   * An innstance of this object.
   *
   * @var AppSettings
   */
  private static $instance;

  /**
   * The theme setting.
   *
   * @var string
   */
  public $theme = "basic";

  /**
   * Protected constructor.
   */
  protected function __construct() {}

  /**
   * Get an instance of this object.
   *
   * @return AppSettings
   *   An insntance of this class.
   */
  public static function getInstance() {
    if (!isset(self::$instance)) {
      self::$instance = new AppSettings();
    }
    return self::$instance;
  }

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
