<?php

$string_as_xml = "
    <student>
        <name>Aleksandar</name>
        <lastname>Ralis</lastname>
        <age>27</age>
        <languages>
            <language>PHP</language>
            <language>SQL</language>
            <language>JavaScript</language>
        </languages>
    </student>
";

$object_as_xml = simplexml_load_string($string_as_xml);

echo '<pre>';
print_r($object_as_xml);
echo '</pre>';
echo $object_as_xml->languages->language[0];


$string_as_xml2 = "
    <studenti>
        <student>
            <name>Aleksandar</name>
            <lastname>Ralis</lastname>
            <age>27</age>
            <languages>
                <language>PHP</language>
                <language>SQL</language>
                <language>JavaScript</language>
            </languages>
        </student>
        <student>
            <name>Eva</name>
            <lastname>Serafimova</lastname>
            <age>26</age>
            <languages>
                <language>PHP</language>
                <language>SQL</language>
                <language>Vue</language>
            </languages>
        </student>
    </studenti>
";

$object_as_xml2 = simplexml_load_string($string_as_xml2);

echo '<pre>';
print_r($object_as_xml2);
echo '</pre>';


//hacking the sh1% out of xml
$object_as_xml_array = json_decode(
    json_encode(
        simplexml_load_string($string_as_xml2)
    ),
     true);

echo '<pre>';
print_r($object_as_xml_array);
echo '</pre>';


foreach($object_as_xml2 as $student){
    echo "{$student->name} {$student->lastname}";
    // foreach($student->languages->language as $language){
    //     echo "<li>$language</li>";
    // }
    echo '<li>' . implode('</li><li>', (array)$student->languages->language) . '</li>';
}
