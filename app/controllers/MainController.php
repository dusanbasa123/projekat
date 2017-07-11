<?php
    class MainController extends Controller {
        public function contactForm() {
            
        }
        
        public function index(){
            $kategorije = CategoryModel::getAll();
            $this->set('kategorije', $kategorije);
        }
        
        public function kontakt(){
            
        }

        public function login() {
            if ($_POST) {
                $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

                $hash = hash('sha512', $password . Configuration::USER_SALT);
                $password = '000000000000000000000000000000000000000000000000000';

                $user = UserModel::getByUsernameAndPasswordHash($username, $hash);
                $hash = '0000000000000000000000000000000000000000000000000000000';

                if ($user) {
                    Session::set('user_id', $user->user_id);
                    Session::set('username', $username);
                    Session::set('ip', filter_input(INPUT_SERVER, 'REMOTE_ADDR'));
                    Session::set('ua', filter_input(INPUT_SERVER, 'HTTP_USER_AGENT', FILTER_SANITIZE_STRING));
                    
                    $log = LogModel::add($user->id, $_SERVER['REMOTE_ADDR']);

                    Misc::redirect('admin/');
                } else {
                    $this->set('message', 'Nisu dobri login parametri.');
                    sleep(1);
                }
            }
        }

        public function logout() {
            Session::end();
            Misc::redirect('login');
        }
    }
