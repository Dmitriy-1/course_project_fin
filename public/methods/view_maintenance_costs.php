<?php

require ('../vendor/autoload.php');
$view = new Maintenance_costs();
$view = $view->get_view();

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



echo '

<h1 class="text_table"> Отчет о затраты на обслуживание за текущий месяц</h1>
<div class="table_view">
<table>
<tr>
            <th class="table_list" >стоимость</th>
          
        </tr>   
        <tr>
                <td class="table_list">
                    <p >' . $view[0][0] . '</p>		
                </td>
                
             </tr>
</table>
</div>

';

$text ="Отчет о затраты на обслуживание за текущий месяц";

$section->addText(htmlspecialchars($text));
$section->addText(htmlspecialchars($view[0][0]));




$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'Word2007');
$objWriter->save('view2.docx');
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord,'HTML');
$objWriter->save('view2.HTML');

