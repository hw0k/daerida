<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Snslogin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->config->load('token', true);
        $this->load->model('AuthModel');
    }

//     public function kakao()
//     {
//             $this->load->library("kakao_login");
//             $result = $this->kakao_login->get_profile();
// //            print_r($result);

//             $this->load->model('Member_model');
//             $param['custEmail'] = 'kakao'.$result['id'];
//             $param['userSnsId'] = $result['id'];
//             $param['userImage'] = $result['properties']['thumbnail_image'];
//             $param['custName'] = $result['properties']['nickname'];
//             $param['joinType'] = 'kakao';

//             print_r($result);
//             $authParm['custEmail'] = $param['custEmail'];

//             $AuthResult = $this->Member_m->sns_is_auth($authParm);

//             if($AuthResult)
//             {
//                 $row = $this->Member_m->get_snscust($authParm);

//                 $user_data = array(
//                     'idx'=> $row->idx,
//                     'jointype' => $row->joinType,
//                     'custName' => $row->custName,
//                     'custTel' => $row->custTel,
//                     'custAddr' => $row->custAddr,
//                     'custEmail' => $row->custEmail,
//                     'joinDate' => $row->joinDate,
//                     'custGender' => $row->custGender,
//                     'custbirth' => $row->custbirth,
//                     'userImage' => $row->userImage,
//                     'userSnsId' => $row->userSnsId,
//                     'homepage' => $row->homepage,
//                     'custContactEmail' => $row->custContactEmail,
//                     'jobSearchYN' => $row->jobSearchYN
//                 );

//                 $this->session->set_userdata($user_data);

//                 location_href('/main/login');
//             }
//             else
//             {
//                 $this->Member_m->insert_sns($param);

//                 $row = $this->Member_m->get_snscust($authParm);

//                 $user_data = array(
//                     'idx'=> $row->idx,
//                     'jointype' => $row->joinType,
//                     'custName' => $row->custName,
//                     'custTel' => $row->custTel,
//                     'custAddr' => $row->custAddr,
//                     'custEmail' => $row->custEmail,
//                     'joinDate' => $row->joinDate,
//                     'custGender' => $row->custGender,
//                     'custbirth' => $row->custbirth,
//                     'userImage' => $row->userImage,
//                     'userSnsId' => $row->userSnsId,
//                     'homepage' => $row->homepage,
//                     'custContactEmail' => $row->custContactEmail,
//                     'jobSearchYN' => $row->jobSearchYN
//                 );

//                 $this->session->set_userdata($user_data);

//                 alert('회원가입 처리되었습니다!\n프로필 정보에 이메일을 기입해주세요.', '/main/login');
//             }
//     }

//     public function google()
//     {
//         $this->load->library("google_login");
//         $result = $this->google_login->get_profile();
//         $json_result = json_decode($result,true);
//         print_r($json_result);

//         $this->load->model("Member_model");
//         $param['custEmail'] = $json_result['emails']['0']['value'];
//         $param['userSnsId'] = $json_result['id'];
//         $param['custName'] = $json_result['displayName'];
//         $param['userImage'] = $json_result['image']['url'];
//         $param['joinType'] = 'google';

//         $authParm['custEmail'] = $param['custEmail'];

//         $AuthResult = $this->Member_m->sns_is_auth($authParm);

//         if($AuthResult)
//         {
//             $row = $this->Member_m->get_snscust($authParm);

//             $user_data = array(
//                 'idx'=> $row->idx,
//                 'jointype' => $row->joinType,
//                 'custName' => $row->custName,
//                 'custTel' => $row->custTel,
//                 'custAddr' => $row->custAddr,
//                 'custEmail' => $row->custEmail,
//                 'joinDate' => $row->joinDate,
//                 'custGender' => $row->custGender,
//                 'custbirth' => $row->custbirth,
//                 'userImage' => $row->userImage,
//                 'userSnsId' => $row->userSnsId,
//                 'homepage' => $row->homepage,
//                 'custContactEmail' => $row->custContactEmail,
//                 'jobSearchYN' => $row->jobSearchYN
//             );

