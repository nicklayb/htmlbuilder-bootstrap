<?php
namespace Nicklayb\HtmlBuilder\Bootstrap;

use Nicklayb\HtmlBuilder\Tags\Button as BaseButton;

class Button extends BaseButton
{
    public function __construct($color = 'default', $size = null, $content = '', $anchor = false)
    {
        $this->classes([
            'btn',
            'btn-'.$color,
        ]);
        if ($size != null) {
            $this->classes('btn-'.$size);
        }
        $this->content($content);
        if ($anchor) {
            $this->anchor();
        }
    }

    public function anchor($href = null)
    {
        $this->tag = 'a';
        if ($href != null) {
            $this->href($href);
        }
    }

    public function button()
    {
        $this->tag = 'button';
    }
}
