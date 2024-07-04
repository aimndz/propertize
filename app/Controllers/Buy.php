<?php

namespace App\Controllers;

use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;
use App\Models\UsersModel;

class Buy extends BaseController
{
    public function index(): string
    {
        $propertiesModel = new PropertiesModel();
        $propertiesImagesModel = new PropertiesImagesModel();
        $usersModel = new UsersModel();

        $sortBy = $this->request->getGet('sort_by') ?? 'newest';
        $city = $this->request->getGet('city');
        $propertyStatus = $this->request->getGet('property_status') ?? 'for sale'; // Default status 'for sale'

        // Retrieve min and max prices from input
        $minPrice = $this->request->getGet('filter-min-price');
        $maxPrice = $this->request->getGet('filter-max-price');

        // Retrieve minimum beds and bathrooms
        $minBeds = $this->request->getGet('filter-beds');
        $minBathrooms = $this->request->getGet('filter-bathrooms');

        // Retrieve property types array
        $propertyTypes = $this->request->getGet('property_types');

        // Retrieve parkings
        $minParkings = $this->request->getGet('filter-min-parkings');
        $maxParkings = $this->request->getGet('filter-max-parkings');

        // Retrieve floor area
        $minFloorArea = $this->request->getGet('filter-min-floor-area');
        $maxFloorArea = $this->request->getGet('filter-max-floor-area');

        // Retrieve lot size
        $minLotSize = $this->request->getGet('filter-min-lot-size');
        $maxLotSize = $this->request->getGet('filter-max-lot-size');

        // Retrieve year built
        $minYearBuilt = $this->request->getGet('filter-min-year-built');
        $maxYearBuilt = $this->request->getGet('filter-max-year-built');

        // Base query with status filter and tenant, transfer_to condition
        $query = $propertiesModel
            ->where('approval_status', 'accepted')
            ->where('tenant', null)
            ->where('transfer_to', null);


        // Status filter
        if (!empty($propertyStatus)) {
            $query->where('status', $propertyStatus);
        }

        // City filter
        if (!empty($city)) {
            $query->like('city', $city);
        }

        // Price range filter
        if (!empty($minPrice)) {
            $query->where('price >=', $minPrice);
        }
        if (!empty($maxPrice)) {
            $query->where('price <=', $maxPrice);
        }

        // Beds filter
        if (!empty($minBeds)) {
            $query->where('no_of_beds >=', $minBeds);
        }

        // Bathrooms filter
        if (!empty($minBathrooms)) {
            $query->where('no_of_bathrooms >=', $minBathrooms);
        }

        // Property type filter
        if (!empty($propertyTypes)) {
            // Check if 'all' is in propertyTypes
            if (in_array('all', $propertyTypes)) {
                // Remove 'all' from propertyTypes array
                $propertyTypes = array_diff($propertyTypes, ['all']);
            }

            // If $propertyTypes is not empty after removing 'all', apply the filter
            if (!empty($propertyTypes)) {
                $query->whereIn('type', $propertyTypes);
            }
        }

        // Parkings filter
        if (!empty($minParkings)) {
            $query->where('no_of_parkings >=', $minParkings);
        }
        if (!empty($maxParkings)) {
            $query->where('no_of_parkings <=', $maxParkings);
        }

        // Floor area filter
        if (!empty($minFloorArea)) {
            $query->where('floor_area >=', $minFloorArea);
        }
        if (!empty($maxFloorArea)) {
            $query->where('floor_area <=', $maxFloorArea);
        }

        // Lot size filter
        if (!empty($minLotSize)) {
            $query->where('lot_size >=', $minLotSize);
        }
        if (!empty($maxLotSize)) {
            $query->where('lot_size <=', $maxLotSize);
        }

        // Year built filter
        if (!empty($minYearBuilt)) {
            $query->where("DATE_FORMAT(year_built, '%Y') >=", $minYearBuilt);
        }
        if (!empty($maxYearBuilt)) {
            $query->where("DATE_FORMAT(year_built, '%Y') <=", $maxYearBuilt);
        }

        // Sorting
        switch ($sortBy) {
            case 'price_high_to_low':
                $query->orderBy('price', 'DESC');
                break;
            case 'price_low_to_high':
                $query->orderBy('price', 'ASC');
                break;
            case 'newest':
            default:
                $query->orderBy('property_id', 'DESC');
                break;
        }

        $properties = $query->findAll();

        $resultsCount = count($properties);

        foreach ($properties as &$property) {
            $image = $propertiesImagesModel
                ->where('property_id', $property['property_id'])
                ->first();

            if ($image) {
                $property['image'] = [
                    'image' => base64_encode($image['image']),
                ];
            } else {
                // Optional: Handle default image case
                // $property['image'] = [
                //     'file_name' => 'default_image.jpg',
                //     'image' => base64_encode(file_get_contents('path_to_default_image.jpg')),
                // ];
            }
        }

        $data = [
            'properties' => $properties,
            'resultsCount' => $resultsCount,
            'sortBy' => $sortBy,
            'city' => $city,
            'propertyStatus' => $propertyStatus,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
            'minBeds' => $minBeds,
            'minBathrooms' => $minBathrooms,
            'propertyTypes' => $propertyTypes,
            'minParkings' => $minParkings,
            'maxParkings' => $maxParkings,
            'minFloorArea' => $minFloorArea,
            'maxFloorArea' => $maxFloorArea,
            'minLotSize' => $minLotSize,
            'maxLotSize' => $maxLotSize,
            'minYearBuilt' => $minYearBuilt,
            'maxYearBuilt' => $maxYearBuilt,
        ];

        return view('Buy/index', $data);
    }


    public function get_property_details($property_id)
    {
        $propertiesModel = new PropertiesModel();
        $propertiesImagesModel = new PropertiesImagesModel();
        $usersModel = new UsersModel(); // Load UsersModel for owner details

        $property = $propertiesModel->find($property_id);

        if ($property) {
            // Fetch owner details
            $owner = $usersModel->find($property['owner_id']); // Assuming 'owner_id' is the field in $property

            if ($owner) {
                // Add owner's name and email to the property array
                $property['owner_name'] = $owner['first_name'] . ' ' . $owner['last_name'];
                $property['owner_email'] = $owner['email'];
            }

            // Fetch all images associated with the property
            $images = $propertiesImagesModel
                ->where('property_id', $property_id)
                ->findAll();

            // Encode images if found
            if ($images) {
                $encodedImages = [];
                foreach ($images as $image) {
                    $encodedImages[] = [
                        'image' => base64_encode($image['image']),
                    ];
                }
                $property['images'] = $encodedImages;
            }

            return $this->response->setJSON($property);
        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Property not found']);
        }
    }
}
