<?php
function buildDefinitionList($definitions) {
    if (empty($definitions)) {
        return '';
    }

    $result = '<dl>';
    foreach ($definitions as $definition) {
        $result .= '<dt>' . $definition[0] . '</dt>';
        $result .= '<dd>' . $definition[1] . '</dd>';
    }
    $result .= '</dl>';

    return $result;
}
$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

print_r(buildDefinitionList($definitions));
// => '<dl><dt>Блямба</dt><dd>Выпуклость, утолщение на поверхности чего-либо</dd><dt>Бобр</dt><dd>Животное из отряда грызунов</dd></dl>';