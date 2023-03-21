<?php
if('POST' === $_SERVER['REQUEST_METHOD'] && $_FILES)
{
    $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';

    if (!file_exists($uploadDir))
	{
		mkdir($uploadDir);
	}

    $file = array_shift($_FILES);

	if ('text/csv' === $file['type'])
	{
		if (move_uploaded_file($file['tmp_name'], $uploadDir . $file['name']))
		{
            $counter = 1;
            $handle = fopen($uploadDir . $file['name'], "r");

            while(false !== ($row = fgetcsv($handle, 0, ',')))
	        {
                if(trim($row[0]) !== '')
                {
                    $filePath = $uploadDir . preg_replace('/(.)+\./', $counter . '.', $row['0']);   // отделение расширения файла от название с заменой названия файла на значение счётчика: aaa.txt => 1.txt
                    $newfile = fopen($filePath, "w");
                    fwrite($newfile, $row['1']);
                    fclose($newfile);
                    $counter++;
                }
                else
                {
                    echo 'Файл ' . $filePath .' не был создан';
                }
            }

			unlink($uploadDir . $file['name']); // удаление загруженного csv-файла
            echo 'Файлы успешно созданы';
		}
		else
		{
			echo 'csv-файл не был загружен';
		}
	}
	else
	{
		echo 'Неверный тип обрабатываемого файла';
	}
}  
?>