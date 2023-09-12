<?php

add_action('add_meta_boxes', 'mehan_add_contact_meta');
function mehan_add_contact_meta()
{
  global $post;
  if (!empty($post)) {
    $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
    if ($pageTemplate == 'page-contact.php');
    add_meta_box(
      'contact_meta',
      'Contact Information',
      'display_contact_information',
      'page',
      'normal',
      'high'
    );
  }
}

function display_contact_information()
{ ?>
  <input type="hidden" name="<?php wp_create_nonce(basename(__FILE__)) ?>" />
  <table class="form-table">
    <tr>
      <th><label for="contact_address">Contact Address</label></th>
    </tr>
  </table>
<?php }
