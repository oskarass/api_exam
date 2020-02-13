<?php

function validate_not_empty($field_value, &$field) {
    if (strlen($field_value) == 0) {
        $field['error'] = 'Laukas negali būti tuščias';
        return false;
    }

    return true;
}

function validate_symbol_limit($field_value, &$field) {
    if (strlen($field_value) > 40) {
        $field['error'] = 'Laukas negali būti ilgesnis nei 40 simbolių';
        return false;
    } else {
        return true;
    }
}

function validate_symbol_name($field_value, &$field) {
    if (!preg_match('/^[a-zA-Z._-]+$/i', $field_value)) {
        $field['error'] = 'Laukas negali turėti spec. simbolių';
        return false;
    } else {
        return true;
    }
}

function validate_feedback($field_value, &$field) {
    if (strlen($field_value) > 500) {
        $field['error'] = 'Atsiliepimas negali viršyti 500 simbolių';
        return false;
    } else {
        return true;
    }
}