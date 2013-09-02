Statamic Template hooks
=======================
Run a custom hook inside a template.

	
Usage
-----

Run a hook in your template
	
	{{ hook run="whatever_hook_name" }}
	
Add your hook to hooks.hook.php
	
	public function template__whatever_hook_name()
    {
        return 'this is whatever hook';
    }
