<?php
  class user_def_projPlugin extends MantisPlugin {
      const VERSION = '2.3.0.1';
      const DEFAULT_PROJECT = 1;

      function register()
      {
          $this->name = plugin_lang_get('plugin_title');
          $this->description = plugin_lang_get('plugin_description');
          $this->version = self::VERSION;
          $this->requires = array(
              'MantisCore' => '2.3.0',
          );
          $this->author = 'Kirill Krasnov';
          $this->contact = 'webmaster@kraeg.ru';
          $this->url = 'https://github.com/mantisbt-plugins/user_def_proj';
      }

      function hooks() {
          return array(
              'EVENT_MANAGE_USER_CREATE' => 'def_project',
          );
      }

      function def_project($user_id) {
          user_set_default_project($user_id, self::DEFAULT_PROJECT);
      }
  }