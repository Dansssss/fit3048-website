<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Subtasks Controller
 *
 * @property \App\Model\Table\SubtasksTable $Subtasks
 * @method \App\Model\Entity\Subtask[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubtasksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $subtasks = $this->paginate($this->Subtasks);

        $this->set(compact('subtasks'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * View method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subtask = $this->Subtasks->get($id, [
            'contain' => ['Members' => ['Users']],
        ]);
        // debug($subtask);      die();
        
        $this->loadModel('Users');
        $users=$this->Users->find('all');
       
        $this->set('stages',$users);
        $this->set(compact('subtask'));

        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subtask = $this->Subtasks->newEmptyEntity();
        if ($this->request->is('post')) {
            $subtask = $this->Subtasks->patchEntity($subtask, $this->request->getData());
            if ($this->Subtasks->save($subtask)) {
                $this->Flash->success(__('The subtask has been saved.'));

                return $this->redirect(['controller'=> 'Jobs','action' => 'view', $subtask->job_id]);
            }
            $this->Flash->error(__('The subtask could not be saved. Please, try again.'));
        }
        $jobs = $this->Subtasks->Jobs->find('list', ['limit' => 200]);

        $this->set(compact('subtask','jobs'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Edit method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subtask = $this->Subtasks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subtask = $this->Subtasks->patchEntity($subtask, $this->request->getData());
            if ($this->Subtasks->save($subtask)) {
                $this->Flash->success(__('The subtask has been saved.'));

                return $this->redirect(['controller'=> 'Jobs','action' => 'view', $subtask->job_id]);
            }
            $this->Flash->error(__('The subtask could not be saved. Please, try again.'));
        }
        $jobs = $this->Subtasks->Jobs->find('list', ['limit' => 200]);

        $this->set(compact('subtask','jobs'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Delete method
     *
     * @param string|null $id Subtask id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subtask = $this->Subtasks->get($id);
        if ($this->Subtasks->delete($subtask)) {
            $this->Flash->success(__('The subtask has been deleted.'));
        } else {
            $this->Flash->error(__('The subtask could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
