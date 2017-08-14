<?php

namespace AdvancedObjectSearchBundle\Filter\FieldDefinitionAdapter;


class Country extends Select implements IFieldDefinitionAdapter {

    /**
     * field type for search frontend
     *
     * @var string
     */
    protected $fieldType = "country";

}