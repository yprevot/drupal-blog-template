<?php

/**
 * @file
 * Custom setting for Mili theme.
 */

function mili_form_system_theme_settings_alter(&$form, &$form_state) {
  $image_milipro = $GLOBALS['base_url'] . '/' . \Drupal::service('extension.list.theme')->getPath('mili') . '/images/milipro.jpg';
  $img = '<img src="'.$image_milipro.'" alt="milipro" />';
  $form['mili'] = [
    '#type'       => 'vertical_tabs',
    '#title'      => '<h3>' . t('Mili Theme Settings') . '</h3>',
    '#default_tab' => 'general',
  ];

  /**
   * Main Tabs.
   */

  // Main Tabs -> General.
  $form['general'] = [
    '#type'  => 'details',
    '#title' => t('General'),
    '#description' => t('<h3>Thanks for using Mili Theme</h3><p>Mili is a free Drupal 8, 9 and 10 theme designed and developed by <a href="https://drupar.com" target="_blank">Drupar.com</a></p>'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Color.
  $form['color'] = [
    '#type'  => 'details',
    '#title' => t('Theme Color'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Social.
  $form['social'] = [
    '#type'  => 'details',
    '#title' => t('Social'),
    '#description' => t('Social icons settings. These icons appear in footer region.'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Homepage Slider.
  $form['slider'] = [
    '#type'  => 'details',
    '#title' => t('Homepage Slider'),
    '#description' => t('<h4>Homepage Slider Settings</h4>'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Header.
  $form['header'] = [
    '#type'  => 'details',
    '#title' => t('Header'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Sidebar.
  $form['sidebar'] = [
    '#type'  => 'details',
    '#title' => t('Sidebar'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Content.
  $form['content'] = [
    '#type'  => 'details',
    '#title' => t('Content'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Footer.
  $form['footer'] = [
    '#type'  => 'details',
    '#title' => t('Footer'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Custom Styling.
  $form['insert_codes'] = [
    '#type'  => 'details',
    '#title' => t('Insert Codes'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Support.
  $form['support'] = [
    '#type'  => 'details',
    '#title' => t('Support'),
    '#group' => 'mili',
  ];

  // Main Tabs -> Upgrade to MiliPro tab.
  $form['upgrade'] = [
    '#type'  => 'details',
    '#title' => t('Upgrade To MiliPro'),
    '#description'  => t('<h3>Upgrade To MiliPro For $25 Only</h3>'),
    '#group' => 'mili',
  ];

  // General -> info.
  $form['general']['general_info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Info'),
    '#description' => t('<a href="https://drupar.com/theme/mili" target="_blank">Theme Homepage</a> || <a href="https://demo2.drupar.com/mili/" target="_blank">Theme Demo</a> || <a href="https://drupar.com/mili-documentation" target="_blank">Theme Documentation</a> || <a href="https://drupar.com/support" target="_blank">Theme Support</a>'),
  ];

  $form['general']['general_info_upgrade'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Upgrade To MiliPro for $25 only'),
    '#description' => t('<a href="https://drupar.com/theme/milipro" target="_blank">Purchase MiliPro</a> || <a href="https://demo2.drupar.com/milipro/" target="_blank">MiliPro Demo</a>'),
  ];

  // Color -> Settings.
  $form['color']['theme_color'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Theme Color'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Settings under social tab.
  // Show or hide all icons.
  $form['social']['all_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Social Icons'),
  ];

  $form['social']['all_icons']['all_icons_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show social icons in footer'),
    '#default_value' => theme_get_setting('all_icons_show'),
    '#description'   => t("Check this option to show social icons in footer. Uncheck to hide."),
  ];

  // Facebook.
    $form['social']['facebook'] = [
    '#type'        => 'details',
    '#title'       => t("Facebook"),
  ];

  $form['social']['facebook']['facebook_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Facebook Url'),
    '#description'   => t("Enter yours facebook profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('facebook_url'),
  ];

  // Twitter.
  $form['social']['twitter'] = [
    '#type'        => 'details',
    '#title'       => t("Twitter"),
  ];

  $form['social']['twitter']['twitter_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Twitter Url'),
    '#description'   => t("Enter yours twitter page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('twitter_url'),
  ];

  // Instagram.
  $form['social']['instagram'] = [
    '#type'        => 'details',
    '#title'       => t("Instagram"),
  ];

  $form['social']['instagram']['instagram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Instagram Url'),
    '#description'   => t("Enter yours instagram page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('instagram_url'),
  ];

  // Linkedin.
  $form['social']['linkedin'] = [
    '#type'        => 'details',
    '#title'       => t("Linkedin"),
  ];

  $form['social']['linkedin']['linkedin_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Linkedin Url'),
    '#description'   => t("Enter yours linkedin page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('linkedin_url'),
  ];

  // YouTube.
  $form['social']['youtube'] = [
    '#type'        => 'details',
    '#title'       => t("YouTube"),
  ];

  $form['social']['youtube']['youtube_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('YouTube Url'),
    '#description'   => t("Enter yours youtube.com page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('youtube_url'),
  ];

  // telegram.
    $form['social']['telegram'] = [
    '#type'        => 'details',
    '#title'       => t("Telegram"),
  ];

  $form['social']['telegram']['telegram_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('Telegram Url'),
    '#description'   => t("Enter yours Telegram profile or page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('telegram_url'),
  ];

  // WhatsApp.
    $form['social']['whatsapp'] = [
    '#type'        => 'details',
    '#title'       => t("WhatsApp"),
  ];

  $form['social']['whatsapp']['whatsapp_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('WhatsApp Url'),
    '#description'   => t("Enter yours whatsapp message url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('whatsapp_url'),
  ];

  // Github.
    $form['social']['github'] = [
    '#type'        => 'details',
    '#title'       => t("GitHub"),
  ];

  $form['social']['github']['github_url'] = [
    '#type'          => 'textfield',
    '#title'         => t('GitHub Url'),
    '#description'   => t("Enter yours github page url. Leave the url field blank to hide this icon."),
    '#default_value' => theme_get_setting('github_url'),
  ];

  // Social -> vk.com url.
  $form['social']['vk'] = [
    '#type'        => 'details',
    '#title'       => t("vk.com"),
  ];
  $form['social']['vk']['vk_url'] = [
      '#type'          => 'textfield',
      '#title'         => t('vk.com'),
      '#description'   => t("Enter yours vk.com page url. Leave the url field blank to hide this icon."),
      '#default_value' => theme_get_setting('vk_url'),
  ];

  // Settings under slider tab.
  // Show or hide slider on homepage.
  $form['slider']['slider_enable_option'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Enable Slider'),
  ];

  $form['slider']['slider_enable_option']['slider_show'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Slider on Homepage'),
    '#default_value' => theme_get_setting('slider_show'),
    '#description'   => t("Check this option to show slider on homepage. Uncheck to hide."),
  ];
  $form['slider']['slider_image_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Image'),
  ];
  $form['slider']['slider_image_section']['slider_image'] = [
    '#type'          => 'managed_file',
    '#upload_location' => 'public://',
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg svg'),
    ),
    '#title'  => t('<p>Upload Slider Image</p>'),
    '#default_value'  => theme_get_setting('slider_image', 'mili'),
    '#description'   => t('Supported image formats are: gif, png, jpg, jpeg, svg'),
  ];
  $form['slider']['slider_bg_color'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Slider Background Color'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];
  $form['slider']['slider_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Slider Code'),
    '#default_value' => theme_get_setting('slider_code', 'mili'),
    '#description'   => t('Please refer to this <a href="https://drupar.com/mili-documentation/homepage-slider" target="_blank">documentation page</a> for slider code tutorial.'),
  ];

  // Settings under header tab.
  $form['header']['sticky_header'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Sticky Header'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Settings under sidebar.
  $form['sidebar']['front_sidebar_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Homepage Sidebar'),
  ];
  $form['sidebar']['front_sidebar_section']['front_sidebar'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show Sidebars On Homepage'),
    '#default_value' => theme_get_setting('front_sidebar'),
    '#description'   => t('Check this option to enable left and right sidebar on homepage.'),
  ];
  $form['sidebar']['animated_sidebar'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Sidebar'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Settings under content tab.
  // Settings under content tab -> Page loader.
  $form['content']['preloader'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Pre Page Loader'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Settings under content tab -> Animated Content.
  $form['content']['animated_content'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Animated Page Content'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Settings under content tab -> Font Icons.
  $form['content']['font_icons'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Font Icons'),
    '#description'   => t(''),
  ];

  // Settings under content tab -> Font Icons -> FontAwesome
  $form['content']['font_icons']['font_icon_fontawesome'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Font Awesome 4'),
    '#default_value' => theme_get_setting('font_icon_fontawesome'),
    '#description'   => t('Check this option to enable FontAwesome 4 font icons. Uncheck to disable.<br /><br />Mili theme has included FontAwesome v4.7.0 font icons. You can use any FontAwesome 4 font icon with Mili theme.<br />Please visit this tutorial page for details. <a href="https://drupar.com/custom-shortcodes-set-two/fontawesome-font-icons" target="_blank">How To Use FontAwesome Font Icons</a>.<br /><br /><hr /><br />'),
  ];
  $form['content']['font_icons']['font_icon_fontawesome5'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Font Awesome 5'),
    '#description'   => t('<p>This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a></p>'),
  ];
  // Settings under content tab -> Font Icons -> Google Material Icons
  $form['content']['font_icons']['font_icon_material'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Google Material Font Icons'),
    '#default_value' => theme_get_setting('font_icon_material'),
    '#description'   => t('Check this option to enable Google Material font icons. Uncheck to disable.<br /><br /><br />Mili theme has included Google material font icons. You can use any Google material icon with Mili theme.<br />Please visit this tutorial page for details. <a href="https://drupar.com/mili-documentation/font-icons" target="_blank">How To Use Google Material Font Icons</a>.'),
  ];


  // Show user picture in comment.
  $form['content']['comment'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Comment'),
  ];

  $form['content']['comment']['comment_user_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('User Picture in comments'),
    '#default_value' => theme_get_setting('comment_user_pic'),
    '#description'   => t("Check this option to show user picture in comment. Uncheck to hide."),
  ];

  // Node author picture.
  $form['content']['node'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Node'),
  ];

  $form['content']['node']['node_author_pic'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Author Picture'),
    '#default_value' => theme_get_setting('node_author_pic'),
    '#description'   => t("Check this option to show node author picture in submitted details. Uncheck to hide."),
  ];

  $form['content']['node_share'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Share Page On Social Media'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Show tags in node submitted.
  $form['content']['node']['node_tags'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Node Tags'),
    '#default_value' => theme_get_setting('node_tags'),
    '#description'   => t("Check this option to show node tags (if any) in submitted details. Uncheck to hide."),
  ];

  // Settings under footer tab.
  // Scroll to top.
  $form['footer']['scrolltotop'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Scroll To Top'),
  ];

  $form['footer']['scrolltotop']['scrolltotop_on'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable scroll to top feature.'),
    '#default_value' => theme_get_setting('scrolltotop_on'),
    '#description'   => t("Check this option to enable scroll to top feature. Uncheck to disable this fearure and hide scroll to top icon."),
  ];

  // Footer -> Copyright.
  $form['footer']['copyright'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Website Copyright Text'),
  ];

  $form['footer']['copyright']['copyright_text'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Show website copyright text in footer.'),
    '#default_value' => theme_get_setting('copyright_text'),
    '#description'   => t("Check this option to show website copyright text in footer. Uncheck to hide."),
  ];

  // Footer -> Copyright -> custom copyright text
  $form['footer']['copyright']['copyright_text_custom'] = [
    '#type'          => 'fieldset',
    '#title'         => t('Custom copyright text'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  // Footer -> Cookie message.
  $form['footer']['cookie'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Cookie Consent message'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];

  $form['footer']['cookie']['cookie_message'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Show Cookie Consent Message'),
    '#description'   => t('Make your website EU Cookie Law Compliant. According to EU cookies law, websites need to get consent from visitors to store or retrieve cookies.'),
  ];

  /**
   * Insert Codes
   */
  $form['insert_codes']['insert_codes_tab'] = [
    '#type'  => 'vertical_tabs',
  ];
  $form['insert_codes']['head'] = [
    '#type'        => 'details',
    '#title'       => t('Head'),
    '#description' => t('<h3>Insert Codes Before &lt;/HEAD&gt;</h3><hr />'),
    '#group' => 'insert_codes_tab',
  ];
  $form['insert_codes']['body'] = [
    '#type'        => 'details',
    '#title'       => t('Body'),
    '#group' => 'insert_codes_tab',
  ];
  $form['insert_codes']['css'] = [
    '#type'        => 'details',
    '#title'       => t('CSS Codes'),
    '#group'       => 'insert_codes_tab',
  ];
  $form['insert_codes']['head']['insert_head'] = [
    '#type'          => 'fieldset',
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];
  $form['insert_codes']['body']['insert_body_start_section'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Insert code after &lt;BODY&gt; tag'),
    '#description'   => t('This feature is available in the premium version of this theme. <a href="https://drupar.com/theme/milipro" target="_blank">Buy MiliPro for $25 only.</a>'),
  ];
  // I
  $form['insert_codes']['css']['css_custom'] = [
    '#type'        => 'fieldset',
    '#title'       => t('Addtional CSS'),
  ];

  $form['insert_codes']['css']['css_custom']['styling'] = [
    '#type'          => 'checkbox',
    '#title'         => t('Enable Addtional CSS'),
    '#default_value' => theme_get_setting('styling'),
    '#description'   => t("Check this option to enable custom styling / css. Uncheck to disable this fearure."),
  ];
  $form['insert_codes']['css']['css_custom']['styling_code'] = [
    '#type'          => 'textarea',
    '#title'         => t('Addtional CSS Codes'),
    '#default_value' => theme_get_setting('styling_code'),
    '#description'   => t('Please enter your custom css codes in this text box. You can use it to customize the appearance of your site.<br />Please refer to this tutorial for detail: <a href="https://drupar.com/mili-documentation/custom-css" target="_blank">Custom CSS</a>'),
  ];

  // Settings under support tab.
  $form['support']['info'] = [
    '#type'        => 'fieldset',
    '#title'         => t('Support'),
    '#description' => t('<h4>Documentation</h4>
    <p>We have a detailed documentation about how to use theme. Please read the <a href="https://drupar.com/mili-documentation" target="_blank">Mili Theme Documentation</a>.</p>
    <hr />
    <h4>Open An Issue</h4>
    <p>If you need support that is beyond our theme documentation, please <a href="https://www.drupal.org/project/issues/mili" target="_blank">create an issue</a> at Drupal.org project page.</p>
    <hr />
    <h4>Contact Us</h4>
    <p>If you need some specific customization in theme, please contact us<br><a href="https://drupar.com/contact" target="_blank">drupar.com/contact</a></p>'),
  ];

  // Settings under upgrade tab.
  $form['upgrade']['info'] = [
    '#type'        => 'fieldset',
    '#title'       => t('<a href="https://demo2.drupar.com/milipro/" target="_blank">MiliPro Demo</a> | <a href="https://drupar.com/theme/milipro" target="_blank">Purchase MiliPro for $25 only</a>'),
    '#description' => t("<p>$img</></p><p><a href='https://demo2.drupar.com/milipro/' target='_blank'>MiliPro Demo</a> | <a href='https://drupar.com/theme/milipro' target='_blank'>Purchase MiliPro for $25 only</a></p>"),
  ];
// End form.
}
