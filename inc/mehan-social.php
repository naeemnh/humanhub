<?php
function mehan_23_social_media_customizer_support($wp_customize)
{
  // add social media support
  $wp_customize->add_section('mehan_23_social_media_section', array(
    'title' => __('Social Media', 'mehan_23'),
    'priority' => 30,
  ));
  // Instagram
  $wp_customize->add_setting('mehan_23_instagram', array(
    'default' => __('#', 'mehan_23'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('mehan_23_instagram', array(
    'label' => __('Instagram (URL)', 'mehan_23'),
    'section' => 'mehan_23_social_media_section',
    'type' => 'text',
  ));
  // Snapchat
  $wp_customize->add_setting('mehan_23_snapchat', array(
    'default' => __('#', 'mehan_23'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('mehan_23_snapchat', array(
    'label' => __('Snapchat (URL)', 'mehan_23'),
    'section' => 'mehan_23_social_media_section',
    'type' => 'text',
  ));
  // LinkedIn
  $wp_customize->add_setting('mehan_23_linkedin', array(
    'default' => __('#', 'mehan_23'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('mehan_23_linkedin', array(
    'label' => __('LinkedIn (URL)', 'mehan_23'),
    'section' => 'mehan_23_social_media_section',
    'type' => 'text',
  ));
  // Twitter
  $wp_customize->add_setting('mehan_23_twitter', array(
    'default' => __('#', 'mehan_23'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('mehan_23_twitter', array(
    'label' => __('Twitter (URL)', 'mehan_23'),
    'section' => 'mehan_23_social_media_section',
    'type' => 'text',
  ));
  // Facebook
  $wp_customize->add_setting('mehan_23_facebook', array(
    'default' => __('#', 'mehan_23'),
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control('mehan_23_facebook', array(
    'label' => __('Facebook (URL)', 'mehan_23'),
    'section' => 'mehan_23_social_media_section',
    'type' => 'text',
  ));
}
add_action('customize_register', 'mehan_23_social_media_customizer_support');
