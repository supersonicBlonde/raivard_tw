<?php
class Split_Weight_Walker extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes   = empty($item->classes) ? [] : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;
        $class_str = implode(' ', array_filter($classes));

        $title = $item->title;

        if (str_contains($title, '|')) {
            [$bold, $light] = explode('|', $title, 2);
            $inner = '<span class="menu-bold">' . esc_html($bold) . '</span>'
                . '<span class="menu-light">' . esc_html($light) . '</span>';
        } else {
            $inner = esc_html($title);
        }

        $output .= '<li class="' . esc_attr($class_str) . '">'
            . '<a href="' . esc_url($item->url) . '">' . $inner . '</a>'
            . '</li>';
    }
}
