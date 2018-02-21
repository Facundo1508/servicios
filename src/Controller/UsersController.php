<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Rols', 'Generos']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function isAuthorized($user)
    {   
        if (isset($user['rol']) && $user['rol'] === 'usuario')
        {
            if(in_array($this->request->action, ['home','logout', 'servicio']))
            {
                return true;
            }
        } elseif (!isset($user['rol'])) {
           if(in_array($this->request->action, ['registro', 'logout', 'login']))
            {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['logout', 'registro', 'add']);
    }

    /**
     * Login method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function login()
    {   
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user && $user['activo']) {
                $this->Auth->setUser($user);
                $this->redirect($this->Auth->redirectUrl());
            } elseif ($user && ($user['activo'] == false)) {
                $this->Flash->error(__('El Usuario aun no está activado.'));   
            } else {
                $this->Flash->error(__('Nombre de usuario o contraseña incorrectos'));
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
    
    /**
     * Registro method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function registro()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());    
            $user->rol_id = parent::ROL_USUARIO;
            $user->activo = 0;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido registrado correctamente. Está pendiente de activación.'));

                return $this->redirect(['action' => 'registro']);
            }
            $this->Flash->error(__('El usuario no pudo ser registrado. Intente nuevamente'));
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $generos = $this->Users->Generos->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols', 'generos'));
        $this->set('_serialize', ['user']);
    }
    
    /**
     * Activar method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function activar($id = null)
    {
        $this->set('titulo', 'Activar Usuarios');

        if ($this->request->is('post') && isset($id)) {
            $usersTable = TableRegistry::get('Users');
            $user = $usersTable->get($id);
            $user->activo = 1;
            if ($usersTable->save($user)) {
                $this->Flash->success(__('El usuario ha sido activado correctamente.'));
            } else {
                $this->Flash->error(__('No se pudo activar el usuario.'));
            }
            return $this->redirect(['action' => 'activar']);
        }

        $this->paginate = ['finder' => 'desactivados'];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        //$this->set('_serialize', ['users']);
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Rols', 'Generos', 'Userservicios']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $generos = $this->Users->Generos->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols', 'generos'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $rols = $this->Users->Rols->find('list', ['limit' => 200]);
        $generos = $this->Users->Generos->find('list', ['limit' => 200]);
        $this->set(compact('user', 'rols', 'generos'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