//             $this->session->set_userdata($user_data);
// //            print_r($row);
// //            print_r($this->session->custEmail);
//                 location_href('/main/login');
//         }
//         else
//         {
//             $this->Member_m->insert_sns($param);

//             $row = $this->Member_m->get_snscust($authParm);

//             $user_data = array(
//                 'idx'=> $row->idx,
//                 'jointype' => $row->joinType,
//                 'custName' => $row->custName,
//                 'custTel' => $row->custTel,
//                 'custAddr' => $row->custAddr,
//                 'custEmail' => $row->custEmail,
//                 'joinDate' => $row->joinDate,
//                 'custGender' => $row->custGender,
//                 'custbirth' => $row->custbirth,
//                 'userImage' => $row->userImage,
//                 'userSnsId' => $row->userSnsId,
//                 'homepage' => $row->homepage,
//                 'custContactEmail' => $row->custContactEmail,
//                 'jobSearchYN' => $row->jobSearchYN
//             );

//             $this->session->set_userdata($user_data);

//             alert('회원가입 처리되었습니다!', '/main/login');
//         }
//     }


    /**
     * private 메소드.
     * @param $auth 인증 데이터
     */
    private function auth($row) {
        $user_data = array(
            'me_idx' => $row['me_n_idx'],
            'me_name' => $row['me_n_name'],
            'me_profile' => $row['me_n_profile'],
            'me_id' => $row['me_n_id'],
            'me_password' => $row['me_n_password'],
            'me_table' => $row,
            'me_type' => "me_n_"
        );
        $this->session->set_userdata($user_data);
        location_href("/hiring/hiringList");
    }

    public function authNaver() {
        $this->session->set_userdata("authMode", "auth");
        $naver = $this->config->item("naver_login", "token");
        location_href($naver['authorize_url'] . "?response_type=code&client_id=".$naver['client_id']."&redirect_uri=".site_url('/snslogin/naver')."&state=RANDOM_STATE");
    }

    public function addNaver() {
        $this->session->set_userdata("authMode", "add");
        $naver = $this->config->item("naver_login", "token");
        location_href($naver['authorize_url'] . "?response_type=code&client_id=".$naver['client_id']."&redirect_uri=".site_url('/snslogin/naver')."&state=RANDOM_STATE");
    }

    public function naver() {
        $naver = $this->config->item('naver_login', 'token');
        $url = $naver['token_url'] . "?grant_type=authorization_code"
        . "&client_id=" . $naver['client_id']
        . "&client_secret=" . $naver['client_secret']
        . "&redirect_uri=" . site_url('/snslogin/naver')
        . "&code=" . $_GET["code"]
        . "&state=" . $_GET["state"];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $accessToken = get_object_vars(json_decode($response));
        $accessToken = $accessToken['access_token'];

        $url = $naver['info_url'];
        $header = "Authorization: Bearer " . $accessToken;

        $headers = [];
        array_push($headers, $header);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $token = get_object_vars(get_object_vars(json_decode($response))['response'])['id'];
        if ($this->session->authMode == "auth") {
            $result = $this->AuthModel->authSNS('naver', $token);
            if (count($result) == 0) {
                alert("해당 네이버 계정이 연결되어있지 않습니다. 회원가입 뒤에 연결해 주세요");
                location_href("/member/registerNormal");
                return;
            } else {
                $this->auth($result[0]);
            }
        } else {

        }
    }

    public function kakao() {
        $kakao = $this->config->item('kakao_login', 'token');
        $url =
        $kakao['token_url'] . "?grant_type=authorization_code"
        . "&client_id=" . $kakao['client_id']
        . "&redirect_uri=" . site_url('/snslogin/kakao')
        . "&code=" . $_GET["code"];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $accessToken = get_object_vars(json_decode($response));
        $accessToken = $accessToken['access_token'];

        $url = $kakao['info_url'];
        $header = "Authorization: Bearer " . $accessToken;

        $headers = [];
        array_push($headers, $header);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $token = get_object_vars(get_object_vars(json_decode($response))['response'])['id'];


    }
}