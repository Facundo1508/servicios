<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userservicios Controller
 *
 * @property \App\Model\Table\UserserviciosTable $Userservicios
 *
 * @method \App\Model\Entity\Userservicio[] paginate($object = null, array $settings = [])
 */
class UserserviciosController extends AppController
{
    
    public function isAuthorized($user)
    {
        //Valida si el usuario logueado tiene el rol de usuario común.
        //Constante ROL_USUARIO definida en APP Controller
        if (isset($user['rol_id']) && $user['rol_id'] == parent::ROL_USUARIO)
        {
            if(in_array($this->request->action, ['index', 'add']))
            {
                return true;
            }
        } elseif (!isset($user['rol_id'])) {         
            return false;
        }
        return parent::isAuthorized($user);
    }

    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function todos()
    {
        $this->paginate = [
            'contain' => ['Users', 'Servicios']
        ];
        
        $userservicios = $this->paginate($this->Userservicios);

        $this->set(compact('userservicios'));
        $this->set('_serialize', ['userservicios']);
    }
    
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Servicios']
        ];
        if($this->Auth->user('rol_id')==parent::ROL_USUARIO){
            $this->paginate['conditions'] = [
                'user_id'=>$this->Auth->user('id')
                
            ];
        }
        $userservicios = $this->paginate($this->Userservicios);

        $this->set(compact('userservicios'));
        $this->set('_serialize', ['userservicios']);
    }

    /**
     * View method
     *
     * @param string|null $id Userservicio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userservicio = $this->Userservicios->get($id, [
            'contain' => ['Users', 'Servicios']
        ]);

        $this->set('userservicio', $userservicio);
        $this->set('_serialize', ['userservicio']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userservicio = $this->Userservicios->newEntity();
        if ($this->request->is('post')) {
            $userservicio = $this->Userservicios->patchEntity($userservicio, $this->request->getData());
            if(empty($userservicio->user_id))
                $userservicio->user_id=$this->Auth->user('id');
            if ($this->Userservicios->save($userservicio)) {
                $this->Flash->success(__('The userservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userservicio could not be saved. Please, try again.'));
        }
        $users = $this->Userservicios->Users->find('list', ['limit' => 200]);
        $servicios = $this->Userservicios->Servicios->find('list', ['limit' => 200]);
        $this->set(compact('userservicio', 'users', 'servicios'));
        $this->set('_serialize', ['userservicio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userservicio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userservicio = $this->Userservicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userservicio = $this->Userservicios->patchEntity($userservicio, $this->request->getData());
            if ($this->Userservicios->save($userservicio)) {
                $this->Flash->success(__('The userservicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The userservicio could not be saved. Please, try again.'));
        }
        $users = $this->Userservicios->Users->find('list', ['limit' => 200]);
        $servicios = $this->Userservicios->Servicios->find('list', ['limit' => 200]);
        $this->set(compact('userservicio', 'users', 'servicios'));
        $this->set('_serialize', ['userservicio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userservicio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userservicio = $this->Userservicios->get($id);
        if ($this->Userservicios->delete($userservicio)) {
            $this->Flash->success(__('The userservicio has been deleted.'));
        } else {
            $this->Flash->error(__('The userservicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
