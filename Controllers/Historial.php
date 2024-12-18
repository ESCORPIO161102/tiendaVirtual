<?php


class Historial extends Controllers
{
    protected $model;

    public function __construct()
    {
        parent::__construct(); // Llama al constructor de la clase base
        $this->model = new HistorialModel(); // Instancia el modelo asociado
    }


    // Método para mostrar la vista del historial
    public function historial()
    {
        $data['page_tag'] = "Historial Compras";
        $data['page_title'] = "HISTORIAL COMPRAS";
        $data['page_name'] = "Historial Compras";
        $data['page_functions_js'] = "functions_productos.js";
        $this->views->getView($this, "historial", $data);
    }

    // Método para registrar una compra
    public function registrarCompra($data)
    {
        // Verificar que los datos contengan productos
     
        $fecha = date("Y-m-d H:i:s"); // Fecha y hora actual

        // Recorrer los productos y registrarlos en el historial
        foreach ($data['productos'] as $producto) { // Cambio aquí: de 'Producto' a 'productos'
            $params = [
                'nombre_producto' => $producto['titulo'],
                'precio' => $producto['precio'],
                'cantidad' => $producto['cantidad'],
                'fecha' => $fecha,
                'estado' => 'Comprado'
            ];

            $this->model->insertHistorial($params); // Registrar en la base de datos
        }

        return ['success' => true, 'message' => 'Compra registrada correctamente.'];
    }

    // Método para obtener el historial completo de compras
    public function obtenerHistorial()
    {
        // Llama al método en el modelo para obtener los datos
        $historial = $this->model->getHistorial();

        // Establecer encabezados para la respuesta JSON
        header('Content-Type: application/json');

        if (!empty($historial)) {
            // Devolver los datos en formato JSON
            echo json_encode(['success' => true, 'data' => $historial]);
        } else {
            // En caso de no encontrar datos
            echo json_encode(['success' => false, 'message' => 'No se encontraron registros en el historial.']);
        }
    }
}
