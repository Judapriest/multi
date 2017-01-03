<?php

namespace Drupal\title\Controller;

class NodeViewController extends \Drupal\node\Controller\NodeViewController {

  /**
   * @param array $page
   * @return array
   */
  public function buildTitle(array $page) {
    $config = \Drupal::service('title.config_manager');

    if ($config->getEnabled($page['#node']->bundle())) {
      $page['#title'] = FALSE;
      return $page;
    }

    return parent::buildTitle($page);
  }
}