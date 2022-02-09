<?php
 
if ( ! function_exists('render'))
{
    function render(string $name, array $data = [], array $options = [])
    {
        return view(
            'front/layout',
            [
                'content' => view($name, $data, $options),
            ],
            $options
        );
    }
}