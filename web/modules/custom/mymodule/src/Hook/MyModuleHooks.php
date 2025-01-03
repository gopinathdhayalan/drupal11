<?php

declare(strict_types=1);

namespace Drupal\mymodule\Hook;

use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Form\FormStateInterface;

class MyModuleHooks {

  /**
   * Implement hook_form_alter().
   *
   * Customize the user login form.
   */
  #[Hook('form_alter')]

  public function alterForms(array &$form, FormStateInterface $form_state, $form_id) {

    if($form_id === 'user_login_form') {
      $form['name']['#description'] = t('Enter your Username');
      $form['pass']['#description'] = t('Enter your Password');

    }

  }

}
