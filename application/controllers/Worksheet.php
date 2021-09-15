<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Worksheet extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Goal_model');
        $this->load->model('Competence_model');
        $this->load->model('Motivation_model');
        $this->load->model('Level_model');
        $this->load->model('Style_model');
        $this->load->model('Supporting_model');
        $this->load->model('Directing_model');
    }

    /**
     * menampilkan form untuk mengisi competence dan motivation
     *
     * @return void
     */
    public function worksheet()
    {
        $data['page_title'] = "Worksheet";

        $this->load->view('worksheet', $data);
    }

    /**
     * mengambil data inputan user di worksheet dan di save
     *
     * @return void
     */
    public function save_worksheet()
    {
        // mengambil lalu menyimpan data goal
        $goal['goal'] = $this->input->post('goal');
        $this->save_goal($goal);

        // mengambil data insert terakhir
        $goal_id = $this->db->insert_id();

        // mengambil data untuk competence
        $competence['knowledge'] = $this->input->post('knowledge');
        $competence['skill']     = $this->input->post('skill');
        $competence['goal_id']   = $goal_id;
        // menyimpan data competence
        $this->save_competence($competence);

        // mengambil data untuk motivation
        $motivation['comitment']  = $this->input->post('comitment');
        $motivation['confidence'] = $this->input->post('confidence');
        $motivation['goal_id']   = $goal_id;
        // menyimpan data motivation
        $this->save_motivation($motivation);

        // menentukan level dan style dan menyimpannya
        $this->save_level($competence, $motivation, $goal_id);
        $this->save_style($competence, $motivation, $goal_id);

        redirect('worksheet/behaviour/' . $goal_id);
    }

    /**
     * menampilkan hasil dari worksheet dan form behaviour
     *
     * @param int $goal_id
     * @return void
     */
    public function behaviour($goal_id)
    {
        $data['page_title'] = 'Worksheet Behaviour';

        // mengambil data level dan style sesuai goal id
        $where = ['goal_id' => $goal_id];
        $data['level'] = $this->Level_model->get_where($where)->row();
        $data['style'] = $this->Style_model->get_where($where)->row();
        $data['goal_id'] = $goal_id;
        $this->load->view('behaviour', $data);
    }

    /**
     * menyimpan behaviour
     *
     * @return void
     */
    public function save_behaviour()
    {
        // mengambil data directing behaviour
        $directing['behaviour'] = json_encode($this->input->post('directing'));
        $directing['goal_id']   = $this->input->post('goal_id');

        // mengambil data supporting behaviour
        $supporting['behaviour'] = json_encode($this->input->post('supporting'));
        $supporting['goal_id']   = $this->input->post('goal_id');


        // menyimpan behaviour
        $this->Supporting_model->save($supporting);
        $this->Directing_model->save($directing);
    }

    /**
     * menyimpan goal
     *
     * @param array $goal
     * @return void
     */
    private function save_goal(array $goal)
    {
        $this->Goal_model->save($goal);
    }

    /**
     * menyimpan competence
     *
     * @param array $competence
     * @return void
     */
    private function save_competence(array $competence)
    {
        $this->Competence_model->save($competence);
    }

    /**
     * menyimpan motivation
     *
     * @param array $motivation
     * @return void
     */
    private function save_motivation(array $motivation)
    {
        $this->Motivation_model->save($motivation);
    }

    /**
     * menentukan level dan menyimpan ke database
     *
     * @param array $competence
     * @param array $motivation
     * @param int $goal_id
     * @return void
     */
    private function save_level(array $competence, array $motivation, $goal_id)
    {
        if ($competence['skill'] == 'low') {
            if ($competence['knowledge'] == 'low') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L0   ';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L2/1';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L1/2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L1';
                    }
                }
            }
            if ($competence['knowledge'] == 'high') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L2';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L1/2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L1';
                    }
                }
            }
        }
        if ($competence['skill'] == 'high') {
            if ($competence['knowledge'] == 'low') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L2/3';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L2/3';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L3/2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L3/2';
                    }
                }
            }
            if ($competence['knowledge'] == 'high') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L3';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L3/4';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $level['level'] = 'L4/3';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $level['level'] = 'L4';
                    }
                }
            }
        }

        $level['goal_id'] = $goal_id;
        $this->Level_model->save($level);
    }

    /**
     * menentukan style dan menyimpan ke database
     *
     * @param array $competence
     * @param array $motivation
     * @param int $goal_id
     * @return void
     */
    private function save_style(array $competence, array $motivation, $goal_id)
    {
        if ($competence['skill'] == 'low') {
            if ($competence['knowledge'] == 'low') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S0   ';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S2/1';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S1/2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S1';
                    }
                }
            }
            if ($competence['knowledge'] == 'high') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S2';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S1/2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S1';
                    }
                }
            }
        }
        if ($competence['skill'] == 'high') {
            if ($competence['knowledge'] == 'low') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S2/3';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S2/3';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S3/2';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S3/2';
                    }
                }
            }
            if ($competence['knowledge'] == 'high') {
                if ($motivation['comitment'] == 'low') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S3';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S3/4';
                    }
                }
                if ($motivation['comitment'] == 'high') {
                    if ($motivation['confidence'] == 'low') {
                        $style['style'] = 'S4/3';
                    }
                    if ($motivation['confidence'] == 'high') {
                        $style['style'] = 'S4';
                    }
                }
            }
        }

        $style['goal_id'] = $goal_id;
        $this->Style_model->save($style);
    }
}
