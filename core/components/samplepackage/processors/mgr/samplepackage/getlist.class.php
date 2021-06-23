<?php
class SamplePackageGetListProcessor extends modObjectGetListProcessor
{
    public $classKey = 'SamplePackage';
    public $languageTopics = ['samplepackage:default'];
    public $defaultSortField = 'id';
    public $defaultSortDirection = 'ASC';
    public $objectType = 'samplepackage.samplepackage';

    public function prepareQueryBeforeCount(xPDOQuery $c)
    {
        $query = $this->getProperty('query');
        
        if (!empty($query)) {
            $c->where([
                'SamplePackage.id' => $query,
                'OR:SamplePackage.name:LIKE' => '%' . $query . '%'
            ]);
        }

        return $c;
    }

    public function prepareQueryAfterCount(xPDOQuery $c){
        return $c;
    }

    public function prepareRow(xPDOObject $object)
    {
        $ta = $object->toArray('', false, true);

        return $ta;
    }
}
return 'SamplePackageGetListProcessor';
