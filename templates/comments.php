<?php
$req = get_option('require_name_email');
$aria_req = ($req ? " aria-required='true'" : '');
$comments_args = array(
  'label_submit' => 'Submit',
  'class_submit' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent',
  'title_reply' => 'Leave a Comment',
  'comment_notes_after' => '',
  'comment_field' => '
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <textarea class="mdl-textfield__input" rows="10" id="comment" name="comment" aria-required="true"></textarea>
      <label class="mdl-textfield__label" for="comment">' . __('Comments', 'sage') . '</label>
    </div>',
  'fields' => apply_filters('comment_form_default_fields', array(
    'author' => '
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />
      <label class="mdl-textfield__label" for="author">' . __('Name', 'sage') . '</label>
    </div>',
    'email' => '
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' />
      <label class="mdl-textfield__label" for="email">' . __('Email', 'sage') . '</label>
    </div>',
    'url' => '
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" />
      <label class="mdl-textfield__label" for="website">' . __('Website', 'sage') . '</label>
    </div>'
  ))
);
comment_form($comments_args);
?>