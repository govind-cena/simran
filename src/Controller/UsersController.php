<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;


class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();     
        if($this->Auth->user()){
            $this->viewBuilder()->layout('after_login');
        }
        $this->Auth->allow(['testWebService','adminLogin']);
    }
    public function studentDetails(){
        $this->viewBuilder()->layout('after_login');
        
        $cityTable = TableRegistry::get('Cities');
        $list = $cityTable->find('list')->toArray();
        
        $userDetails = $this->Users->find('all',[
            'contain'=>'StudentDetails'
        ])->toArray();
        
        $this->set(compact('userDetails','list'));
        
    }public function studentDetails_old(){
        $this->viewBuilder()->layout('after_login');
        $studentDetails = TableRegistry::get('StudentDetails');
        $userDetails = $studentDetails->find('all',[
            'contain'=>'Users'
        ])->toArray();
        $this->set(compact('userDetails'));
        
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
            $user = $this->Users->patchEntity($user, $this->request->data);   
            $user->role = 'User';
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
        if($this->request->is('post')){
            $userDetails = $this->request->is('post');
            $user = $this->Auth->identify();            
            if ($user['role'] === 'User') {
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'pages','action'=>'index']);
            }else{
                $this->Flash->error(__('Invalid Admin Access '));
                return $this->redirect(['controller'=>'Users','action'=>'admin_login']);
            }
            
        }       
    }
    
    public function adminLogin()
    {
        $this->viewBuilder()->layout('admin_login');
        if($this->request->is('post')){
            $userDetails = $this->request->is('post');
            $user = $this->Auth->identify();            
            if ($user['role'] === 'Admin') {
                $this->Auth->setUser($user);
                return $this->redirect(['controller'=>'pages','action'=>'index']);
            }else{
                $this->Flash->error(__('Invalid Admin Access '));
                return $this->redirect(['controller'=>'Users','action'=>'admin_login']);
            }
            
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
