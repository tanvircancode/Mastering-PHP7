<?php

function displayOptions($options, $selectedValues)
{
    //$i=0;
    //$i = $i ?? 0;
    //for($option = $options[$i]; $i < count($options); $i++)
    //while($i<count($options))

    foreach ($options as $option) {
       $option = strtolower($option);
        $selected = '';
        if (in_array($option, $selectedValues)) {
            $selected = "selected";
        }
        printf("<option value='%s' %s> %s </option>\n", $option, $selected, ucwords($option));

        //$i++;
    }
}
