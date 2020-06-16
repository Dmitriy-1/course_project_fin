<?php
require ('../vendor/autoload.php');
$phpWord = new  \PhpOffice\PhpWord\PhpWord();

$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(14);
$properties = $phpWord->getDocInfo();


$properties->setCreator('Name');
$properties->setCompany('Company');
$properties->setTitle('Title');
$properties->setDescription('Description');
$properties->setCategory('My category');
$properties->setLastModifiedBy('My name');
$properties->setCreated(mktime(0, 0, 0, 3, 12, 2015));
$properties->setModified(mktime(0, 0, 0, 3, 14, 2015));
$properties->setSubject('My subject');
$properties->setKeywords('my, key, word');

$sectionStyle = array();
$section=$phpWord->addSection($sectionStyle);

$view =new total_value_applications();
$view=$view->get_view();
echo '
<h1 class="text_table">Общая стоимость выполненных заявок за последний месяц</h1>
<div class="table_view">
<table>
<tr>

            <th class="table_list" >стоимость</th>
          
        </tr>   
        <tr>
                <td class="table_list">
                    <p >'. $view[0][0]. '</p>		
                </td>
                
             </tr>
</table>
</div>

';

$text ="Отчет об общей стоимости выполненных заявок за текущий месяц представленны в виде суммы всех выполненнных заявок
на всех станциях моек работавщих в текущем месяце
";

$section->addText(htmlspecialchars($text));
$section->addText(htmlspecialchars($view[0][0]));
$text ="рублей";
$section->addText(htmlspecialchars($text));




$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
$objWriter->save('view1.docx');
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'HTML');
$objWriter->save('view1.HTML');
