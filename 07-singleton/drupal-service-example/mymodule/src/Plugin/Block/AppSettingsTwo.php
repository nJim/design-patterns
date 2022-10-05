<?php

namespace Drupal\mymodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\mymodule\AppSettings;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @Block(
 *   id = "app_settings_two_block",
 *   admin_label = @Translation("App Settings Two"),
 *   category = @Translation("Test"),
 * )
 */
class AppSettingsTwo extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The AppSettings service.
   *
   * @var \Drupal\mymodule\AppSettings
   */
  protected $appSettings;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('ys_core.app_settings'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, AppSettings $app_settings) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->appSettings = $app_settings;
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->appSettings->getTheme(),
    ];
  }

}
