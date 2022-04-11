<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML RESULT</title>
    <style>
        table,
        th,
        td {
            /* border: 1px solid black;
            border-collapse: collapse; */
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Result</h1>

    <table border="0">
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td><?= $staff->nama_staff ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td>:</td>
            <td><?= $staff->email_staff ?></td>
        </tr>
        <tr>
            <th>Job Desc</th>
            <td>:</td>
            <td><?= $goal->goal ?></td>
        </tr>
    </table>

    <br>

    <table border="0">
        <tr>
            <th colspan="3">Competence</th>
        </tr>
        <tr>
            <th>Skill</th>
            <td>:</td>
            <td><?= $competence->skill ?></td>
        </tr>
        <tr>
            <th>Knowledge</th>
            <td>:</td>
            <td><?= $competence->knowledge ?></td>
        </tr>
    </table>

    <br>

    <table border="0">
        <tr>
            <th colspan="3">Motivation</th>
        </tr>
        <tr>
            <th>Comitment</th>
            <td>:</td>
            <td><?= $motivation->comitment ?></td>
        </tr>
        <tr>
            <th>Confidence</th>
            <td>:</td>
            <td><?= $motivation->confidence ?></td>
        </tr>
    </table>

    <br>

    <table border="0">
        <tr>
            <th>Learning Level</th>
            <td>:</td>
            <td><?= $level->level ?></td>
        </tr>
        <tr>
            <th>Leadership Style</th>
            <td>:</td>
            <td><?= $style->style ?></td>
        </tr>
        <tr>
            <th>Recomendation</th>
            <td>:</td>
            <td>
                <?php switch ($style->style) {
                    case "S2/1":
                        echo 'Mentoring';
                        echo '/';
                        echo 'Drilling';
                        break;
                    case "S1/2":
                        echo 'Drilling';
                        echo '/';
                        echo 'Mentoring';
                        break;
                    case "S1":
                        echo 'Drilling';
                        break;
                    case "S2":
                        echo 'Mentoring';
                        break;
                    case "S2/3":
                        echo 'Mentoring';
                        echo '/';
                        echo 'Coaching';
                        break;
                    case "S3/2":
                        echo 'Coaching';
                        echo '/';
                        echo 'Mentoring';
                        break;
                    case "S3":
                        echo 'Coaching';
                        break;
                    case "S3/4":
                        echo 'Coaching';
                        echo '/';
                        echo 'Assigning';
                        break;
                    case "S4/3":
                        echo 'Assigning';
                        echo '/';
                        echo 'Coaching';
                        break;
                    case "S4":
                        echo 'Assigning';
                        break;
                } ?>
            </td>
        </tr>
    </table>

    <br>

    <table>

        <?php if ($level->level == 'L1' | $level->level == 'L1/2' | $level->level == 'L2/1' | $level->level == 'L2') : ?>
            <tr>
                <th>
                    Directing Behaviour
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>Set Smart Job Desc</li>
                        <li>Contohkan Dan Peragakan</li>
                        <li>Berikan Step Stepnya</li>
                        <li>Mengidentifikasi Proses</li>
                        <li>Klasifikasikan Job Desc</li>
                        <li>Develop Action Plans</li>
                        <li>Monitor Performance</li>
                    </ul>
                </td>
            </tr>
        <?php elseif ($level->level == 'L2/3' | $level->level == 'L3/2') : ?>
            <tr>
                <th>
                    Directing Behaviour
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>Set Smart Job Desc</li>
                        <li>Contohkan Dan Peragakan</li>
                        <li>Berikan Step Stepnya</li>
                        <li>Mengidentifikasi Proses</li>
                        <li>Klasifikasikan Job Desc</li>
                        <li>Develop Action Plans</li>
                        <li>Monitor Performance</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th>
                    Supporting Behaviour
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>Mendengarkan Dengan Perhatian</li>
                        <li>Facilitate Problem Solving</li>
                        <li>Minta Masukan</li>
                        <li>Mencari Why</li>
                        <li>Acknowledge and encourage</li>
                        <li>Menceritakan Pengalaman Perusahaan</li>
                        <li>Menceritakan Pengalaman Pribadi</li>
                    </ul>
                </td>
            </tr>
        <?php elseif ($level->level == 'L3' | $level->level == 'L3/4' | $level->level == 'L4/3' | $level->level == 'L4') : ?>
            <tr>
                <th>
                    Supporting Behaviour
                </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>Mendengarkan Dengan Perhatian</li>
                        <li>Facilitate Problem Solving</li>
                        <li>Minta Masukan</li>
                        <li>Mencari Why</li>
                        <li>Acknowledge and encourage</li>
                        <li>Menceritakan Pengalaman Perusahaan</li>
                        <li>Menceritakan Pengalaman Pribadi</li>
                    </ul>
                </td>
            </tr>
        <?php endif ?>
    </table>
</body>

</html>