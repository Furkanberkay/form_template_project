<?php
class FormGenerator
{
    private $fields;

    public function __construct($fields){
        $this->fields = $fields;
    }

    public function renderForm()
    {
        echo '<form id="contactForm" method="POST">';
        foreach ($this->fields as $name => $options) {
            $label = $options["label"];
            $type = $options["type"];
            $required = $options["required"] ? 'required' : '';

            echo '<div class="form-group mb-3">';
            echo "<label for='{$name}'>{$label}</label>";
            if ($type === 'textarea') {
                echo "<textarea name='{$name}' id='{$name}' class='form-control' {$required}></textarea>"; 
            }
            else {
                echo "<input type='{$type}' name='{$name}' id='{$name}' class='form-control' {$required}/>";
            }
            echo '</div>';
        } 
        echo '<button type="submit" class="btn btn-primary">Gönder</button>';
        echo "</form>";
    }
}
?>
