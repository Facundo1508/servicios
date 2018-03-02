<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servicios Controller
 *
 * @property \App\Model\Table\ServiciosTable $Servicios
 *
 * @method \App\Model\Entity\Servicio[] paginate($object = null, array $settings = [])
 */
class ServiciosController extends AppController
{
    /*
     * FUNCIÓN DE AUTORIZACIÓN
     *
     * Tenés que agregarla en cada controlador para indicar a qué acciones tiene acceso
     * un usuario logueado y a cuales no.
     */
    public function isAuthorized($user)
    {
        //Valida si el usuario logueado tiene el rol de usuario común.
        //Constante ROL_USUARIO definida en APP Controller
        if (isset($user['rol_id']) && $user['rol_id'] == parent::ROL_USUARIO)
        {
            if(in_array($this->request->action, ['index', 'add', 'premium']))
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
            'contain' => ['Categorias']
        ];
        $servicios = $this->paginate($this->Servicios);

        $this->set(compact('servicios'));
        $this->set('_serialize', ['servicios']);
    }
    
    /**
     * todos method
     *
     * @return \Cake\Http\Response|void
     */
    public function todos()
    {
        $this->paginate = [
            'contain' => ['Categorias']
        ];
        $servicios = $this->paginate($this->Servicios);

        $this->set(compact('servicios'));
        $this->set('_serialize', ['servicios']);
    }
    /**
     * View method
     *
     * @param string|null $id Servicio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servicio = $this->Servicios->get($id, [
            'contain' => ['Categorias', 'Userservicios']
        ]);

        $this->set('servicio', $servicio);
        $this->set('_serialize', ['servicio']);
    }

    
    /**
     * Premium method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function premium()
    {
        $servicio = $this->Servicios->newEntity();
        if ($this->request->is('post')) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->getData());
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('Se ha publicado tu servicio, un administrador te contactara para hacerlo premium.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El servicio no se ha publicado, por favor intenta nuevamente.'));
        }
        $categorias = $this->Servicios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('servicio', 'categorias'));
        $this->set('_serialize', ['servicio']);
    }
    
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servicio = $this->Servicios->newEntity();
        if ($this->request->is('post')) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->getData());
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
        }
        $categorias = $this->Servicios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('servicio', 'categorias'));
        $this->set('_serialize', ['servicio']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servicio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicio = $this->Servicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->getData());
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
        }
        $categorias = $this->Servicios->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('servicio', 'categorias'));
        $this->set('_serialize', ['servicio']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servicio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicio = $this->Servicios->get($id);
        if ($this->Servicios->delete($servicio)) {
            $this->Flash->success(__('The servicio has been deleted.'));
        } else {
            $this->Flash->error(__('The servicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
