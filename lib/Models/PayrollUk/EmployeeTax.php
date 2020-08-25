<?php
/**
 * EmployeeTax
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
 *
 * OpenAPI spec version: 2.2.14
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EmployeeTax Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeTax implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeTax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'starter_type' => 'string',
        'starter_declaration' => 'string',
        'tax_code' => 'string',
        'w1_m1' => 'bool',
        'previous_taxable_pay' => 'double',
        'previous_tax_paid' => 'double',
        'student_loan_deduction' => 'string',
        'has_post_graduate_loans' => 'bool',
        'is_director' => 'bool',
        'directorship_start_date' => '\DateTime',
        'nic_calculation_method' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'starter_type' => null,
        'starter_declaration' => null,
        'tax_code' => null,
        'w1_m1' => null,
        'previous_taxable_pay' => 'double',
        'previous_tax_paid' => 'double',
        'student_loan_deduction' => null,
        'has_post_graduate_loans' => null,
        'is_director' => null,
        'directorship_start_date' => 'date',
        'nic_calculation_method' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'starter_type' => 'starterType',
        'starter_declaration' => 'starterDeclaration',
        'tax_code' => 'taxCode',
        'w1_m1' => 'w1M1',
        'previous_taxable_pay' => 'previousTaxablePay',
        'previous_tax_paid' => 'previousTaxPaid',
        'student_loan_deduction' => 'studentLoanDeduction',
        'has_post_graduate_loans' => 'hasPostGraduateLoans',
        'is_director' => 'isDirector',
        'directorship_start_date' => 'directorshipStartDate',
        'nic_calculation_method' => 'nicCalculationMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'starter_type' => 'setStarterType',
        'starter_declaration' => 'setStarterDeclaration',
        'tax_code' => 'setTaxCode',
        'w1_m1' => 'setW1M1',
        'previous_taxable_pay' => 'setPreviousTaxablePay',
        'previous_tax_paid' => 'setPreviousTaxPaid',
        'student_loan_deduction' => 'setStudentLoanDeduction',
        'has_post_graduate_loans' => 'setHasPostGraduateLoans',
        'is_director' => 'setIsDirector',
        'directorship_start_date' => 'setDirectorshipStartDate',
        'nic_calculation_method' => 'setNicCalculationMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'starter_type' => 'getStarterType',
        'starter_declaration' => 'getStarterDeclaration',
        'tax_code' => 'getTaxCode',
        'w1_m1' => 'getW1M1',
        'previous_taxable_pay' => 'getPreviousTaxablePay',
        'previous_tax_paid' => 'getPreviousTaxPaid',
        'student_loan_deduction' => 'getStudentLoanDeduction',
        'has_post_graduate_loans' => 'getHasPostGraduateLoans',
        'is_director' => 'getIsDirector',
        'directorship_start_date' => 'getDirectorshipStartDate',
        'nic_calculation_method' => 'getNicCalculationMethod'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['starter_type'] = isset($data['starter_type']) ? $data['starter_type'] : null;
        $this->container['starter_declaration'] = isset($data['starter_declaration']) ? $data['starter_declaration'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['w1_m1'] = isset($data['w1_m1']) ? $data['w1_m1'] : null;
        $this->container['previous_taxable_pay'] = isset($data['previous_taxable_pay']) ? $data['previous_taxable_pay'] : null;
        $this->container['previous_tax_paid'] = isset($data['previous_tax_paid']) ? $data['previous_tax_paid'] : null;
        $this->container['student_loan_deduction'] = isset($data['student_loan_deduction']) ? $data['student_loan_deduction'] : null;
        $this->container['has_post_graduate_loans'] = isset($data['has_post_graduate_loans']) ? $data['has_post_graduate_loans'] : null;
        $this->container['is_director'] = isset($data['is_director']) ? $data['is_director'] : null;
        $this->container['directorship_start_date'] = isset($data['directorship_start_date']) ? $data['directorship_start_date'] : null;
        $this->container['nic_calculation_method'] = isset($data['nic_calculation_method']) ? $data['nic_calculation_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets starter_type
     *
     * @return string|null
     */
    public function getStarterType()
    {
        return $this->container['starter_type'];
    }

    /**
     * Sets starter_type
     *
     * @param string|null $starter_type The Starter type.
     *
     * @return $this
     */
    public function setStarterType($starter_type)
    {

        $this->container['starter_type'] = $starter_type;

        return $this;
    }



    /**
     * Gets starter_declaration
     *
     * @return string|null
     */
    public function getStarterDeclaration()
    {
        return $this->container['starter_declaration'];
    }

    /**
     * Sets starter_declaration
     *
     * @param string|null $starter_declaration Starter declaration.
     *
     * @return $this
     */
    public function setStarterDeclaration($starter_declaration)
    {

        $this->container['starter_declaration'] = $starter_declaration;

        return $this;
    }



    /**
     * Gets tax_code
     *
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param string|null $tax_code The Tax code.
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {

        $this->container['tax_code'] = $tax_code;

        return $this;
    }



    /**
     * Gets w1_m1
     *
     * @return bool|null
     */
    public function getW1M1()
    {
        return $this->container['w1_m1'];
    }

    /**
     * Sets w1_m1
     *
     * @param bool|null $w1_m1 Describes whether the tax settings is W1M1
     *
     * @return $this
     */
    public function setW1M1($w1_m1)
    {

        $this->container['w1_m1'] = $w1_m1;

        return $this;
    }



    /**
     * Gets previous_taxable_pay
     *
     * @return double|null
     */
    public function getPreviousTaxablePay()
    {
        return $this->container['previous_taxable_pay'];
    }

    /**
     * Sets previous_taxable_pay
     *
     * @param double|null $previous_taxable_pay The previous taxable pay
     *
     * @return $this
     */
    public function setPreviousTaxablePay($previous_taxable_pay)
    {

        $this->container['previous_taxable_pay'] = $previous_taxable_pay;

        return $this;
    }



    /**
     * Gets previous_tax_paid
     *
     * @return double|null
     */
    public function getPreviousTaxPaid()
    {
        return $this->container['previous_tax_paid'];
    }

    /**
     * Sets previous_tax_paid
     *
     * @param double|null $previous_tax_paid The tax amount previously paid
     *
     * @return $this
     */
    public function setPreviousTaxPaid($previous_tax_paid)
    {

        $this->container['previous_tax_paid'] = $previous_tax_paid;

        return $this;
    }



    /**
     * Gets student_loan_deduction
     *
     * @return string|null
     */
    public function getStudentLoanDeduction()
    {
        return $this->container['student_loan_deduction'];
    }

    /**
     * Sets student_loan_deduction
     *
     * @param string|null $student_loan_deduction The employee's student loan deduction type
     *
     * @return $this
     */
    public function setStudentLoanDeduction($student_loan_deduction)
    {

        $this->container['student_loan_deduction'] = $student_loan_deduction;

        return $this;
    }



    /**
     * Gets has_post_graduate_loans
     *
     * @return bool|null
     */
    public function getHasPostGraduateLoans()
    {
        return $this->container['has_post_graduate_loans'];
    }

    /**
     * Sets has_post_graduate_loans
     *
     * @param bool|null $has_post_graduate_loans Describes whether the employee has post graduate loans
     *
     * @return $this
     */
    public function setHasPostGraduateLoans($has_post_graduate_loans)
    {

        $this->container['has_post_graduate_loans'] = $has_post_graduate_loans;

        return $this;
    }



    /**
     * Gets is_director
     *
     * @return bool|null
     */
    public function getIsDirector()
    {
        return $this->container['is_director'];
    }

    /**
     * Sets is_director
     *
     * @param bool|null $is_director Describes whether the employee is director
     *
     * @return $this
     */
    public function setIsDirector($is_director)
    {

        $this->container['is_director'] = $is_director;

        return $this;
    }



    /**
     * Gets directorship_start_date
     *
     * @return \DateTime|null
     */
    public function getDirectorshipStartDate()
    {
        return $this->container['directorship_start_date'];
    }

    /**
     * Sets directorship_start_date
     *
     * @param \DateTime|null $directorship_start_date The directorship start date
     *
     * @return $this
     */
    public function setDirectorshipStartDate($directorship_start_date)
    {

        $this->container['directorship_start_date'] = $directorship_start_date;

        return $this;
    }



    /**
     * Gets nic_calculation_method
     *
     * @return string|null
     */
    public function getNicCalculationMethod()
    {
        return $this->container['nic_calculation_method'];
    }

    /**
     * Sets nic_calculation_method
     *
     * @param string|null $nic_calculation_method NICs calculation method
     *
     * @return $this
     */
    public function setNicCalculationMethod($nic_calculation_method)
    {

        $this->container['nic_calculation_method'] = $nic_calculation_method;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

