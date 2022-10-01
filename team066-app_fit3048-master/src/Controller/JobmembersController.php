<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Jobmembers Controller
 *
 * @property \App\Model\Table\JobmembersTable $Jobmembers
 * @method \App\Model\Entity\Jobmember[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobmembersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Jobs', 'Users'],
        ];
        $jobmembers = $this->paginate($this->Jobmembers);

        $this->set(compact('jobmembers'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * View method
     *
     * @param string|null $id Jobmember id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobmember = $this->Jobmembers->get($id, [
            'contain' => ['Jobs', 'Users'],
        ]);

        $this->set(compact('jobmember'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jobmember = $this->Jobmembers->newEmptyEntity();
        if ($this->request->is('post')) {
            $jobmember = $this->Jobmembers->patchEntity($jobmember, $this->request->getData());
            if ($this->Jobmembers->save($jobmember)) {
                $this->Flash->success(__('The jobmember has been saved.'));

                return $this->redirect(['controller'=> 'Jobs','action' => 'view', $jobmember->job_id]);
            }
            $this->Flash->error(__('The jobmember could not be saved. Please, try again.'));
        }
        $jobs = $this->Jobmembers->Jobs->find('list', ['limit' => 200]);
        $users = $this->Jobmembers->Users->find('list', ['limit' => 200]);
        $this->set(compact('jobmember', 'jobs', 'users'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Edit method
     *
     * @param string|null $id Jobmember id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jobmember = $this->Jobmembers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jobmember = $this->Jobmembers->patchEntity($jobmember, $this->request->getData());
            if ($this->Jobmembers->save($jobmember)) {
                $this->Flash->success(__('The jobmember has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jobmember could not be saved. Please, try again.'));
        }
        $jobs = $this->Jobmembers->Jobs->find('list', ['limit' => 200]);
        $users = $this->Jobmembers->Users->find('list', ['limit' => 200]);
        $this->set(compact('jobmember', 'jobs', 'users'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Delete method
     *
     * @param string|null $id Jobmember id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jobmember = $this->Jobmembers->get($id);
        if ($this->Jobmembers->delete($jobmember)) {
            $this->Flash->success(__('The jobmember has been deleted.'));
        } else {
            $this->Flash->error(__('The jobmember could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
