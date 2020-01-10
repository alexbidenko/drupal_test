<?php
/**
 * Created by PhpStorm.
 * User: saint
 * Date: 26.02.2018
 * Time: 12:38
 */
namespace Drupal\hockey_page\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;

/**
 * Provides a 'settings_menu_block' block.
 *
 * @Block(
 *   id = "legendary_status_block",
 *   admin_label = @Translation("Легендарные"),
 *   category = @Translation("Hockey pages")
 * )
 */
class LegendaryStatusBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {

        $form = \Drupal::formBuilder()->getForm('Drupal\hockey_page\Form\LegendaryStatusBlockForm');
        return $form;

    }
}