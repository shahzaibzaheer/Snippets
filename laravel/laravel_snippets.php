<?php


/*
* To Store Submitted images into public folder
*/

public static function saveImage(UploadedFile $file){

        $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();

        // generating unique file name
        $uniqueFilename = $filename."-".time().'.'.$extension;

        // remove all white spaces
        $uniqueFilename = str_replace(' ', '', $uniqueFilename);

        $newFile = $file->move("folderName/",$uniqueFilename);
        return $newFile->getFilename();
}



?>
