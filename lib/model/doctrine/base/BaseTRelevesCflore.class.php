<?php

/**
 * BaseTRelevesCflore
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_releve_cflore
 * @property integer $id_cflore
 * @property integer $id_nom
 * @property integer $id_abondance_cflore
 * @property integer $id_phenologie_cflore
 * @property boolean $validite_cflore
 * @property integer $cd_ref_origine
 * @property string $nom_taxon_saisi
 * @property string $commentaire
 * @property string $determinateur
 * @property boolean $supprime
 * @property boolean $herbier
 * @property boolean $diffusable
 * @property BibAbondancesCflore $BibAbondancesCflore
 * @property BibPhenologiesCflore $BibPhenologiesCflore
 * @property BibNoms $BibNoms
 * @property TFichesCflore $TFichesCflore
 * @property Doctrine_Collection $VNomadeTaxonsFlore
 * 
 * @method integer              get()                     Returns the current record's "id_releve_cflore" value
 * @method integer              get()                     Returns the current record's "id_cflore" value
 * @method integer              get()                     Returns the current record's "id_nom" value
 * @method integer              get()                     Returns the current record's "id_abondance_cflore" value
 * @method integer              get()                     Returns the current record's "id_phenologie_cflore" value
 * @method boolean              get()                     Returns the current record's "validite_cflore" value
 * @method integer              get()                     Returns the current record's "cd_ref_origine" value
 * @method string               get()                     Returns the current record's "nom_taxon_saisi" value
 * @method string               get()                     Returns the current record's "commentaire" value
 * @method string               get()                     Returns the current record's "determinateur" value
 * @method boolean              get()                     Returns the current record's "supprime" value
 * @method boolean              get()                     Returns the current record's "herbier" value
 * @method boolean              get()                     Returns the current record's "diffusable" value
 * @method BibAbondancesCflore  get()                     Returns the current record's "BibAbondancesCflore" value
 * @method BibPhenologiesCflore get()                     Returns the current record's "BibPhenologiesCflore" value
 * @method BibNoms              get()                     Returns the current record's "BibNoms" value
 * @method TFichesCflore        get()                     Returns the current record's "TFichesCflore" value
 * @method Doctrine_Collection  get()                     Returns the current record's "VNomadeTaxonsFlore" collection
 * @method TRelevesCflore       set()                     Sets the current record's "id_releve_cflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "id_cflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "id_nom" value
 * @method TRelevesCflore       set()                     Sets the current record's "id_abondance_cflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "id_phenologie_cflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "validite_cflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "cd_ref_origine" value
 * @method TRelevesCflore       set()                     Sets the current record's "nom_taxon_saisi" value
 * @method TRelevesCflore       set()                     Sets the current record's "commentaire" value
 * @method TRelevesCflore       set()                     Sets the current record's "determinateur" value
 * @method TRelevesCflore       set()                     Sets the current record's "supprime" value
 * @method TRelevesCflore       set()                     Sets the current record's "herbier" value
 * @method TRelevesCflore       set()                     Sets the current record's "diffusable" value
 * @method TRelevesCflore       set()                     Sets the current record's "BibAbondancesCflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "BibPhenologiesCflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "BibNoms" value
 * @method TRelevesCflore       set()                     Sets the current record's "TFichesCflore" value
 * @method TRelevesCflore       set()                     Sets the current record's "VNomadeTaxonsFlore" collection
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTRelevesCflore extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactflore.t_releves_cflore');
        $this->hasColumn('id_releve_cflore', 'integer', 5, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 5,
             ));
        $this->hasColumn('id_cflore', 'integer', 5, array(
             'type' => 'integer',
             'length' => 5,
             ));
        $this->hasColumn('id_nom', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('id_abondance_cflore', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('id_phenologie_cflore', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('validite_cflore', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
        $this->hasColumn('cd_ref_origine', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('nom_taxon_saisi', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('commentaire', 'string', null, array(
             'type' => 'string',
             'length' => '',
             ));
        $this->hasColumn('determinateur', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('supprime', 'boolean', 1, array(
             'type' => 'boolean',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('herbier', 'boolean', 1, array(
             'type' => 'boolean',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('diffusable', 'boolean', 1, array(
             'type' => 'boolean',
             'notnull' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibAbondancesCflore', array(
             'local' => 'id_abondance_cflore',
             'foreign' => 'id_abondance_cflore'));

        $this->hasOne('BibPhenologiesCflore', array(
             'local' => 'id_phenologie_cflore',
             'foreign' => 'id_phenologie_cflore'));

        $this->hasOne('BibNoms', array(
             'local' => 'id_nom',
             'foreign' => 'id_nom'));

        $this->hasOne('TFichesCflore', array(
             'local' => 'id_cf',
             'foreign' => 'id_cf'));

        $this->hasMany('VNomadeTaxonsFlore', array(
             'local' => 'id_nom',
             'foreign' => 'id_nom'));
    }
}