<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // loading model
        $this->load->model('Goal_model');
        $this->load->model('Competence_model');
        $this->load->model('Motivation_model');
        $this->load->model('Level_model');
        $this->load->model('Style_model');
        $this->load->model('Staff_model');
        $this->load->model('Manajer_model');
    }

    public function all()
    {
        $join = [
            ['manajer', 'staff.manajer_id = manajer.id'],
            ['goal', 'goal.staff_id = staff.id'],
            ['learning_level', 'learning_level.goal_id = goal.id'],
            ['leadership_style', 'leadership_style.goal_id = goal.id'],
            ['competence', 'competence.goal_id = goal.id'],
            ['motivation', 'motivation.goal_id = goal.id'],
        ];

        $order = [
            ['nama_staff', 'ASC']
        ];

        $select = '*, goal.created_at as tanggalgoal';

        $staff = $this->Staff_model->get_join($join, $select, $order)->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Nama Staff')
            ->setCellValue('C1', 'Email Staff')
            ->setCellValue('D1', 'Nama Manajer')
            ->setCellValue('E1', 'Email Manajer')
            ->setCellValue('F1', 'Goal')
            ->setCellValue('G1', 'Knowledge')
            ->setCellValue('H1', 'Skill')
            ->setCellValue('I1', 'Comitment')
            ->setCellValue('J1', 'Confidence')
            ->setCellValue('K1', 'Learning Level')
            ->setCellValue('L1', 'Leadership Style')
            ->setCellValue('M1', 'Tanggal');

        $kolom = 2;
        $nomor = 1;
        foreach ($staff as $data) {

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $data->nama_staff)
                ->setCellValue('C' . $kolom, $data->email_staff)
                ->setCellValue('D' . $kolom, $data->nama_manajer)
                ->setCellValue('E' . $kolom, $data->email_manajer)
                ->setCellValue('F' . $kolom, $data->goal)
                ->setCellValue('G' . $kolom, $data->knowledge)
                ->setCellValue('H' . $kolom, $data->skill)
                ->setCellValue('I' . $kolom, $data->comitment)
                ->setCellValue('J' . $kolom, $data->confidence)
                ->setCellValue('K' . $kolom, $data->level)
                ->setCellValue('L' . $kolom, $data->style)
                ->setCellValue('M' . $kolom, date('d M Y', strtotime($data->tanggalgoal)));

            $kolom++;
            $nomor++;
        }

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Laporan Employee Analysis (Manulife) ' . date('d-m-Y H:i:s') . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
