<?php

/**
 * FUNCIÓN CENTRAL: Renombra archivos en una carpeta basándose en una plantilla específica.
 * (La función se define aquí para que el script sea autocontenido)
 *
 * @param string $folder_path La ruta de la carpeta donde se encuentran los archivos.
 * @param string $base_id El identificador base a usar en el nombre (ID).
 * @param int $start_number El número inicial para la secuencia (X).
 * @return array Un array con el resultado de la operación (éxito o error).
 */
function rename_files_in_folder(string $folder_path, string $base_id, int $start_number = 1): array
{
    $results = [];

    // 1. Validar si la carpeta existe
    if (!is_dir($folder_path)) {
        return ['status' => 'error', 'message' => "Error: La ruta de la carpeta no es válida: {$folder_path}"];
    }

    // 2. Obtener todos los archivos en la carpeta
    $files = scandir($folder_path);

    if (empty($files)) {
        return ['status' => 'info', 'message' => 'La carpeta está vacía.'];
    }

    // 3. Filtrar solo los archivos (ignorando . y ..)
    $files_to_process = [];
    foreach ($files as $file) {
        $full_path = $folder_path . DIRECTORY_SEPARATOR . $file;
        if (is_file($full_path)) {
            $files_to_process[] = $file;
        }
    }

    // 4. Ordenar alfabéticamente
    sort($files_to_process);

    // 5. Renombrar los archivos
    $counter = $start_number;
    $renamed_count = 0;

    foreach ($files_to_process as $old_filename) {
        $path = $folder_path . DIRECTORY_SEPARATOR . $old_filename;
        $info = pathinfo($old_filename);
        $extension = isset($info['extension']) ? '.' . $info['extension'] : '';
        $filename_without_ext = $info['filename'];

        // Construir el nuevo nombre usando la plantilla: "26.ID-X.EXT"
        $new_filename = "26." . $base_id . "-" . $counter . $extension;
        $new_path = $folder_path . DIRECTORY_SEPARATOR . $new_filename;

        // Realizar el renombrado
        if (rename($path, $new_path)) {
            $results[] = ['status' => 'success', 'original' => $old_filename, 'new' => $new_filename];
            $renamed_count++;
        } else {
            $results[] = ['status' => 'error', 'file' => $old_filename, 'message' => 'Error al renombrar el archivo.'];
        }

        // Incrementar el contador
        $counter++;
    }

    return [
        'status' => 'completed',
        'message' => "Se procesaron los archivos. Se renombraron {$renamed_count} archivos.",
        'details' => $results
    ];
}

// =======================================================================
// LÓGICA DE EJECUCIÓN DE LA LÍNEA DE COMANDOS
// =======================================================================

// 1. Verificar si se proporcionaron los argumentos
if ($argc < 4) {
    echo "================================================================\n";
    echo "ERROR: Se requieren al menos 3 argumentos.\n";
    echo "Uso: php " . basename(__FILE__) . " <ruta_carpeta> <base_id> <inicio_x>\n";
    echo "Ejemplo: php " . basename(__FILE__) . " ./mi_carpeta PROJ01 1\n";
    echo "================================================================\n";
    exit(1);
}

// 2. Extraer los argumentos de la línea de comandos
$folder_path = $argv[1];
$base_id = $argv[2];
$start_number = (int)$argv[3]; // Convertir el tercer argumento a entero

echo "Iniciando proceso de renombrado...\n";
echo "Carpeta: " . $folder_path . "\n";
echo "ID Base: " . $base_id . "\n";
echo "Inicio X: " . $start_number . "\n";
echo "----------------------------------------------------------------\n";

// 3. Llamar a la función
$result = rename_files_in_folder($folder_path, $base_id, $start_number);

// 4. Mostrar el resultado
echo "ESTADO FINAL: " . strtoupper($result['status']) . "\n";
echo "MENSAJE: " . $result['message'] . "\n";
echo "\n--- DETALLES DEL RENOMBRADO ---\n";

if (!empty($result['details'])) {
    foreach ($result['details'] as $detail) {
        if ($detail['status'] === 'success') {
            echo "[OK] Renombrado: '{$detail['original']}' -> '{$detail['new']}'\n";
        } else {
            echo "[ERROR] Archivo: {$detail['file']} | Mensaje: {$detail['message']}\n";
        }
    }
}

echo "Proceso finalizado.\n";








// =========================================================================
// EJEMPLO DE USO
// =========================================================================
/*
        // 1. Crear una carpeta de prueba (asegúrate de que esta ruta exista)
        $test_dir = 'archivos_a_renombrar';
        if (!is_dir($test_dir)) {
            mkdir($test_dir);
        }

        // Crear algunos archivos de ejemplo
        file_put_contents($test_dir . '/foto1.jpg', 'contenido');
        file_put_contents($test_dir . '/doc_final.pdf', 'contenido');
        file_put_contents($test_dir . '/imagen_a.png', 'contenido');
        file_put_contents($test_dir . '/backup.txt', 'contenido');

        echo "--- INICIO DEL PROCESO DE RENOMBRADO ---\n";

        // 2. Llamar a la función
        $base_id = 'PROYECTO_2023';
        $start_number = 1; // El número de inicio para la secuencia X

        $output = rename_files_in_folder($test_dir, $base_id, $start_number);

        // 3. Mostrar los resultados
        print_r($output);

        echo "\n--- CONTENIDO DE LA CARPETA DESPUÉS DEL RENOMBRADO ---\n";
        // Verificar el contenido de la carpeta
        echo "Contenido de '{$test_dir}':\n";
        if (is_dir($test_dir)) {
            print_r(scandir($test_dir));
        }

*/

?>
