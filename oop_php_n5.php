<?php

class Form {
    public function open($data) {
        if (isset($data['method'])) {
            return '<form action="'.$data['action'].'" method="'.$data['method'].'">';
        } else {
            return '<form action="'.$data['action'].'" method="GET">';
        }
    }

    public function input($data_input) {
        return '<input type="'.$data_input['type'].'" value="'.$data_input['value'].'"';
    }

    public function password($data_pass) {
        return '<input type="password" value="'.$data_pass['value'].'">';
    }

    public function submit($data_submit) {
        return '<input type="submit" value="'.$data_submit['value'].'">';
    }

    public function textarea($data_area) {
        return '<textarea placeholder="'.$data_area['placeholder'].'">'.$data_area['value'].'</textarea>';
    }

    public function close() {
        return '</form>';
    }
}

$form = new Form();

echo $form->open(['action' => 'index.php', 'method' => 'POST']);
echo $form->input(['type' => 'text', 'value' => '123']);
echo $form->password(['value' => '124']);
echo $form->submit(['value' => 'go']);
echo $form->textarea(['placeholder' => '456', 'value' => 'place']);
echo $form->close();
