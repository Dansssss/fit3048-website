<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Jobs Controller
 *
 * @property \App\Model\Table\JobsTable $Jobs
 * @method \App\Model\Entity\Job[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JobsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $jobs = $this->paginate($this->Jobs);

        $this->set(compact('jobs'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jobid = $id;
        $job = $this->Jobs->get($id, [
            'contain' => ['Subtasks','Jobmembers'=>'Users'],
        ]);
        $this->loadModel('Users');
        $users=$this->Users->find('all');
        // $job_member = $this->Jobs->get($jobid, [
        //     'contain' => ['Jobmembers'],
        // ]);
        $this->set('jobs',$users);

        $this->set(compact('job'));
        // $this->set(compact('job_member'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $job = $this->Jobs->newEmptyEntity();
        if ($this->request->is('post')) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['controller'=> 'Stages','action' => 'view', $job->stage_id]);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $stages = $this->Jobs->Stages->find('list', ['limit' => 200]);

        $this->set(compact('job','stages'));
        $this->viewBuilder()->setlayout('dashboard');

    }

    /**
     * Edit method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $job = $this->Jobs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $job = $this->Jobs->patchEntity($job, $this->request->getData());
            if ($this->Jobs->save($job)) {
                $this->Flash->success(__('The job has been saved.'));

                return $this->redirect(['controller'=> 'Stages','action' => 'view', $job->stage_id]);
            }
            $this->Flash->error(__('The job could not be saved. Please, try again.'));
        }
        $stages = $this->Jobs->Stages->find('list', ['limit' => 200]);

        $this->set(compact('job','stages'));
        $this->viewBuilder()->setlayout('dashboard');
    }

    /**
     * Delete method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
