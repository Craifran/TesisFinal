<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class PagarController extends Controller
{
    public function validarSlotCode()
{
    $slotCode = $this->request->getPost('slotCode');

    // Conexión a la base de datos
    $db = \Config\Database::connect();

    // Tabla Slot
    $slotTable = $db->table('Slot');
    $precioTotalTable = $db->table('Precio_Total');

    // Verificar si el SlotCode existe
    $slot = $slotTable->where('SlotCode', $slotCode)->get()->getRow();

    if ($slot && isset($slot->ID)) {
        // Obtener el ID del Slot
        $slotId = $slot->ID;

        // Buscar el monto correspondiente en la tabla Precio_Total
        $precio = $precioTotalTable->where('Slot', $slotId)->get()->getRow();

        if ($precio && isset($precio->Monto)) {
            // Enviar los datos a la vista para el pago con PayPal
            return view('pagar', [
                'monto' => $precio->Monto, // El monto a pagar
                'slotCode' => $slotCode,   // El SlotCode ingresado
            ]);
        } else {
            // Si no se encuentra el monto para el Slot
            return redirect()->back()->with('error', 'No se encontró un monto para este Slot.');
        }
    } else {
        // Si el SlotCode no es válido
        return redirect()->back()->with('error', 'El SlotCode ingresado no es válido.');
        }
    }
}