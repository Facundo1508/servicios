<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ServiciosUsers Controller
 *
 * @property \App\Model\Table\ServiciosUsersTable $ServiciosUsers
 *
 * @method \App\Model\Entity\ServiciosUser[] paginate($object = null, array $settings = [])
 */
class ServiciosUsersController extends AppController
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
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Servicios']
        ];
        $serviciosUsers = $this->paginate($this->ServiciosUsers);

        $this->set(compact('serviciosUsers'));
        $this->set('_serialize', ['serviciosUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Servicios User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $serviciosUser = $this->ServiciosUsers->get($id, [
            'contain' => ['Users', 'Servicios']
        ]);

        $this->set('serviciosUser', $serviciosUser);
        $this->set('_serialize', ['serviciosUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $serviciosUser = $this->ServiciosUsers->newEntity();
        if ($this->request->is('post')) {
            $serviciosUser = $this->ServiciosUsers->patchEntity($serviciosUser, $this->request->getData());
            if ($this->ServiciosUsers->save($serviciosUser)) {
                $this->Flash->success(__('The servicios user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicios user could not be saved. Please, try again.'));
        }
        $users = $this->ServiciosUsers->Users->find('list', ['limit' => 200]);
        $servicios = $this->ServiciosUsers->Servicios->find('list', ['limit' => 200]);
        $this->set(compact('serviciosUser', 'users', 'servicios'));
        $this->set('_serialize', ['serviciosUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servicios User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $serviciosUser = $this->ServiciosUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $serviciosUser = $this->ServiciosUsers->patchEntity($serviciosUser, $this->request->getData());
            if ($this->ServiciosUsers->save($serviciosUser)) {
                $this->Flash->success(__('The servicios user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicios user could not be saved. Please, try again.'));
        }
        $users = $this->ServiciosUsers->Users->find('list', ['limit' => 200]);
        $servicios = $this->ServiciosUsers->Servicios->find('list', ['limit' => 200]);
        $this->set(compact('serviciosUser', 'users', 'servicios'));
        $this->set('_serialize', ['serviciosUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servicios User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $serviciosUser = $this->ServiciosUsers->get($id);
        if ($this->ServiciosUsers->delete($serviciosUser)) {
            $this->Flash->success(__('The servicios user has been deleted.'));
        } else {
            $this->Flash->error(__('The servicios user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
