<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PDF
    </title>
</head>

<body>

    <center>
        <h1>Report Worksheet</h1>
    </center>

    <h2>Staff</h2>
    <Table>
        <tr>
            <th>Nama Staff</th>
            <td>:</td>
            <td><?= $staff->nama_staff ?></td>
        </tr>
        <tr>
            <th>Email Staff</th>
            <td>:</td>
            <td><?= $staff->email_staff ?></td>
        </tr>
    </Table>

    <h2>Goal</h2>
    <Table>
        <tr>
            <th>Goal</th>
            <td>:</td>
            <td><?= $goal->goal ?></td>
        </tr>
    </Table>

    <h2>Competence</h2>
    <table>
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

    <h2>Motivation</h2>
    <table>
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

    <h2>Learning Level & Leadership Style</h2>
    <table>
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
    </table>


    <?php if ($level->level == 'L1' | $level->level == 'L1/2' | $level->level == 'L2/1' | $level->level == 'L2') : ?>
        <div class="col-md-6 col-sm-12 mx-auto text-center">
            <h3>Directing Behavior</h3>
            <ul class="list-group">
                <li class="list-group-item">Set Smart Goal</li>
                <li class="list-group-item">Contohkan Dan Peragakan</li>
                <li class="list-group-item">Berikan Step Stepnya</li>
                <li class="list-group-item">Mengidentifikasi Proses</li>
                <li class="list-group-item">Klasifikasikan Tugas</li>
                <li class="list-group-item">Develop Action Plans</li>
                <li class="list-group-item">Monitor Performance</li>
            </ul>
        </div>
    <?php elseif ($level->level == 'L2/3' | $level->level == 'L3/2') : ?>
        <div class="col-md-6 col-sm-12 mx-auto">
            <h3>Directing Behavior</h3>
            <ul class="list-group">
                <li class="list-group-item">Set Smart Goal</li>
                <li class="list-group-item">Contohkan Dan Peragakan</li>
                <li class="list-group-item">Berikan Step Stepnya</li>
                <li class="list-group-item">Mengidentifikasi Proses</li>
                <li class="list-group-item">Klasifikasikan Tugas</li>
                <li class="list-group-item">Develop Action Plans</li>
                <li class="list-group-item">Monitor Performance</li>
            </ul>
        </div>

        <div class="col-md-6 col-sm-12 mx-auto">
            <h3>Supporting Behavior</h3>
            <ul class="list-group">
                <li class="list-group-item">Mendengarkan Dengan Perhatian</li>
                <li class="list-group-item">Facilitate Problem Solving</li>
                <li class="list-group-item">Minta Masukan</li>
                <li class="list-group-item">Mencari Why</li>
                <li class="list-group-item">Acknowledge and encourage</li>
                <li class="list-group-item">Menceritakan Pengalaman Perusahaan</li>
                <li class="list-group-item">Menceritakan Pengalaman Pribadi</li>
            </ul>
        </div>
    <?php elseif ($level->level == 'L3' | $level->level == 'L3/4' | $level->level == 'L4/3' | $level->level == 'L4') : ?>
        <div class="col-md-6 col-sm-12 mx-auto">
            <h3>Supproting Behaviour</h3>
            <ul class="list-group">
                <li class="list-group-item">Mendengarkan Dengan Perhatian</li>
                <li class="list-group-item">Facilitate Problem Solving</li>
                <li class="list-group-item">Minta Masukan</li>
                <li class="list-group-item">Mencari Why</li>
                <li class="list-group-item">Acknowledge and encourage</li>
                <li class="list-group-item">Menceritakan Pengalaman Perusahaan</li>
                <li class="list-group-item">Menceritakan Pengalaman Pribadi</li>
            </ul>
        </div>
    <?php endif ?>


</body>

</html>