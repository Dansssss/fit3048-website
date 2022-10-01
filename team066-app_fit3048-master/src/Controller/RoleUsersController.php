<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * RoleUsers Controller
 *
 * @property \App\Model\Table\RoleUsersTable $RoleUsers
 * @method \App\Model\Entity\RoleUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoleUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'Users'],
        ];
        $roleUsers = $this->paginate($this->RoleUsers);

        $this->set(compact('roleUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Role User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roleUser = $this->RoleUsers->get($id, [
            'contain' => ['Roles', 'Users'],
        ]);

        $this->set(compact('roleUser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roleUser = $this->RoleUsers->newEmptyEntity();
        if ($this->request->is('post')) {
            $roleUser = $this->RoleUsers->patchEntity($roleUser, $this->request->getData());
            if ($this->RoleUsers->save($roleUser)) {
                $this->Flash->success(__('The role user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role user could not be saved. Please, try again.'));
        }
        $roles = $this->RoleUsers->Roles->find('list', ['limit' => 200]);
        $users = $this->RoleUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('roleUser', 'roles', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Role User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roleUser = $this->RoleUsers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roleUser = $this->RoleUsers->patchEntity($roleUser, $this->request->getData());
            if ($this->RoleUsers->save($roleUser)) {
                $this->Flash->success(__('The role user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The role user could not be saved. Please, try again.'));
        }
        $roles = $this->RoleUsers->Roles->find('list', ['limit' => 200]);
        $users = $this->RoleUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('roleUser', 'roles', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Role User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roleUser = $this->RoleUsers->get($id);
        if ($this->RoleUsers->delete($roleUser)) {
            $this->Flash->success(__('The role user has been deleted.'));
        } else {
            $this->Flash->error(__('The role user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
