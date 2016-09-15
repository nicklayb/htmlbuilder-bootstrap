<?php
namespace Nicklayb\HtmlBuilder\Bootstrap;

use Nicklayb\HtmlBuilder\Tags\Input as BaseInput;

class Input extends BaseInput
{
    public function __construct($name = '', $type = 'text')
    {
        $this->name($name);
        $this->type($type);
        $this->classes('form-control');
    }
}
