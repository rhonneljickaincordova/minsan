<?php


//Replacing Characters from Text
preg_replace('/\s+/', '_', basename(str_replace("#", "", str_replace(",", "_", $files[$k]['name']))) );

//Add files to Zip File

// Get real path for our folder
$rootPath = realpath($path);

// Initialize archive object
$zip = new ZipArchive();
$zip->open($f_path.'/'.$f_name.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);

        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

// Zip archive will be created only after closing object
$zip->close();



?>