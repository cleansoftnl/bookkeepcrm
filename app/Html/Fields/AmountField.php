<?php


namespace Bookkeeper\Html\Fields;


use Kris\LaravelFormBuilder\Fields\FormField;

class AmountField extends FormField
{

    /**
     * Get the template, can be config variable or view path
     *
     * @return string
     */
    protected function getTemplate()
    {
        return 'fields.amount';
    }

}