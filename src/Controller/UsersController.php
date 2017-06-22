<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;


class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();     
        if($this->Auth->user()){
            $this->viewBuilder()->layout('after_login');
        }
        $this->Auth->allow(['testWebService']);
    }
    public function testWebService(){
        $result = [];
        $result['error_code'] = 'success';
        $result['data'] = array('employee'=>['Employee1','Employee2','Employee3','Employee4']);
        echo json_encode($result);exit();
    }
    public function signup(){
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity9($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'signup']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }
    
    public function login()
    {
        if ($this->request->is('post')) {            
            $user = $this->Auth->identify();
            //pr($user);exit;
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'pages','action'=>'index']);
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    public function info(){
        echo json_encode($this->Auth->user()); exit();
    }
    public function index(){
        $this->viewBuilder()->layout('ajax');
        
    }
    public function orders(){
        $this->viewBuilder()->layout('ajax');
        
    }
    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
}
