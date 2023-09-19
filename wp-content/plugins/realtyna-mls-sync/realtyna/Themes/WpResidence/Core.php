<?php

namespace Realtyna\Sync\Themes\WpResidence;

/** Block direct access to file.*/ 
defined( 'ABSPATH' ) || die( 'Access Denied!' );

/**
 * WpResidence Theme Prerequirement Checker
 * 
 * @author Chris A <chris.a@realtyna.net>
 * 
 * @version 1.0
 */
class Core extends \Realtyna\Sync\Core\Theme 
{

    /** 
     * @var string Theme Name 
     * @static
     * @abstract
     */
    static public $name = 'WpResidence';
    
    /** 
     * @var string Theme URL
     * @static
     */
    static public $url = 'https://wpresidence.net/';

    /**
     * Get Theme Name
     * 
     * @author Chris A <chris.a@realtyna.net>
     *
     * @return string
     */
    public function getName()
    {
        return self::$name;
    }

    /**
     * Get Theme URL
     * 
     * @author Chris A <chris.a@realtyna.net>
     *
     * @return string
     */
    public function getUrl()
    {
        return self::$url;
    }


    /**
     * Get new object of Agency
     * 
     * @author Chris A <chris.a@realtyna.net>
     *
     * @return Agency
     */
    public function agencies()
    {

        if ( Agency::class ){

            return new Agency();

        }

    }

    /**
     * Get new object of Agent
     * 
     * @author Chris A <chris.a@realtyna.net>
     *
     * @return Agent
     */
    public function agents()
    {

        if ( Agent::class ){

            return new Agent();

        }

    }

    /**
     * Get Mapper Object
     *
     * @author Chris A <chris.a@realtyna.net>
     * 
     * @param string|null default Null
     * @param string|null default Null
     * @param array|null default Null
     * @param array|null default Null
     * 
     * @return Mapper
     */
    public function mapper( $token = null , $provider = null , $addationMapping = null , $propertyImportOptions = null )
    {

        if ( Mapper::class ){

            return new Mapper( $token , $provider , $addationMapping , $propertyImportOptions );

        }

    }

    /**
     * Get Property Object
     * 
     * @author Chris A <chris.a@realtyna.net>
     *
     * @param bool initialize fields on create class
     * @param string|null dmls Provider , default value is null
     * @param array import options array , default is null
     * 
     * @return Property
     */
    public function property( $initFields = false , $mlsProvider = null , $importOptions = null )
    {

        if ( Property::class ){

            return new Property( $initFields , $mlsProvider , $importOptions );

        }

    }


    /**
     * Remove Imported Properties
     * 
     * @author Chris A <chris.a@realtyna.net>
     * 
     * @param bool Remove Only Demo Properties
     * 
     * @return bool
     */
    public function removeProperties( $demoOnly = false )
    {

        if ( Property::class ){

             $houzezProperty = new Property();

             return $houzezProperty->bulkRemoveProperties( $demoOnly );

        }

        return false;

    }

    /**
     * Update Agent display option for Imported Properties in Houzez Theme
     * 
     * @author Chris A <chris.a@realtyna.net>
     * 
     * @param int fave_agent_display_option code defined by Houzez
     * 
     * @return bool
     */
    public function updatePropertiesAgentDisplayOption( $agentOption )
    {

        return $this->updatePropertiesMeta( "fave_agent_display_option" , $agentOption );

    }

    /**
     * Update Agency for Imported Properties in Houzez Theme
     * 
     * @author Chris A <chris.a@realtyna.net>
     * 
     * @param int ID for Selected Agency
     * 
     * @return bool
     */
    public function update_properties_agency( $agency )
    {

        return $this->updatePropertiesMeta( "fave_property_agency" , $agency );

    }

    /**
     * Update Agent for Imported Properties in Houzez Theme
     * 
     * @author Chris A <chris.a@realtyna.net>
     * 
     * @param int ID for Selected Agent
     * 
     * @return bool
     */
    public function update_properties_agents( $agent )
    {

        return $this->updatePropertiesMeta( "fave_agents" , $agent );

    }

    /**
     * Update Post Metas for Imported Properties in Houzez Theme
     * 
     * @author Chris A <chris.a@realtyna.net>
     * 
     * @param string Post Meta Key
     * @param string Post Meta Value
     * 
     * @return bool
     */
    private function updatePropertiesMeta( $key , $value )
    {

        if ( Property::class ){

             $property = new Property( true );

             return $property->bulkUpdatePostMeta( $key , $value );

        }
        
        return false;

    }


}