<?php
require_once 'Controller.php';
require_once 'models/Country.php';

class CountryController extends Controller
{
    private $countryModel;
    
    public function __construct()
    {
        parent::__construct();
        $this->countryModel = new Country();
    }
    
    /**
     * Display all countries
     */
    public function index()
    {
        // Get all countries
        $countries = $this->countryModel->all();
        
        // Render the countries index view
        $this->render('country.index', [
            'countries' => $countries
        ]);
    }
    
    /**
     * Display details for a specific country and its products
     * 
     * @param int $id Country ID
     */
    public function show($id)
    {
        // Get country details
        $country = $this->countryModel->getCountryDetails($id);
        
        // If country not found, redirect to countries list
        if (!$country) {
            $this->redirect('/countries');
        }
        
        // Get products for this country
        $products = $this->countryModel->getProducts($id);
        
        // Render the country detail view
        $this->render('country.show', [
            'country' => $country,
            'products' => $products
        ]);
    }
}