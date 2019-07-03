<?php
class FiltersHelper {
    
    public function filter_post_float($t) {
        $float = filter_input(INPUT_POST, $t);
        $float = str_replace('.','', $float);
        $float = str_replace(',','.', $float);
        $float = filter_var($float, FILTER_VALIDATE_FLOAT);

        return $float;
    }
}