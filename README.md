Statamic Template hooks
=======================
Run a custom hook inside a template.

	
Usage
-----
1. Add your custom hook to the hooks.hook.php file in the add-ons folder
	
```
public function template__whatever_hook_name()
{
    return 'this is whatever hook';
}
```

2. Run a hook in your template like this
	
    {{ hook run="whatever_hook_name" }}
	

