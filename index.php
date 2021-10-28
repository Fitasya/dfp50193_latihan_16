<?php
$program = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuteraan Awam Dengan Kepujian'=>[
            'SPM',
            'Matrikulasi',
            'Diploma'
        ],
        'Sarjana Muda Teknologi Kejuteraan Pembuatan (Pengurusan Rangkaian Bekalan)'=>[
            'SPM',
            'Matrikulasi',
            'Diploma'
        ],
        'Diploma Kejuteraan Awam'=>[
            'SPM',
            'Sijil'
        ],
        'Diploma Seni Bina'=>[
            'SPM',
            'Sijil'
        ]
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam'=>[
            'SPM',
            'Sijil'
        ],
        'Diploma Seni Bina'=>[
            'SPM',
            'Sijil'
        ],
        'Diploma Geomatik'=>[
            'SPM',
            'Sijil'
        ]
    ]
];

$example = [
    'Politeknik Ungku Omar' => [
        'Sarjana Muda Teknologi Kejuteraan Awam Dengan Kepujian'=>[
            'SPM',
            'STPM'
        ],
        
    ],
    'Politeknik Sultan Haji Ahmad Shah' => [
        'Diploma Kejuruteraan Awam'=>[
            'SPM',
            'Sijil Kolej Komuniti'
        ],
        'Diploma Seni Bina'=>[
            'SPM',
            'Sijil Kolej Komuniti'
        ],
        'Diploma Geomatik'=>[
            'SPM',
            'Sijil Kolej Komuniti'
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulang Kaji Array</title>
    <style>
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th{
            background: orange;
        }
    </style>
</head>
<body>
    <h1>Senarai Program di Politeknik</h1>
    <ul>
    <?php
    foreach ($program as $poli => $value){
        echo "<li>$poli";
        echo "<ul>";
        foreach ($value as $course =>$test){
            echo "<li>$course";
            echo "<ul>";
            foreach($test as $kelayakan){
                echo "<li>$kelayakan</li>";
            }
            echo '</ul>';
            echo "</li>";
        }
        echo '</ul>';
        echo "</li>";
    }
    ?>
    </ul>

    <table>
        <tr style="background: red; color: white">
            <td><b>PROGRAM</b></td>
            <td><b>KELAYAKAN</b></td>
        </tr>
    <?php
    foreach ($example as $poli => $value){
        echo "<th colspan=2>$poli</th>";
        echo "<tr>";
        foreach ($value as $course =>$test){
            echo "<td rowspan=2>$course</td>";
            
            foreach($test as $kelayakan){
                echo "<td>$kelayakan</td>";
                echo "<tr>";
                
            }
            echo '</td>';
            echo "</tr>";
        }
        echo '</tr>';
        
    }
    ?>
    </table>
    <!--<ul>
        <li>Politeknik Ungku Omar
            <ul>
                <li>Sarjana MUda Teknologi Kejuteraan Awam Dengan Kepujian</li>
                <li></li>
            </ul>
        </li>
    </ul> -->
</body>
</html>