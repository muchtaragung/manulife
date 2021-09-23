<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML RESULT</title>
</head>

<body>

    <h1 style="text-align: center;">
        Result Worksheet
    </h1>

    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
            margin: 0px auto;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-baqh {
            text-align: center;
            vertical-align: top
        }

        .tg .tg-amwm {
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }
    </style>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-amwm" colspan="3">
                    <h1>Staff</h1>
                </th>
                <th class="tg-amwm">
                    <h1>Goal</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-amwm">Nama</td>
                <td class="tg-baqh">:</td>
                <td class="tg-baqh"><?= $staff->nama_staff ?></td>
                <td class="tg-baqh" rowspan="2"><?= $goal->goal ?></td>
            </tr>
            <tr>
                <td class="tg-amwm">Email</td>
                <td class="tg-baqh">:</td>
                <td class="tg-baqh"><?= $staff->email_staff ?></td>
            </tr>
        </tbody>
    </table>

    <hr>

    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-1wig {
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-akbm {
            font-weight: bold;
            text-align: center;
            text-decoration: underline;
            vertical-align: top
        }

        .tg .tg-0lax {
            text-align: center;
            vertical-align: top
        }
    </style>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-1wig" colspan="2">
                    <h1>Competence</h1>
                </th>
                <th class="tg-1wig" colspan="2">
                    <h1>Motivation</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-akbm">
                    <h2>Skill</h2>
                </td>
                <td class="tg-akbm">
                    <h2>Knowledge</h2>
                </td>
                <td class="tg-akbm">
                    <h2>Comitment</h2>
                </td>
                <td class="tg-akbm">
                    <h2>Confidence</h2>
                </td>
            </tr>
            <tr>
                <td class="tg-0lax">
                    <h2><?= $competence->skill ?></h2>
                </td>
                <td class="tg-0lax">
                    <h2><?= $competence->knowledge ?></h2>
                </td>
                <td class="tg-0lax">
                    <h2> <?= $motivation->comitment ?></h2>
                </td>
                <td class="tg-0lax">
                    <h2><?= $motivation->confidence ?></h2>
                </td>
            </tr>
        </tbody>
    </table>

    <hr>

    <style type="text/css">
        .tg {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .tg td {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg th {
            border-color: black;
            border-style: solid;
            border-width: 1px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: normal;
            overflow: hidden;
            padding: 10px 5px;
            word-break: normal;
        }

        .tg .tg-baqh {
            text-align: center;
            vertical-align: top
        }

        .tg .tg-amwm {
            font-weight: bold;
            text-align: center;
            vertical-align: top
        }

        .tg .tg-t2cw {
            font-weight: bold;
            text-align: center;
            text-decoration: underline;
            vertical-align: top
        }
    </style>
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-amwm" colspan="2">
                    <h1>Learning Level</h1>
                </th>
                <th class="tg-amwm" colspan="2">
                    <h1>Leadership Style</h1>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-t2cw" colspan="2">
                    <h2>L3/2</h2>
                </td>
                <td class="tg-t2cw" colspan="2">
                    <h2>S3/2</h2>
                </td>
            </tr>
            <tr>
                <?php switch ($level->level) {
                    case "L2/1":
                        echo '<td class="tg-baqh">Mentoring</td>';
                        echo '<td class="tg-baqh">Drilling</td>';
                        break;
                    case "L1/2":
                        echo '<td class="tg-baqh">Drilling</td>';
                        echo '<td class="tg-baqh">Mentoring</td>';
                        break;
                    case "L1":
                        echo '<td class="tg-baqh" colspan="2">Drilling</td>';
                        break;
                    case "L2":
                        echo '<td class="tg-baqh" colspan="2">Mentoring</td>';
                        break;
                    case "L2/3":
                        echo '<td class="tg-baqh">Mentoring</td>';
                        echo '<td class="tg-baqh">Coaching</td>';
                        break;
                    case "L3/2":
                        echo '<td class="tg-baqh">Coaching</td>';
                        echo '<td class="tg-baqh">Mentoring</td>';
                        break;
                    case "L3":
                        echo '<td class="tg-baqh" colspan="2">Coaching</td>';
                        break;
                    case "L3/4":
                        echo '<td class="tg-baqh">Coaching</td>';
                        echo '<td class="tg-baqh">Assigning</td>';
                        break;
                    case "L4/3":
                        echo '<td class="tg-baqh">Assigning</td>';
                        echo '<td class="tg-baqh">Coaching</td>';
                        break;
                    case "L4":
                        echo '<td class="tg-baqh" colspan="2">Assigning</td>';
                        break;
                } ?>
                <?php switch ($level->level) {
                    case "L2/1":
                        echo '<td class="tg-baqh">Mentoring</td>';
                        echo '<td class="tg-baqh">Drilling</td>';
                        break;
                    case "L1/2":
                        echo '<td class="tg-baqh">Drilling</td>';
                        echo '<td class="tg-baqh">Mentoring</td>';
                        break;
                    case "L1":
                        echo '<td class="tg-baqh" colspan="2">Drilling</td>';
                        break;
                    case "L2":
                        echo '<td class="tg-baqh" colspan="2">Mentoring</td>';
                        break;
                    case "L2/3":
                        echo '<td class="tg-baqh">Mentoring</td>';
                        echo '<td class="tg-baqh">Coaching</td>';
                        break;
                    case "L3/2":
                        echo '<td class="tg-baqh">Coaching</td>';
                        echo '<td class="tg-baqh">Mentoring</td>';
                        break;
                    case "L3":
                        echo '<td class="tg-baqh" colspan="2">Coaching</td>';
                        break;
                    case "L3/4":
                        echo '<td class="tg-baqh">Coaching</td>';
                        echo '<td class="tg-baqh">Assigning</td>';
                        break;
                    case "L4/3":
                        echo '<td class="tg-baqh">Assigning</td>';
                        echo '<td class="tg-baqh">Coaching</td>';
                        break;
                    case "L4":
                        echo '<td class="tg-baqh" colspan="2">Assigning</td>';
                        break;
                } ?>
            </tr>
        </tbody>
    </table>

    <hr>


    <?php if ($level->level == 'L1' | $level->level == 'L1/2' | $level->level == 'L2/1' | $level->level == 'L2') : ?>
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
            }

            .tg td {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 14px;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg th {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg .tg-baqh {
                text-align: center;
                vertical-align: top
            }

            .tg .tg-amwm {
                font-weight: bold;
                text-align: center;
                vertical-align: top
            }
        </style>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-amwm">
                        <h1>Directing Behavior</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-baqh">Set Smart Goal</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Contohkan Dan Peragakan</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Berikan Step Stepnya</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Mengidentifikasi Proses</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Klasifikasikan Tugas</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Develop Action Plans</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Monitor Performance</td>
                </tr>
            </tbody>
        </table>
    <?php elseif ($level->level == 'L3' | $level->level == 'L3/4' | $level->level == 'L4/3' | $level->level == 'L4') : ?>
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
            }

            .tg td {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 14px;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg th {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg .tg-baqh {
                text-align: center;
                vertical-align: top
            }

            .tg .tg-amwm {
                font-weight: bold;
                text-align: center;
                vertical-align: top
            }
        </style>
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-amwm">
                        <h1>Supporting Behavior</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-baqh">Mendengarkan Dengan Perhatian</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Facilitate Problem Solving</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Minta Masukan</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Mencari Why</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Acknowledge and encourage</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Menceritakan Pengalaman Perusahaan</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Menceritakan Pengalaman Pribadi</td>
                </tr>
            </tbody>
        </table>
    <?php elseif ($level->level == 'L2/3' | $level->level == 'L3/2') : ?>
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
            }

            .tg td {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 14px;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg th {
                border-color: black;
                border-style: solid;
                border-width: 1px;
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                overflow: hidden;
                padding: 10px 5px;
                word-break: normal;
            }

            .tg .tg-baqh {
                text-align: center;
                vertical-align: top
            }

            .tg .tg-amwm {
                font-weight: bold;
                text-align: center;
                vertical-align: top
            }
        </style>
        <table class="tg">
            <thead>
                <tr>

                    <th class="tg-amwm">
                        <h1>Directing Behavior</h1>
                    </th>
                    <th class="tg-amwm">
                        <h1>Supporting Behavior</h1>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-baqh">Set Smart Goal</td>
                    <td class="tg-baqh">Mendengarkan Dengan Perhatian</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Contohkan Dan Peragakan</td>
                    <td class="tg-baqh">Facilitate Problem Solving</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Berikan Step Stepnya</td>
                    <td class="tg-baqh">Minta Masukan</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Mengidentifikasi Proses</td>
                    <td class="tg-baqh">Mencari Why</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Klasifikasikan Tugas</td>
                    <td class="tg-baqh">Acknowledge and encourage</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Develop Action Plans</td>
                    <td class="tg-baqh">Menceritakan Pengalaman Perusahaan</td>
                </tr>
                <tr>
                    <td class="tg-baqh">Monitor Performance</td>
                    <td class="tg-baqh">Menceritakan Pengalaman Pribadi</td>
                </tr>
            </tbody>
        </table>
    <?php endif ?>


</body>

</html>