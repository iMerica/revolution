<?php
/**
 * @package modx
 */
/**
 * Loads the help page
 *
 * @package modx
 * @subpackage manager
 */
class HelpManagerController extends modManagerController {
    /**
     * Check for any permissions or requirements to load page
     * @return bool
     */
    public function checkPermissions() {
        return $this->modx->hasPermission('help');
    }

    /**
     * Register custom CSS/JS for the page
     * @return void
     */
    public function loadCustomCssJs() {
        $this->modx->regClientStartupScript($this->modx->getOption('manager_url').'assets/modext/sections/system/help.js');
    }

    /**
     * Custom logic code here for setting placeholders, etc
     * @return void
     */
    public function process() {}

    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('help');
    }

    /**
     * Return the location of the template file
     * @return string
     */
    public function getTemplateFile() {
        return 'help.tpl';
    }

    /**
     * Specify the language topics to load
     * @return array
     */
    public function getLanguageTopics() {
        return array('about');
    }
}