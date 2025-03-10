<?php
require_once 'Model.php';

class Country extends Model
{
    // The model will automatically use 'countries' as the table name
    public function __construct() {
        parent::__construct('countries');
        $this->primaryKey = 'id'; // Set this to match your users table
    }
    
    /**
     * Get all products for a specific country
     * 
     * @param int $countryId The ID of the country
     * @return array Array of products
     */
    public function getProducts($countryId)
    {
        $sql = "
            SELECT p.id, p.name, p.description, p.product_image_url, p.price, c.name AS category_name 
            FROM products p
            JOIN categories c ON p.category_id = c.id
            WHERE p.country_id = :country_id
        ";
        
        return $this->query($sql, ['country_id' => $countryId]);
    }
    
    /**
     * Get country details by ID
     * 
     * @param int $countryId The ID of the country
     * @return array|null Country data
     */
    public function getCountryDetails($countryId)
    {
        return $this->find($countryId);
    }
}