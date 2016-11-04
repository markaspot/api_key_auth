<?php

/**
 * @file
 * Contains \Drupal\api_key_auth\Entity\ApiKey.
 */

namespace Drupal\api_key_auth\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\api_key_auth\ApiKeyInterface;


/**
 * Defines the Api key entity.
 *
 * @ConfigEntityType(
 *   id = "api_key",
 *   label = @Translation("Api key"),
 *   handlers = {
 *     "list_builder" = "Drupal\api_key_auth\ApiKeyListBuilder",
 *     "form" = {
 *       "add" = "Drupal\api_key_auth\Form\ApiKeyForm",
 *       "edit" = "Drupal\api_key_auth\Form\ApiKeyForm",
 *       "delete" = "Drupal\api_key_auth\Form\ApiKeyDeleteForm"
 *     }
 *   },
 *   config_prefix = "api_key",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "canonical" = "/admin/config/services/api_key_auth/{api_key}",
 *     "add-form" = "/admin/config/services/api_key_auth/add",
 *     "edit-form" = "/admin/config/services/api_key_auth/{api_key}",
 *     "delete-form" = "/admin/config/services/api_key_auth/{id}/delete",
 *     "collection" = "/admin/config/services/api_key_auth"
 *   }
 * )
 */
class ApiKey extends ConfigEntityBase implements ApiKeyInterface {
  /**
   * The Api key ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Api key label.
   *
   * @var string
   */
  protected $label;

  /**
   * The Api key.
   *
   * @var string
   */
  public $key;

  /**
   * The User UUID.
   *
   * @var string
   */
  public $user_uuid;
}
