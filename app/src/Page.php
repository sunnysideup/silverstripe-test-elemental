<?php

namespace {

    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\TextField;

    class Page extends SiteTree
    {
        private static $db = [
            'HeaderPreTitle' => 'Text',
            'HeaderIntro' => 'Text',
            'HeaderIntroInItalics' => 'Boolean',
            'HeaderColour' => 'Enum("white,black,clear","white")',
        ];

        public function getCMSFields()
        {
            $fields = parent::getCMSFields();

            //MAIN
            $fields->addFieldToTab('Root.Main', TextField::create('HeaderPreTitle'), 'ElementalArea');
            $fields->addFieldToTab('Root.Main', TextField::create('HeaderIntro'), 'ElementalArea');
            $fields->addFieldToTab('Root.Main', CheckboxField::create('HeaderIntroInItalics'), 'ElementalArea');

            return $fields;
        }
    }
}
