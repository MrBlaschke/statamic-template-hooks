<?php
class Hooks_hook extends Hooks
{
    public function template__add_to_head()
    {
        return 'head';
    }
    public function template__add_to_foot()
    {
        return 'foot';
    }    
}