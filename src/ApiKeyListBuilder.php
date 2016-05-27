<?php

/**
 * @file
 * Contains \Drupal\api_key_auth\ApiKeyListBuilder.
 */

namespace Drupal\api_key_auth;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Provides a listing of Api key entities.
 */
class ApiKeyListBuilder extends ConfigEntityListBuilder {
  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Machine name');
    $header['key'] = $this->t('API Key');
    $header['user_uuid'] = $this->t('User UUID');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    $row['id'] = $entity->id();
    $row['key'] = $entity->key;
    $row['user_uuid'] = $entity->user_uuid;

    // You probably want a few more properties here...
    return $row + parent::buildRow($entity);
  }

}
