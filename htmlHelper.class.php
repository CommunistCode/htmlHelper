<?php

  class htmlHelper {

    public function renderSelectOptions($optionsArray, $valueKey, $nameKey = $valueKey) {

      $renderedOptions = "";

      foreach ($optionsArray as $option) {

        $renderedOptions .= "<option value='".$optionsArray[$valueKey]."'>".$optionsArray[$nameKey]."</option>\n";

      }

      return $renderedOptions;

    }

  }

?>
