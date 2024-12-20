<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PagoModel;

use App\Models\QR_Model; // Ensure you import your model

class MenuController extends Controller
{
    public function perfil()
    {
        $session = session();
        return view('perfil');
    }

    public function pagar()
    {
        $session = session();

        $userId = $session->get('ID_Usuario');

        // Instantiate the model
        $model = new QR_Model();

        // Call the getQRRoute method
        $qrRoute = $model->getQRRoute($userId);
        $pagoModel = new PagoModel();
        $pagos = $pagoModel->orderBy('ID_Precio', 'desc')->first();
        $monto = $pagos['Monto'];
        $monto = (int)$monto;

        // Cargar la vista pagar 
        return view('pagar', ['qrCode' => $qrRoute, 'monto' => $monto]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}

