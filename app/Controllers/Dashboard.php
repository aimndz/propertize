<?php

namespace App\Controllers;

use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;
use App\Models\PaymentTrackingModel; // Add PaymentTrackingModel import

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $userId = $session->get('user_id');

        $propertiesModel = new PropertiesModel();
        $properties = $propertiesModel->where('owner_id', $userId)->findAll();

        // Fetch payment tracking data
        $paymentTrackingModel = new PaymentTrackingModel();
        $paymentTracking = $paymentTrackingModel
            ->select('payment_tracking.*, properties.owner_id')
            ->join('properties', 'properties.property_id = payment_tracking.property_id')
            ->where('properties.owner_id', $userId)
            ->findAll();

        $data['properties'] = $properties;
        $data['paymentTracking'] = $paymentTracking;
        $data['hasProperties'] = !empty($properties);

        echo view('Dashboard/index', $data);
    }

    public function delete($property_id)
    {
        $propertiesModel = new PropertiesModel();

        // Soft delete the property by updating the deleted_at field
        date_default_timezone_set('Asia/Manila');
        $deleted = $propertiesModel->update($property_id, ['deleted_at' => date('Y-m-d H:i:s')]);

        if ($deleted) {
            return redirect()->to('/dashboard')->with('success', 'Property deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to delete property.');
        }
    }

    public function payment_complete($paymentId)
    {
        // Load the PaymentTrackingModel
        $paymentTrackingModel = new PaymentTrackingModel();

        // Assuming you have a method in PaymentTrackingModel to update status by ID
        $updated = $paymentTrackingModel->update($paymentId, ['status' => 'received']);

        if ($updated) {
            // Payment status updated successfully
            return redirect()->to('/dashboard')->with('success', 'Payment status updated to received.');
        } else {
            // Error updating payment status
            return redirect()->back()->with('error', 'Failed to update payment status.');
        }
    }
}
