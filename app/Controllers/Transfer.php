<?php

namespace App\Controllers;

use App\Models\PropertiesModel;
use App\Models\UsersModel;
use App\Models\ModeOfPaymentModel;
use App\Models\PaymentTrackingModel;

class Transfer extends BaseController
{
    public function index(): string
    {
        return view('Transfer/index');
    }

    public function transfer($propertyId)

    {
        return view('Transfer/index', ['propertyId' => $propertyId]);
        return view('Transfer/index');
    }

    public function performTransfer($propertyId)
    {
        $transferData = [
            'transfer_to' => $this->request->getPost('user_id'),
            'annual_interest_rate' => $this->request->getPost('annual_interest_rate'),
            'payment_duration' => $this->request->getPost('payment_duration'),
            'transfer_date' => date('Y-m-d'),
        ];

        $propertiesModel = new PropertiesModel();
        $propertiesModel->update($propertyId, $transferData);

        $property = $propertiesModel->find($propertyId);
        $buyerId = $this->request->getPost('user_id');
        $propertyName = $property['name'];

        $amount = $this->calculateMonthlyPayment($transferData['annual_interest_rate'], $transferData['payment_duration'], $property['price']);

        $paymentTrackingModel = new PaymentTrackingModel();

        // Calculate total number of payments
        $totalPayments = $transferData['payment_duration'] * 12;

        // Start date as the current month
        $currentDate = new \DateTime(date('Y-m-01')); // First day of the current month

        for ($month = 1; $month <= $totalPayments; $month++) {
            // Add month to the current date
            $currentDate->modify('+1 month');

            $paymentTrackingModel->insert([
                'property_id' => $propertyId,
                'property_name' => $propertyName,
                'buyer_id' => $buyerId,
                'payment_month' => $currentDate->format('Y-m-d'), // Format date as YYYY-MM-DD
                'amount' => $amount,
                'status' => 'Pending'
            ]);
        }

        return redirect()->to('/manage-rent');
    }


    private function calculateMonthlyPayment($annualInterestRate, $paymentDuration, $price)
    {
        $monthlyInterestRate = ($annualInterestRate / 100) / 12;
        $totalPayments = $paymentDuration * 12;

        if ($monthlyInterestRate == 0) {
            return $price / $totalPayments;
        } else {
            return $price * ($monthlyInterestRate * pow(1 + $monthlyInterestRate, $totalPayments)) / (pow(1 + $monthlyInterestRate, $totalPayments) - 1);
        }
    }
}
