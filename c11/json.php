<?php


$string_as_json = '
    {
     "professor" : {
        "name" : "Neven",   
        "lastname" : "Gjoreski",
        "age" : 34,
        "languages" : [
            "PHP", "JavaScript", "SQL"
        ]
     }
    }
';

$json_object = json_decode($string_as_json);

echo '<pre>';
print_r($json_object);
echo '</pre>';

echo $json_object->professor->languages[1]; //JavaScript
echo '<br>';

$json_object_array = json_decode($string_as_json, true);
echo '<pre>';
print_r($json_object_array);
echo '</pre>';  

echo $json_object_array['professor']['languages'][1]; //JavaScript
echo '<br>';


$string_as_json2 = '
    {
     "professors" : [
         {
            "name" : "Neven",   
            "lastname" : "Gjoreski",
            "age" : 34,
            "languages" : [
                "PHP", "JavaScript", "SQL"
            ]
        },
        {
            "name" : "Albertos",   
            "lastname" : "Ajnshtajnos",
            "age" : 99,
            "languages" : [
                "Kobalt", "Visual Basic", "C", "Delfi"
            ]
        }
     ]
    }
';


$json_object_array2 = json_decode($string_as_json2, true);
echo '<pre>';
print_r($json_object_array2);
echo '</pre>'; 

//da se ispecatiat profesorite i nivnite jazici vo ovoj format

// <li>
//     Neven Gjoreski
//     <ol>
//         <li>PHP</li>
//         <li>Javascript</li>
//         <li>SQL</li>
//     </ol>
// </li>
// <li>
//     Neven Gjoreski
//     <ol>
//         <li>PHP</li>
//         <li>Javascript</li>
//         <li>SQL</li>
//     </ol>
// </li>

function printProfessor($name, $lastname, $languages){

    $languages_list = '';
    if($languages){
        foreach($languages as $language){
            $languages_list .= "<li>$language</li>";
        }
    }

    echo "
        <li>
            $name $lastname
            <ol>
                $languages_list
            </ol>
        </li>
    ";
}

foreach($json_object_array2['professors'] as $professor){
    printProfessor(
        $professor['name'], 
        $professor['lastname'], 
        $professor['languages']
    );
}

echo '<hr><hr><hr>';


$professors = [
    [
        'name' => "Neven",
        'lastname' => "Gjoreski",
        'age' => 34,
        'languages' => [
            "PHP", "SQL", "JavaScript"
        ]
    ],
    [
        'name' => "Albertos",
        'lastname' => "Ajnshtajnos",
        'age' => 99,
        'languages' => [
            "Kobalt", "Visual Basic", "C", "Delfi"
        ]
    ]
];

$json_encoded = json_encode($professors);

echo gettype($json_encoded) . "<br>";
echo $json_encoded;



?>
