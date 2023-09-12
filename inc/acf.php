<?php
function mehan_add_local_field_groups()
{
  // Contact Information Field Groups
  try {
    acf_add_local_field_group([
      'key' => 'group_1',
      'title' => 'Contact',
      'fields' => [
        [
          'key' => 'field_address',
          'label' => 'Address',
          'name' => 'address',
          'type' => 'text',
        ],
        [
          'key' => 'field_mobile',
          'label' => 'Mobile Number',
          'name' => 'mobile_number',
          'type' => 'text',
        ],
        [
          'key' => 'field_email',
          'label' => 'Email Address',
          'name' => 'email_address',
          'type' => 'email',
        ],
      ],
      'location' => [
        [
          [
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'Contact Page'
          ]
        ]
      ]
    ]); ?>
    <div class="error">
      <p>Error: Field group could not be added</p>
      <span>
        Somthing is not right
      </span>
    </div>
  <?php } catch (Error $e) { ?>
    <div class="error">
      <p>Error: Field group could not be added</p>
      <span>
        <?php $e->getMessage() ?>
      </span>
    </div>
<?php }
}
add_action('acf/init', 'mehan_add_local_field_groups');
