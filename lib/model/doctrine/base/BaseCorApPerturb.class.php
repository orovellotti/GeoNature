<?php

/**
 * BaseCorApPerturb
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $indexap
 * @property integer $codeper
 * @property BibPerturbations $BibPerturbations
 * @property TApresence $TApresence
 * 
 * @method integer          get()                 Returns the current record's "indexap" value
 * @method integer          get()                 Returns the current record's "codeper" value
 * @method BibPerturbations get()                 Returns the current record's "BibPerturbations" value
 * @method TApresence       get()                 Returns the current record's "TApresence" value
 * @method CorApPerturb     set()                 Sets the current record's "indexap" value
 * @method CorApPerturb     set()                 Sets the current record's "codeper" value
 * @method CorApPerturb     set()                 Sets the current record's "BibPerturbations" value
 * @method CorApPerturb     set()                 Sets the current record's "TApresence" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCorApPerturb extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('florepatri.cor_ap_perturb');
        $this->hasColumn('indexap', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('codeper', 'integer', 2, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 2,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibPerturbations', array(
             'local' => 'codeper',
             'foreign' => 'codeper'));

        $this->hasOne('TApresence', array(
             'local' => 'indexap',
             'foreign' => 'indexap'));
    }
}