<?php

class ShortCodes
{
    public static function TwitterShortCodeHandler($arguments, $caption = null, $parser = null)
    {
      #die("oh twits");
        if (empty($arguments['Handle'])) {
            return false;
        }
        $customise = array();
        /*** SET DEFAULTS ***/
        $customise['Handle'] = $arguments['Handle'];

        $customise = array_merge($customise, $arguments);

        $template = new SSViewer(
            array(
                'Twitter',
                SHORTCODES_DIR . '/templates/Twitter'
            )
        );
        //return the customised template
        return $template->process(new ArrayData($customise));
    }
    public static function FacebookShortCodeHandler($arguments, $caption = null, $parser = null)
    {

        if (empty($arguments['Handle'])) {
            return false;
        }

        $customise = array();
        /*** SET DEFAULTS ***/
        $customise['Handle'] = $arguments['Handle'];

        //overide the defaults with the arguments supplied
        $customise = array_merge($customise, $arguments);
        $template = new SSViewer(
            array(
                'Facebook',
                SHORTCODES_DIR . '/templates/Facebook.ss'
            )
        );
        return $template->process(new ArrayData($customise));
    }
}