<?php
class Plugin_hook extends Plugin {
    var $meta = array(
        'name'       => 'Template Hook',
        'version'    => '0.1',
        'author'     => 'Jeroen Gerits (Cinesoon)',
        'author_url' => 'http://cinesoon.com'
    );
    public function index() {
        $hook = $this->fetchParam('run', null, false, false, false);
        return Hook::run('template', $hook, 'cumulative');
    }
}