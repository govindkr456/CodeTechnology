<?php
/**
 * @file
 * @author Rakesh James
 * Contains \Drupal\example\Controller\ExampleController.
 * Please place this file under your example(module_root_folder)/src/Controller/
 */
namespace Drupal\booklist\Controller;
/**
 * Provides route responses for the Example module.
 */
class booklistController {
  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function myPage() {
    $element = array(
      '#markup' => 'The Nation The Earth Indian Poltics Times Upon Now',
    );
    return $element;
  }
}
?>