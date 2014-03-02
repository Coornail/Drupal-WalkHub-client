<?php

namespace Drupal\Walkhub\Form;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\KeyValueStore\StateInterface;
use Drupal\Core\Form\ConfigFormBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class WalkhubSettingsForm extends ConfigFormBase {

  public function getFormId() {
    return 'walkhub_settings_form';
  }

  public function buildForm(array $form, array &$form_state) {
    $form['description'] = array(
      '#markup' => '<p>' . t('Cron takes care of running periodic tasks like checking for updates and indexing content for search.') . '</p>',
    );

    return parent::buildForm($form, $form_state);
  }

}
