<?php

/**
 * BaseBibTaxrefStatuts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id_statut
 * @property string $nom_statut
 * 
 * @method string           get()           Returns the current record's "id_statut" value
 * @method string           get()           Returns the current record's "nom_statut" value
 * @method BibTaxrefStatuts set()           Sets the current record's "id_statut" value
 * @method BibTaxrefStatuts set()           Sets the current record's "nom_statut" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBibTaxrefStatuts extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('taxonomie.bib_taxref_statuts');
        $this->hasColumn('id_statut', 'string', 1, array(
             'type' => 'string',
             'primary' => true,
             'length' => 1,
             ));
        $this->hasColumn('nom_statut', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}